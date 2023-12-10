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
        <link rel="stylesheet" href="assets/css/style.css">

        <title>Shop</title>
    </head>
    <body>
    
        <!-- Заголовок -->
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
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="col-6">
                        <h1>
                            <a href="#">My shop</a>
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
                                    <li><a href="#">Панель админа</a></li>
                                    <li><a href="#">Выход</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Форма авторизации -->
        <div class="container reg-form">
            <form class="row justify-content-center" action="login.html" method="post">
                <h2 class="col-12">Войти</h2>
                <div class="mb-3 col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш парол...">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <a href="registration.php">Зарегистрироваться</a>
                </div>
            </form>
        </div>

        <!-- Нижний колонтитул -->
        <div class="footer container-fluid">
            <div class="content container">
                <div class="row">
                    <div class="section about col-md-4 col-12">
                        <h3 class="logo-text">Мой магазин</h3>
                        <p>
                            <a href="#">Политика конфиденциальности</a>
                        </p>
                        <div class="contact">
                            <span><i class="fa-solid fa-phone"> &nbsp; 123-456-789</i></span>
                            <span><i class="fa-solid fa-envelope"> &nbsp; info@shop.ru</i></span>
                        </div>
                        <div class="socials">
                            <a href="#"><i class="fa-brands fa-telegram"></i></a>
                            <a href="#"><i class="fa-brands fa-vk"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="section links col-md-4 col-12">
                        <h3>Меню</h3>
                        <ul>
                            <li><a href="#">События</a></li>
                            <li><a href="#">Команда</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Что-то ещё</a></li>
                        </ul>
                    </div>

                    <div class="section contact-form col-md-4 col-12">
                        <h3>Скидка 10%</h3>
                        <form action="index.html" method="post">
                            <input type="text" name="nm" class="text-input contact-input" placeholder="Your name..." required>
                            <input type="tel" name="phone" class="text-input contact-input"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="+7">
                            <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..." required>
                            <button type="submit" class="btn btn-big contact-btn">
                                Получить скидку
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="bottom">
                    &copy; myshop.com | Designed by Alex
                </div>
            </div>
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/393e1b9e6d.js" crossorigin="anonymous"></script>

    </body>
</html>