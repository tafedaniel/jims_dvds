<?php
class View {
    public static function show($view, $data = []) {
        extract($data);
        require __DIR__ . '/../views/' . $view . '.php';
    }
}