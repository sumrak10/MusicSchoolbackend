<!DOCTYPE html>
<html lang="ru">
<head> 
    <!-- git add .  -->
    <!-- git commit -m ""  -->
    <!-- git push -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музыкальная школа</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="sec1 sec" id="main">
        <div class="blackout"></div>
        <header>
            <div class="menu-burger">
                <div class="burger"></div>
                <div class="menu">
                    <a href="#main">Главная</a>
                    <a href="photo.html">Фото</a>
                    <a href="video.html">Видео</a>
                    <a href="about.html">О нас</a>
                </div>
            </div>
            <div class="record">
                <a href="#reg">Записаться на пробный <br> бесплатный урок</a>
            </div>
            <div class="social">
                <!-- <a href="https://t.me/sumrak10" class="social-link">
                    <img src="media/social/telegram.svg" alt="telegram" class="social-link-img">
                </a> -->
                <a href="https://instagram.com/music_module" class="social-link">
                    <img src="media/social/instagram.svg" alt="instagram" class="social-link-img">
                </a>
                <a href="https://vk.com/musicmodule" class="social-link">
                    <img src="media/social/vk.svg" alt="vk" class="social-link-img">
                </a>
            </div>
        </header>
        <div class="info">
            <div>
                <p>Возможно все! <br> На не возможное просто <br> требуется больше времени</p>
            </div>
            <div>
                <p>город Тюмень улица Республики <br> 143/2 Офис 401 Этаж 4</p>
            </div>
        </div>
        <div class="logo">
            <img src="./media/logo.png" alt="logo">
        </div>
    </section>
    <section class="card-section">
        <div class="card-box">
            <a href="#reg" class="card card1">
                <div class="front">
                    <div class="card-image"></div>
                    <p>Инструмент, способный свернуть горы и растопить сердца - в талантливых руках.</p>    
                </div>
                <div class="back">
                    <p>
                        Научим вас: <br>
                        - Держать ритм <br>
                        - Запиливать крутые соло <br>
                        - Брать мощные риффы <br>
                    </p>
                    <p>Стоимость обучения: <br>
8 групповых занятий - 3 500 р <br>
8 онлайн-занятий - 5000 р <br>
8 индивидуальных занятий - 5000 р <br>
                    </p>
                </div>
            </a>
            <a href="#reg" class="card card2">
                <div class="front">
                    <div class="card-image"></div>
                    <p>Это классика! И ты научишься на ней играть правильно :)</p>    
                </div>
                <div class="back">
                    <p>
                        Мы научим: <br>
- Правильной посадке (да-да, это важно!) <br>
- Правильной постановке руки <br>
- Практике постановки аккордов, технике перебора и боя <br>
                    </p>
                    <p>Стоимость обучения: <br>
                        8 групповых занятий - 3 500 р <br>
                        8 онлайн-занятий - 5000 р <br>
                        8 индивидуальных занятий - 5000 р <br>
                                            </p>
                </div>
            </a>
            <a href="#reg" class="card card3">
                <div class="front">
                    <div class="card-image"></div>
                    <p>Бас - это сердечный пульс любой мелодии. Вместе с ударными именно он образует ритм-секцию, на которую равняются все остальные в группе.</p>    
                </div>
                <div class="back">
                    <p>
                        Мы уже обучили и выпустили не один десяток басистов, которые успешно устроились в музыкальные коллективы - и не только тюменские ;)
Хочешь пополнить их число?
                    </p>
                    <p>Стоимость обучения: <br>
                        8 групповых занятий - 3 500 р <br>
                        8 онлайн-занятий - 5000 р <br>
                        8 индивидуальных занятий - 5000 р <br>
                                            </p>
                </div>
            </a>
            <a href="#reg" class="card card4">
                <div class="front">
                    <div class="card-image"></div>
                    <p> Маленькая гавайская гитара с большими возможностями. Это как акустическая гитара, только мобильнее.</p>    
                </div>
                <div class="back">
                    <p>
                        Ни разу не пробовал? Не беда - приходи знакомиться с инструментом и с преподавателем. Это бесплатно. Ведь за знакомство с другом денег не берут)
А мы не раз уже становимся с учениками хорошими друзьями.
                    </p>
                    <p>Стоимость обучения: <br>
                        8 групповых занятий - 3 500 р <br>
                        8 онлайн-занятий - 5000 р <br>
                        8 индивидуальных занятий - 5000 р <br>
                                            </p>
                </div>
            </a>
        </div>
    </section>
    <!-- <div class="section">
        <p>А теперь немного о нас</p>
        <img src="./media/smile2.png" alt="^^" width="70px" height="70px">
    </div> -->
    <div class="section">
        <p>Понравилось? Присоединяйся к нам!</p>
        <!-- <img src="./media/smile2.png" alt="^^" width="70px" height="70px"> -->
    </div>
    <section class="reg" id="reg">
        <div class="reg-area">
            <form enctype="multipart/form-data" method="post" action="send.php" id="msform" name="reg">
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Расскажите нам о себе</h2>
                  <h3 class="fs-subtitle">Первое занятие бесплатно :)</h3>
                  <input type="text" name="name" placeholder="Имя и фамилия" />
                  <input type="text" name="contact" placeholder="Телефон" />
                  <input type="text" name="email" placeholder="Почта" />
                  <!-- <input type="text" name="instrument" placeholder="Инструмент" /> -->
                  <select size="1" name="instrument">
                    <option selected disabled>Выберите инструмент</option>
                    <option value="Электрогитара">Электрогитара</option>
                    <option value="Классика">Классика</option>
                    <option value="Бас-гитара">Бас-гитара</option>
                    <option value="Укулеле">Укулеле</option>
                   </select>
                  <input type="submit" name="send" class="next action-button" value="Записаться!" />
                </fieldset>
              </form>
        </div>
    </section>
    <footer class="sec">
        <div class="blackout"></div>
        <div class="footer">
            <div>All rights reserved. 2020</div>
            <div>Сайт создан smrk10 inc.</div>
        </div>
    </footer>
    <script src="js/main.js" defer></script>
</body>
</html>