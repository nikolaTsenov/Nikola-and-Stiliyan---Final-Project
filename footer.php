</div>

<div id="topBrands">
    <h1 id="brandsHeader">В нашия сайт може да изберете от хиляди артикули с различни брандове! Ето и нашите топ брандове в тази категория:</h1>
    <div class="slideshow-container">
        <?php
        $countTopBrands = 4;

        for ($index = 1; $index <= $countTopBrands; $index++) {
            ?>
            <div class="techBrand fade">
                <div class="numbertext"><?php echo $index . " / " . $countTopBrands; ?></div>
                <div class="carouselImg"><img src="./assets/images/TopBrands/brand<?php echo $index; ?>.jpg" style="width: 100%; height: 100%"></div>
                <div class="text">Най-търсените брандове</div>
            </div>
            <?php
        }
        ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next"
                                                                 onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align: center">
        <?php
        for ($index = 1; $index <= $countTopBrands; $index++) {
            ?>
            <span class="dot" onclick="currentSlide(<?php echo $index; ?>)"></span>
            <?php
        }
        ?>
    </div>
</div>
<!-- The below button is hidden it serves to navigate to the top of the page -->
<div id="goUp">
    <p><a href="#userNav">Go Up <i class="fa fa-arrow-up" aria-hidden="true"></i></a></p>
</div>
<footer id="footerContainer">
    <div id="footer">
        <div id="services">
            <h6>Услуги</h6>
            <ul>
                <li><a href="">Проверка на пратката</a></li>
                <li><a href="">Гаранция и сервиз</a></li>
                <li><a href="">30 дни право на връщане</a></li>
            </ul>
        </div>
        <div id="orders">
            <h6>Поръчкии и доставка</h6>
            <ul>
                <li><a href="">Моят акаунт</a></li>
                <li><a href="">Как да поръчам онлайн</a></li>
                <li><a href="">Доставка</a></li>
                <li><a href="">Често срещани въпроси</a></li>
            </ul>
        </div>
        <div id="contacts">
            <h6>Контакти</h6>
            <ul>
                <li><a href="">Пиши ни</a></li>
                <li><a href="">Къде да ни откриеш</a></li>
            </ul>
        </div>
    </div>
    <div id="rights">
        <marquee>Всички права запазени &#169; &#174; "Никола и Стилиян"!</marquee>
    </div>
</footer>
</div>
<!-- The below js file is to regulate when the #goUp div to appear and disappear -->
<script src="./assets/js/goUpButton.js" ></script>
<!-- The below js script is to fix the position of #productNav and to regulate it through matchMedia queries in JS -->
<script src="./assets/js/fixProductNavPosition.js" ></script>
<!-- The below js script is for the carousel of thech brands -->
<script src="./assets/js/carouselTechBrands.js" ></script>
<!-- The below js script is for changing skins -->
<script src="./assets/js/changeSkin.js" ></script>
</body>
</html>