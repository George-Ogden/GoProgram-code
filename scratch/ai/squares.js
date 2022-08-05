const delay = (t) => new Promise((i) => setTimeout(i, t));
class Squares extends Umpire {
	constructor(t = 5) {
		super(t);
    this.game = new DotsAndBoxesGame(t)
    this.gboard = this.game.getInitBoard();
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
  update(a, player){
    if (player == -1) {
      player = 2;
    }
    let b = false;
    this.gboard = this.game.getNextState(this.gboard, -1, a)[0];
    
    if (a < this.size * (this.size + 1)){
      let x = a % (this.size)
      let y = (a - x) / (this.size)
      let s =true;
      if (y < this.size){
        this.board.data[x][y] += player
        for (let i = 0;i < 4; i++){
          if (Math.floor(this.board.data[x][y] / Math.ceil(Math.pow(3, i))) % 3 == 0){
            s = false;
          }
        }
        if (s && Math.floor(this.board.data[x][y] / 81 % 3) == 0){
          this.board.data[x][y] += 81 * player
          b= true;
        }
      }
      if (y > 0){
          this.board.data[x][y-1] += 9 * player
          s = true;
          for (let i = 0;i < 4; i++){
            if (Math.floor(this.board.data[x][y-1] / Math.ceil(Math.pow(3, i))) % 3 == 0){
              s = false;
            }
          }
          if (s && Math.floor(this.board.data[x][y-1] / 81 % 3) == 0){
            this.board.data[x][y-1] += 81 * player
            b= true;
          }
      } 
    } else if (a < 2* this.size * (this.size + 1)) {
      a -= this.size * (this.size + 1)
      let x = a % (this.size + 1)
      let y = (a - x) / (this.size + 1)
      let s = true;
      if (x < this.size){
        this.board.data[x][y] += 27 * player
        for (let i = 0;i < 4; i++){
          if (Math.floor(this.board.data[x][y] / Math.ceil(Math.pow(3, i)) % 3) == 0){
            s = false;
          }
        }
        if (s && Math.floor(this.board.data[x][y] / 81 % 3) == 0){
          this.board.data[x][y] += 81 * player
          b= true;
        }
      }
      if (x > 0){
        this.board.data[x-1][y] += 3 * player
        s = true;

        for (let i = 0;i < 4; i++){
          if (Math.floor(this.board.data[x-1][y] / Math.ceil(Math.pow(3, i)) % 3) == 0){
            s = false;
          }
        }
        if (s && Math.floor(this.board.data[x-1][y] / 81 % 3) == 0){
          this.board.data[x-1][y] += 81 * player
          b= true;
        }
      }
    }
    return b;
  }
    async challenge(t, p = Math.random() > 0.5 ? 1 : -1) {
		this.board.reset();
		
    for (let moves = this.game.getValidMoves(this.gboard, 1); moves.length; (moves = this.game.getValidMoves(this.gboard, 1), p *= -1)){

      displayBoard(this.board)
			if (p == -1) {
				(thinking = !0);
				$(".cover").removeClass("d-none");
				$(".cover").addClass("darken d-flex");
				let a = await t.move(this.game, this.gboard, -1);
        if (this.update(a, 2)){
          p *= -1;
          this.update(2 * this.size * (this.size + 1),1)
        }else {
          finishMove()
        }
			} else {
          let t = new Promise((t) => (move_promise = t));
          t = await t
          var b;
                    switch (t[2]){
                      case 0:
                          b = this.update(t[0] + t[1] * this.size, 1)
                          break;
                          case 2:
                            b = this.update(t[0] + (t[1] + 1) * this.size,1)
                            break;
                            case 3:
                            b= this.update(t[0] + (t[1]) * (this.size + 1) + (this.size + 1) * this.size,1)
                            break;
                            case 1:
                              b = this.update(t[0] + 1+ (t[1]) * (this.size + 1) + (this.size + 1) * this.size,1)
                          break;
                  }
                  if (b){
                    p *= -1
                  } 
                  animateMove(umpire.board)
			}
			let a = this.check_state();
			if ((displayBoard(this.board), 0 != a)) return endGame(), a;
		}
		return displayBoard(this.board), endGame(), 0;
	}
}

class Board {

    constructor(n) {
      this.n = n;
      this.pieces = new Array(2*n+1).fill(new Array(n+1).fill(0)).map((x) => [...x]);
    }
  
    clone(board) {
      return [...board].map((x) => [...x]);
    }
  
    increase_score(score, player) {
      let a = this.clone(this.pieces);
      a[player == 1 ? 0 : 1][a[0].length-1] += score;
      this.pieces = a;
    }
  
    is_pass_on() {
      let a = this.pieces;
      return a[2][a[0].length-1];
    }
  
    toggle_pass(state) {
      let a = this.clone(this.pieces);
      a[2][a[0].length-1] = state;
      this.pieces = a;
    }
  
    flatten() {
      let values = this.clone(this.pieces).map((x) => x.map((y)=>+(!y)));
      let flatten = [];
      for (let i = 0; i <= this.n; i++) {
        values[i].pop();
        flatten = flatten.concat(values[i]);
      }
      for (let i = this.n+1; i <= 2*this.n; i++) {
        flatten = flatten.concat(values[i]);
      }
      return flatten;
    }
  
    get_legal_moves(color) {
      let flatten = this.flatten();
      flatten = flatten.concat([0]);
      if (this.is_pass_on()) {
        flatten = new Array(flatten.length);
        flatten.fill(0);
        flatten[flatten.length-1] = 1;
      }
      return flatten;
    }
  
    has_legal_moves() {
      let flatten = this.flatten();
      return flatten.reduce((a,c)=>a||c);
    }
  
    execute_move(action, color) {
      let x, y;
      let is_horizontal = action < this.n*(this.n+1);
      if (is_horizontal) {
        x = parseInt(action / this.n);
        y = action % this.n;
      } else {
        action -= this.n*(this.n+1);
        x = parseInt(action / (this.n+1)) + this.n + 1;
        y = action % (this.n+1);
      }
  
      let values = this.clone(this.pieces);
      values[x][y] = 1;
      this.pieces = this.clone(values);
  
      let filler = new Array(values.length).fill(0);
      values.map((x) => {x.push(0); x.unshift(0)});
      let horizontal = [filler];
      for (let i = 0; i <= this.n; i++) {
        values[i][values[i].length-1] = 0;
        horizontal.push(values[i]);
      }
      horizontal.push(filler);
  
      let vertical = [filler];
      for (let i = this.n+1; i <= 2*this.n; i++) {
        vertical.push(values[i]);
      }
      vertical.push(filler);
  
      // Need to check if we have closed a square
      // If so, increase score and mark pass
      let score = 0;
      let up, down, left, right;
      up = 0;
      down = 0;
      left = 0;
      right = 0;
      if (is_horizontal) {
        x++;
        y++;
        if (horizontal[x+1][y]) {
          down = (vertical[x][y] && vertical[x][y+1]);
        }
        if (horizontal[x-1][y]) {
          up = (vertical[x-1][y] && vertical[x-1][y+1]);
        }
      } else {
        x -= this.n;
        y++;
        if (vertical[x][y+1]) {
          right = (horizontal[x][y] && horizontal[x+1][y]);
        }
        if (vertical[x][y-1]) {
          left = (horizontal[x][y-1] && horizontal[x+1][y-1]);
        }
      }
      score = up + down + left + right;
      this.increase_score(score, color);
      this.toggle_pass(+(score > 0));
      return [up, down, left, right];
    }
  
  }
  class DotsAndBoxesGame {
    constructor(n) {
      this.n = n;
    }
  
    getInitBoard() {
      let b = new Board(this.n);
      return b.pieces;
    }
  
    getBoardSize() {
      // (a,b) tuple
      return [2*this.n+1, this.n+1];
    }
  
    getActionSize() {
      // return number of actions
      return 2 * (this.n + 1) * this.n + 1;
    }
  
    getNextState(board, player, action) {
      // if player takes action on board, return next (board,player)
      // action must be a valid move
      let b = new Board(this.n);
      b.pieces = b.clone(board);
      let up, down, left, right;
      if (action == this.getActionSize() - 1) {
        b.pieces[2][b.pieces[2].length-1] = 0;
      } else {
        [up, down, left, right] = b.execute_move(action, player);
      }
      return [b.pieces, -player, up, down, left, right];
    }
  
    getValidMoves(board, player) {
      // return a fixed size binary vector
      let b = new Board(this.n);
      b.pieces = board;
      return b.get_legal_moves(player);
    }
  
    getGameEnded(board, player) {
      // return 0 if not ended, 1 if player 1 won, -1 if player 1 lost
      let b = new Board(this.n);
      b.pieces = board;
      if (b.has_legal_moves()) {
        return 0;
      }
      let pieces = board;
      let last_column = pieces[0].length-1;
      if (pieces[0][last_column] == pieces[1][last_column]) {
        return -1 * player;
      } else {
        let player_1_won = pieces[0][last_column] > pieces[1][last_column];
        return player_1_won ? 1*player : -1*player;
      }
    }
  
    getCanonicalForm(board, player) {
      let b = new Board(this.n);
      board = b.clone(board);
      if (player == -1) {
        // swap score
        let last_column = board[0].length-1;
        let aux = board[0][last_column];
        board[0][last_column] = board[1][last_column];
        board[1][last_column] = aux;
      }
      return board;
    }
  
    predict(nnet, board) {
      board = new Board(this.n).clone(board);
  
      let last_column = board[0].length-1;
  
      // Need to normalize score
      let p1_score = board[0][last_column];
      let p2_score = board[1][last_column];
      let score = p1_score - p2_score;
  
      let max_score = this.n * this.n;
      let min_score = -1 * max_score;
  
      let max_normalized = 1;
      let min_normalized = 0; 
      let normalized_score = ((score - max_score) / (min_score - max_score)) * (min_normalized - max_normalized) + max_normalized;
  
      board[0][last_column] = normalized_score;
      board[1][last_column] = 0;
  
      let board_size = this.getBoardSize();
      board_size.unshift(1);
      let prediction = nnet.predict(tf.tensor(board).reshape(board_size));
      return prediction;
    }
  
    stringRepresentation(board) {
      return board.toString();
    }
  
  }
  class Player {
      constructor(u){
        tf.loadLayersModel("model/model.json").then(neural_network =>
          this.mcts = new MCTS(u.game, neural_network, {cpuct: 1.0, numMCTSSims: 25}))
        ;
      };
      async move(g, t, p) {
        while (this.mcts === undefined){
          await new Promise(resolve => setTimeout(resolve, 100))
        }
        let board = g.getCanonicalForm(t, p)
        let probs = await this.mcts.getActionProb(board)
        return probs.indexOf(1)
      }
  }