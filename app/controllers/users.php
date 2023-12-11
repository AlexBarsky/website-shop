<?php
    include "app/database/db.php";

    $err_msg = '';

    // Обработка формы регистрации
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
        $admin = 0;
        $login = trim($_POST['login']);                                 // Получаем данные из метода POST
        $email = trim($_POST['mail']);                                  // Убираем лишние пробелы функцией trim()
        $pass_first = trim($_POST['pass']);
        $pass_confirm = trim($_POST['pass-confirm']);

        // Валидация введённых данных при регистрации
        if ($login === '' || $email === '' || $pass_first === '' || $pass_confirm === '') {     // Проверка на заполнение всех полей данными
            $err_msg = "Не все поля заполнены!";
        }elseif (mb_strlen($login, 'UTF8') < 2) {                       // Проверка длины логина (имени пользователя), не менее 2 символов
            $err_msg = "Слишком короткое имя пользователя!";
        }elseif ($pass_first !== $pass_confirm) {                       // Проверка подтверждение пароля
            $err_msg = "Пароли не совпадают!";
        }elseif (mb_strlen($pass_confirm, 'UTF8') < 5) {                // Проверка длины пароля, не менее 5 символов
            $err_msg = "Пароли должен состоять из 8  и более символов!";
        }else {
            $exist_u = select('users', ['username' => $login], true);
            $exist_e = select('users', ['email' => $email], true);

            if ($exist_u['username'] === $login) {                      // Проверка на существование пользователя в системе через имя пользователя и почту
                $err_msg = "Пользователь с указанным логином уже зарегестрирован!";
            }elseif($exist_e['email'] === $email) {
                $err_msg = "Пользователь с указанной почтой уже зарегестрирован!";
            }else {
                $pass = password_hash($pass_confirm, PASSWORD_DEFAULT);
    
                $params = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass
                ];

                $id = insert('users', $params);
                $user = select('users', ['id' => $id], true);

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
            $err_msg = "Не все поля заполнены!";
        }else {
            $exist = select('users', ['email' => $email], true);
            
            if (!$exist) {                                                      // Проверка на существование пользователя в системе через почту
                $err_msg = "Пользователь с указанной почтой не зарегистрирован!";
            }elseif(!password_verify($pass, $exist['password'])) {             // Проверка на правильность ввода пароля
                $err_msg = "Указан неверный пароль!";
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
?>