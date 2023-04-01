<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SFormADD.css">
    <title>login</title>
</head>
<body>
<?php
if(!empty($_POST)){
    header('Location: '.'employers.php');
}
?>
<div>
    <p>Добавление сотрудника в базу</p>
    <form method="post">
        <p>Введите фамилию сотрудника</p>
        <label>
            <input type="text" name="surname">
        </label>
        <p>Введите имя сотрудника</p>
        <label>
            <input type="text" name="name">
        </label>
        <p>Введите отчество сотрудника</p>
        <label>
            <input type="text" name="patronymic	">
        </label>
        <p>Введите адрес прописки сотрудника</p>
        <label>
            <input type="text" name="address">
        </label>
        <p>Выберите пол сотрудника</p>
        <label>
            <select name="gender">
                <option></option>
            </select>
        </label>
        <p>Выберите дату рождения сотрудника</p>
        <label>
            <input type="date" name="birthday">
        </label>
        <p>Выберите должность сотрудника</p>
        <label>
            <select name="job_title">
                <option></option>
            </select>
        </label>
        <p>Выберите подразделение сотрудника</p>
        <label>
            <select name="subdivision">
                <option></option>
            </select>
        </label>
        <input class="button" type="submit" value="Отмена" name="cancel">
        <input class="button" type="submit" value="Добвить" name="add">
    </form>
</div>
</body>
</html>