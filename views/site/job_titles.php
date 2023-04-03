<h1>Должности</h1>
<table>
    <tr>
        <th>Название должности</th>
        <th><a href="<?= app()->route->getUrl('/addjob')?>" class="buttonADD">Добавить</a></th>
    </tr>
    <?php foreach ($job_titles as $job_title){ ?>
        <tr>
            <td><?= $job_title->job_title?></td>
            <td>-</td>
        </tr>
    <?php }?>
</table>