class Genetic_Combined_Network extends Genetic_Neural_Network {
    constructor(networks,type="Genetic_Combined_Network") {
        super(type)
        //create an array of networks
        this.networks = []
        this.length = networks.length
        for (let i = 0; i < this.length; i++) {
            this.networks.push(networks[i])
        }
    }
    forward_propagate(input) {
        //loop through networks
        let output = input;
        for (let i = 0; i < this.length; i++) {
            //pass output of previous network to input of next
            output = this.networks[i].forward_propagate(output)
            // console.log(output)
        }
        return output
    }
    static crossover(network1, network2, weight = 0.5) {
        //define results
        let networks = []
        network1 = network1.copy()
        network2 = network2.copy()
        //loop through all weights and biases
        for (let i = 0; i < network1.length; i++) {
            //loop through matrix details
            networks.push(eval(network1.networks[i].type+".crossover(network1.networks[i],network2.networks[i],weight)"))
        }
        //return results
        return new Genetic_Combined_Network(networks).mutate(0.01)
    }
    mutate(rate = 0.05) {
        //define result
        let networks = []
        //loop through all weights and biases
        for (let i = 0; i < this.length; i++) {
            //loop through matrix details
            if (typeof this.networks[i].mutate == 'function') {
                networks.push(this.networks[i].mutate(rate))
            } 
        }
        //return result
        return new Genetic_Combined_Network(networks)
    }
    static from_string(dict) {
        //create a copy of self
        return new Genetic_Combined_Network(dict.networks.map(x => eval(x.type).from_string(x)),dict.type)
    }
    copy() {
        return Genetic_Combined_Network.from_string({"networks":JSON.parse(JSON.stringify(this.networks))})
    }
    show() {
        for (let i = 0; i < this.length; i++) {
            this.networks[i].show()
        }
    }
    replicate() {
        //copy
        return this.copy()
    }
}