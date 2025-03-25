<?php
function loadEnv($path) {
    if (!file_exists($path)) {
    throw new Exception('.env file not found');
}

$lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    // Пропустить комментарии
    if (str_starts_with(trim($line), '#')) {
        continue;
    }

    // Разделить ключ и значение
    list($key, $value) = explode('=', $line, 2);

    $key = trim($key);
    $value = trim($value);

    // Удалить кавычки из значения (если есть)
    if (preg_match('/^"(.*)"$/', $value, $matches)) {
    $value = $matches[1];
    }

    // Сохранить в переменные окружения
    putenv("$key=$value");
    $_ENV[$key] = $value;
//    $_SERVER[$key] = $value;
    }
}

// Загрузить .env из корня проекта
loadEnv(__DIR__ . '/.env');
