<div>
    <h1>Пользователи системы</h1>
    <table class="title">
        <tr>
            <th>ФИО пользователя</th>
            <th>Номер телефона</th>
            <th>Должность</th>
            <th>Email</th>
            <th>Пароль</th>
            <th colspan="2"><a class="buttonADD" href="<?= app()->route->getUrl('/signup'); ?>">Добавить</a></th>
        </tr>
        <?php foreach ($users as $user){ ?>
        <tr>
            <td><?= $user->surname?> <?= $user->name?> <?= $user->patronymic?></td>
            <td><?= $user->phone?></td>
            <td><?= $user->job_title?></td>
            <td><?= $user->email?></td>
            <td><?= $user->password?></td>
            <td class="buttonADD"><a class="buttonUPD" href="<?= app()->route->getUrl('/upduser?id='.$user->id); ?>"><h2>&#9998;</h2></a></td>
            <td><a class="buttonDEL" href="<?= app()->route->getUrl('/deluser?id='.$user->id); ?>"><h2 class="buttonDEL">&mdash;</h2></a></td>
        </tr>
        <?php }?>
    </table>
</div>