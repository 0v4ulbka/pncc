<h2>Обновление пользователя</h2>
<form method="post" enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Введите фамилию пользователя</p>
    <label>
        <h3><?= $message['surname'][0] ?? ''?></h3>
        <input class="field" type="text" name="surname" value="<?= $user->surname?>">
    </label>
    <p>Введите имя пользователя</p>
    <label>
        <h3><?= $message['name'][0] ?? ''?></h3>
        <input class="field" type="text" name="name" value="<?= $user->name ?>">
    </label>
    <p>Введите отчество пользователя</p>
    <label>
        <h3><?= $message['patronymic'][0] ?? ''?></h3>
        <input class="field" type="text" name="patronymic" value="<?= $user->patronymic ?>">
    </label>
    <p>Введите номер телефона пользователя</p>
    <label>
        <h3><?= $message['phone'][0] ?? ''?></h3>
        <input class="field" type="text" name="phone" placeholder="+7 (000) 000 00-00" value="<?= $user->phone ?>">
    </label>
    <p>Выберите должность пользователя</p>
    <label>
        <h3><?= $message['job_title'][0] ?? ''?></h3>
        <input type="radio" name="job_title" value="admin">Админ
        <input type="radio" name="job_title" value="employer">Работник
    </label>
    <p>Введите email пользователя</p>
    <label>
        <h3><?= $message['email'][0] ?? ''?></h3>
        <input class="field" type="text" name="email" value="<?= $user->email ?>">
    </label>
    <p>Введите пароль пользователя</p>
    <label>
        <h3><?= $message['password'][0] ?? ''?></h3>
        <input class="field" type="password" name="password">
    </label>
    <button>Изменить</button>
    <a class="button" href="<?= app()->route->getUrl('/users') ?>">Отмена</a>
</form>
