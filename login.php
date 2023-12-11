<?php 
    include "path.php"; 
    include "app/controllers/users.php";
    include "app/controllers/topics.php";
?>

<!doctype html>
<html lang="en">
        <?php include "app/include/head.php"; ?>
    <body>
    
        <!-- Заголовок -->
        <?php include "app/include/header.php"; ?>

        <!-- Форма авторизации -->
        <div class="container reg-form">
            <form class="row justify-content-center" action="login.php" method="post">
                <h2 class="col-12">Войти</h2>
                <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="mail" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш парол...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" class="btn btn-primary" name="button-log">Войти</button>
                    <a href="<?php echo BASE_URL . '/registration.php'; ?>">Зарегистрироваться</a>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4 err">
                    <?php include "app/helps/error-info.php"; ?>
                </div>
            </form>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>