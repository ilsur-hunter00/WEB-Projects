// function
// function declaration (лучше использовать это)
/*
function greet(name) {
	console.log('Hello, ', name)
}*/

// function expression (отличие в том, что мы не можем обращаться когда захотим (обязательно после))
/*const greet2 = function greet2(name) {
	console.log('Hello_2, ', name)
}
*/

/*greet('Ilsur')
greet2('Ilsur')

console.log(typeof(greet))*/

//console.dir(greet) // чтобы раскрыть функцию

// Анонимные функции

/*let counter = 0

const interval = setInterval(function(){ // секундомер
	if (counter === 5) {
		clearInterval(interval) // интервал секундомера
	} else {
		console.log(++counter)
	}
}, 1000)*/

// Стрелочные функции

function greet(name) {
	console.log('Hello, ', name)
}

const arrow = (name) => { // То же самое, что и ВЫШЕ
	console.log('Hello, ', name)
}
 
const arrow2 = name => console.log('Hello, ', name) // То же самое, что и ВЫШЕ

const pow2 = num => num ** 2 // Возводит число в степень

console.log(pow2(5))


arrow('Ilsur')
arrow2('Ilsur')

// Параметры по умолчанию

const sum = (a = 40, b = 40*2) => a + b
console.log(sum())

function sumAll(...all) { // рассчитывает сумму в массиве sumAll
	let result = 0
	for (let num of all) {
		result += num
	}
	return result
}

const res = sumAll(1, 2, 4, 5, 7)
console.log(res)

// Замыкания (Возвращаем из одной функции другую функцию)

function createMember(name) { // Для создания приватных переменных (мы не можем добраться до переменной name)
	return function(lastName) {
		console.log(name + lastName)
	}
}

const logWithLastName = createMember('Ilsur')
console.log(logWithLastName('Vafin'))