@section('content')
@extends('layouts.header')
	<html>
		<head>
			<meta charset = "UTF-8">
			<link rel = "stylesheet" href = "krossovki.css">
			<title>
				Market Island
			</title>
		</head>
		<body>
			<header>
				<div class = "Logo">
					<a href = "http://127.0.0.1:8000">
						<img src = "img/logo.png">
					</a>
				</div>
				<div class = "menu">
					<ul class = "head_menu">
						<li class = "menu_element">
							<a href = "http://127.0.0.1:8000/bryuki" class = "m_e_a">
								<b>БРЮКИ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "http://127.0.0.1:8000/footbolki" class = "m_e_a">
								<b>ФУТБОЛКИ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "http://127.0.0.1:8000/krossovki" class = "m_e_a_main">
								<b>КРОССОВКИ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "http://127.0.0.1:8000/remni" class = "m_e_a">
								<b>РЕМНИ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "http://127.0.0.1:8000/sumki" class = "m_e_a">
								<b>СУМКИ</b>
							</a>
						</li>
					</ul>
				</div>
				<div class = "inf">
					<a href = "#" class = "inftxt">Мы в соц. сетях!</a>
					<a href = "#" class = "inftxt">Администрация</a>
				</div>
			</header>
			<div class = "Banner">
				<img src = "img/banner2.png" class = "bannerimg">
			</div>
			<div class = "content">
			<div class = "content_txt">
				<b>ОБГОНИ КОРОНАВИРУС В НАШИХ КРОССОВКАХ</b>
			</div>
				<div class = "content_element1">
					<a href = "#">
						<img src = "img/kros1.png">
						<div class = "content_element_txt">
							КРОССОВКИ INSTA PUMP FURY TRAIL
						</div>
						<div class = "content_element_txt">
							3.000р
							<form>
								<button class = "form_button">
									В корзину
								</button>
							</form>
						</div>
					</a>
				</div>
				<div class = "content_element2">
					<a href = "#">
						<img src = "img/kros2.png">
						<div class = "content_element_txt">
							КРОССОВКИ REEBOK NANO X
						</div>
						<div class = "content_element_txt">
							3.000р
							<form>
								<button class = "form_button">
									В корзину
								</button>
							</form>
						</div>
					</a>
				</div>
				<div class = "content_element3">
					<a href = "#">
						<img src = "img/kros3.png">
						<div class = "content_element_txt">
							КРОССОВКИ REEBOK DMX SERIES 1000
						</div>
						<div class = "content_element_txt">
							3.000р
							<form>
								<button class = "form_button">
									В корзину
								</button>
							</form>
						</div>
					</a>
				</div>
			</div>
			<div class = "content2">
				<div class = "content_element1">
					<a href = "#">
						<img src = "img/kros4.png">
						<div class = "content_element_txt">
							КРОССОВКИ ADIDAS STAN SMITH
						</div>
						<div class = "content_element_txt">
							3.000р
							<form>
								<button class = "form_button">
									В корзину
								</button>
							</form>
						</div>
					</a>
				</div>
				<div class = "content_element2">
					<a href = "#">
						<img src = "img/kros5.png">
						<div class = "content_element_txt">
							КРОССОВКИ ADIDAS LXCON
						</div>
						<div class = "content_element_txt">
							3.000р
							<form>
								<button class = "form_button">
									В корзину
								</button>
							</form>
						</div>
					</a>
				</div>
				<div class = "content_element3">
					<a href = "#">
						<img src = "img/kros6.png">
						<div class = "content_element_txt">
							КРОССОВКИ ADIDAS OZWEEGO
						</div>
						<div class = "content_element_txt">
							3.000р
@endsection('content')
