<?php
    include "app/database/db.php";

    $err_msg = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
            if ($exist_u['username'] === $login) {                           // Проверка на существование пользователя в системе через имя пользователя и почту
                $err_msg = "Пользователь с указанным логином уже зарегестрирован!";
            }elseif($exist_e['email'] === $email) {
                $err_msg = "Пользователь с указанной почтой уже зарегестрирован!";
            }else {
                $pass = password_hash($pass_confirm, PASSWORD_DEFAULT);
    
                $post = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass
                ];

                $id = insert('users', $post);
                $err_msg = "Пользователь " . "<b>" . $login . "<b>" . " успешно зарегестрирован!";
            }
        }
    }else {
        echo "GET";
        $login = '';
        $email = '';
    }
?>