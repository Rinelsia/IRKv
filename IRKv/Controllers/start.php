<?php 
// переменная начала отсчета старта времени выполнения скрипта
$time_start = microtime(true);

// подключение файла запуска создания массива карты файлов папок, и их путей
require_once __DIR__.'\loader\FileMap.php';

// автоматическая загрузка классов, каждый вызов класса сопровождается подключением файла, где этот класс находится. Название файла совпадает с названием класса
require_once __DIR__.'\loader\loader.php';



// запуск контроллера
(new Controller)->BaseController();

// Замер времени выполнения скрипта
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "<p>Время выполнения скрипта $time секунд</p>";
 ?>