<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h1>
                    <a href="<?php echo BASE_URL; ?>">My shop</a>
                </h1>
            </div>
            <div class="col">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'logout.php'; ?>">
                            Выход
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>