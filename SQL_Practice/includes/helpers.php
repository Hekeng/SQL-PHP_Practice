<?php

// Функция для подключения CSS
function add_css($filename) {
    // В идеале, используйте константу для базового URL, но для локальной работы подойдет и абсолютный путь.
    // Здесь мы просто генерируем HTML-тег

    echo '<link rel="stylesheet" href="' . BASE_URL . '/assets/css/' . htmlspecialchars($filename) . '.css">';
}

// Функция для подключения JavaScript
function add_js($filename, $defer = true) {
    $defer_attr = $defer ? ' defer' : '';
    // Генерируем HTML-тег <script>
    echo '<script src="' . BASE_URL . '/assets/js/' . htmlspecialchars($filename) . '.js"' . $defer_attr . '></script>';
}



?>