<?php header('Content-Type: text/html; charset= utf-8');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/avtorisatsia.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <main>
    <form action="../functions/session.php" method="post">
      <div class="circle"></div>
      <div class="register-form-container">
        <h1 class="form-title">Авторизация</h1>
        <div class="form-fields">
          <div class="form-field">
            <input type="email" placeholder="Почта" name="email" />
          </div>
          <div class="form-field">
            <input type="password" placeholder="Пароль" name="password" />
          </div>
        </div>
        <div class="form-buttons">
          <button class="button" type="submit" name="submit">Войти</button>
          <div class="divider">или</div>
          <a href="#" class="button button-google">Google</a>
        </div>
        <div class="SozdanieAkkaunta">
          <p class="NetAkkaunta">Нет аккаунта?</p>
          <a href="register.php" class="RegistrLink">Зарегистрироваться</a>
        </div>
      </div>
    </form>
    </main>
  </body>
</html>