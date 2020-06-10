<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="../CSS/MainStyles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Main</title>
    <?php
    include_once "../PHP/make_stats.php";
    $cssClass = null;
    if (isset($_GET["active"]))
        $cssClass = $_GET["active"];
    ?>
</head>
<body>
<div class="mainContainer">
    <header class="midStyle header">
        <a href="#"><div class="logoNav"></div></a>
        <nav class="menu">
            <ul>
                <li class="<?php echo ($cssClass == "news") ? "active" : "" ?>"><a href="Main.php?active=news">Новости</a></li>
                <li class="<?php echo ($cssClass == "tech") ? "active" : "" ?>"><a href="Main.php?active=tech">Технологии</a></li>
                <li class="<?php echo ($cssClass == "industry") ? "active" : "" ?>"><a href="Main.php?active=industry">Индустрия</a></li>
                <li class="<?php echo ($cssClass == "reg") ? "active" : "" ?>"><a href="../PHP/LogForm.php">Регистрация</a></li>
            </ul>
        </nav>
    </header>
    <div class="midStyle"><h1>Новости</h1></div>
    <div class="midContainer">
        <div class="newsContainer">
            <div class="newsBlock">
                <a href="../HTML/FFVII.html">
                    <div class="newsImgBlock"><img src="../Pictures/FFB.jpg" alt="FFVII Remake"></div>
                    <div class="newsTitleBlock"><h3>Всё, что нужно знать о Final Fantasy VII Remake</h3></div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/silent_hill.html">
                    <div class="newsImgBlock"><img src="../Pictures/silenthill.jpg" alt="Silent Hill"></div>
                    <div class="newsTitleBlock"><h3>СМИ: Sony работает над перезапуском Silent Hill и недовольна Death Stranding</h3></div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/gdc2020.jpg" alt="The Last of Us"></div>
                    <div class="newsTitleBlock"><h3>Организаторы GDC 2020 опубликовали расписание презентаций</h3></div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/E3_cancelled.html">
                    <div class="newsImgBlock"><img src="../Pictures/e3.jpg" alt="The Last of Us"></div>
                    <div class="newsTitleBlock"><h3>Официально: E3 2020 отменили</h3></div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/witcher.jpg" alt="Цитадель, HF:Alyx"></div>
                    <div class="newsTitleBlock">
                        <h3>Нет, CD Projekt не заявила, что следующей игрой после Cyberpunk 2077 будет новый «Ведьмак»</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/cp2077fm.jpg" alt="Цитадель, HF:Alyx"></div>
                    <div class="newsTitleBlock">
                        <h3>К 8 марта создатели Cyberpunk 2077 показали постер с женской версией Ви</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/codw.jpg" alt="Цитадель, HF:Alyx"></div>
                    <div class="newsTitleBlock">
                        <h3>Вышла Call of Duty: Warzone — бесплатная королевская битва на 150 человек</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/DOOMEternal.jpg" alt="Цитадель, HF:Alyx"></div>
                    <div class="newsTitleBlock">
                        <h3>Bethesda обновила системные требования DOOM Eternal</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/RE3.jpg" alt="RE:3"></div>
                    <div class="newsTitleBlock">
                        <h3>В российской рознице подорожают ремейки Resident Evil 3 и Final Fantasy VII</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
            <div class="newsBlock">
                <a href="../HTML/Empty.html">
                    <div class="newsImgBlock"><img src="../Pictures/TLOU2.jpg" alt="Цитадель, HF:Alyx"></div>
                    <div class="newsTitleBlock">
                        <h3>Сегодня должна была выйти The Last of Us: Part II</h3>
                    </div>
                </a>
                <div class="newsBlockBottom"><p>07.03.2020</p></div>
            </div>
        </div>
        <div class="sidebarContainer">
            <div class="sidebarTitle"><h2>Лучшие игры декады</h2></div>
            <div class="bestListBar">
                <ol class="bestList">
                    <li>Super Mario Galaxy 2</li>
                    <li>The Legend of Zelda: Breath of the Wild</li>
                    <li>Red Dead Redemption 2</li>
                    <li>Grand Theft Auto V</li>
                    <li>Super Mario Odyssey</li>
                    <li>Mass Effect 2</li>
                    <li>The Elder Scrolls V: Skyrim</li>
                    <li>The Last of Us </li>
                    <li>God of War</li>
                    <li>Batman: Arkham City</li>
                </ol>
            </div>
        </div>
    </div>
    <footer class="midStyle footerContainer">
        <div class="footerText">
            <p>Ждете Cyberpunk 2077 или PlayStation 5? Интересуетесь новой Call of Duty
                или ремейком Resident Evil? Ищите альтернативу Civiliztion или Warcraft?
                Смотрите “Ведьмака”, обожаете “Звездные войны”? Обсуждаете теории “Мстители:
                Война бесконечности” и мечтаете о новой “Дюне”? Подбираете новый процессор или
                видеокарту? Интересуетесь черными дырами, достижениями в медицине, SpaceX,
                Tesla и другими проектами Илона Маска?</p>
        </div>
    </footer>
</div>
</body>
</html>