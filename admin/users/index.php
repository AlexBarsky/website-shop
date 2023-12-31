<?php
    include "../../path.php";
    include "../../app/controllers/users.php";
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
                        <h2>Управление пользователями</h2>
                        <div class="col-1">ID</div>
                        <div class="col-2">Логин</div>
                        <div class="col-3">E-mail</div>
                        <div class="col-3">Статус</div>
                        <div class="col-3">Управление</div>
                    </div>
                    <?php foreach ($users as $key => $user): ?>
                    <div class="row item">
                        <div class="id col-1"><?=$key + 1; ?></div>
                        <div class="title col-2"><?=$user['username']; ?></div>
                        <div class="title col-3"><?=$user['email']; ?></div>
                        <?php if($user['admin'] == 1): ?>
                            <div class="author col-2">Admin</div>
                        <?php else: ?>
                            <div class="author col-2">User</div>
                        <?php endif; ?>
                        <?php if($user['banned'] == 1): ?>
                            <div class="author col-1">Band</div>
                        <?php else: ?>
                            <div class="author col-1">NoBan</div>
                        <?php endif; ?>
                        <div class="edit col-1"><a href="edit.php?id=<?=$user['id']; ?>"><i class="fa-solid fa-pen"></i></a></div>
                        <div class="del col-1"><a href="index.php?delete-id=<?=$user['id']; ?>"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="del col-1"><a href="index.php?ban-id=<?=$user['id']; ?>"><i class="fa-solid fa-ban"></i></a></div>
                    </div>
                    <?php endforeach; ?>
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
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/393e1b9e6d.js" crossorigin="anonymous"></script>

    </body>
</html>