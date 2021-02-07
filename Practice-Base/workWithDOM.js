const heading = document.getElementById('Hello')
// const heading2 = document.getElementsByTagName('h2') // Лучше не пользоваться

// const heading2 = document.getElementsByClassName('h2 - class') [0] // [0] - получаем доступ только для первого элемента (тоже устаревший метод)

//const heading2 = document.querySelector('h2') // Более универсально (возвращает 1 эл-т)
//const heading2 = document.querySelector('.h2 - class') // Более универсально
const heading2 = document.querySelector('#h2classId') // Более универсально

//console.dir(heading.textContent)
console.dir(heading2)

//const heading3 = heading2.nextElementSibling // Для доступа к другому h2
const h2List = document.querySelectorAll('h2') // Для доступа к другому h2
console.log(h2List)
const heading3 = h2List[1]
console.log(heading3)

addStylesTo = (node, text, color) => {
	node.textContent = text
	node.style.color = color
	node.style.textAlign = "center"
	node.style.backgroundColor = "black"
	node.style.padding = '5px'
}

setTimeout(() => {
	addStylesTo(heading, 'JavaScript', 'red')
}, 1500)

setTimeout(() => {
	addStylesTo(heading2, 'Practice', 'yellow')
}, 2500)

setTimeout(() => {
	addStylesTo(heading3, 'And you will be happy', 'blue')
}, 2000)

/*function addStylesTo(node) {
	heading.textContent = 'Changed from JavaScript'
	heading.style.color = "red"
	heading.style.textAlign = "center"
	heading.style.backgroundColor = "black"
	heading.style.padding = '5px'
}*/

heading.onclick = () => {
	if (heading.style.color === 'red') {
		heading.style.color = 'black'
		heading.style.backgroundColor = 'white'
	} else {
		heading.style.color = 'red'
		heading.style.backgroundColor = 'black'
	}
}

heading2.addEventListener('dblclick', () => {
	if (heading2.style.color === 'red') {
		heading2.style.color = 'black'
		heading2.style.backgroundColor = 'white'
	} else {
		heading2.style.color = 'red'
		heading2.style.backgroundColor = 'black'
	}
})

