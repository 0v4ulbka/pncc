<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <div class="formLog">
        <p class="formText">Вы посещаете страницу как гость, вам нейобходимо зайти в свою учетную запись</p>
        <form method="post">
            <p>Ваш email</p>
            <label>
                <input class="field" type="text" name="email">
            </label>
            <p>Ваш пароль</p>
            <label>
                <input class="field" type="password" name="password">
            </label>
            <button>Войти</button>
        </form>
    </div>
<?php endif;