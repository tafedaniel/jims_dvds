<?php
class DVD {
    private static $dvds = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1200],
        ['id' => 2, 'name' => 'Phone', 'price' => 800],
        ['id' => 3, 'name' => 'Tablet', 'price' => 600],
    ];

    public static function all() {
        return self::$dvds;
    }

    public static function by_id($id) {
        foreach (self::$dvds as $dvd) {
            if ($dvd['id'] == $id) {
                return $dvd;
            }
        }
        return null;
    }
}