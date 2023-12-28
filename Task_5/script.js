const root = document.querySelectorAll('span');
const garland = [];

root.forEach((e, i) =>{
    if (i % 2 === 0) garland.push(e)
}) 
    


const toggle = (elem) => {
    elem.classList.toggle('red')
}

const onOffGarland = () => {
    let check = 0
    
    garland.forEach (elem => {
        if (!check) {
            setInterval(toggle(elem), 1000)
            check = 1
        } else {
            clearInterval()
            check = 0
        }
        
    })
        
    
}
const button = document.getElementById('garland')

button.addEventListener('click', onOffGarland)