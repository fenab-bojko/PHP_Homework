<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
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
    <?php foreach ($data as $elem): ?>
    <div class="row">
        <?= $elem; ?>
    </div>
    <?php endforeach; ?>
    <div>###</div>
    <div>###</div>

    <form action="AddToys.php" method="post">
        <input name="toys" id="toys" type="number" placeholder="Количество игрушек" >
        <input name="simbolToys" id="submit" type="text" placeholder="Вид игрушки">
        <button type="submit">Нарядить елку!</button>
    </form>
</div>