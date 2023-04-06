<div>
    <h1>Добавление нового подразделения</h1>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Введите название подразделения</p>
        <label>
            <h3><?= $message['subdivision'][0] ?? ''?></h3>
            <input class="field" type="text" name="subdivision">
        </label>
        <p>Выберите тип подразделения</p>
        <label>
            <h3><?= $message['type_subdivision'][0] ?? ''?></h3>
            <?php foreach ($type_subdivisions as $type_subdivision){?>
                <input type="radio" value="<?= $type_subdivision->id?>" name="type_subdivision"><?= $type_subdivision->type_subdivision?><br><br>
            <?php }?>
        </label>
        <button>Добавить</button>
        <a class="button" href="<?= app()->route->getUrl('/subdivisions')?>">Отмена</a>
    </form>
</div>