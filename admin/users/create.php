<?php
    session_start();
    include "../../path.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <!-- Google Font (Comfortaa) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Shop</title>
    </head>
    <body>
    
        <!-- Заголовок -->
        <?php include "../../app/include/header-admin.php"; ?>

        <div class="container">
            <div class="row">
                <?php include "../../app/include/sidebar-admin.php"; ?>
                <div class="items col-9">
                    <div class="button row">
                        <a href="<?php echo BASE_URL . "admin/users/create.php"; ?>" class="col-2 btn btn-primary">Создать</a>
                        <span class="col-1"></span>
                        <a href="<?php echo BASE_URL . "admin/users/index.php"; ?>" class="col-3 btn btn-primary">Править</a>
                    </div>
                    <div class="row table-title">
                        <h2>Добавление пользователя</h2>
                    </div>
                    <div class="row add-item">
                        <form action="create.php" method="post">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                                <input type="text" name="login" value="<?=$login?>" class="form-control" id="formGroupExampleInput" placeholder="Введите логин...">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="mail" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email...">
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль...">
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword2" class="form-label">Подтврердите пароль</label>
                                <input type="password" name="pass-confirm" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль...">
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>User</option>
                                <option value="1">Admin</option>
                            </select>
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижний колонтитул -->
        <div class="footer container-fluid">
            <div class="content container">
                <div class="bottom">
                    &copy; myshop.com | Designed by Alex
                </div>
            </div>
        </div>
    </body>
</html>