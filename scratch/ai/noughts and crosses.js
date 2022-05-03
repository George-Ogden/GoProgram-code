const delay = ms => new Promise(res => setTimeout(res, ms));
class Noughts_and_Crosses extends Umpire {
	constructor(t = 3, i = 3) {
		super(t), (this.win = i);
	}
	check_state(t = this.board) {
		for (let i = 0; i < this.size; i++)
			for (let e = 0; e < this.size - this.win + 1; e++) {
				if (0 == t.data[i][e]) continue;
				let s = t.data[i][e];
				for (let a = 1; a < this.win; a++)
					if (t.data[i][e + a] != s) {
						s = 0;
						break;
					}
				if (0 != s) return s;
			}
		for (let i = 0; i < this.size - this.win + 1; i++)
			for (let e = 0; e < this.size; e++) {
				if (0 == t.data[i][e]) continue;
				let s = t.data[i][e];
				for (let a = 1; a < this.win; a++)
					if (t.data[i + a][e] != s) {
						s = 0;
						break;
					}
				if (0 != s) return s;
			}
		for (let i = 0; i < this.size - this.win + 1; i++)
			for (let e = 0; e < this.size - this.win + 1; e++) {
				if (0 == t.data[i][e]) continue;
				let s = t.data[i][e];
				for (let a = 1; a < this.win; a++)
					if (t.data[i + a][e + a] != s) {
						s = 0;
						break;
					}
				if (0 != s) return s;
			}
		for (let i = this.win - 1; i < this.size; i++)
			for (let e = 0; e < this.size - this.win + 1; e++) {
				if (0 == t.data[i][e]) continue;
				let s = t.data[i][e];
				for (let a = 1; a < this.win; a++)
					if (t.data[i - a][e + a] != s) {
						s = 0;
						break;
					}
				if (0 != s) return s;
			}
		return 0;
	}
    async find(){
        await delay(1000)
        for (let i = 0; i < this.size; i++){
            for (let j = 0; j < this.size - this.win + 1; j++){
                if (!this.board.data[i][j]) continue;
                let same = true;
                for (let k = 1; k < this.win; k++){
                    if (this.board.data[i][j+k] != this.board.data[i][j]){
                        same = false;
                        break;
                    }
                }
                if (same){
                    for (let k = 0; k < this.win; k++){
                        let piece = $(`[row=${i}][col=${j+k}] circle`)
                        piece.css("background",`radial-gradient(green, ${piece.css("background-color")})`)
                    }
                    return
                }
            }
        }
        for (let i = 0; i < this.size; i++){
            for (let j = 0; j < this.size - this.win + 1; j++){
                if (!this.board.data[j][i]) continue;
                let same = true;
                for (let k = 1; k < this.win; k++){
                    if (this.board.data[j+k][i] != this.board.data[j][i]){
                        same = false;
                        break;
                    }
                }
                if (same){
                    for (let k = 0; k < this.win; k++){
                        let piece = $(`[row=${j+k}][col=${i}] circle`)
                        piece.css("background",`radial-gradient(green, ${piece.css("background-color")})`)
                    }
                    return
                }
            }
        }
        for (let i = 0; i < this.size - this.win + 1; i++){
            for (let j = 0; j < this.size - this.win + 1; j++){
                if (!this.board.data[i][j]) continue;
                let same = true;
                for (let k = 1; k < this.win; k++){
                    if (this.board.data[i+k][j+k] != this.board.data[i][j]){
                        same = false;
                        break;
                    }
                }
                if (same){
                    for (let k = 0; k < this.win; k++){
                        let piece = $(`[row=${i+k}][col=${j+k}] circle`)
                        piece.css("background",`radial-gradient(var(--light), ${piece.css("background-color")})`)
                    }
                    return
                }
            }
        }
        for (let i = 0; i < this.size - this.win + 1; i++){
            for (let j = this.win - 1; j < this.size; j++){
                if (!this.board.data[i][j]) continue;
                let same = true;
                for (let k = 1; k < this.win; k++){
                    if (this.board.data[i+k][j-k] != this.board.data[i][j]){
                        same = false;
                        break;
                    }
                }
                if (same){
                    for (let k = 0; k < this.win; k++){
                        let piece = $(`[row=${i+k}][col=${j-k}] circle`)
                        piece.css("background",`radial-gradient(green, ${piece.css("background-color")})`)
                    }
                    return
                }
            }
        }
    }
}
