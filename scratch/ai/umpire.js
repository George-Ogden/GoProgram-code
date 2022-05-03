class Umpire {
	constructor(t) {
		(this.board = new Matrix(t, t)), (this.size = t);
	}
	check_state() {
		return 0;
	}
	play(t, a) {
		this.board.reset(),
			(this.board.data[this.size - 1][(this.size - 1) / 2] = -1);
		for (let s = 0; s < this.size * this.size; s++) {
			s % 2 == 0
				? this.board.add(t.move(this.board, 1))
				: this.board.add(a.move(this.board, -1));
			let e = this.check_state();
			if (0 != e) return e;
		}
		return 0;
	}
	async challenge(t, a = Math.random() > 0.5 ? 1 : 0) {
		this.board.reset();
		for (let s = -a; s < this.size * this.size - a; s++) {
			if ((displayBoard(this.board), s % 2 == 0)) {
				let a = await t.move(this.board, 1);
				animateMove(...a.find(1)), finishMove(), this.board.add(a);
			} else {
				let t = new Promise((t) => (move_promise = t));
				(t = await t),
					(this.board.data[Math.floor(t[0])][t[1]] = -1),
					animateMove(...t);
			}
			let a = this.check_state();
			if ((displayBoard(this.board), 0 != a)) return endGame(), a;
		}
		return displayBoard(this.board), endGame(), 0;
	}
	spectate(t, a, s = Math.random() > 0.5 ? 1 : 0) {
		this.board.reset(),
			(this.board.data[this.size - 1][(this.size - 1) / 2] = 2 * s - 1);
		for (let e = -s; e < this.size * this.size - s; e++) {
			Matrix.map(this.board, (t) =>
				t > 0 ? "X" : t < 0 ? "O" : " "
			).show(),
				e % 2 == 0
					? this.board.add(t.move(this.board, 1))
					: this.board.add(a.move(this.board, -1));
			let s = this.check_state();
			if (0 != s)
				return (
					Matrix.map(this.board, (t) =>
						t > 0 ? "X" : t < 0 ? "O" : " "
					).show(),
					s
				);
		}
		return (
			Matrix.map(this.board, (t) =>
				t > 0 ? "X" : t < 0 ? "O" : " "
			).show(),
			0
		);
	}
	static shuffle(t) {
		for (let a = t.length - 1; a > 0; a--) {
			const s = Math.floor(Math.random() * (a + 1));
			t[a], (t[s] = t[s]), t[a];
		}
		return t;
	}
}
