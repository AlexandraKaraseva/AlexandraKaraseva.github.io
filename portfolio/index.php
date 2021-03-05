<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<!--Подключение файла стилей-->
	<link rel="stylesheet" href="css/style.css">
	<!--Иконка заголовка сайта-->
	<link rel="shortcut icon" href="img/icon/icon-logo.png" type="img/png">
	<title>Karaseva A</title>
	<!--Подключение php-файла-->
    <?php
    require 'php/connection.php';
    ?>
</head>
<body>
	<!--1 экран: главная страница-->
	<section class="panel" id="first-page">
		<!--Хедер-->
		<header class="header">
			<div class="container">
				
				<div class="header__burger">
					<span></span>
				</div>
				<!--Навигация-->
				<div class="nav">
					<div class="nav__item" id="nav-content">
		                <li class="first-of-type"><a href="#first-page">Главная</a></li>
		                <li class="text-upper"><a href="#resume">Резюме</a></li>
		                <li class="text-upper"><a href="#skills">Навыки</a></li>
		                <li class="text-upper"><a href="#education">Образование</a></li>
		                <li class="text-upper"><a href="#projects">Проекты</a></li>
		                <li class="text-upper"><a href="#feedback">Контакты</a></li>
		            </div>
				</div>
				
			</div>
		</header>
		<!--Блок с информацией-->		
		<div class="bg-site-name">
			<div class="container">
				<!--Картинка-->
				<div class="site-name">
					<div class="bg-site-name__image"><img src="img/photo.png" alt="">
					</div>
					<!--Текст-->					
					<p class="title">Карасева Александра</p>
					<p class="subtitle">Front-end/Back-end разработка</p>
					
				</div>
				<div class="site-name-icon">
					<!--Иконки-->
					<div class="bg-site-name__image-icon">
						<!--Гиперссылка на facebook-->
						<a href="https://www.facebook.com/profile.php?id=100007218289177"><img src="img/icon/facebook_white.png" alt="" width="47" height="47"></a>
					</div>
					<div class="bg-site-name__image-icon2">
						<!--Гиперссылка на почту-->
						<a href="mailto:nikon13d@mail.ru"><img src="img/icon/arroba_white.png" alt="1" width="47" height="47"></a>
					</div>
				</div>
			</div>		
		</div>
	</section>
	<!--2 экран: резюме-->
	<section class="panel" id="resume">
		<div class="container">
			<!--Заголовок-->
			<h1 class="head-title">Резюме</h1>
			<div class="resume-columns__item">
				<!--Текст с контактной информацией-->
				<div class="resume-contacts-title">
					<p><a>Полное имя:</a> Карасева Александра
					Вячеславовна<br>
					<a>Моб. телефон:</a> +7 (999) 999-99-99<br>
					<a>E-mail:</a> nikon13d@mail.ru</p>
				</div>
				<!--Краткий текст резюме-->
				<div class="resume-info-title">
					<p class="paragraph1">Окончила государственное бюджетное профессиональное<br>
					образовательное учреждение «Волгоградский технологический<br>
					колледж» по специальности «Программирование в<br>
					компьютерных системах».</p>
					<p class="paragraph2">Знание английского на уровне B1 - Intermediate. Параллельно<br>
					изучаю языки: немецкий, чешский и латышский.</p>
					<p class="paragraph3">Организованная и трудолюбивая. Ответствено подхожу<br>
					к работе.</p>
					<p class="paragraph4">Ознакомиться с полным резюме можно по сылке ниже.<br>
					<a href="media/portfolio.docx">Скачать</a><img src="img/icon/download_red.png" alt=""></p>
				</div>	
			</div>
		<div class="contact-submit-contant">
		<button class="contact-submit"><a href="#feedback">связаться</a></button>
		</div>				
		</div>		
	</section>
	<!--3 экран: навыки-->
	<section class="panel" id="skills">
		<div class="container">
			<!--Заголовок-->
			<h1 class="head-title">Навыки</h1>
			<!--Первые три квадрата-->
			<div class="row">
				<!--HTML5-->
				<div class="col-md-3">
                    <div class="grid-item">
                    	<img src="img/html5.jpg" alt="">
                        <p class="grid-title">Язык гипертекстовой<br>
						разметки страницы<br>
						во Всемирной паутине.<br>
						Используется вместе с CSS</p>
                    </div>
                </div>
                <!--CSS3-->
                <div class="col-md-3">
                    <div class="grid-item">  
                        <img src="img/css3.jpg" alt="">
                        <p class="grid-title">Язык описания внешнего<br>
						вида документа,<br>
						написанного с<br>
						использованием HTML</p>
                    </div>
                </div>
                <!--JavaScript-->
                <div class="col-md-3">
                    <div class="grid-item"> 
                        <img src="img/js.jpg" alt="">
                        <p class="grid-title">Динамический язык<br>
						программирования,<br>
						который применяется к<br>
						HTML документу</p>
                    </div>
                </div>
            </div>
            <!--Вторые три квадрата-->
			<div class="row2">
				<!--SQL-->
				<div class="col-md-3">
                    <div class="grid-item">
                    	<img src="img/sql.jpg" alt="">
                        <p class="grid-title">Язык программирования,<br>
						применяемый для создания<br>
						и управления данными в<br>
						реляционной базе данных</p>
                    </div>
                </div>
                <!--PHP7-->
                <div class="col-md-3">
                    <div class="grid-item">    
                        <img src="img/php7.jpg" alt="">
                        <p class="grid-title">Распространённый язык<br>
						программирования<br>
						общего назначения с<br>
						открытым исходным кодом</p>
                    </div>
                </div>
                <!--Python-->
                <div class="col-md-3">
                    <div class="grid-item">
                        <img src="img/python.jpg" alt="">
                        <p class="grid-title">Высокоуровневый язык<br>
						программирования общего<br>
						назначения. Используется<br>
						в Web-разработке</p>
                    </div>
                </div>
            </div>				
		</div>
	</section>
	<!--4 экран: образование-->
	<section class="panel" id="education">
		<div class="container">
			<!--Заголовок-->
			<h1 class="head-title">Образование</h1>
				<!--Спойлер профессиональные компетенции-->
				<details>
					<summary>Профессиональные компетенции</summary>
					<!--Первая таблица-->
					<div class="tablePK1">
						<table>
						    <!--Заголовок таблицы-->
						    <thead>
						        <tr>
						            <th colspan="2" align="center">ПМ.01 Разработка программных модулей программного обеспечения для компьютерных систем</th>
						        </tr>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ПК.1.1.</td>
						        <td style="text-align:left">Выполнять разработку спецификаций отдельных компонент</td>
						    </tr>
						    <tr>
						        <td>ПК.1.2.</td>
						        <td style="text-align:left">Осуществлять разработку кода программного продукта на основе готовых спецификаций на уровне модуля</td>
						    </tr>
						    <tr>
						        <td>ПК.1.3.</td>
						        <td style="text-align:left">Выполнять отладку программных модулей с использованием специализированных программных средств</td>
						    </tr>
						    <tr>
						        <td>ПК.1.4.</td>
						        <td style="text-align:left">Выполнять тестирование программных модулей</td>
						    </tr>
						    <tr>
						        <td>ПК.1.5.</td>
						        <td style="text-align:left">Осуществлять оптимизацию программного кода модуля</td>
						    </tr>
						    <tr>
						        <td>ПК.1.6.</td>
						        <td style="text-align:left">Разрабатывать компоненты проектной и технической документации с использованием графических языков спецификаций</td>
						    </tr>    
						    </tbody>    
						</table>
					</div>
					<!--Вторая таблица-->
					<div class="tablePK2">
						<table>
						    <!--Заголовок таблицы-->
						    <thead>
						        <tr>
						            <th colspan="2" align="center">ПМ.02 Разработка и адменистрирование баз данных</th>
						        </tr>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ПК.2.1.</td>
						        <td style="text-align:left">Разрабатывать объекты базы данных</td>
						    </tr>
						    <tr>
						        <td>ПК.2.2.</td>
						        <td style="text-align:left">Реализовывать базу данных в конкретной системе управления базами данных</td>
						    </tr>
						    <tr>
						        <td>ПК.2.3.</td>
						        <td style="text-align:left">Решать вопросы администрирования базы данных</td>
						    </tr>
						    <tr>
						        <td>ПК.2.4.</td>
						        <td style="text-align:left">Реализовывать методы и технологии защиты информации в базах данных</td>
						    </tr>
						    </tbody>    
						</table>
					</div>
					<!--Третья таблица-->
					<div class="tablePK3">
						<table>
						    <!--Заголовок таблицы-->
						    <thead>
						        <tr>
						            <th colspan="2" align="center">ПМ.03 Участие в интеграции программных модулей</th>
						        </tr>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ПК.3.1.</td>
						        <td style="text-align:left">Анализировать проектную и техническую документацию на уровне взаимодействия компонент программного обеспечения</td>
						    </tr>
						    <tr>
						        <td>ПК.3.2.</td>
						        <td style="text-align:left">Выполнять интеграцию модулей в программную систему</td>
						    </tr>
						    <tr>
						        <td>ПК.3.3.</td>
						        <td style="text-align:left">Выполнять отладку программного продукта с использованием специализированных программных средств</td>
						    </tr>
						    <tr>
						        <td>ПК.3.4.</td>
						        <td style="text-align:left">Осуществлять разработку тестовых наборов и тестовых сценариев</td>
						    </tr>
						    <tr>
						        <td>ПК.3.5.</td>
						        <td style="text-align:left">Производить инспектирование компонент программного продукта на предмет соответствия стандартам кодирования</td>
						    </tr>
						    <tr>
						        <td>ПК.3.6.</td>
						        <td style="text-align:left">Разрабатывать технологическую документацию</td>
						    </tr>
						    </tbody>    
						</table>
					</div>
					<!--Четвёртая таблица-->
					<div class="tablePK4">
						<table>
						    <!--Заголовок таблицы-->
						    <thead>
						        <tr>
						            <th colspan="2" align="center">ПМ.04 Участие в ревьюирование программных продуктов</th>
						        </tr>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ПК.4.1.</td>
						        <td style="text-align:left">Осуществлять ревьюирование кода и технической документации</td>
						    </tr>
						    <tr>
						        <td>ПК.4.2.</td>
						        <td style="text-align:left">Выполнять процесс измерения характеристик компонент программного продукта</td>
						    </tr>
						    <tr>
						        <td>ПК.4.3.</td>
						        <td style="text-align:left">Производить исследование и оптимизацию созданного программного кода с использованием специализированных программных средств</td>
						    </tr>
						    <tr>
						        <td>ПК.4.4.</td>
						        <td style="text-align:left">Оказывать консультационную поддержку другим разработчикам в части реализации спроектированных компонент</td>
						    </tr>
						    </tbody>    
						</table>
					</div>
					<!--Пятая таблица-->
					<div class="tablePK5">
						<table>
						    <!--Заголовок таблицы-->
						    <thead>
						        <tr>
						            <th colspan="2" align="center">ПМ.05 Сопровождение программного обеспечения компьютерных систем</th>
						        </tr>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ПК.5.1.</td>
						        <td style="text-align:left">Производить инсталляцию, настройку и обслуживание программного обеспечения компьютерных систем</td>
						    </tr>
						    <tr>
						        <td>ПК.5.2.</td>
						        <td style="text-align:left">Осуществлять выбор методов и средств измерения эксплуатационных характеристик объектов профессиональной деятельности</td>
						    </tr>
						    <tr>
						        <td>ПК.5.3.</td>
						        <td style="text-align:left">Выполнять работы по модификации отдельных компонент программного обеспечения</td>
						    </tr>
						    <tr>
						        <td>ПК.5.4.</td>
						        <td style="text-align:left">Обеспечивать защиту программного обеспечения компьютерных систем</td>
						    </tr>
						    </tbody>    
						</table>
					</div>
				</details>
				<!--Спойлер общие компетенции-->
				<details>
					<summary>Общие компетенции</summary>
					<div class="tableOK">
						<table>
							<!--Заголовки таблицы-->
							<thead>
						        <tr>
						            <th>Индекс</th>
						            <th>Наименование</th>
						        </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <tr>
						        <td>ОК 1.</td>
						        <td style="text-align:left">Понимать сущность и социальную значимость своей будущей профессии, проявлять к ней устойчивый интерес</td>
						    </tr>
						    <tr>
						        <td>ОК 2.</td>
						        <td style="text-align:left">Организовывать собственную деятельность, выбирать типовые методы и способы выполнения профессиональных задач, оценивать их эффективность и качество</td>
						    </tr>
						    <tr>
						        <td>ОК 3.</td>
						        <td style="text-align:left">Принимать решения в стандартных и нестандартных ситуациях и нести за них ответственность</td>
						    </tr>
						    <tr>
						        <td>ОК 4.</td>
						        <td style="text-align:left">Осуществлять поиск и использование информации, необходимой для эффективного выполнения профессиональных задач, профессионального и личностного развития</td>
						    </tr>
						    <tr>
						        <td>ОК 5.</td>
						        <td style="text-align:left">Использовать информационно-коммуникационные технологии в профессиональной деятельности</td>
						    </tr>
						    <tr>
						        <td>ОК 6.</td>
						        <td style="text-align:left">Работать в коллективе и в команде, эффективно общаться с коллегами, руководством, потребителями</td>
						    </tr>
						    <tr>
						        <td>ОК 7.</td>
						        <td style="text-align:left">Брать на себя ответственность за работу членов команды (подчиненных), за результат выполнения заданий</td>
						    </tr>
						    <tr>
						        <td>ОК 8.</td>
						        <td style="text-align:left">Самостоятельно определять задачи профессионального и личностного развития, заниматься самообразованием, осознанно планировать повышение квалификации</td>
						    </tr>
						    <tr>
						        <td>ОК 9.</td>
						        <td style="text-align:left">Ориентироваться в условиях частой смены технологий в профессиональной деятельности</td>
						    </tr>
						    <tr>
						        <td>ОК 10.</td>
						        <td style="text-align:left">Понимать сущность и социальную значимость своей будущей профессии, проявлять к ней устойчивый интерес</td>
						    </tr>
						    <tr>
						        <td>ОК 11.</td>
						        <td style="text-align:left">Организовывать собственную деятельность, определять методы и способы выполнения профессиональных задач, оценивать их эффективность и качество</td>
						    </tr>
						    <tr>
						        <td>ОК 12.</td>
						        <td style="text-align:left">Решать проблемы, оценивать риски и принимать решения в нестандартных ситуациях</td>
						    </tr>
						    <tr>
						        <td>ОК 13.</td>
						        <td style="text-align:left">Осуществлять поиск, анализ и оценку информации, необходимой для постановки и решения профессиональных задач, профессионального и личностного развития</td>
						    </tr>
						    <tr>
						        <td>ОК 14.</td>
						        <td style="text-align:left">Использовать информационно-коммуникационные технологии для совершенствования профессиональной деятельности</td>
						    </tr>
						    <tr>
						        <td>ОК 15.</td>
						        <td style="text-align:left">Работать в коллективе и команде, обеспечивать ее сплочение, эффективно общаться с коллегами, руководством, потребителями</td>
						    </tr>
						    <tr>
						        <td>ОК 16.</td>
						        <td style="text-align:left">Ставить цели, мотивировать деятельность подчиненных, организовывать и контролировать их работу с принятием на себя ответственности за результат выполнения заданий</td>
						    </tr>
						    <tr>
						        <td>ОК 17.</td>
						        <td style="text-align:left">Самостоятельно определять задачи профессионального и личностного развития, заниматься самообразованием, осознанно планировать повышение квалификации</td>
						    </tr>
						    <tr>
						        <td>ОК 18.</td>
						        <td style="text-align:left">Быть готовым к смене технологий в профессиональной деятельности</td>
						    </tr>
						    </tbody>
						</table>
					</div>
				</details>
				<!--Спойлер учебный план-->
				<details>
					<summary>Учебный план</summary>
					<div class="tableUP">
						<table>
						    <!--Заголовки таблицы-->
						    <thead>
						    <tr>
						        <th class="mobile-hide">Индекс</th>
						        <th>Наименование</th>
						        <th>Учебная нагрузка</th>
						        <th class="mobile-hide">Семестр</th>
						        <th class="mobile-hide">Курс</th>
						        <th>Оценка</th>
						    </tr>
						    </thead>
						    <!--Тело таблицы-->
						    <tbody>
						    <?php
						    $DB = DB::getDB();

						    $rs = $DB->select("SELECT M_ID from MODEL");

						    $MODELS = $rs;
						    $title = true;

						    foreach ($MODELS as $MODELE)
						    {
						        $title = true;
						        $strSQL = 'SELECT CA_ID, CA_DISCIPLINES, CA_MODEL, CA_SEMESTER, ST_NAME, CA_CURSE, CA_TIME, CA_MARK, M_NAME, M_SHORT_NAME, M_TIME FROM CATALOG
						                LEFT JOIN STUD on ST_ID = CA_STUD_ID
						                LEFT JOIN MODEL on M_ID = CA_TYPE_OF_MODEL
						                WHERE CA_TYPE_OF_MODEL = ' .$MODELE['M_ID'];
						        // Выполнить запрос (набор данных $rs содержит результат)
						        $rs = $DB->select($strSQL);
						        if ($rs != null) {
						            foreach ($rs as $row) {
						                if($title)
						                {
						                    echo
						                        '<tr>
						                            <th class="mobile-hide">'.$row["M_SHORT_NAME"].'</th>
						                            <th>'.$row["M_NAME"].'</th>
						                            <th>'.$row["M_TIME"].'</th>
						                            <th class="mobile-hide"></th>
						                            <th class="mobile-hide"></th>
						                            <th></th>
						                        </tr>';

						                    echo
						                        '<tr>
						                            <td class="mobile-hide">'.$row["CA_MODEL"].'</td>
						                            <td style="text-align:left">'.$row["CA_DISCIPLINES"].'</td> <!--Название предметов по левому краю-->
						                            <td>'.$row["CA_TIME"].'</td>
						                            <td class="mobile-hide">'.$row["CA_SEMESTER"].'</td>
						                            <td class="mobile-hide">'.$row["CA_CURSE"].'</td>
						                            <td>'.get_mark($row["CA_MARK"]).'</td>
						                        </tr>';

						                    $title = false;
						                }
						                else {
						                    echo
						                        '<tr>
						                            <td class="mobile-hide">'.$row["CA_MODEL"].'</td> <!--буп-->
						                            <td style="text-align:left">'.$row["CA_DISCIPLINES"].'</td> <!--Название предметов по левому краю-->
						                            <td>'.$row["CA_TIME"].'</td>
						                            <td class="mobile-hide">'.$row["CA_SEMESTER"].'</td>
						                            <td class="mobile-hide">'.$row["CA_CURSE"].'</td>
						                            <td>'.get_mark($row["CA_MARK"]).'</td>
						                        </tr>';
						                }
						            }
						        } else {
						            if($title){

						            }
						            echo "0 results";
						        }
						    }
						    ?>
						    </tbody>
						</table>
					</div>
<?php
function get_mark($mark)
{
    if($mark == 5){
        return "Отлично";
    }elseif ($mark == 4)
    {
        return "Хорошо";
    }elseif ($mark == 3)
    {
        return "Удовлетворительно";
    }elseif ($mark == 2)
    {
        return "Не удовлетворительно";
    }
    else{
        return "Неизвестно";
    }
}
?>
				</details>
			</div>

	</section>
	<!--5 экран: проекты-->
	<section class="panel" id="projects">
		<div class="container">
			<!--Заголовок-->
			<h1 class="head-title-projects">Проекты</h1>
			<!--Подзаголовок-->
			<p class="head-subtitle">Проектирование взаимодействия<br>
			мобильного приложения «Яндекс.Такси»</p>
			<!--Основной текст-->
			<p class="paragraph-projects1">С развитием мобильных устройств, приложения занимают значительное место в нашей жизни и помогают нам в<br>
			повседневных делах. У пользователей мало времени, небольшой объем внимания, маленький экран, и<br>
			множество отвлекающих факторов.</p>
			<p class="paragraph-projects2">Мой проект базируется на аналазе дизайна мобильного приложения «Яндекс.Такси». Это актуальный сервис,<br>
			который не заменим в повседневной жизни. Рассматриваются такие аспекты как    составление story telling,<br>
			разработка user story ключевых задач приложения, сценари ключевых персонажей, составление user jorney<br>
			map и разработка информационной и навигационой архитектуры.
			</p>
			<div class="video">
				<video width="803" height="383" controls="controls" poster="video/ЯТ.jpg">
					<!--<source src="video/ЯТ.ogg" type='video/ogg'>-->
				    <source src="video/ЯТ.mp4" type='video/mp4'>
					<source src="video/ЯТ.webm" type='video/webm'>	
				</video>
			</div>
			<p class="paragraph-projects3">Также можно ознакомиться с моими достижениями. Архив можно скачать ниже по ссылке.<br>
			<a href="media/certificates.zip">Скачать</a><img src="img/icon/download_red.png" alt=""></p>
		</div>
	</section>
	<!--6 экран: форма обратной связи-->
	<section class="panel" id="feedback">
		<!--Фон-->
		<div class="background">
			<div class="container">
				<!--Заголовок-->
				<h1 class="head-title-feedback">Контакты</h1>
				<!--Подзаголовок-->
				<p class="head-subtitle-feedback">Вы можете связаться со мной<br>
				по обратной форме</p>
				<div class="feedback__form">
				<form class="form" id="form" name="form" onsubmit="if (this.agreement.checked == false) { alert ('Вы не установили ни одного флажка!'); return false; } else { return true; }">
					<div class="form__item">
						<p class="text-FIO">Ваше имя*:</p>
						<input id="inputFIO" type="text" value = "" name = "FIO" required class="form__item_FIO">
						<p class="text-email">Ваш e-mail*:</p>
						<input id="input-email" type="text" name="email" pattern="^\S+@\S+\.\S+$" required class="form__item_email">
						<p class="text-message">Сообщение:</p>
						<textarea name="message1" id="input-message" class="form__item_message"></textarea>
						
					</div>
					<div class="checkbox">
		                    <input id="formAgreement"  type="checkbox" name="agreement" class="checkbox__input" checked>
		                    <label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на обработку персональных данных в соответствии с <a>Условиями*</a></span></label>
		                </div>
					<div class="send-submit-contant">
					<button type="submit" class="send-submit"><a>отправить</a></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
	<!--7 экран: футер-->
	<section class="panel" id="last-page">
		<footer class="footer">
			<div class="container">
				<div class="last-page__item">
					<p class="copyright__text">Copyright © 2021 Карасева Александра 
					</p>
				</div>
			</div>	
		</footer>
	</section>
	<!--Подключаем jQuery для бургера-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="js/burger.js"></script>	
	<!--Подключение JQuery и скрипт для отправки сообщения с формы обратной связи-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
		
</body>
</html>