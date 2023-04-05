<h1>Вы уверены что хотите удалить эту должность из системы?</h1>
<h3>Предупреждение!!! Если вы хотите удалить подразделение из системы, важно, чтобы никто не состоял в данном подразделении</h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>
        <button>Да</button>
    </label>
    <a class="button" href="<?= app()->route->getUrl('/subdivisions') ?>">Нет</a>
</form>