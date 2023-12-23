const root = document.getElementById('root')

const container = document.createElement('div')
const formCreateTree = document.createElement('div')
const formAddToys = document.createElement('div')

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

array.forEach(e => {
    let row = document.createElement('div')
    e.forEach(elem => {
        let item = document.createElement('span')
        item.innerHTML = elem
        row.append(item)
    })
    container.append(row)
})




if(!container.innerHTML) {
    root.append(formCreateTree)
} else {
    root.append(container)
    root.append(formAddToys)
}