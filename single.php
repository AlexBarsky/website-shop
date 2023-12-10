<?php include "path.php"; ?>

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
                    <h3>Товар 1</h3>
                </div>
            </div>

            <div class="row">
                <div class="single-item-pic col-md-8">
                    <img src="assets/images\6.jpg" alt="item1" class="rounded mx-auto d-block">
                </div>
                <div class="single-item-form col-6 col-md-4">
                    <h4>
                        999
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

            <div class="row">
                <div class="single-item-desc col">
                    <h5>
                        ТОВАР 1
                    </h5>
                    <p class="articul">
                        артикул: id
                    </p>
                    <p>
                        «Изумрудный Серенгети» - посвящение бесконечным африканским равнинам, которые поражают воображение своей изумрудной красотой.
                        Звенящий аромат, в котором вступительным аккордом выступают ноты свежескошенной травы. 
                        Сердце аромата будоражит кристальной свежестью зеленых нот, которая подчеркнута чистотой мускусного шлейфа.
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
            </div>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>