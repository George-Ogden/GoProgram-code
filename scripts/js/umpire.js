class Umpire {
    constructor(board_size) {
        //create a board
        this.board = new Matrix(board_size, board_size)
        this.size = board_size
    }
    check_state() {
        //"abstract method"
        return 0;
    }
    play(player1, player2) {
        //clear board
        this.board.reset()
        this.board.data[this.size-1][(this.size-1)/2] = -1
        //loop through number of points
        for (let i = 0; i < this.size * this.size; i++) {
            //decide which player plays
            if (i % 2 == 0) {
                //forward propagate board to get move
                this.board.add(player1.move(this.board,1))
            } else {
                //add move to board
                this.board.add(player2.move(this.board,-1))
            }
            //check if someone is winning
            let state = this.check_state()
            //if someone has won, return winner
            if (state != 0) {
                return state
            }

        }
        return 0
    }
    async challenge(computer, starter = Math.random() > 0.5 ? 1 : 0) {
        this.board.reset()
        //loop through number of points depending on who starts
        for (let i = -starter; i < this.size * this.size - starter; i++) {
            displayBoard(this.board)
            //decide which player plays
            if (i % 2 == 0) {
                //add move to board
                let move = await computer.move(this.board,1)
                finishMove()
                this.board.add(move)
                animateMove(...move.find(1))
            } else {
                // display board
                let move = new Promise(resolve => move_promise = resolve)
                move = await move
                this.board.data[Math.floor(move[0])][move[1]] = -1
                animateMove(...move)
            }
            let state = this.check_state()
            displayBoard(this.board)
            if (state != 0) {
                endGame()
                return state
            }
        }
        displayBoard(this.board)
        endGame()
        return 0
    }
    spectate(computer1, computer2, starter = Math.random() > 0.5 ? 1 : 0) {
        this.board.reset()
        this.board.data[this.size-1][(this.size-1)/2] = starter*2-1
        //loop through number of points depending on who starts
        for (let i = -starter; i < this.size * this.size - starter; i++) {
            Matrix.map(this.board, x => x > 0 ? "X" : x < 0 ? "O" : " ").show();
            //decide which player plays
            if (i % 2 == 0) {
                //add move to board
                this.board.add(computer1.move(this.board,1))
            } else {
                //add move to board
                this.board.add(computer2.move(this.board,-1))
            }
            let state = this.check_state()
            if (state != 0) {
                Matrix.map(this.board, x => x > 0 ? "X" : x < 0 ? "O" : " ").show();
                return state
            }
        }
        Matrix.map(this.board, x => x > 0 ? "X" : x < 0 ? "O" : " ").show();
        return 0
    }
    
    static shuffle(a){
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            a[i], a[j] = a[j], a[i]
        }
        return a;
    }
}