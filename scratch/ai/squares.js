const delay = (t) => new Promise((i) => setTimeout(i, t));
class Squares extends Umpire {
	constructor(t = 5) {
		super(t);
	}
	check_state(t = this.board) {
        let full = true;
        let score = [0,0];
		for (let i = 0; i < this.size; i++)
			for (let r = 0; r < this.size; r++) {
                let x = t.data[i][r];
                let s = t % 3;
                for (let j = 0; j < 4; j++){
                    if (x % 3 != s){
                        s = 0;
                    }
                    x = Math.floor(x/3);
                }
                if (s){
                    score[s-1]++;
                } else {
                    full = false;
                }
			}
        if (full){
            if (s[0] > s[1]){
                return 1;
            } else {
                return -1;
            }
        }
		return 0;
	}
    async challenge(t, a = Math.random() > 0.5 ? 1 : 0) {
		this.board.reset();
		for (let s = -a; s < this.size * this.size - a; s++) {
			if ((displayBoard(this.board), s % 2 == 0)) {
				let a = await t.move(this.board, 1);
				finishMove();
			} else {
				let t = new Promise((t) => (move_promise = t));
				t = await t
                this.board.data[t[0]][t[1]] += Math.pow(3,t[2]);
                switch (t[2]){
                    case 0:
                        if (t[1] > 0){
                            this.board.data[t[0]][t[1]-1] += 9
                        }
                        break;
                    case 2:
                        if (t[1] < this.size - 1){
                            this.board.data[t[0]][t[1]+1] += 1
                        }
                        break;
                    case 3:
                        if (t[0] > 0){
                            this.board.data[t[0]-1][t[1]] += 3
                        }
                        break;
                    case 1:
                        if (t[0] < this.size - 1){
                            this.board.data[t[0]+1][t[1]] += 27
                        }
                        break;

                }
                animateMove(umpire.board)
			}
			let a = this.check_state();
			if ((displayBoard(this.board), 0 != a)) return endGame(), a;
		}
		return displayBoard(this.board), endGame(), 0;
	}
}
