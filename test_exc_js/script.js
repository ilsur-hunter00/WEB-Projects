const switchLeft = document.getElementById('switch-left'),
      switchRight = document.getElementById('switch-right')

let circleLeft, circleTop, bigCircleLeft, bigCircleTop, mouseFunction

switchLeft.onclick = () => {

    const bigCircle = document.getElementById('big-circle'),
          smallCircle = document.getElementById('small-circle')

    switchLeft.style.background = "deeppink"
    switchRight.style.background = "lightcyan"
    switchLeft.style.color = "white"
    switchRight.style.color = "black"

    mouseFunction = bigCircle.onmousemove = (e) => {
        let x = e.clientX,
        y = e.clientY
        smallCircle.style.left = x + "px"
        smallCircle.style.top = y + "px"
    }

    smallCircle.onmouseover = null

}

switchRight.onclick = () => {

    const bigCircle = document.getElementById('big-circle'),
          smallCircle = document.getElementById('small-circle')

    switchLeft.style.background = "lightcyan"
    switchRight.style.background = "deeppink"
    switchLeft.style.color = "black"
    switchRight.style.color = "white"

    bigCircleLeft = bigCircle.clientWidth-150 - smallCircle.offsetWidth
    bigCircleTop = bigCircle.clientHeight-150 - smallCircle.offsetHeight

    mouseFunction = smallCircle.onmouseover = () => {
        circleLeft = Math.random() * bigCircleLeft
        smallCircle.style.left = circleLeft+600 + "px"
        circleTop = Math.random() * bigCircleTop
        smallCircle.style.top = circleTop+300 + "px"
    }

    bigCircle.onmousemove = null

}