const connect4_mirroring=function(r){for(let t in r){for(let e=0;r[t]&&e<r[t].rows-1;e++)for(let a=0;r[t]&&a<r[t].cols;a++)0!=r[t].data[e][a]&&0==r[t].data[e+1][a]&&delete r[t];for(let e in r)null!=r[t]&&null!=r[e]&&r[t].equals(Matrix.flip(r[e],1,0))&&delete r[t]}};class Gamer extends Player{constructor(r,t,e=1/0){super(t,e),this.network=r,this.mirror=connect4_mirroring}mirror(r){for(let t in r)for(let e in r)null!=r[t]&&null!=r[e]&&t!=e&&(r[t].equals(Matrix.flip(r[e],1,0))||r[t].equals(Matrix.flip(r[e],0))||r[t].equals(Matrix.flip(r[e]))||Matrix.transpose(r[t]).equals(r[e])||Matrix.transpose(r[t]).equals(Matrix.flip(r[e],1,0))||Matrix.transpose(r[t]).equals(Matrix.flip(r[e],0))||Matrix.transpose(r[t]).equals(Matrix.flip(r[e])))&&delete r[t]}evaluate(r){return this.network.forward_propagate(r).data[0][0]}}