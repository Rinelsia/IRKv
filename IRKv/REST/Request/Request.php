<?php 
// 

/**
* $path - переменная пути страницы, будет записана как название таблицы в бд. откуда будут доставать и добавлять данные;
* $query - переменная значения которые будут вставляться в страницу, запись в бд как название файла текста или видео;
* 
*/
class Request 
{
	public static $path;
	public static $query;
	
	function request(){
		// 
	}
	public static function url(){

		echo "<p style='color: blue'>Подключен url<p>";
		// получение значения из адресной строки и разбитие url на элементы (адрес и значение)
		$url = ($_SERVER["REQUEST_URI"] === "/")? "index": (parse_url($_SERVER["REQUEST_URI"]));
		
		if (is_array($url)) {
			// цикл распределения элементов url
			foreach ($url as $key => $value) {
				
				self::$$key = trim($value, "/");
			}

		}else{
			self::$path = $url;
		}

		echo " url = ";
		var_dump($url);
		
		echo "путь = ";
		var_dump(self::$path);

		echo "значение = ";
		var_dump(self::$query);

	}
	
	function get(){

	}
	function post(){

	}
}

 ?>