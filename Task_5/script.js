const root = document.getElementById('root')

const container = document.createElement('div')
const formCreateTree = document.createElement('div')
const formAddToys = document.createElement('div')
let arrTree = document.getElementById('massTree').innerHTML || null
let mass = []
let massTree = []

formCreateTree.innerHTML = `
    <form action="index.php" method="post">
        <input name="higth" type="number" placeholder="Высота елки">
        <input name="simbol" type="text" placeholder="Вид елки">
        <button type="submit">Поставить елку</button>
    </form>
`
formAddToys.innerHTML = `
    <form action="index.php" method="post">
        <input name="simbol" type="text" placeholder="Вид игрушки">
        <button type="submit">Поставить елку</button>
    </form>
`

let arr = [];
for (let i = 0; i < arrTree.length; i++) {
    let a = arrTree.charAt(i)
    if (a !== '[' && a !== ']' && a !== ',' && a !== '"') arr.push(a)
}

arr.forEach(e => {
    mass.push(e)
    massTree.push(mass)
})

console.log(massTree)

if(!container.innerHTML) {
    root.append(formCreateTree)
} else {
    root.append(container)
    root.append(formAddToys)
}