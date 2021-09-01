<?php
if ( isset( $_FILES ) && $_FILES['inputfile']['error'] == 0 ) {
    $destiation_dir = $_SERVER['DOCUMENT_ROOT'] .'/image/carousel/'.$_FILES['inputfile']['name'];
    // Директория для размещения файла
    move_uploaded_file( $_FILES['inputfile']['tmp_name'], $destiation_dir );
    // Перемещаем файл в желаемую директорию
    echo 'Файл '. $_FILES['inputfile']['name'] . ' загружен';

} else {
    echo 'Во время передачи файла возникла ошибка с кодом '. $_FILES['inputfile']['error'];
}