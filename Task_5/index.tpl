


<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .red {
        color:red;
    }

    .row {
        margin-top: 2px;
    }

    span {
        cursor: pointer;
        padding: 2px;
    }

    form {
        margin-top: 20px;
    }
</style>

<div class="container">
    <?php foreach($mass as $elem): ?>
    <div class="row">
        <?php foreach($elem as $e): ?>
        <span><?= $e; ?></span>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
    <form action="index.php" method="post">
        <input name="higth" type="number" placeholder="Высота елки">
        <input name="simbol" type="text" placeholder="Вид елки">
        <button type="submit">Поставить елку</button>
    </form>

</div>
