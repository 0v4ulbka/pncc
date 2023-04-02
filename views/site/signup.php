<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <p>Введите фамилию пользователя</p>
    <label>
        <input class="field" type="text" name="surname">
    </label>
    <p>Введите имя пользователя</p>
    <label>
        <input class="field" type="text" name="name">
    </label>
    <p>Введите отчество пользователя</p>
    <label>
        <input class="field" type="text" name="patronymic">
    </label>
    <p>Введите номер телефона пользователя</p>
    <label>
        <input class="field" type="text" name="phone" placeholder="+7 (000) 000 00-00">
    </label>
    <p>Выберите должность пользователя</p>
    <label>
        <input type="checkbox" name="job_title" value="admin">Админ
        <input type="checkbox" name="job_title" value="employer">Работник
    </label>
    <p>Введите email пользователя</p>
    <label>
        <input class="field" type="text" name="email">
    </label>
    <p>Введите пароль пользователя</p>
    <label>
        <input class="field" type="password" name="password">
    </label>
    <button>Зарегистрироваться</button>
</form>
