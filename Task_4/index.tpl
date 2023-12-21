<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 30px;
    }
    .row {
        display: flex;
        justify-content: space-around;
    }
    form {
        margin-top: 15px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .button {
        text-decoration: none;
        border: 1px solid gray;
        border-radius: 4px;
        padding: 5px;
    }
    input {
        text-decoration: none;
        border: 1px solid gray;
        border-radius: 4px;
        padding: 5px;
    }
</style>

<div class="container">
    <form action="CreateTree.php" method="post">
        <input type="number" name="higth" id="higth" placeholder="Высота елки.">
        <input type="text" name="simbol" id="simbol" placeholder="Вид елки.">
        <button type="submit">Создать елку.</button>
    </form>
</div>