<?php

class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
  /*
  Не трудно догадаться, что метод generate предназначен для формирования вида. В него передаются следующие параметры:
    $content_file — виды отображающие контент страниц;
    $template_file — общий для всех страниц шаблон;
    $data — массив, содержащий элементы контента страницы. Обычно заполняется в модели.
  */
  function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/

		include 'application/views/'.$template_view;
	}
}































 ?>
