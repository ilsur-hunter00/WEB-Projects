const person = {
	name: 'Ilsur',
	age: 20,
	isProgrammer: true,
	lang: ['rus', 'tat', 'eng'],
	'complex key': 'Complex key',
	greet() {
		console.log('PUK')
	},
	info() {
		console.info('Информация про человека по имени: ', this.name) // this - это объект person
	}
}

/*console.log(person.age)
console.log(person['complex key'])
person.greet() 

delete person['complex key']// стереть 
console.log(person)*/

// Деструкторизация

/*const name = person.name
const age = person.age
const lang = person.lang */

/*const {name, age, lang} = person // То же самое, что выше

console.log(name, age, lang) */

/*for (let key in person) { // Цикл в объектах (Но этот цикл опасен)
	if (person.hasOwnProperty(key)) { // Так правильнее
		console.log('key: ', key)
		console.log('value: ',person[key])
	}
}*/

/*const keys = Object.keys(person) // Для получения ключей объекта (Тут не нужна проверка hasOwnProperty)
keys.forEach((key) => {
	console.log('key: ', key)
	console.log('value: ',person[key])
})*/

// Context

person.info()

const logger = {
	keys() {
		console.log('Object keys: ', Object.keys(this))
	},
	keysAndValues() {
		Object.keys(this).forEach((key) => {
			console.log(`"${key}": ${this[key]}`)
		})
	},
	withParams(top = false, between = false, bottom = false) {
		if(top) {
			console.log('---Start---')
		}
		Object.keys(this).forEach((key, index, array) => {
			console.log(`"${key}": ${this[key]}`)
			if(between && index !== array.length - 1) {
			console.log('------')
			}
		})
		
		if(bottom) {
			console.log('---Finish---')
		}
	}
}

logger.withParams.call(person, true, true, true)
logger.withParams.apply(person, [true, true, true]) // То же самое, что выше

//logger.keysAndValues.call(person)

/*const bound = logger.keys.bind(person) // bind - связываем logger и person
bound()

logger.keys.call(person) // То же самое, что выше*/

