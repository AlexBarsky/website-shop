<?php 
    include "path.php";
    include "app/controllers/topics.php";

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $item = select('items', ['id' => $_GET['id']], true);

        $id = $item['id'];
        $title = $item['title'];
        $description = $item['description'];
        $price = $item['price'];
    }
?>

<!doctype html>
<html lang="en">
        <?php include "app/include/head.php"; ?>
    <body>
    
        <!-- Заголовок -->
        <?php include "app/include/header.php"; ?>

        <!-- Основной блок -->
        <div class="container">
            <div class="text-center single-item-title row">
                <div class="col-md-6 offset-md-3">
                    <h3><?=$item['title']; ?></h3>
                </div>
            </div>

            <div class="row">
                <div class="single-item-pic col-md-8">
                    <img src="<?=BASE_URL . 'assets/images/items/' . $item['img']; ?>" alt="item1" class="rounded mx-auto d-block">
                </div>
                <div class="single-item-form col-6 col-md-4">
                    <h4>
                        <?=$price; ?>
                        <i class="fa-solid fa-ruble-sign"></i>
                    </h4>
                    <form action="#" method="post">
                        <button type="submit" class="btn btn-big add-to-bucket-btn">
                            Добавить в корзину
                        </button>
                        <button type="submit" class="btn btn-big add-to-fav-btn">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row bottom-content">
                <div class="single-item-desc col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Описание</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Применение</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Состав</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Доп. информация</button>
                            </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <h5>
                            <?=$item['title']; ?>
                        </h5>
                        <p class="articul">
                            артикул: <?=$item['id']; ?>
                        </p>
                        <p>
                            <?=$item['description']; ?>
                        </p>
                        <p class="char-title">
                            подробные характеристики:
                        </p>
                        <p class="characteristics">
                            тип продукта - диффузоры</br>
                            для кого - унисекс</br>
                            группа ароматов - травяные</br>
                            верхние ноты - свежескошенная трава</br>
                            средние ноты - зеленые ноты, апельсин, помело</br>
                            базовые ноты - лайм, белый мускус
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>