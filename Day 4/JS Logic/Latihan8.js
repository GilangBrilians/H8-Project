function isPrime(number){
    if(number < 2){
        return false
    }
    else{
        for(let i = 2; i < number; i++){
            if(number % i === 0){
                return false 
            }
        }
        return number
    }
}

function listPrima(angka1,angka2){
    let primeArr = []
    for(let j = angka1; j <= angka2; j++){
        if(isPrime(j)){
            primeArr.push(isPrime(j))
        }
    }
    return primeArr
}

console.log(listPrima(1,5))
console.log(listPrima(5,7))
console.log(listPrima(10,20))