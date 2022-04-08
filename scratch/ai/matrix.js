class Matrix {
    constructor(t = 0, s = 0) {
      (this.data = []), (this.rows = t), (this.cols = s);
      for (let a = 0; a < t; a++) {
        this.data.push([]);
        for (let t = 0; t < s; t++) this.data[a].push(1);
      }
      this.randomise();
    }
    static blank(t, s, a = 0) {
      let r = new Matrix(t, s);
      return r.reset(a), r;
    }
    static fromArray(t) {
      let s = new Matrix(t.length, t[0].length);
      return (s.data = t), s;
    }
    set(t) {
      (t = Matrix.fromArray(t.data)),
        (this.rows = t.rows),
        (this.cols = t.cols),
        (this.data = t.data);
    }
    show() {
      return console.table(this.data), this.data;
    }
    map(t, s = null) {
      if (s) {
        let a = new Matrix(this.rows, this.cols);
        for (let r = 0; r < this.rows; r++)
          for (let e = 0; e < this.cols; e++)
            a.data[r][e] = t(this.data[r][e], s.data[r][e]);
        return a;
      }
      for (let s = 0; s < this.rows; s++)
        for (let a = 0; a < this.cols; a++) this.data[s][a] = t(this.data[s][a]);
    }
    static map(t, s) {
      let a = t.copy();
      return a.map(s), a;
    }
    randomise() {
      this.map((t) => 2 * Math.random() - 1);
    }
    reset(t = 0) {
      this.map(() => t);
    }
    transpose() {
      this.set(Matrix.transpose(this));
    }
    static transpose(t) {
      let s = new Matrix(t.cols, t.rows);
      for (let a = 0; a < t.rows; a++)
        for (let r = 0; r < t.cols; r++) s.data[r][a] = t.data[a][r];
      return s;
    }
    static add(t, s) {
      return t.map((t, s) => t + s, s);
    }
    add(t) {
      this.set(Matrix.add(this, t));
    }
    static subtract(t, s) {
      return t.map((t, s) => t - s, s);
    }
    subtract(t) {
      this.set(Matrix.subtract(this, t));
    }
    multiply(t) {
      "number" == typeof t
        ? this.map((s) => s * t)
        : this.set(this.map((t, s) => t * s, t));
    }
    static multiply(t, s) {
      let a = t.copy();
      return a.multiply(s), a;
    }
    static dot(t, s) {
      if ((t.cols = s.rows)) {
        let a = new Matrix(t.rows, s.cols);
        for (let r = 0; r < a.rows; r++)
          for (let e = 0; e < a.cols; e++) {
            let i = 0;
            for (let a = 0; a < t.cols; a++) i += t.data[r][a] * s.data[a][e];
            a.data[r][e] = i;
          }
        return a;
      }
    }
    dot(t) {
      this.set(Matrix.dot(this, t));
    }
    clip(t, s = Matrix.blank(this.rows, this.cols, 1)) {
      this.set(
        this.map(
          (s, a) =>
            Math.abs(s) > Math.abs(a * t)
              ? s > 0
                ? Math.abs(a * t)
                : -Math.abs(a * t)
              : s,
          s
        )
      );
    }
    static clip(t, s, a = Matrix.blank(this.rows, this.cols, 1)) {
      let r = t.copy();
      return r.clip(s, a), r;
    }
    rss() {
      return this.data.reduce((t, s) => t + s.reduce((t, s) => t + s * s, 0), 0);
    }
    subsection(t, s, a, r) {
      let e = new Matrix(r, a);
      for (let i = s; i < s + r; i++)
        for (let r = t; r < t + a; r++) e.data[i - s][r - t] = this.data[i][r];
      return e;
    }
    copy() {
      return Matrix.fromArray(eval(JSON.stringify(this.data)));
    }
    static pad(t, s = 1, a = 1) {
      let r = new Matrix(t.rows + 2 * s, t.cols + 2 * a);
      r.reset();
      for (let e = 0; e < t.rows; e++)
        for (let i = 0; i < t.cols; i++) r.data[e + s][i + a] = t.data[e][i];
      return r;
    }
    pad(t = 1, s = 1) {
      this.set(Matrix.pad(this, t, s));
    }
    static flip(t, s = !0, a = !0) {
      let r = new Matrix(t.rows, t.cols);
      for (let e = 0; e < t.rows; e++)
        for (let i = 0; i < t.cols; i++)
          r.data[e][i] = t.data[a ? t.rows - e - 1 : e][s ? t.cols - i - 1 : i];
      return r;
    }
    flip(t = !0, s = !0) {
      this.set(Matrix.flip(this, t, s));
    }
    sum() {
      return this.data.reduce((t, s) => t + s.reduce((t, s) => t + s, 0), 0);
    }
    abs_sum() {
      return this.data.reduce(
        (t, s) => t + s.reduce((t, s) => t + Math.abs(s), 0),
        0
      );
    }
    static flatten(t) {
      let s = new Matrix(1, t.rows * t.cols);
      for (let a = 0; a < t.rows; a++)
        for (let r = 0; r < t.cols; r++) s.data[0][a * t.cols + r] = t.data[a][r];
      return s;
    }
    flatten() {
      this.set(Matrix.flatten(this));
    }
    static resize(t,rows,cols) {
      let s = new Matrix(rows,cols);
      for (let a = 0; a < rows; a++)
        for (let r = 0; r < cols; r++) {
            s.data[a][r] = t.data[parseInt((a * cols + r) / t.cols)][(a * cols + r) % t.cols];
        }
      return s;
    }
    resize(t,rows,cols) {
      this.set(Matrix.resize(this,rows,cols))
    }
    subsection(t, s, a = this.cols, r = this.rows) {
      let e = new Matrix(r, a);
      for (let i = s; i < s + r; i++)
        for (let r = t; r < t + a; r++) e.data[i - s][r - t] = this.data[i][r];
      return e;
    }
    static build(t, s, a) {
      let r = new Matrix(s, a);
      for (let e = 0; e < s; e++)
        for (let s = 0; s < a; s++) r.data[e][s] = t.data[0][e * a + s];
      return r;
    }
    build(t, s) {
      this.set(Matrix.build(this, t, s));
    }
    copy() {
      return Matrix.fromArray(eval(JSON.stringify(this.data)));
    }
    max() {
      return this.data.reduce(
        (t, s) =>
          Math.max(
            t,
            s.reduce((t, s) => Math.max(t, s))
          ),
        -1 / 0
      );
    }
    find(t) {
      for (let s = 0; s < this.rows; s++)
        for (let a = 0; a < this.cols; a++)
          if (this.data[s][a] == t) return [s, a];
    }
    max_plot() {
      let t = new Matrix(this.rows, this.cols),
        s = this.max();
      return t.reset(), (t.data[this.find(s)[0]][this.find(s)[1]] = 1), t;
    }
    static insert(t, s, a, r) {
      let e = t.copy();
      for (let t = 0; t < s.rows; t++)
        for (let i = 0; i < s.cols; i++) e.data[t + r][i + a] = s.data[t][i];
      return e;
    }
    insert(t, s, a) {
      this.set(Matrix.insert(this, t, s, a));
    }
    equals(t) {
      return (
        this.rows == t.rows &&
        this.cols == t.cols &&
        this.data.reduce(
          (s, a, r) =>
            s ? a.reduce((s, a, e) => (s ? a == t.data[r][e] : 0), 1) : 0,
          1
        )
      );
    }
    static concat(t, s) {
      let a = new Matrix(t.rows, t.cols + s.cols);
      return a.insert(t, 0, 0), a.insert(s, t.cols, 0), a;
    }
    concat(t) {
      this.set(Matrix.concat(this, t));
    }
    static split(t, s) {
      return [t.subsection(0, 0, s), t.subsection(s, 0, t.cols - s)];
    }
  }
  