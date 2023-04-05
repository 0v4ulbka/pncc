<div>
    <h1>Добавление сотрудника в базу</h1>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Введите фамилию сотрудника</p>
        <label>
            <input class="field" type="text" name="surname">
        </label>
        <p>Введите имя сотрудника</p>
        <label>
            <input class="field" type="text" name="name">
        </label>
        <p>Введите отчество сотрудника</p>
        <label>
            <input class="field" type="text" name="patronymic">
        </label>
        <p>Введите адрес прописки сотрудника</p>
        <label>
            <input class="field" type="text" name="address">
        </label>
        <p>Выберите пол сотрудника</p>
        <label>
            <input type="checkbox" name="gender" value="мужской">мужской
            <input type="checkbox" name="gender" value="женский">женский
        </label>
        <p>Выберите дату рождения сотрудника</p>
        <label>
            <input class="field" type="date" name="birthday">
        </label>
        <p>Выберите должность сотрудника</p>
        <label>
            <select name="job_title">
                <?php foreach ($job_titles as $job_title) {?>
                <option value="<?=$job_title->id?>"><?= $job_title->job_title?></option>
                <?php }?>
            </select>
        </label>
        <p>Выберите подразделение сотрудника</p>
        <label>
            <select name="subdivision">
                <?php foreach ($subdivisions as $subdivision){ ?>
                <option value="<?= $subdivision->id ?>"><?= $subdivision->subdivision ?></option>
                <?php }?>
            </select>
        </label>
        <a class="button" href="<?= app()->route->getUrl('/employers') ?>">Отмена</a>
        <input class="button" type="submit" value="Добвить" name="add">
    </form>
</div>
