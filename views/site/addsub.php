<div>
    <h1>Добавление нового подразделения</h1>
    <form method="post">
        <p>Введите название подразделения</p>
        <label>
            <input class="field" type="text" name="subdivision">
        </label>
        <p>Выберите тип подразделения</p>
        <label>
            <select>
                <?php foreach ($type_subdivisions as $type_subdivision){?>
                <option value="<?= $type_subdivision->id?>"><?= $type_subdivision->type_subdivision?></option>
                <?php }?>
            </select>
        </label>
        <button>Добавить</button>
        <a class="button" href="<?= app()->route->getUrl('/subdivisions')?>">Отмена</a>
    </form>
</div>