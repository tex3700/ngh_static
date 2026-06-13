<?php

/**
 * Сканирует папку с документами и возвращает массив для отображения.
 *
 * @param string $storagePath  Абсолютный путь к папке с файлами
 * @param string $webPath      Веб-путь к папке (например, '/storage/ksp-201')
 * @return array
 */
function getDocuments(string $storagePath, string $webPath): array
{
    $extMap = [
        'pdf'  => ['icon' => 'pdf', 'ext' => 'PDF'],
        'doc'  => ['icon' => 'doc', 'ext' => 'DOC'],
        'docx' => ['icon' => 'doc', 'ext' => 'DOCX'],
        'xls'  => ['icon' => 'xls', 'ext' => 'XLS'],
        'xlsx' => ['icon' => 'xls', 'ext' => 'XLSX'],
        'zip'  => ['icon' => 'zip', 'ext' => 'ZIP'],
        'rar'  => ['icon' => 'zip', 'ext' => 'RAR'],
        'jpg'  => ['icon' => 'jpg', 'ext' => 'JPG'],
    ];

    $documents = [];

    if (!is_dir($storagePath)) {
        return $documents;
    }

    $files = scandir($storagePath);

    foreach ($files as $filename) {
        if ($filename === '.' || $filename === '..') {
            continue;
        }

        $fullPath = $storagePath . DIRECTORY_SEPARATOR . $filename;

        if (!is_file($fullPath)) {
            continue;
        }

        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!isset($extMap[$ext])) {
            continue;
        }

        $title = pathinfo($filename, PATHINFO_FILENAME);
        $title = str_replace(['_', '-'], ' ', $title);

        $documents[] = [
            'title' => $title,
            'file'  => rtrim($webPath, '/') . '/' . $filename,
            'ext'   => $extMap[$ext]['ext'],
            'icon'  => $extMap[$ext]['icon'],
        ];
    }

    return $documents;
}