<form method="post" class="sign-form">
    <h1>Аутентификация</h1>
        <input type="text" class="text-input" name="login" maxlength="32" minlength="4" pattern="^[A-Za-z0-9]{2,32}$" required placeholder="Логин"><br>
        <?php if (isset($data)): ?>
            <span class="error"><?= $data?></span>
        <?php endif; ?>
        <input type="password" class="text-input" name="password" maxlength="32" minlength="4" required placeholder="Пароль"><br>
        <button type="submit" name="submit">Отправить</button>
</form>