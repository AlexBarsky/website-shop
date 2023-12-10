<header class="container-fluid">
    <div class="container">
        <div class="row">
            <nav class="col">
                <a class="btn btn-primary" role="button" data-bs-toggle="offcanvas" href="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-bars"></i>
                </a>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Разделы</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                    <div class="offcanvas-body">
                        <ul class="sections">
                            <li><a href="#">Категории</a></li>
                            <li><a href="#">Скидки</a></li>
                            <li><a href="#">О нас</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-6">
                <h1>
                    <a href="<?php echo BASE_URL; ?>">My shop</a>
                </h1>
            </div>
            <div class="col">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . '/login.php'; ?>">Панель админа</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>