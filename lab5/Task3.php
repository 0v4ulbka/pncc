<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 3</title>
    <meta charset='utf-8'>
</head>
<body>
<p>Создайте скрипт, который читал бы содержимое текстового файла list.txt
    и выводил бы его содержимое в НТМL-форме со списком флажков перед каждой из строк.
    После выбора флажков и нажатия на кнопку submit содержимое файла list.txt необходимо переписать таким образом,
    чтобы выбранные строки были исключены.</p>
<form method="POST">
    <?php
    $file = fopen("list.txt", "r") or die("Unable to open file!");
    while(!feof($file)){
        $line = fgets($file);
        echo "<input type='checkbox' name='list[]' value='" . $line . "'>" . $line . "
";
    }
    fclose($file);
    ?>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $selectedList = $_POST['list'];
    $file = fopen("list.txt", "r") or die("Unable to open file!");
    $newFile = fopen("newList.txt", "w") or die("Unable to create file!");

    while(!feof($file)){
        $line = fgets($file);
        if(!in_array($line, $selectedList)){
            fwrite($newFile, $line);
        }
    }

    fclose($file);
    fclose($newFile);

    rename("newList.txt", "list.txt");
    echo "<p>List updated successfully!<p>";
}
?>
</body>
</html>