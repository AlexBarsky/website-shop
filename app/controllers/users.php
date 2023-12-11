<?php
    require SITE_ROOT . "/app/database/db.php";

    $err_msg = [];

    $users = select('users');
    
    // Обработка формы регистрации
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
        $admin = 0;
        $login = trim($_POST['login']);                                 // Получаем данные из метода POST
        $email = trim($_POST['mail']);                                  // Убираем лишние пробелы функцией trim()
        $pass_first = trim($_POST['pass']);
        $pass_confirm = trim($_POST['pass-confirm']);

        // Валидация введённых данных при регистрации
        if ($login === '' || $email === '' || $pass_first === '' || $pass_confirm === '') {     // Проверка на заполнение всех полей данными
            array_push($err_msg, "Не все поля заполнены!");
        }elseif (mb_strlen($login, 'UTF8') < 2) {                       // Проверка длины логина (имени пользователя), не менее 2 символов
            array_push($err_msg, "Слишком короткое имя пользователя!");
        }elseif ($pass_first !== $pass_confirm) {                       // Проверка подтверждение пароля
            array_push($err_msg, "Пароли не совпадают!");
        }elseif (mb_strlen($pass_confirm, 'UTF8') < 5) {                // Проверка длины пароля, не менее 5 символов
            array_push($err_msg, "Пароли должен состоять из 8  и более символов!");
        }else {
            $exist_u = select('users', ['username' => $login], true);
            $exist_e = select('users', ['email' => $email], true);

            if ($exist_u['username'] === $login) {                      // Проверка на существование пользователя в системе через имя пользователя и почту
                array_push($err_msg, "Пользователь с указанным логином уже зарегестрирован!");
            }elseif($exist_e['email'] === $email) {
                array_push($err_msg, "Пользователь с указанной почтой уже зарегестрирован!");
            }else {
                $pass = password_hash($pass_confirm, PASSWORD_DEFAULT);
    
                $params = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass
                ];

                $id = insert('users', $params);

                header('location: ' . BASE_URL . "login.php");
            }
        }
    }else {
        $login = '';
        $email = '';
    }

    // Обработка формы авторизации
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
        $email = trim($_POST['mail']);
        $pass = trim($_POST['password']);

        // Валидация введённых данных при авторизации
        if ($email === '' || $pass === '') {
            array_push($err_msg, "Не все поля заполнены!");
        }else {
            $exist = select('users', ['email' => $email], true);
            
            if (!$exist) {                                                      // Проверка на существование пользователя в системе через почту
                array_push($err_msg, "Пользователь с указанной почтой не зарегистрирован!");
            }elseif(!password_verify($pass, $exist['password'])) {             // Проверка на правильность ввода пароля
                array_push($err_msg, "Указан неверный пароль!");
            }else {
                $_SESSION['id'] = $exist['id'];                                 // Записываем данные о залогиненом пользователе в сессию
                $_SESSION['login'] = $exist['username'];
                $_SESSION['admin'] = $exist['admin'];
                
                if ($_SESSION['admin']) {
                    header('location: ' . BASE_URL . "admin/items/index.php");
                }else {
                    header('location: ' . BASE_URL);
                }
            }
        }
    }else {
        $email = '';
    }

    // Обработка формы добавления пользователя
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-create'])) {
        $admin = 0;
        $login = trim($_POST['login']);
        $email = trim($_POST['email']);
        $pass_first = trim($_POST['pass']);
        $pass_confirm = trim($_POST['pass-confirm']);

        // Валидация введённых данных
        if ($login === '' || $email === '' || $pass_first === '' || $pass_confirm === '') {
            array_push($err_msg, "Не все поля заполнены!");
        }elseif (mb_strlen($login, 'UTF8') < 2) {
            array_push($err_msg, "Слишком короткое имя пользователя!");
        }elseif ($pass_first !== $pass_confirm) {
            array_push($err_msg, "Пароли не совпадают!");
        }elseif (mb_strlen($pass_confirm, 'UTF8') < 5) {
            array_push($err_msg, "Пароль должен состоять из 8 и более символов!");
        }else {
            $exist_u = select('users', ['username' => $login], true);
            $exist_e = select('users', ['email' => $email], true);

            if ($exist_u['username'] === $login) {
                array_push($err_msg, "Пользователь с указанным логином уже зарегестрирован!");
            }elseif($exist_e['email'] === $email) {
                array_push($err_msg, "Пользователь с указанной почтой уже зарегестрирован!");
            }else {
                $pass = password_hash($pass_confirm, PASSWORD_DEFAULT);

                if(isset($_POST['admin'])) $admin = 1;

                $params = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass
                ];

                $id = insert('users', $params);

                header('location: ' . BASE_URL . "admin/users/index.php");
            }
        }
    }else {
        $login = '';
        $email = '';
    }

    // Обработка формы редактирования пользователя
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $user = select('users', ['id' => $_GET['id']], true);

        $id = $user['id'];
        $admin = $user['admin'];
        $login = $user['username'];
        $email = $user['email'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-edit'])) { 
        $id = $_POST['id'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $login = trim($_POST['login']);
        $pass_first = trim($_POST['pass']);
        $pass_confirm = trim($_POST['pass-confirm']);
        
        // Валидация введённых данных при создании
        if ($login === '') {
            array_push($err_msg, "Не все поля заполнены!");
        }elseif (mb_strlen($login, 'UTF8') < 2) {
            array_push($err_msg, "Слишком короткое имя пользователя!");
        }elseif ($pass_first !== $pass_confirm) {
            array_push($err_msg, "Пароли не совпадают!");
        }else {
            $pass = password_hash($pass_confirm, PASSWORD_DEFAULT);

            $params = [
                'admin' => $admin,
                'username' => $login,
                'password' => $pass
            ];

            $user = update('users', $id, $params);
            header('location: ' . BASE_URL . "admin/users/index.php");
        }
    }
    
    // Удаление пользователя
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete-id'])) {
        $id = $_GET['delete-id'];
        delete('users', $id);
        header('location: ' . BASE_URL . 'admin/users/index.php');
    }
?>