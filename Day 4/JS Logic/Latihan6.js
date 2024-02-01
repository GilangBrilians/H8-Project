function gcd(firstNumber, secondNumber) {
    // Mengecek apakah salah satu bilangan adalah nol
    if (firstNumber === 0 || secondNumber === 0) {
      return "Invalid";
    }
  
    while (secondNumber !== 0) {
      let temp = secondNumber;
      secondNumber = firstNumber % secondNumber;
      firstNumber = temp;
    }
  
    return firstNumber;
  }

console.log(gcd(12,16))
console.log(gcd(50,40))
console.log(gcd(22,99))