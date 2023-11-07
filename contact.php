<!DOCTYPE html>
<html>
<head>
    <title>КССОШ</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
    <div id="logo">
        <img src="img/logo.jpg" alt="Логотип КССОШ" class="school-logo">
        <h1>МБОУ Кысыл Сырская средняя общеобразовательная школа</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Новости</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>
    </header>
    <main>
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'index';
        switch ($page) {
            case 'index':
                echo '<h2>Контакты нашей школы</h2>';
                echo '<h2>Директор: Икоева Альда Зауровна</h2>';
                echo '<h2>Заместитель директора по учебной части: Заболотняя Наталья Владимировна</h2>';
                echo '<img src="img/image3.jpg" alt="Главное изображение">';
                break;
            case 'about':
                echo '<h2>О нас</h2>';
                echo '<p>Мы - ваша школа. Мы делаем важные вещи.</p>';
                break;
            case 'contact':
                echo '<h2>Наши контакты</h2>';
                echo '<p>Вы можете связаться с нами по адресу: kysyl-syr-school@gmail.com</p>';
                break;
            default:
                echo '<h2>Страница не найдена</h2>';
        }
        ?>
    </main>
    <footer class="secondary-footer">
    <div class="contact-info">
        <h3>Контакты</h3>
        <p>РС(Я),Вилюйский у., п. Кысыл-Сыр, ул. Интернациональная, д. 1.</p>
        <p>Телефон: 8 (411) 32-20-4-50</p>
        <p>Email: schksyr@yandex.ru</p>
    </div>
</footer>
</body>
</html>