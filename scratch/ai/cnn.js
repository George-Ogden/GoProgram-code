class CNN_2 extends Combined_Network{constructor(e,t,n,i,o,l,a,s,c,w,h,r,M,_,N,C,d=1){super([new Convoluting(n,i,o,d,"swish",.001),new Max_Pooling(e-(n-1)*o,e-(i-1)*o,l,a,d),new Convoluting(s,c,w,d,"swish",.01),new Max_Pooling(Math.ceil((e-(n-1)*o)/l)-(s-1)*w,Math.ceil((t-(i-1)*o)/a)-(c-1)*w,h,r,d),new Flatten(Math.ceil((Math.ceil((e-(n-1)*o)/l)-(s-1)*w)/h),Math.ceil((Math.ceil((t-(i-1)*o)/a)-(c-1)*w)/r),d),new Fully_Connected_Network(Math.ceil((Math.ceil((e-(n-1)*o)/l)-(s-1)*w)/h)*Math.ceil((Math.ceil((t-(i-1)*o)/a)-(c-1)*w)/r)*d,M,_,N,"swish",.01),new Softmax(N,C,"sigmoid")],"CNN_2")}static from_string(dict){return new Combined_Network(dict.networks.map(x=>eval(x.type).from_string(x)),"CNN_2")}}class CNN_1 extends Combined_Network{constructor(e,t,n,i,o,l,a,s,c,w,h,r=1){super([new Convoluting(n,i,o,r,"swish"),new Max_Pooling(e-(n-1)*o,e-(i-1)*o,l,a,r),new Flatten(Math.ceil((e-(n-1)*o)/l),Math.ceil((t-(i-1)*o)/a),r),new Fully_Connected_Network(Math.ceil((e-(n-1)*o)/l)*Math.ceil((t-(i-1)*o)/a)*r,s,c,w,"swish"),new Softmax(w,h,"sigmoid")],"CNN_1")}}