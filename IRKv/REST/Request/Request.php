<?php 
// 

/**
* $path - переменная пути страницы, будет записана как название таблицы в бд. откуда будут доставать и добавлять данные;
* $query - переменная значения которые будут вставляться в страницу, запись в бд как название файла текста или видео;
* формат записи пути пример: home/ru будет имя таблицы баз данных для хранения значаений для вставки;
* форма адреса URL: http://доменное_имя/имя_страницы/язык?значение#метка_на_странице;
*/
class Request 
{
	public static $path;
	public static $query;
	public static $lang;
	public static $basename;
	
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
			self::$basename = $url;
		}
		// разделение пути на имя страницы и язык
		if (count($arr = explode('/', self::$path))>1) {
			self::$basename = $arr[0];
			self::$lang = $arr[1];
		}
		// echo " url = ";
		// var_dump($url);
		
		// echo "путь = ";
		// var_dump(self::$path);

		// echo "Язык = ";
		// var_dump(self::$lang);

		// echo "значение = ";
		// var_dump(self::$query);

		
		// echo "имя страницы = ";
		// var_dump(self::$basename);
	}
	
	function get(){

	}
	function post(){
		// здесь будет прописана проверка полученных данных из глобального массива
		return $_POST;
	}

	// функция подключения к базам данных через pdo, в данном случае реализация пока MySql
	function sqlPDO($dsn, $user, $pass){
		//пропись dsn метода подключения класса PDO, где прописан хост порт и на первое время имя бд. В последствии имя бд можно будет менять в конфигурационном файле с возможностью создания, но пока управление бд будет проходить вручную
		
		
		$connect = new PDO($dsn, $user, $pass);
		// $res = $connect->query(self::$query);
		// var_dump($res);
		
		return $connect;
	}
	
}

 ?>