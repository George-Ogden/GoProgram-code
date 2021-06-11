class Player {
    constructor(umpire, max_depth = Infinity) {
        this.umpire = umpire;
        this.max_depth = max_depth;
    }
    async move(board, aim) {
        let move = Matrix.blank(board.rows, board.cols);
        if (board.equals(Matrix.blank(board.rows, board.cols))){
            move.data[board.cols-1][(board.rows-1)/2] = aim
        } else {
            let best = await this.check(Matrix.multiply(board,aim), 1, 1);
            best = Object.keys(best).reduce((max, move) => (best[max] > best[move] ? max : move), 0);
            move.data[best % board.rows][Math.floor(best / board.rows)] = aim;
        }
        return move;
    }
    async check(board, player, depth) {
        await new Promise(r => setTimeout(r, 0))
        let state;
        if ((state = this.umpire.check_state(board)) != 0) {
            return state;
        } 
        if (depth > this.max_depth) {
            return this.evaluate(board);
        }
        if (board.rss() == board.rows * board.cols) {
            return 0;
        }
        if (player == 1) {
            let moves = {};
            for (let i = 0; i < board.rows * board.cols; i++) {
                let move = board.copy();
                if (move.data[i % board.rows][Math.floor(i / board.rows)] == 0) {
                    move.data[i % board.rows][Math.floor(i / board.rows)] = 1;
                    moves[i] = move;
                }
            }
            this.mirror(moves);
            let choice = {};
            let best = -1;
            for (let i in moves) {
                choice[i] = await this.check(moves[i], -1, depth + 1);
                best = Math.max(best, choice[i]);

                if (best == 1) {
                    break;
                }
            }
            return depth == 1 ? choice : best;
        } else {
            let moves = {};
            for (let i = 0; i < board.rows * board.cols; i++) {
                let move = board.copy();
                if (move.data[i % board.rows][Math.floor(i / board.rows)] == 0) {
                    move.data[i % board.rows][Math.floor(i / board.rows)] = -1;
                    moves[i] = move;
                }
            }
            this.mirror(moves);
            let choice = {};
            let best = 1;
            for (let i in moves) {
                choice[i] = await this.check(moves[i], 1, depth + 1);
                best = Math.min(best, choice[i]);
                if (best == -1) {
                    break;
                }
            }
            return depth == 1 ? choice : best;
        }
    }
    mirror(boards) {
        for (let i in boards) {
            for (let j in boards) {
                if (
                    boards[i] != undefined &&
                    boards[j] != undefined &&
                    i != j &&
                    (boards[i].equals(Matrix.flip(boards[j], 1, 0)) ||
                        boards[i].equals(Matrix.flip(boards[j], 0)) ||
                        boards[i].equals(Matrix.flip(boards[j])) ||
                        Matrix.transpose(boards[i]).equals(boards[j]) ||
                        Matrix.transpose(boards[i]).equals(Matrix.flip(boards[j], 1, 0)) ||
                        Matrix.transpose(boards[i]).equals(Matrix.flip(boards[j], 0)) ||
                        Matrix.transpose(boards[i]).equals(Matrix.flip(boards[j])))
                ) {
                    delete boards[i];
                }
            }
        }
    }
    evaluate() {
        return Math.random();
    }
}