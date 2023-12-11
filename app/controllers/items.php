<?php
    require SITE_ROOT . "/app/database/db.php";
    
    if (!$_SESSION) {
        header('location: ' . BASE_URL . 'login.php');
    }

    $err_msg = [];
    $id = '';
    $title = '';
    $description = '';
    $img = '';
    $topic_id = '';
    $amount = '';
    $price = '';
    $topics = select('topics');
    $items = select('items');

    // Обработка формы создания товара
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-create'])) {

        if (!empty($_FILES['img']['name'])) {
            $img_name = time() . "_" . $_FILES['img']['name'];
            $file_tmp_name = $_FILES['img']['type'];
            $file_type = $_FILES['img']['tmp_name'];
            $destination = ROOT_PATH . "\assets\images\items\\" . $img_name;
            
            if (strpos($file_type, 'image') === false) {
                array_push($err_msg, "Выбранный файл не является изображением!");
            }else {

                $result = move_uploaded_file($file_tmp_name, $destination);
    
                if ($result) {
                    $_POST['img'] = $img_name;
                }else {
                    array_push($err_msg, "Ошибка загрузки изображения на сервер!");
                }
            }

        }else {
            array_push($err_msg, "Ошибка получения картинки");
        }

        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $topic_id = trim($_POST['topic_id']);
        $amount = trim($_POST['amount']);
        $price = trim($_POST['price']);
        
        // Валидация введённых данных при создании
        if ($title === '' || $description === '' || $topic_id === '' || $amount === '' || $price === '') {
            array_push($err_msg, "Не все поля заполнены!");
        }elseif (mb_strlen($title, 'UTF8') < 7) {
            array_push($err_msg, "Слишком короткое название товара!");
        }else {
            $exist = select('items', ['title' => $title], true);
            
            if ($exist['title'] === $title) {
                array_push($err_msg, "Категория с таким названием уже присутствует в базе!");
            }else {
                $params = [
                    'user_id' => $_SESSION['id'],
                    'title' => $title,
                    'img' => $_POST['img'],
                    'description' => $description,
                    'topic_id' => $topic_id,
                    'amount' => $amount,
                    'price' => $price
                ];

                $id = insert('items', $params);
                $topic = select('items', ['id' => $id], true);
                
                header('location: ' . BASE_URL . 'admin/items/index.php');
            }
        }
    }else {
        $id = '';
        $title = '';
        $description = '';
        $topic_id = '';
        $amount = '';
        $price = '';
    }

    // Обработка формы редактирование товара
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $item = select('items', ['id' => $id], true);

        $id = $item['id'];
        $title = $item['title'];
        $description = $item['description'];
        $topic_id = $item['topic_id'];
        $amount = $item['amount'];
        $price = $item['price'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-edit'])) {

        if (!empty($_FILES['img']['name'])) {
            $img_name = time() . "_" . $_FILES['img']['name'];
            $file_tmp_name = $_FILES['img']['type'];
            $file_type = $_FILES['img']['tmp_name'];
            $destination = ROOT_PATH . "\assets\images\items\\" . $img_name;
            
            if (strpos($file_type, 'image') === false) {
                array_push($err_msg, "Выбранный файл не является изображением!");
            }else {

                $result = move_uploaded_file($file_tmp_name, $destination);
    
                if ($result) {
                    $_POST['img'] = $img_name;
                }else {
                    array_push($err_msg, "Ошибка загрузки изображения на сервер!");
                }
            }

        }else {
            array_push($err_msg, "Ошибка получения картинки");
        }
        
        $id = $_POST['id'];
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $topic_id = trim($_POST['topic_id']);
        $amount = trim($_POST['amount']);
        $price = trim($_POST['price']);
        
        // Валидация введённых данных при создании
        if ($title === '' || $description === '' || $topic_id === '' || $amount === '' || $price === '') {
            array_push($err_msg, "Не все поля заполнены!");
        }elseif (mb_strlen($title, 'UTF8') < 7) {
            array_push($err_msg, "Слишком короткое название товара!");
        }else {
            $params = [
                'title' => $title,
                'img' => $_POST['img'],
                'description' => $description,
                'topic_id' => $topic_id,
                'amount' => $amount,
                'price' => $price
            ];

            update('items', $id, $params);
            
            header('location: ' . BASE_URL . 'admin/items/index.php');
        }
    }

    // Удаление товара
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete-id'])) {
        $id = $_GET['delete-id'];
        delete('items', $id);
        header('location: ' . BASE_URL . 'admin/items/index.php');
    }
?>