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
	async find() {
	}
}
