<style>
    #root {
        display: flew;
        flex-direction: column;
        align-items: center;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        margin-top:  20px;
    }

    .row {
        display: flex;
        justify-content: center;
        margin-top: 2px;
    }

    .checkbox {
        display: flex;
        gap: 10px;
    }

    span {
        padding: 2px;
    }

    .button {
        border: 1px solid red;
        border-radius: 8px;
        padding: 5px;
        cursor: pointer;
        background: red;
        color: #fff;
        margin-top: 20px;
        box-shadow: 0px 0px 4px 4px gray;
    }

    .button:hover {
        box-shadow: none;
    }

    .red {
        color: red;
    }

</style>

<div id="root">
    <div class="container">
        <?php foreach ($data as $elem): ?>
            <div class="row">
                <?php foreach ($elem as $e): ?>
                <span><?= $e ?></span>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <div id="garland" class="button">Включить гирлянду.</div>
    </div>
    <form action="index.php" method="post">
        <input type="text" name="simbolToys" placeholder="Вид игрушки">
        <button type="submit">Повесить игрушку</button>
    </form>
     <form action="index.php" method="post">
        <input type="text" name="deleteToys" placeholder="Какую игрушку снять?">
        <button type="submit">Снять игрушку</button>
    </form>
    <script src="script.js"></script>
</div>