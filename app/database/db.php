<?php
    require 'connect.php';

    function tt($value) {
        echo "<pre>";
        print_r($value);
        echo "<pre>";
    }

    // Запрос на выборку всех данных или одной записи из таблицы
    function select($table, $params = [], $row = false) {
        global $mysqli;
        $query = "SELECT * FROM {$table}";

        if (!empty($params)) {
            $i = 0;

            foreach ($params as $key => $value) {
                if (!is_numeric($value)) {
                    $value = "'" . $value . "'";
                }
                if ($i === 0) {
                    $query .= " WHERE {$key} = {$value}";
                }else {
                    $query .= " AND {$key} = {$value}";
                }
                $i++;
            }
        }

        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($row) {
            $data = $result->fetch_assoc();
        }else {
            $data = $result->fetch_all(MYSQLI_ASSOC); // MYSQLI_ASSOC - возвращает ассоциативный массив
        }

        // if (!$data) {
        //     die ("Ошибка при выполнении запроса " . $query);
        // }
        return $data;

        /*return $result->fetch_array(); - Выбирает следующую строку из набора результатов и помещает её в АССОЦИАТИВНЫЙ И ОБЫЧНЫЙ массив
        Пример вывода команды для табл. users с 2-умя записями:
        Array
        (
            [0] => 1
            [id] => 1
            [1] => 0
            [admin] => 0
            [2] => user1
            [username] => user1
            [3] => user1@user.ru
            [email] => user1@user.ru
            [4] => user1
            [password] => user1
            [5] => 2023-12-10 18:13:34
            [created_at] => 2023-12-10 18:13:34
        )*/

        /*return $result->fetch_assoc(); - Выбирает следующую строку из набора результатов и помещает её в АССОЦИАТИВНЫЙ массив
        Пример вывода команды для табл. users с 2-умя записями:
        Array
        (
            [id] => 1
            [admin] => 0
            [username] => user1
            [email] => user1@user.ru
            [password] => user1
            [created_at] => 2023-12-10 18:13:34
        )*/

        /*return $result->fetch_all(); - Выбирает все строки из результирующего набора и помещает их в АССОЦИАТИВНЫЙ ИЛИ ОБЫЧНЫЙ массив
        Пример вывода команды для табл. users с 2-умя записями:
        Array
        Array
        (
            [0] => Array
                (
                    [0] => 1
                    [1] => 0
                    [2] => user1
                    [3] => user1@user.ru
                    [4] => user1
                    [5] => 2023-12-10 18:13:34
                )

            [1] => Array
                (
                    [0] => 2
                    [1] => 0
                    [2] => user2
                    [3] => user2@user.ru
                    [4] => user2
                    [5] => 2023-12-10 19:01:12
                )

        )*/
    }
    
    // Добавление данных в таблицу
    function insert($table, $params) {
        global $mysqli;

        $i = 0;
        $col = '';
        $mask = '';
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $col .= $key;
                $mask .= $value;
            }else {
                $col .= ", $key";
                $mask .= ", $value";
            }
            $i++;
        }

        $query = "INSERT INTO {$table} ({$col}) VALUES ({$mask})";
        
        $stmt = $mysqli->prepare($query);
        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            die ("Ошибка при выполнении запроса " . $query);
        }
        return $mysqli->insert_id;
    }

    // Обновление данных в строке таблицы
    function update($table, $id, $params) {
        global $mysqli;

        $i = 0;
        $str = '';
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $str .= $key . " = {$value}";
            }else {
                $str .= ", $key" . " = {$value}";
            }
            $i++;
        }

        $query = "UPDATE {$table} SET {$str} WHERE id = {$id}";

        $stmt = $mysqli->prepare($query);
        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            die ("Ошибка при выполнении запроса " . $query);
        }
    }
    
    // Удаление строки из таблице
    function delete($table, $id) {
        global $mysqli;

        $query = "DELETE FROM {$table} WHERE id = {$id}";

        $stmt = $mysqli->prepare($query);
        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            die ("Ошибка при выполнении запроса " . $query);
        }
    }
?>