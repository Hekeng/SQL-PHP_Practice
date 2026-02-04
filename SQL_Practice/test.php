<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Функция,									Если файла нет,											Повторное подключение того же файла
// include,									Выдаст предупреждение (Warning), но продолжит работу 	Подключит файл еще раз.
// require,									Выдаст фатальную ошибку и остановит скрипт.				,Подключит файл еще раз.
// include_once,							Предупреждение.,										"Проигнорирует, если файл уже был подключен."
// require_once,							Фатальная ошибка.,										"Проигнорирует, если файл уже был подключен."


// $_GET	Данные, переданные через URL (после знака ?). Видны всем.
// $_POST	Данные, переданные «скрыто» внутри тела запроса (обычно из форм).
// $_REQUEST	Сборная солянка: содержит в себе и GET, и POST, и COOKIE (лучше не использовать, чтобы не путаться).
// $_SERVER	Информация о сервере, путях, заголовках, IP пользователя и методе запроса.
// $_SESSION	Данные, которые «живут» между перезагрузками страниц (например, корзина или логин).
// $_COOKIE	Данные, хранящиеся в браузере пользователя.
// $_FILES	Информация о загруженных файлах (картинки, документы).
// $_ENV	Переменные окружения (например, настройки доступа к базе данных).
// $GLOBALS	Ссылка на все переменные, объявленные в глобальной области видимости.

class SearchRequest {
    private $city;

    public function __construct($cityName) {
        // Мы используем if, чтобы проверить условие
        if (empty($cityName) || $cityName === "город") {
            // Но вместо return "ошибка", мы взрываем "петарду"
            throw new Exception("Ошибка: Вы не ввели название города!");
        }
        $this->city = $cityName;
    }

    public function display() {
        return "Вы ищете: " . $this->city;
    }
}



// Создаем ОБЪЕКТ (Экземпляр)




// $firstName = "Alex" ;
// $lastName = "Pupkin";
// $profession = "програмист";
// $experience = 4;

// echo "Привет меня зовут $firstName $lastName  я $profession с $experience годами опыта." ;
// echo "<br>";

// if ($experience < 1) {
// 	echo " $firstName $lastName Новичок";
// } elseif ($experience >= 1 && $experience <=3) {
// 	echo " $firstName $lastName Младший специалист";
// } elseif ($experience >= 4 && $experience < 6) {
// 	echo " $firstName $lastName Опытный программист";
// } else {
// 	echo " $firstName $lastName Сеньор";
// }

// echo "<br>";

// $a = 10;
// $b = "10";

// var_dump($a);
// echo "<br>";
// var_dump($b);

// $host = '127.0.0.1';
// $db   = 'inflation_db';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// try {
//      $pdo = new PDO($dsn, $user, $pass);
//      echo "Связь установлена!";
// } catch (PDOException $e) {
//      echo "Ошибка подключения: " . $e->getMessage();
// }

$colors = ["Red", "Green", "Blue"];




?>

<?php ?>