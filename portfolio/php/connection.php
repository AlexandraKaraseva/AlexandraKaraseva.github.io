<?php
class DB{
    private static $db = null;
    public $mysqli; // Идентификатор соединения

    public static function getDB() {
        if (self::$db == null) self::$db = new DB();
        return self::$db;
    }
    /* При создании объекта открываеться соединение с базой данных */
    private function __construct() {
        $this->mysqli = new mysqli("localhost", "root", "", "stud");
    }
    /* При уничтожении объекта закрывается соединение с базой данных */
    public function __destruct() {
        if ($this->mysqli) $this->mysqli->close();
    }
//    запрос
    public function select($query) {
        $result_set = $this->mysqli->query($query);
        if ($result_set==null) return false;
        return $this->resultSetToArray($result_set);
    }
    /* Преобразование result_set в массив */
    private function resultSetToArray($result_set) {
        $array = array();
        while (($row = $result_set->fetch_assoc()) != false) {
            $array[] = $row;
        }
        return $array;
    }
}
