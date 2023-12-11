<?php
    include "../../path.php";
    include "../../app/controllers/items.php";
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
                        <a href="<?php echo BASE_URL . "admin/items/create.php"; ?>" class="col-2 btn btn-primary">Создать</a>
                        <span class="col-1"></span>
                        <a href="<?php echo BASE_URL . "admin/items/index.php"; ?>" class="col-3 btn btn-primary">Править</a>
                    </div>
                    <div class="row table-title">
                        <h2>Добавление товара</h2>
                    </div>
                    <div class="row add-item">
                        <form action="create.php" method="post">
                            <div></div>
                            <div class="col">
                                <input value="<?=$title; ?>" name="title" type="text" class="form-control" placeholder="Название товара" aria-label="Название товара">
                            </div>
                            <div class="col">
                                <label for="description" class="form-label">Описание товара</label>
                                <textarea name="description" class="form-control" id="description" rows="6"><?=$description; ?></textarea>
                            </div>
                            <div class="input-group col">
                                <input name="img" type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                            <select name="topic_id" class="form-select" aria-label="Default select example">
                                <option selected>--Выбрать категорию--</option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <option value="<?=$topic['id']; ?>"><?=$topic['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="col">
                                <input value="<?=$amount; ?>" name="amount" type="number" class="form-control" placeholder="Количество товара" aria-label="Количество товара">
                            </div>
                            <div class="col">
                                <input value="<?=$price; ?>" name="price" type="text" class="form-control" placeholder="Цена за штуку" aria-label="Цена товара">
                            </div>
                            <div class="col">
                                <button name="button-create" class="btn btn-primary" type="submit">Добавить</button>
                            </div>
                            <div class="col err">
                                <?php include "../../app/helps/error-info.php"; ?>
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