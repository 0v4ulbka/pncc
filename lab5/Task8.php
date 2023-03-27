<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab5 > Задание 8</title>
    <meta charset='utf-8'>
</head>
<body>
<p>8. Создайте форму регистрации, которая бы сохраняла имя, фамилию и электронный адрес пользователя в файл.
    Для каждого пользователя в файле должна отводиться одна строка.
    Не допускается появление дублирующихся записей. Все поля формы обязательны для заполнения и
    должны быть корректны. "Имя и фамилия должны быть набраны на русском языке и содержать не менее
    двух и не более 20 символов". "В случае некорректного заполнения элементов управления формы" или
    если такой пользователь уже зарегистрирован, необходимо выводить предупреждающие сообщения;</p>
<?php
$errors = [];
if (!empty($_POST)){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $enter = strpos(file_get_contents('users.txt'), $email);
    if (strlen($_POST['name']) < 2 && !empty($_POST['name'])){
        $errors[] = 'Длина имени должна быть не меньше 2 символов';
    }
    if (strlen($_POST['name']) > 20){
        $errors[] = 'Длина имени должна быть не больше 20 символов';
    }
    if (strlen($_POST['surname']) < 2 && !empty($_POST['surname'])){
        $errors[] = "Длина фамилии должна быть не меньше 2 символов";
    }
    if (strlen($_POST['surname']) > 20){
        $errors[] = "Длина фамилии должна быть не больше 20 символов";
    }
    if (empty($_POST['name'])){
        $errors[] = 'Поле имя должно быть заполнено';
    }
    if (empty($_POST['surname'])){
        $errors[] = 'Поле фамилия должно быть заполнено';
    }
    if (empty($_POST['email'])){
        $errors[] = 'Поле email должно быть заполнено';
    }
    if (!preg_match("/[А-Яа-я]+/", $_POST['name']) && !empty($_POST['name'])){
        $errors[] = 'Имя должно быть записано кириллицей';
    }
    if (!preg_match("/[А-Яа-я]+/", $_POST['surname']) && !empty($_POST['surname'])){
        $errors[] = 'Фамилия должна быть записана кириллицей';
    }
    if($enter === false) {
        if (empty($errors)) {
            file_put_contents('users.txt', "$name $surname $email \n", FILE_APPEND);
            echo "Пользователь успешно добавлен";
        }
    }else{$errors[] = 'Такой пользователь уже существует';}
}
?>
<form method="post">
    <p>Введите Имя</p>
    <label>
        <input type="text" name="name" value="<?php if (!empty($_POST['name'])){echo $name;} ?>">
    </label>
    <p>Введите Фамилию</p>
    <label>
        <input type="text" name="surname" value="<?php if (!empty($_POST['surname'])){echo $surname;} ?>">
    </label>
    <p>Введите email</p>
    <label>
        <input type="text" name="email" value="<?php if (!empty($_POST['email'])){echo $email;} ?>">
    </label>
    <input type="submit">
</form>
<?php
for ($i = 0; $i < count($errors); $i++){
    echo "<p>$errors[$i]</p>";
}
?>
</body>
</html>