import { write, sleep } from '../helper.js'

let firstFill = document.getElementsByClassName('first_fill')
let secondFill = document.getElementsByClassName('second_fill')

// let flecha = document.getElementsByClassName('siguiente_img')
let flecha = document.getElementById('siguiente_img')

flecha.addEventListener('click', async () => {

  for (const item of firstFill) {
    item.style.opacity = "0"
    item.style.transition = "opacity 2s ease"
  }

  await sleep(2000);
  // Disappear all elements with 0 opacity
  for (const item of firstFill) {
    item.style.display = "none"
  }

  // Appear seconds elements
  for (const item of secondFill){
    item.style.display = "block"
  }

  // write('hola escribo')

  
})

const appearItems = () => {

}
// document.onsubmit('submit', )