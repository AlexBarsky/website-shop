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
                <form action="<?php echo BASE_URL . '/registration.php'; ?>" method="post">
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