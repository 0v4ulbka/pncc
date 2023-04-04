<div>
    <h1>Добавление нового подразделения</h1>
    <form method="post">
        <p>Введите название подразделения</p>
        <label>
            <input class="field" type="text" name="subdivision">
        </label>
        <p>Выберите тип подразделения</p>
        <label>
            <?php foreach ($type_subdivisions as $type_subdivision){?>
                <input type="radio" value="<?= $type_subdivision->id?>" name="type_subdivision"><?= $type_subdivision->type_subdivision?><br><br>
            <?php }?>
        </label>
        <button>Добавить</button>
        <a class="button" href="<?= app()->route->getUrl('/subdivisions')?>">Отмена</a>
    </form>
</div>