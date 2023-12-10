<?php include "path.php"; ?>

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
                    <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин..." required>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш парол..." required>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" class="btn btn-primary" name="button-auth">Войти</button>
                    <a href="<?php echo BASE_URL . '/registration.php'; ?>">Зарегистрироваться</a>
                </div>
            </form>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>