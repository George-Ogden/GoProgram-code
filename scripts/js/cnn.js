class CNN_2 extends Combined_Network {
    //create combined network based on details
    constructor(inputsx, inputsy, convoluting1x, convoluting1y, convoluting1n, pooling1x, pooling1y, convoluting2x, convoluting2y, convoluting2n, pooling2x, pooling2y, connectedl, connectedw, connectedo, outputs, colours = 1){
        super([new Convoluting(convoluting1x,convoluting1y,convoluting1n,colours,"swish",0.001), 
        new Max_Pooling(inputsx-(convoluting1x-1)*convoluting1n,inputsx-(convoluting1y-1)*convoluting1n,pooling1x, pooling1y,colours), 
        new Convoluting(convoluting2x,convoluting2y,convoluting2n,colours,"swish",0.01), 
        new Max_Pooling(Math.ceil((inputsx-(convoluting1x-1)*convoluting1n)/pooling1x)-(convoluting2x-1)*convoluting2n,Math.ceil((inputsy-(convoluting1y-1)*convoluting1n)/pooling1y)-(convoluting2y-1)*convoluting2n,pooling2x,pooling2y,colours), 
        new Flatten(Math.ceil((Math.ceil((inputsx-(convoluting1x-1)*convoluting1n)/pooling1x)-(convoluting2x-1)*convoluting2n)/pooling2x),Math.ceil((Math.ceil((inputsy-(convoluting1y-1)*convoluting1n)/pooling1y)-(convoluting2y-1)*convoluting2n)/pooling2y),colours), 
        new Fully_Connected_Network(Math.ceil((Math.ceil((inputsx-(convoluting1x-1)*convoluting1n)/pooling1x)-(convoluting2x-1)*convoluting2n)/pooling2x)*Math.ceil((Math.ceil((inputsy-(convoluting1y-1)*convoluting1n)/pooling1y)-(convoluting2y-1)*convoluting2n)/pooling2y)*colours,connectedl,connectedw,connectedo,"swish",0.01), 
        new Softmax(connectedo,outputs,"sigmoid")],"CNN_2")
    }
    static from_string(dict) {
        //create a copy of self
        return new Combined_Network(dict.networks.map(x => eval(x.type).from_string(x)),"CNN_2")
    }
}
class CNN_1 extends Combined_Network {
    //create combined network based on details
    constructor(inputsx, inputsy, convoluting1x, convoluting1y, convoluting1n, pooling1x, pooling1y, connectedl, connectedw, connectedo, outputs, colours = 1){
        super([new Convoluting(convoluting1x,convoluting1y,convoluting1n,colours,"swish"), 
        new Max_Pooling(inputsx-(convoluting1x-1)*convoluting1n,inputsx-(convoluting1y-1)*convoluting1n,pooling1x, pooling1y,colours), 
        new Flatten(Math.ceil((inputsx-(convoluting1x-1)*convoluting1n)/pooling1x),Math.ceil((inputsy-(convoluting1y-1)*convoluting1n)/pooling1y),colours), 
        new Fully_Connected_Network(Math.ceil((inputsx-(convoluting1x-1)*convoluting1n)/pooling1x)*Math.ceil((inputsy-(convoluting1y-1)*convoluting1n)/pooling1y)*colours,connectedl,connectedw,connectedo,"swish"), 
        new Softmax(connectedo,outputs,"sigmoid")],"CNN_1")
    }
}