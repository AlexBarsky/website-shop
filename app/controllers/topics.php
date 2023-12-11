<?php
    require SITE_ROOT . "/app/database/db.php";
    
    $err_msg = '';
    $id = '';
    $title = '';
    $description = '';
    $topics = select('topics');

    // Обработка формы создания категории
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-create'])) {
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);

        // Валидация введённых данных при создании
        if ($title === '' || $description === '') {
            $err_msg = "Не все поля заполнены!";
        }elseif (mb_strlen($title, 'UTF8') < 2) {
            $err_msg = "Слишком короткое название категории!";
        }else {
            $exist = select('topics', ['title' => $title], true);

            if ($exist['title'] === $title) {
                $err_msg = "Категория с таким названием уже присутствует в базе!";
            }else {
                $params = [
                    'title' => $title,
                    'description' => $description
                ];

                $id = insert('topics', $params);
                $topic = select('topics', ['id' => $id], true);
                
                header('location: ' . BASE_URL . 'admin/topics/index.php');
            }
        }
    }else {
        $title = '';
        $description = '';
    }

    // Обработка формы редактирование категории
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $topic = select('topics', ['id' => $id], true);

        $id = $topic['id'];
        $title = $topic['title'];
        $description = $topic['description'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-edit'])) {
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);

        // Валидация введённых данных
        if ($title === '' || $description === '') {
            $err_msg = "Не все поля заполнены!";
        }elseif (mb_strlen($title, 'UTF8') < 2) {
            $err_msg = "Слишком короткое название категории!";
        }else {
            $params = [
                'title' => $title,
                'description' => $description
            ];
            
            $id = $_POST['id'];
            $topic_id = update('topics', $id, $params);
            
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }

    // Удаление категории
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete-id'])) {
        $id = $_GET['delete-id'];
        delete('topics', $id);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
?>