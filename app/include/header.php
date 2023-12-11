<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" role="button" data-bs-toggle="offcanvas" href="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-bars"></i>
                </a>

                <nav class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Разделы</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="sections">
                            <li>
                                <a href="catalog.php">Категории<i class="fa-solid fa-chevron-right"></i></a>
                                <ul class="topics">
                                    <?php foreach ($topics as $key => $topic): ?>
                                    <li>
                                        <a href="#"><?=$topic['title']; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="#">О нас</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
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
                        <?php if(isset($_SESSION['id'])): ?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if($_SESSION['admin']): ?>
                                    <li><a href="<?php echo BASE_URL . 'admin/items/index.php'; ?>">Панель админа</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . 'logout.php'; ?>">Выход</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . 'login.php'; ?>">
                                <i class="fa fa-user"></i>
                                Вход
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . 'registration.php'; ?>">Регистрация</a></li>
                            </ul>
                        <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>