<h1>Должности</h1>
<table>
    <tr>
        <th>Название должности</th>
        <th><a href="<?= app()->route->getUrl('/addjob')?>" class="buttonADD">Добавить</a></th>
    </tr>
    <?php foreach ($job_titles as $job_title){ ?>
        <tr>
            <td><?= $job_title->job_title?></td>
            <th><a class="buttonDEL" href="<?= app()->route->getUrl('/deljob?id=').$job_title->id ?>">-</a></th>
        </tr>
    <?php }?>
</table>