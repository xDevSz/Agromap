<?php
class Controller {
    public function view($view, $data = []) {
        if (file_exists(__DIR__ . "/../Views/{$view}.php")) {
            include __DIR__ . "/../Views/{$view}.php";
        } else {
            include __DIR__ . "/../Views/404.php";
        }
    }
}
