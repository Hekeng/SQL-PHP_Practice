<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//STR
// | Функция / Оператор   | Принимает               | Возвращает  | Назначение             |
// | -------------------- | ----------------------- | ----------- | ---------------------- |
// | `.`                  | string, string          | string      | конкатенация           |
// | `strlen()`           | string                  | int         | длина в байтах         |
// | `mb_strlen()`        | string                  | int         | длина в символах       |
// | `strpos()`           | string, string          | int / false | позиция подстроки      |
// | `substr()`           | string, int, int        | string      | извлечь часть          |
// | `mb_substr()`        | string, int, int        | string      | UTF-8 версия           |
// | `str_replace()`      | search, replace, string | string      | замена                 |
// | `strtolower()`       | string                  | string      | lower                  |
// | `strtoupper()`       | string                  | string      | upper                  |
// | `mb_strtolower()`    | string                  | string      | UTF-8 lower            |
// | `trim()`             | string                  | string      | убрать пробелы         |
// | `strip_tags()`       | string                  | string      | убрать HTML            |
// | `htmlspecialchars()` | string                  | string      | экранирование HTML     |
// | `strcmp()`           | string, string          | int         | сравнение, сортировка  |
// | `strcasecmp()`       | string, string          | int         | сравнение без регистра |

// | Задача          | Пример                                                     | Объяснение                                                         |
// | --------------- | ---------------------------------------------------------- | ------------------------------------------------------------------ |
// | Проверка email  | `preg_match('/^[\w.-]+@[\w.-]+\.[a-z]{2,6}$/i', $login)`   | Разрешает буквы, цифры, точку, дефис до @ и после, проверяет домен |
// | Проверка пароля | `preg_match('/^(?=.*[A-Z])(?=.*[0-9]).{6,}$/', $password)` | Минимум 6 символов, хотя бы 1 заглавная буква и 1 цифра            |
// | Только буквы    | `preg_match('/^[a-zA-Z]+$/', $value)`                      | Строго буквы a-z или A-Z                                           |
// | Только цифры    | `preg_match('/^\d+$/', $value)`                            | Строго цифры 0-9                                                   |


//ARRAY

// | Функция / конструкция | Принимает    | Возвращает | Для чего                    |
// | --------------------- | ------------ | ---------- | --------------------------- |
// | `count()`             | array        | int        | количество элементов        |
// | `isset()`             | key          | bool       | ключ существует и не `null` |
// | `array_key_exists()`  | key, array   | bool       | ключ существует             |
// | `in_array()`          | value, array | bool       | значение есть               |
// | `array_keys()`        | array        | array      | все ключи                   |
// | `array_values()`      | array        | array      | все значения                |
// | `array_merge()`       | array, array | array      | объединение                 |
// | `foreach`             | array        | —          | перебор                     |


// | Функция          | Что делает           | Возвращает        |
// | ---------------- | -------------------- | ----------------- |
// | `$arr[] = $v`    | добавить в конец     |                   |
// | `array_push`     | добавить в конец     | кол-во элементов  |
// | `array_pop`      | удалить последний    | удалённый элемент |
// | `array_unshift`  | добавить в начало    | кол-во элементов  |
// | `array_shift`    | удалить первый       | удалённый элемент |
// | `unset($arr[k])` | удалить по ключу     | —                 |
// | `array_splice`   | вырезать / вставить  | массив удалённых  |
// | `sort`           | сорт по значениям    | bool              |
// | `rsort`          | обратный sort        | bool              |
// | `ksort`          | сорт по ключам       | bool              |
// | `krsort`         | обратный ksort       | bool              |
// | `usort`          | кастом сорт значений | bool              |
// | `uksort`         | кастом сорт ключей   | bool              |

//array_*

// | Функция        | Что делает           | Принимает             | Возвращает  |
// | -------------- | -------------------- | --------------------- | ----------- |
// | `array_map`    | преобразует элементы | array, callback       | новый array |
// | `array_filter` | фильтрует элементы   | array, callback       | новый array |
// | `array_reduce` | сворачивает в одно   | array, callback, init | mixed       |
// | `array_merge`  | объединяет массивы   | arrays                | array       |
// | `array_keys`   | получить ключи       | array                 | array       |
// | `array_values` | получить значения    | array                 | array       |
// | `array_search` | найти значение       | value, array          | key / false |
// | `array_column` | вытащить колонку     | array, key            | array       |

//POST

// | Функция            | Вход       | Выход  | Для чего        |
// | ------------------ | ---------- | ------ | --------------- |
// | `isset`            | переменная | bool   | существует ли   |
// | `empty`            | переменная | bool   | пустая ли       |
// | `trim`             | string     | string | убрать пробелы  |
// | `htmlspecialchars` | string     | string | защита HTML     |
// | `filter_input`     | тип + имя  | mixed  | безопасный ввод |
// | `filter_var`       | значение   | mixed  | валидация       |

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<br>";
        echo "Зашел POST";
       
        validPost ();

}

function validPost (){
        $errors = [];
        $login = trim($_POST['new_user_login'] ?? '');
        $password = trim($_POST['new_user_pas'] ?? '');
        $confirm = trim($_POST['new_user_pas_rep'] ?? '');

        if ($login === '' || $password === '' || $confirm === '') {
            echo "Поля пустые";
            $errors[] = "есть пустые значения";
        }

        if (strcmp($password, $confirm) !== 0) {
            echo "Пароль не соответсвует подтверждению";
            $errors[] = "Пароль не соответсвует подтверждению";
        }

        if (count($errors)) {
           echo "OK";
        }

    }




// $goods = ["Book", "Pensil", "Pen", "Paper"];
// $result = in_array("Pen", $goods);
// echo ($result) ?  "есть!" : "нету!";

// $orders = [
//     "Order1" => [
//         "Name" => "Vasia",
//         "goods" => [
//             "cartofel" => 2.19,
//             "carrot" => 1.49,
//             "wasser" => 0.99
//         ],
//         "status" => "done"
//     ],
//     "Order2" => [
//         "Name" => "Petia",
//         "goods" => [
//             "cartofel" => 2.19,
//             "carrot" => 1.49
//         ],
//         "status" => "done"
//     ],
//    "Order3" => [
//         "Name" => "Vasia",
//         "goods" => [
//             "cartofel" => 2.19

//         ],
//         "status" => "done"
//     ],
// ];

// foreach ($orders as $order => $value) {

//     $buyerName = $value['Name'];
//     $itemCount = 0;

//     foreach ($value['goods'] as $key => $value) {
//         $itemCount = $itemCount+1;
//     }
//     echo "<p>"; //пробовал применить PHP_EOL, и \n чтото не хотят они переносить строку...
//     echo "Заказ $order имеет $itemCount товаров";
//     echo "</p>";
// }

// $users = [
//     "User1" => [
//         "Name" => "Vasia",
//         "email" => "vasia@mail.com",
//         "role" => "user"
//     ],
//     "User2" => [
//         "Name" => "Petia",
//         "email" => "petia@mail.com",
//         "role" => "user"
//     ],
//     "User3" => [
//         "Name" => "Inna",
//         "email" => "inna@mail.com",
//         "role" => "admin"
//     ]
// ];

// foreach ($users as $key => $value) {
//     if($value['role']){
//         if($value['role'] == "admin")
//             echo "администратор найден!!!!";
//     } else {
//        echo "чтото пошло не так!!!";
//     }
// }

// $colors = ["Red", "Green", "Blue"];


// $user = 'Alex';
// $age = 25;

// echo "Пользователь $user, возраст ".$age." лет!";

// $str = 'Привет мир';
// $bytes = strlen($str);
// $symbols = mb_strlen($str);

// echo "Потому что один сивмвол в латинском алфавите занимает 1 бит (8байт) или наоборот соответсвенно: $bytes != $symbols";

// $str1 = "@adminexample.com";
// $analisStr1;
// if ($analisStr1 = strpos($str1, '@')){
//     echo "символ @ нашелся!!! на позиции $analisStr1 ";
// };
// $login = substr($str1, 0, $analisStr1);
// $domen = substr($str1, $analisStr1+1, mb_strlen($str1));
// echo "User login is : $login User domein is: $domen";

// $str2 = "HeLLo WoRLD"; 
// $str2 = strtolower($str2);
// echo "Str lower : $str2";
// $str2 = strtoupper($str2);
// echo "Str upper : $str2";

// $str="Admin";
// $str1 = "admin";
// if ($str == $str1) {
//     echo "Не строгое сравнение сравнивает в строке наверное смысл? ";
// } elseif ($str === $str1){
//     echo  "Строгое сравнение строк сравнивает скорее всего UTF коды";
// } else{
//     echo "Сравнивать строки в лоб глупость :))) ";
// }

// $laga = strcmp($str, $str1);

// echo "!!!!!!!!!!!!!!!!$laga!!!!!!!!!!!!";

// if(strcmp($str, $str1)){
//     echo "не строгое сравнение :))) ";
// } else{
//      echo "не равны вот так правильно сравнивать строки :))) ";
// };

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


// Метод,               Когда вызывается,                                                       Зачем нужен (Пример)
// __construct(),       При создании объекта через new.,                                        Настройка начальных данных.
// __destruct(),        Когда объект удаляется из памяти.,                                      Закрыть файл или соединение с БД.
// __call(),            При вызове несуществующего метода.,                                     Гибкие «виртуальные» методы (как в Laravel).
// __get(),             При попытке прочитать скрытое/несуществующее свойство.,                 Доступ к данным из массива как к свойствам.
// __set(),             При попытке записи в скрытое свойство.,                                 Валидация данных перед записью.
// __toString(),        "Когда объект пытаются использовать как строку (например, echo $obj).", Красивый вывод объекта.
// __invoke(),          Когда объект вызывают как функцию: $obj().,                             Создание «объектов-функций».

// Символ,          Название,           Что делает
// \n,              Line Feed,          Перенос на новую строку.
// \r,              Carriage Return,    Возврат каретки (в начало строки).
// \t,              Tab,                Горизонтальная табуляция (отступ).
// PHP_EOL,         End of Line,        Правильный перенос строки для текущей ОС.





// class Logger{

//     public static function log($message){
//         return $message ." ".date("Y-m-d H:i:s");
//     }

// }

// Создай класс User.

// Сделай свойство private $name;.

// Реализуй магический метод __set($key, $value), который будет записывать имя, но только если его длина больше 3 символов. Если меньше — выбрасывай throw new Exception.

// Реализуй магический метод __get($key), который будет возвращать имя капсом (используй strtoupper()).

// class User {

//     private $name;

//     public function __set($key, $value){

//         try {
//             set_name($key);//условие иф подчеркивал редактор я не понял по чему :((( поэтому создал метод
//         } catch (Exception $e) {
//             echo "Поймали ошибку: " . $e->getMessage('Длина имени меньше трех символов');
//         }

//     };

//     public function __get(){
//         return $nameCapital = str(self::$name)->upper();
//     };

//     public function set_name($key){
//         if (str($key) <= 3) {
//             self::$name = $key;
//         }
//     }


// }

// // А теперь вызываем "безопасно"
// try {
//     // Если тут cityName будет пустым, конструктор выбросит исключение
//     // и строка с "echo" ниже ПЕРЕПРЫГНЕТСЯ сразу в блок catch
//     $myCity = new SearchRequest($_GET['city'] ?? ''); 
//     echo $myCity->display();

// } catch (Exception $e) {
//     // Мы поймали "петарду" и просто выводим текст ошибки
//     echo "<b style='color:red;'>" . $e->getMessage() . "</b>";
// }

// class Calculator {
//     public static $pi = 3.14;

//     public static function add($a, $b) {
//         return $a + $b;
//     }
// }

// Вызываем через ДВОЕТОЧИЕ (Scope Resolution Operator)
// echo Calculator::add(5, 10); 
// echo Calculator::$pi;


// class DB {
//     private static $connection = null;

//     public static function connect() {
//         if (self::$connection === null) {
//             // Создаем подключение один раз на весь проект
//             self::$connection = new PDO("mysql:host=localhost;dbname=test", "root", "");
//         }
//         return self::$connection;
//     }
// }

// // Теперь в любой точке кода ты просто пишешь:
// $db = DB::connect();


// class SearchRequest {
//     private $city;

//     public function __construct($cityName) {
//         // Мы используем if, чтобы проверить условие
//         if (empty($cityName) || $cityName === "город") {
//             // Но вместо return "ошибка", мы взрываем "петарду"
//             throw new Exception("Ошибка: Вы не ввели название города!");
//         }
//         $this->city = $cityName;
//     }

//     public function display() {
//         return "Вы ищете: " . $this->city;
//     }
// }



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






?>

<?php ?>