<!DOCTYPE html>
<html>
<head>
    <title>КССОШ</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .slider-image {
            transition: opacity 1s;
        }
    </style>
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
                echo '<h2>Добро пожаловать в КССОШ!</h2>';
                echo '<h2>Наша школа славится почетными учителями а также современным дизайном.</h2>';
                echo '<div class="image-collage">';
                echo '<img src="img/image1.jpg" alt="Фото 1" class="slider-image">';
                echo '<h2>ПАО «ЯТЭК» совместно с Благотворительным фондом «Новый дом» завершили реновацию средней общеобразовательной школы в посёлке Кысыл-Сыр.';
                echo '20 апреля в рамках рабочей поездки глава Якутии Айсен Николаев посетил обновлённую школу, которую можно по праву считать образцовой на российском Севере.</h2>';
                echo '<img src="img/image.jpg" alt="Главное изображение" class="centered" width="800" height="500">';
                echo '<h2>Реновация школы в посёлке Кысыл Сыр!</h2>';
                echo '<video controls>';
                echo '<source src="img/video.mp4" type="video/mp4">';
                echo 'Ваш браузер не поддерживает видео HTML5.';
                echo '</video>';
                break;
            case 'about':
                echo '<h2>О нас</h2>';
                echo '<p>Мы - ваша компания. Мы делаем важные вещи.</p>';
                break;
            case 'contact':
                echo '<h2>Наши контакты</h2>';
                echo '<p>Вы можете связаться с нами по адресу: contact@example.com</p>';
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
    <script>
        const images = [
            "img/image1.jpg",
            "img/image2.jpg",
            "img/image3.jpg",
            "img/image4.jpg",
            "img/image5.jpg",
            "img/image6.jpg"
        ];

        let currentImageIndex = 0;
        const imageElement = document.querySelector(".slider-image");

        function changeImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            imageElement.style.opacity = 0;
            setTimeout(() => {
                imageElement.src = images[currentImageIndex];
                imageElement.style.opacity = 1;
            }, 1000);
        }

        setInterval(changeImage, 3000);
    </script>
</body>
</html>