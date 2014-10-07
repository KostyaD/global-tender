<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index');
	}

	public function seminars()
	{
		return View::make('seminars');
	}

	public function seminar()
	{
		return View::make('seminar');
	}

	public function lektors()
	{
		return View::make('lektors');
	}

	public function feedback()
	{
		return View::make('feedback');
	}

	public function contacts()
	{
		return View::make('contacts');
	}
	public function mailsend()
	{
		$ura = isset($_POST['uri']) ? " - совпадает с юридическим " :"";
	    $ust = isset($_POST['ustav']) ? " устава " : "";
	    $pol = isset($_POST['polozhenie']) ? " положения " : "";

	    $content = "
	    Семинар: {$_POST['seminar']} \n\n
	    1. Организация: {$_POST['org-name']} \n
	        Название организации (краткое): {$_POST['org-short']} \n
	        ИНН: {$_POST['inn']} \n
	        КПП: {$_POST['kpp']} \n\n
	        Почтовый адрес: {$_POST['zip-code']}, {$_POST['region']}, {$_POST['city']}, {$_POST['street']}, {$_POST['home']}" .  $ura . " \n\n
	    2. Руководитель (для оформления договора): {$_POST['fio']} \n
	        Должность: {$_POST['post']} \n
	        Руководитель действует<br /> на основании: " .  $ust  . $pol . "\n
	    3. Количество участников семинара: {$_POST['amount']} \n
	    4. Контактные лицо: {$_POST['contact-name']} \n
	        Должность: {$_POST['contact-post']} \n
	        email: {$_POST['contact-email']} \n
	        Телефон: {$_POST['contact-phone']} \n
	    5. Комментарий: {$_POST['comment']} \n";

	    $data['content'] = $content;

	    Mail::send('emails.apply', $data, function($message)
		{
		    $message->from('noreply@global-tender.ru', 'Заявка :: "Глобал Тендер"');
		    $message->to('thedamaxstudio@gmail.com')->cc('global-tender@mail.ru');
		});

	}

}
