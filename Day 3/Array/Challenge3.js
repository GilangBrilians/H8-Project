// no 1

console.log('No 1')
var myArray =[]

myArray.push("Apple")
console.log(myArray)

myArray.push("Banana")
console.log(myArray)

myArray.pop()
console.log(myArray)

myArray.unshift("orange")
console.log(myArray)


myArray.shift()
console.log(myArray)
console.log('=========================================')

// no 2
console.log('No 2')

var firstArray = [1, 2, 3]
var secondArray = [4, 5, 6]

var newArray = firstArray.concat(secondArray)
// console.log(newArray)

var str = newArray.join(" , ")
console.log(str)
console.log('=========================================')

// no 3
console.log('No 3')

var number = [3,1,5,2,4,6]
number.sort()
console.log(number)

number.reverse()
console.log(number)
console.log('=========================================')

// no 4
console.log('No 4')

var fruitArray = ['apple', 'banana', 'orange', 'grape', 'kiwi']

fruitArray.splice(1, 2)
console.log(fruitArray)
console.log('=========================================')

// no 5
console.log('No 5')

var setence = "Hello,World,JavaScript"
var kataArray = setence.split(',')

console.log(kataArray)


