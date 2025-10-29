<?php
define('ROOT_PATH', __DIR__);
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('TEMPLATES_PATH', ROOT_PATH . '/templates');

// Определение URL-пути (САМЫЙ НАДЕЖНЫЙ МЕТОД):
// 1. Получаем протокол (http или https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
// 2. Получаем домен/хост (localhost)
$host = $_SERVER['HTTP_HOST'];
// 3. Получаем путь к папке проекта (напр., /SQL-PHP_Practice/SQL_practice)
// Это путь до папки, содержащей index.php
$base_dir = str_replace(DIRECTORY_SEPARATOR, '/', dirname($_SERVER['SCRIPT_NAME']));

// Формируем полный BASE_URL
$base_url_raw = $protocol . '://' . $host . $base_dir;
define('BASE_URL', rtrim($base_url_raw, '/'));

// В BASE_URL теперь: http://localhost/SQL-PHP_Practice/SQL_practice


//   Альтернативный вариант: 


// $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
// $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
// $base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])); // нормализуем слэши
// $base_dir = $base_dir === '/' ? '' : rtrim($base_dir, '/'); // если '/', делаем пустой
// $base_url_raw = $protocol . '://' . $host . $base_dir;
// define('BASE_URL', rtrim($base_url_raw, '/'));



function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}


function pr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// pr(add_js('script'));


