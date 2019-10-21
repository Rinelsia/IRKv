<?php 
/**
* 
* BaseController - метод класа начального запуска классов составляющих скелет программы. Они как бы ядро всей системы, важная отработка
*/
class Controller extends array_controll
{
	// $arr_view_html - переменная, в нее записывается массив с путями файлов разметки и стилей, ДЛЯ ОТПРАВКИ ВЕРСТКИ КЛИЕНТУ
	public $arr_view_html;

	public function BaseController(){
		echo "Базовый контроллер<br>";
		echo "Запуск URL";
		Request::url();
	}

}
