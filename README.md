# PHP.MVC-JS.SPA
<h2>О проекте</h2>
Проект построен с использованием самописных "фреймворков": <a href="https://github.com/ilyazenQ/PHP.MVC.framework">PHP.MVC.framework</a> и <a href="https://github.com/ilyazenQ/JS.SPA.Framework">JS.SPA.Framework</a><br>
Проект создан в учебных целях и содержит простейщую реализацию (folder - phpapi) backend PHP(MVC) - роутинг,CRUD, шаблонизаторы и реализацию (folder - frontspa) frontend JS(SPA) - роутинг, API, виртуальный DOM(Json), синхронизация элементов.<br>
<strong>В результате </strong> получено понимание и принцип работы современных backend и frontend фреймворков.<br>
<hr>
<h2>Сервис phpapi</h2><br>
Главная страница phpapi/, содержит навигацию(по сервису и между сервисами), поиск по сайту и выводит товары из MySQL (nortwind bd).<br>
<img src="https://github.com/ilyazenQ/PHP.MVC-JS.SPA/blob/main/gitpicture/1.PNG"></img><br>
Страница Фразы, содержит перечень часто используемых фраз с возможностью добавления.<br>
<img src="https://github.com/ilyazenQ/PHP.MVC-JS.SPA/blob/main/gitpicture/2.PNG"></img><br>
<h2>Сервис JsSpa</h2><br>
Главная страница frontspa/, содержит навигацию(по сервису и между сервисами), выводит лоты полученные по API из сервиса PhpApi.<br>
<img src="https://github.com/ilyazenQ/PHP.MVC-JS.SPA/blob/main/gitpicture/3.PNG"></img><br>
<h2>Инструкции</h2><br>
Для разработки использовался openserver, его настройки:<br>

<br>
1)Clone this repository to your local or download it. <br>
2)Please note that PHP 8 is required, use composer update in your directory <br>
3)Fill the database (https://github.com/dalers/mywind )<br>
4)Create a .env file by copying variables from example.env Fill in those values in .env file<br>
5)Create a .htaccess file by copying from htaccess.htaccess.<br>
