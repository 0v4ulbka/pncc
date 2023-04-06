<div>
    <h1>Добавление сотрудника в базу</h1>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Введите фамилию сотрудника</p>
        <label>
            <h3><?= $message['surname'][0] ?? ''?></h3>
            <input class="field" type="text" name="surname" value="<?= $employer-> surname?>">
        </label>
        <p>Введите имя сотрудника</p>
        <label>
            <h3><?= $message['name'][0] ?? ''?></h3>
            <input class="field" type="text" name="name" value="<?= $employer-> name?>">
        </label>
        <p>Введите отчество сотрудника</p>
        <label>
            <h3><?= $message['patronymic'][0] ?? ''?></h3>
            <input class="field" type="text" name="patronymic" value="<?= $employer-> patronymic?>">
        </label>
        <p>Введите адрес прописки сотрудника</p>
        <label>
            <h3><?= $message['address'][0] ?? ''?></h3>
            <input class="field" type="text" name="address" value="<?= $employer-> address?>">
        </label>
        <p>Выберите пол сотрудника</p>
        <label >
            <h3><?= $message['gender'][0] ?? ''?></h3>
            <input type="radio" name="gender" value="мужской">мужской
            <input type="radio" name="gender" value="женский">женский
        </label>
        <p>Выберите дату рождения сотрудника</p>
        <label>
            <h3><?= $message['birthday'][0] ?? ''?></h3>
            <input class="field" type="date" name="birthday" value="<?= $employer-> birthday?>">
        </label>
        <p>Выберите должность сотрудника</p>
        <label>
            <h3><?= $message['job_title'][0] ?? ''?></h3>
            <select name="job_title">
                <?php foreach ($job_titles as $job_title) {?>
                <option value="<?=$job_title->id?>"><?= $job_title->job_title?></option>
                <?php }?>
            </select>
        </label>
        <p>Выберите подразделение сотрудника</p>
        <label>
            <h3><?= $message['subdivision'][0] ?? ''?></h3>
            <select name="subdivision">
                <?php foreach ($subdivisions as $subdivision){ ?>
                <option value="<?= $subdivision->id?>"><?= $subdivision->subdivision ?></option>
                <?php }?>
            </select>
        </label>
        <button>Изменить</button>
        <a class="button" href="<?= app()->route->getUrl('/employers') ?>">Отмена</a>
    </form>
</div>
