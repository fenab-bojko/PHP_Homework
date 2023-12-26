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

    span {
        padding: 2px;
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
    </div>
    <form action="index.php" method="post">
        <input type="text" name="simbolToys" placeholder="Вид игрушки">
        <button type="submit">Повесить игрушку</button>
    </form>
</div>