<?php 
    include "path.php";
    include "app/controllers/topics.php";
?>

<!doctype html>
<html lang="en">
        <?php include "app/include/head.php"; ?>
    <body>
    
        <!-- Заголовок -->
        <?php include "app/include/header.php"; ?>
        
        <!-- Блок карусели (Свежие новости) -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
                <!-- <div class="carousel-item active" data-bs-interval="4000">
                    <img src="assets/images\1.jpg" class="d-block w-100" alt="Новость №1">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5>
                            <a href="https://seahava.ru/tpost/8ev4yc32i1-mi-poluchili-nagradu-tovar-goda-2023" target="_blank">Подробнее <i class="fa-solid fa-arrow-right"></i></a>
                        </h5>
                    </div>
                </div> -->
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="assets/images\4.jpg" class="d-block w-100" alt="Новость №2">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5>
                            <a href="https://seahava.ru/tpost/h02far2j11-rastyazhki-pochemu-oni-poyavlyayutsya-i" target="_blank">Подробнее <i class="fa-solid fa-arrow-right"></i></a>
                        </h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="assets/images\9.jpg" class="d-block w-100" alt="Новость №3">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5>
                            <a href="https://seahava.ru/tpost/nuptfjbfl1-patchi-dlya-glaz-i-ih-vidi" target="_blank">Подробнее <i class="fa-solid fa-arrow-right"></i></a>    
                        </h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Основной блок -->
        <div class="container text-center">
            <div class="content-title row">
                <div class="col-md-6 offset-md-3">
                    <h2>Новинки</h2>
                </div>
            </div>
            <div class="content row row-cols-4">
                <div class="item-content col">
                    <a href="#"><img src="assets/images\6.jpg" alt="item1" class="img-thumbnail"></a>
                    <h3>
                        <a href="single.php">Товар 1</a>
                    </h3>
                    <p class="text-desc">
                        Цена.
                    </p>
                </div>
                <div class="item-content col">
                    <a href="#"><img src="assets/images\6.jpg" alt="item2" class="img-thumbnail"></a>
                    <h3>
                        <a href="single.php">Товар 2</a>
                    </h3>
                    <p class="text-desc">
                        Цена.
                    </p>
                </div>
                <div class="item-content col">
                    <a href="#"><img src="assets/images\6.jpg" alt="item3" class="img-thumbnail"></a>
                    <h3>
                        <a href="single.php">Товар 3</a>
                    </h3>
                    <p class="text-desc">
                        Цена.
                    </p>
                </div>
                <div class="item-content col">
                    <a href="#"><img src="assets/images\6.jpg" alt="item4" class="img-thumbnail"></a>
                    <h3>
                        <a href="single.php">Товар 4</a>
                    </h3>
                    <p class="text-desc">
                        Цена.
                    </p>
                </div>
            </div>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>