<div>
    <h1>Список подразделений</h1>
    <table>
        <tr>
            <th>Название подразделения</th>
            <th>Тип подразделения</th>
            <th><a href="<?= app()->route->getUrl('/addsub')?>" class="buttonADD">Добавить</a></th>
        </tr>
        <?php foreach ($subdivisions as $key=>$subdivision){ ?>
            <tr>
                <td><?= $subdivision->subdivision ?></td>
                <td><?= $types_subdivisions[$key]->type_subdivision ?></td>
                <th><a class="buttonDEL" href="<?= app()->route->getUrl('/delsub?id=').$subdivision->id ?>">&mdash;</a></th>
            </tr>
            <?php }?>
        </table>
</div>