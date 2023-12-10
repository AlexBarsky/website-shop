<?php 
    include "path.php"; 
    include "app/controllers/users.php";
?>

<!doctype html>
<html lang="en">
        <?php include "app/include/head.php"; ?>
    <body>
    
        <!-- Заголовок -->
        <?php include "app/include/header.php"; ?>

        <!-- Форма регистрации -->
        <div class="container reg-form">
            <form class="row justify-content-center" action="registration.php" method="post">
                <h2 class="col-12">Форма регистрации</h2>
                <div class="mb-3 col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                    <input type="text" name="login" value="<?=$login?>" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="mail" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
                    <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword2" class="form-label">Подтврердите пароль</label>
                    <input type="password" name="pass-confirm" class="form-control" id="exampleInputPassword2" placeholder="Повторите ваш пароль...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" class="btn btn-primary" name="button-reg">Зарегистрироваться</button>
                    <a href="<?php echo BASE_URL . '/login.php'; ?>">Войти</a>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4 err">
                    <p><?=$err_msg?></p>
                </div>
            </form>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>