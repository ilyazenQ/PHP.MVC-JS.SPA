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
<h2>Инструкции</h2>
Для разработки использовался openserver(os), его настройки:<br>
<img src="https://github.com/ilyazenQ/PHP.MVC-JS.SPA/blob/main/gitpicture/4.PNG"></img><br>
Доменное имя:<br>
<img src="https://github.com/ilyazenQ/PHP.MVC-JS.SPA/blob/main/gitpicture/5.PNG"></img><br>
Для JsSpa доменное имя: frontspa/
<br>
1)Скачайте/клонируйте репозиторий (в папку openserver/domains при использовании os)<br>
Для phpapi:<br>
2)Используйте composer update в папке с проектом <br>
3)Заполните БазуДанных (https://github.com/dalers/mywind )<br>
4)Создайте .env перенеся информацию из example.env<br>
Для обоих:<br>
5)Создайте .htaccess перенеся информацию из .htaccess.example<br>
