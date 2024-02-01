function threeSetpsAB (text) {
    var sementaraArr = []
    sementaraArr = text.split("")
    for(let i=0; i < sementaraArr.lenght; i++){
        if(sementaraArr[i] === 'a'){
            if (sementaraArr[i + 4] === 'b') {
                return true;
              }
        }
        else if(sementaraArr[i] === 'b'){
            if (sementaraArr[i + 4] === 'a') {
                return true;
                }
            }
        }
        return false
    }

console.log(threeSetpsAB('lane borrowed'))
console.log(threeSetpsAB('i am sick'))
console.log(threeSetpsAB('you are boring'))
