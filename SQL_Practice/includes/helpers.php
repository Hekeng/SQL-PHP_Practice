<?php

// Функция для подключения CSS
function add_css($filename) {
    // В идеале, используйте константу для базового URL, но для локальной работы подойдет и абсолютный путь.
    // Здесь мы просто генерируем HTML-тег

    echo '<link rel="stylesheet" href="' . BASE_URL . '/assets/css/' . htmlspecialchars($filename) . '.css?v=' . time() . '">';
}

// Функция для подключения JavaScript
function add_js($filename, $defer = true) {
    $defer_attr = $defer ? ' defer' : '';
    // Добавляем type="module". 
    // ВАЖНО: Модули по умолчанию работают как defer, так что это отлично сочетается.
    echo '<script type="module" src="' . BASE_URL . '/assets/js/' . htmlspecialchars($filename) . '.js?v=' . time() . '"' . $defer_attr . '></script>';
}
// function add_js($filename, $defer = true) {
//     $defer_attr = $defer ? ' defer' : '';
//     // Добавляем ?v= и штамп времени, чтобы файл всегда считался новым
//     echo '<script src="' . BASE_URL . '/assets/js/' . htmlspecialchars($filename) . '.js?v=' . time() . '"' . $defer_attr . '></script>';
// }




?>