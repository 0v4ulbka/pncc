<h1>Вы уверены что хотите удалить работника из системы?</h1>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>
        <button>Да</button>
    </label>
    <a class="button" href="<?= app()->route->getUrl('/employers') ?>">Нет</a>
</form>