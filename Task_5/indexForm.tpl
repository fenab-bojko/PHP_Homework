<style>
    #root {
        margin: 0px auto;
        display: flew;
        flex-direction: column;
        align-items: center;
    }

    form {
        gap: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;     
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .row {
        display: flex;
        justify-content: center;
        margin-top: 2px;
    }

    span {
        padding: 2px;
        color: green;
    }

</style>

    <div class="root">
        <form action="index.php" method="post">
            <input type="number" name="higth" id="higth" placeholder="Высота ели.">
            <input type="text" name="simbol" id="simbol" placeholder="Вид ели.">
            <button type="submit">Поставить ель.</button>
        </form>
    </div>

    