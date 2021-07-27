<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css?v=<?= md5(microtime()) ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="/public/scripts/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

</head>
<header>
    <div class="header_container" id="block">
        <img src="/public/pictures/emplem.png" alt="ARCHI TECH" class="header_logo-image">
        <ul class="menu">
            <li id="me"><a class="MenuList" href="">О компании</a></li>
            <li id="price"><a class="MenuList" href="">Прайс</a></li>
            <li id="portfolio"><a class="MenuList" href="">Портфолио</a></li>
        </ul>
    </div>
</header>
<body>
<img src="/public/pictures/pic-1.jpg" alt="pic-1" class="pic-1">
<div class="price" id="pricelist">
    <div class="price_info">
        <h2>Наш прайс</h2>
        <p><span>Выберите тариф по вашему вкусу</span></p>
    </div>
    <div class="price_container">
        <div class="price_basic">
            <div class="height">
                <h3>Базовый</h3>
                <h1>250р м<sup>2</sup></h1>
                <ul class="price_ul">
                    <li>Планировочные решения</li>
                    <li>План электрики</li>
                </ul>
            </div>
            <div class="btn btn-success">Сделать заказ</div>
        </div>
        <div class="price_work">
            <div class="height">
                <h3>Рабочий</h3>
                <h1>500р м<sup>2</sup></h1>
                <ul class="price_ul">
                    <li>Планировочные решения</li>
                    <li>План электрики</li>
                    <li>Рабочая документация</li>
                </ul>
            </div>
            <div class="btn btn-success">Сделать заказ</div>
        </div>
        <div class="price_full">
            <div class="height">
                <h3>Полный</h3>
                <h1>800р м<sup>2</sup></h1>
                <ul class="price_ul">
                    <li>Планировочные решения</li>
                    <li>3D-визуализация всех комнат</li>
                    <li>Рабочая документация</li>
                    <li>Спецификация мебели и отделочных матиралов</li>
                </ul>
            </div>
            <div class="btn btn-success">Сделать заказ</div>
        </div>
    </div>
</div>
<form>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Заявка на проект</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="infosend">Фамилия:</span><input maxlength="20" id="SecondName" type="text" placeholder="Иванов" name="SecondName">
                    <span class="infosend">Имя:</span> <input maxlength="20" id="Name" type="text" placeholder="Иван" name="Name">
                    <span class="infosend">Отчество:</span><input maxlength="20" id="LastName" type="text" placeholder="Иванович" name="LastName">
                    <span class="infosend">Номер телефона:</span><input maxlength="30" id="PhoneNumber" type="text" placeholder="+71122334567" name="PhoneNumber">
                    <span class="infosend">Электронная почта:</span><input maxlength="50" id="Email" type="text" placeholder="example@example.com" name="Email">
                    <span class="infosend">Комментарии:</span><textarea maxlength="200" id="Commentary" placeholder="По желанию, если хотите что-то добавить к заказу"></textarea><br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="pic2">
    <span class="NameOfProject">Базовый проект</span>
    <ul class="BodyOfProject">
        <li><a class="LinkOfProject" id="PlaneSolutions" href="#">Планировочные решения</a></li>
        <li><a class='UnderLinkOfProject' id='Plane' href='#'>Обмерный план</a></li>
        <li><a class='UnderLinkOfProject' id='Solutions' href='#'>Предпроектное предложение</a></li>
        <li><a class='UnderLinkOfProject' id='PlaneDesign' href='#'>Планировочное решение</a></li>
        <li><a class='UnderLinkOfProject' id='Furniture' href='#'>План расстановки мебели и техники с указанием
                размеров</a></li>
        <li><a class="LinkOfProject" id="PlaneOfElectric" href="#">План электрики</a></li>
    </ul>
</div>
<div class="footer">
    <a href="tel:+79966225107">Тел.: +79966225107</a>
    <p><a href="mailto:duircianos@yandex.ru">Email: duircianos@yandex.ru</a></p>
</div>
</body>
</html>
