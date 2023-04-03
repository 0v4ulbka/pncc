<div>
    <h1>Добавление должности</h1>
    <form method="post">
        <p>Введите название должности</p>
        <input class="field" type="text" name="job_title">
        <button>Добавить</button>
        <a class="button" href="<?= app()->route->getUrl('/job_titles')?>">Отмена</a>
    </form>
</div>