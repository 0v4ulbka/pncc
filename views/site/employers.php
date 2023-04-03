<?php

use Model\User;
use Model\Employees;

?>
<h3><?= $message ?? ''; ?></h3>
<div>
    <div class="employers1">
        <h1 id="uniqH1">Работники предприятия</h1>
        <?php if ((new User)->is_admin()){ ?>
        <div class="search">
            <span>Список сотрудников по должности
                <select>
                    <?php foreach ($employers as $employer){?>
                    <option value="1"><?= $employer->job_title ?></option>
                    <?php }?>
                </select>
            </span>
            <span>Список сотрудников по подразделению
                <select>
                    <?php foreach ($employers as $employer){?>
                    <option value="1"><?= $employer->subdivision ?></option>
                    <?php }?>
                </select>
            </span>
            <input class="button" type="submit" value="Найти">
        </div>
            <?php
        }
        ?>
    </div>
        <table class="title">
            <tr>
                <th>ФИО работника</th>
                <th>Пол</th>
                <?php
                if ((new User)->is_admin()){
                ?>
                <th>Дата рождения</th>
                <th>Возраст</th>
                <th>Адрес прописки</th>
                <?php
                }
                ?>
                <th>Должность</th>
                <th>Подразделение</th>
                <th colspan="2"><a class="buttonADD" href="<?= app()->route->getUrl('/addEmployer') ?>">Добавить</a></th>
            </tr>
            <?php foreach ($employers as $key=>$employer){ ?>
            <tr>
                <td><?= $employer->surname ?> <?= $employer->name ?> <?= $employer->patronymic ?></td>
                <td><?= $employer->gender?></td>
                <?php
                if ((new User)->is_admin()){
                    ?>
                    <td><?=$employer->birthday?></td>
                    <td>Возраст</td>
                    <td><?=$employer->address?></td>
                    <?php
                }
                ?>
                <td><?= $job_titles[$key]->job_title ?></td>
                <td><?= $subdivisions[$key]->subdivision ?></td>
                <?php if ((new User)->is_admin()){ ?>
                <td class="buttonADD"><a class="buttonUPD" href=""><h2>&#9998;</h2></a></td>
                <?php }?>
                <td><a class="buttonDEL" href=""><h2 class="buttonDEL">&mdash;</h2></a></td>
            </tr>
            <?php }?>
        </table>
</div>
</body>
</html>