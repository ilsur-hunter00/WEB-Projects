// Event Loop

/*const timeout = setTimeout(() => {
	console.log('After timeout: ')
}, 2500)

clearTimeout(timeout) // Очищает таймаут

const interval = setInterval(() => {
	console.log('After timeout: ')
}, 1000)

clearInterval(interval)*/

/*const delay = (callBack, wait = 1000) => { // Продублировать функционал таймаута
	setTimeout(callBack, wait)
}

delay(() => {
	console.log('After 2 sec')
}, 2000)*/

const delay = (wait = 1000) => { // Промисы (чтобы убрать большой уровень вложенности)
	const promise = new Promise((resolve, reject) => {
		setTimeout(() => {
			reject('Что-то пошло не так') // Отлавливает ошибки
		}, wait)
	})
	return promise	
}

delay(2500)
	.then(() => {
		console.log('After 2 sec')
	})
	.catch(err => console.error(err))
	.finally(() => console.log('Finally'))

