const addButton = document.querySelector('.add-button')
let addTextfield = document.querySelector('.add-textfield')
let toDo = document.querySelector('.do-tasks')

if(window.localStorage.getItem("massiveOfTasks") == undefined){
    var massiveOfTasks = []
    window.localStorage.setItem("massiveOfTasks", JSON.stringify(massiveOfTasks))
}
else {
   var massiveOfTasks = JSON.parse(window.localStorage.getItem("massiveOfTasks"))
}

class item {
    constructor(itemName){
        this.createDiv(itemName)
    }

    createDiv(itemName) {
        let taskItem = document.createElement('p')
        taskItem.innerHTML = itemName

        let itemBox = document.createElement('div')
        itemBox.classList.add('task')

        let doneButton = document.createElement('button')
        doneButton.innerHTML = ("&#10004")
        doneButton.classList.add('task-done')

        let removeButton = document.createElement('button')
        removeButton.innerHTML = ("&#10060")
        removeButton.classList.add('task-del')

        toDo.appendChild(itemBox)

        itemBox.appendChild(taskItem)
        itemBox.appendChild(doneButton)
        itemBox.appendChild(removeButton)

        doneButton.addEventListener('click', () => this.tickDone(itemBox))

        removeButton.addEventListener('click', () => this.remove(itemBox))
    }

    remove(itemBox) {
        itemBox.parentNode.removeChild(itemBox)

        let val = this.value
        let n = massiveOfTasks.findIndex(itemTask => itemTask.value == val)
        massiveOfTasks.splice(n,1)
        window.localStorage.setItem("massiveOfTasks", JSON.stringify(massiveOfTasks))
    }

    tickDone(itemBox) {
        if (!this.done) {
            itemBox.classList.add('done')
            this.done = true
        }
        else {
            itemBox.classList.remove('done')
            this.done = false
        }

        let val = this.value
        let n = massiveOfTasks.findIndex(itemTask => itemTask.value == val)
        massiveOfTasks[n].done = this.done
        window.localStorage.setItem("massiveOfTasks", JSON.stringify(massiveOfTasks))
    }
}

function check() {
    if(addTextfield.value != ""){
        new item(addTextfield.value)

        let itemTask = {
            value: addTextfield.value,
            done: false
        }
        massiveOfTasks.push(itemTask)
        window.localStorage.setItem("massiveOfTasks", JSON.stringify(massiveOfTasks))
        addTextfield.value = ""
    }
}

addButton.addEventListener('click', check)
window.addEventListener('keydown', (e) => {
    if(e.which == 13) {
        check()
    }
})

for (let i = 0 ; i < massiveOfTasks.length ; i++){
    new item(massiveOfTasks[i].value, massiveOfTasks[i].done);
} // чтоб при обновлении страницы не удалялись элементы