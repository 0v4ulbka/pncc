<h1>Вы уверены что хотите удалить эту должность из системы?</h1>
<h3>Предупреждение!!! Если вы хотите удалить должность из системы, важно, чтобы никто не занимал эту должность</h3>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>
        <button>Да</button>
    </label>
    <a class="button" href="<?= app()->route->getUrl('/job_titles') ?>">Нет</a>
</form>