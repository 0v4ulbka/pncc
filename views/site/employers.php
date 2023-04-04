<?php

use Model\User;

?>
<h3><?= $message ?? ''; ?></h3>
<div>
    <div class="employers1">
        <h1 id="uniqH1">Работники предприятия</h1>
        <?php if ((new User)->is_admin()){ ?>
            <form class="search" method="post">
            <span>Список сотрудников по должности
                <select name="job_title">
                    <?php foreach ($jobs as $job_title){?>
                        <option value="<?= $job_title->id ?>"><?= $job_title->job_title ?></option>
                    <?php }?>
                </select>
            </span>
                <span>Список сотрудников по подразделению
                <select name="subdivision">
                    <?php foreach ($subs as $subdivision){?>
                        <option value="<?= $subdivision->id ?>"><?= $subdivision->subdivision ?></option>
                    <?php }?>
                </select>
            </span>
                <button class="button">Найти</button>
            </form>
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
                    <td><?= $ages[$key]?></td>
                    <td><?=$employer->address?></td>
                    <?php
                }
                ?>
                <td><?= $job_titles[$key]->job_title ?></td>
                <td><?= $subdivisions[$key]->subdivision ?></td>
                <?php if ((new User)->is_admin()){ ?>
                    <td class="buttonADD"><a class="buttonUPD" href=""><h2>&#9998;</h2></a></td>
                <?php }?>
                <td><a class="buttonDEL" href="<?= app()->route->getUrl('/delEmployer?id='.$employer->id) ?>"><h2 class="buttonDEL">&mdash;</h2></a></td>
            </tr>
        <?php }?>
    </table>
</div>