<div>
    <h1>Добавление должности</h1>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Введите название должности</p>
        <h3><?= $message['job_title'][0] ?? ''?></h3>
        <input class="field" type="text" name="job_title">
        <button>Добавить</button>
        <a class="button" href="<?= app()->route->getUrl('/job_titles')?>">Отмена</a>
    </form>
</div>