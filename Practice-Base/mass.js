const cars = ['Mazda', 'Ford', 'BMW']
const fib = [1, 1, 2, 3, 5, 8, 13]
/*const people = [
	{name: 'Ilsur', budget: 3000},
	{name: 'Kamil', budget: 4000},
	{name: 'Alfred', budget: 2000}
]*/

/*cars.push('Porshe') // Добавляет в конец массива

console.log(cars)

cars.unshift('Volga') // Добавляет в начало массива

cars.shift() // Удалить первый эл-т
console.log(cars)

cars.pop() // Удалить посл эл-т*/

/*console.log(cars.reverse()) // разворачивает массив
console.log(cars)*/

//console.log(cars.indexOf('BMW')) // Индекс эл-та

/*const index = cars.indexOf('BMW')
cars[index] = 'Porsche'
console.log(cars)
*/

/*for(const person of people) {
	console.log(person)
}*/

/*const index = people.findIndex(function(person) { // Цикл для поиска индекса
	return person.budget === 3000
})
console.log(index)

const person = people.find(function(person) { // Цикл для поиска индекса
	return person.budget === 3000
})
console.log(person)*/

/*const person = people.find(person => person.budget === 3000)  // Более короткая версия
console.log(person)*/

//console.log(cars.includes('Reno')) // true or false

// Методы высокого порядка

/*const upperCaseCars = cars.map(car => {
	return car.toUpperCase()
})// Верхний регистр

const pow2 = num => num ** 2
const sqrt = num => Math.sqrt(num)
const pow2Fib = fib.map(pow2).map(sqrt)
console.log(pow2Fib)

console.log(upperCaseCars)
*/

/*const pow2 = num => num ** 2
const pow2Fib = fib.map(pow2)
console.log(pow2Fib)

const filteredNumbers = pow2Fib.filter(num => num > 20)
console.log(filteredNumbers)*/

const people = [
	{name: 'Ilsur', budget: 3000},
	{name: 'Kamil', budget: 4000},
	{name: 'Alfred', budget: 2000}
]

const allBudgetPeople = people.reduce(function(acc, person) {
	acc += person.budget
	return acc
}, 0)

console.log(allBudgetPeople)

// Задача 1

/*const text = 'Привет, Ворлд'
const reverseText = text.split('').reverse().join('') // Получение строки наоборот 
console.log(reverseText)*/