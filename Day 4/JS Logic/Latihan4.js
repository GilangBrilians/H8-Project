function isArithmeticProgression(number){
    const selisih = number[1] - number[0]
    for (let i = 2; i < number.length; i++){
        if(number[i] - number[i-1] !== selisih){
            return false
        }
    } 
    return true

}

console.log(isArithmeticProgression([1,2,3,4,5,6]))
console.log(isArithmeticProgression([2,4,6,12,24]))