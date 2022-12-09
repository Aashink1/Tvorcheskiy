<?php
session_start();
header("Content-type: text/html; charset=UTF-8");
require_once 'functions/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
      <div class="line4"></div>
      <div class="line5"></div>
      <div class="line6"></div>
      <div class="line7"></div>
      <div class="line8"></div>
      <div class="line9"></div>
      <div class="Container">
        <div class="Header">
          <div class="MEDI">
            <img class="img1" src="images/wings.png" alt="" />
            <img class="img2" src="images/MEDI.png" alt="" />
          </div>
          <img class="Telephone" src="images/+7 (123) 456 78 90.png" alt="" />
          <div class="Nashi_Saloni">
            <p class="Saloni">Наши салоны</p>
            <img class="krug" src="images/Krug.png" alt="" />
          </div>
          <button class="Versia">
            <img class="Eye" src="images/eye.png" alt="" />
            <p class="Text_Versia">ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</p>
          </button>
          <button class="Silki">
            <img src="images/vk.png" alt="" />
          </button>
          <button class="Silki">
            <img src="images/youtube.png" alt="" />
          </button>
          <button class="Silki">
            <img src="images/facebook.png" alt="" />
          </button>
          <button class="Silki">
            <img src="images/instagram.png" alt="" />
          </button>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <ul class="container1">
          <li class="container1_menu">
            <a href="#" class="menu_links">Косметология</a>
          </li>
          <li class="container1_menu">
            <a href="#" class="menu_links">Пластическая хирургия</a>
          </li>
          <li class="container1_menu">
            <a href="#" class="menu_links">Стоматология</a>
          </li>
          <li class="container1_menu">
            <a href="#" class="menu_links">Лазерная медецина</a>
          </li>
          <li class="container1_menu">
            <a href="#" class="menu_links">Контакты</a>
          </li>
        </ul>

        <?php if(!empty($_SESSION['email'])): ?>
        <form action="autoriz/pp.php">
          <button class="zapis">Запись на прием</button>
        </form>
        <?php else: ?>
        <form action="autoriz/login.php">
          <button class="zapis">Запись на прием</button>
        </form>
        <?php endif; ?>

        <img class="Osnovnay" src="images/KARTINKA.png" alt="" />
        <h1 class="Kosmetologia">Косметология</h1>
        <p class="Sovremeny">
          Современный мир диктует новые каноны жизни: ухоженное<br />
          лицо и тело, стройная, подтянутая фигура — сегодня это<br />
          неотъемлемые черты привлекательной внешности,<br />
          характеризующие человека благополучного и успешного.
        </p>
        <button class="Podrobnee">ПОДРОБНЕЕ</button>
        <button class="Strelka1">
          <img class="Arrow" src="images/Arrow 1.png" alt="" />
        </button>
        <button class="Strelka2">
          <img src="images/Arrow 2.png" alt="" />
        </button>
        <button class="Kompleks">Комплексные процедуры</button>
        <button class="Tcentr">Центр обучения</button>
        <button class="VIP">VIP клиентам</button>
      </div>
      <div class="SecondContainer">
        <div class="SupContainer1">
          <div class="SupContainer2">
            <button class="Inovasii">Инновации</button>
            <p class="MiPraktikuem">
              Мы практикуем новый курс<br />
              процедур аппаратной<br />
              косметологии
            </p>
            <div class="StrelkaPodrobnee">
              <button class="Strelka_Podrobnee">
                <div class="arrow-1">
                  <div></div>
                </div>
              </button>
              <p class="podrobnee">ПОДРОБНЕЕ</p>
            </div>
            <img class="MikroKartinka" src="images/mikrokartinka.png" alt="" />
          </div>
          <div class="SupContainer3">
            <button class="Estetika">Эстетика красоты</button>
            <div class="Sov78">
              <p class="Chislo">78</p>
              <p class="Sovremenich">
                Современных центра<br />
                в странах СНГ
              </p>
            </div>
            <div class="Sov78">
              <p class="Chislo">78</p>
              <p class="Sovremenich">
                Современных центра<br />
                в странах СНГ
              </p>
            </div>
            <div class="Uniq20">
              <p class="Chislo1">20</p>
              <p class="Unikalnich">
                Уникальных патентов<br />
                в области косметологии
              </p>
            </div>
            <div class="Sov78">
              <p class="Chislo">78</p>
              <p class="Sovremenich">
                Современных центра<br />
                в странах СНГ
              </p>
            </div>
          </div>
          <img class="Patent" src="images/Patent.png" alt="" />
        </div>
      </div>
      <div class="ThirdContainer">
        <div class="Novisti">
          <button class="KnopkaNovosti">Новости</button>
          <div class="GreenBox">
            <p class="Pochemu">
              Почему рекомендуется посещать<br />
              профессионального косметолога. Мнение<br />
              специалистов центра
            </p>
          </div>
          <p class="Standartizasia">
            Стандартизация деятельности клиник в<br />
            соответствии с ISO 9001:2015.
          </p>
          <p class="Individual">
            Индивидуальный подход к каждому пациенту и<br />
            подбор оптимальных косметологических методик.
          </p>
        </div>
        <div class="Mnenie">
          <p class="PochemyNe">
            Почему рекомендуется посещать профессионального<br />
            косметолога. Мнение специалистов центра
          </p>
          <div class="Proseduri">
            <div class="circle"></div>
            <p class="TEXT">
              Процедуры аппаратной косметологии на оборудовании экспертного
              класса от ведущих<br />
              мировых производителей могут проводиться в любом возрасте и решать
              широкий спектр<br />
              проблем: возрастные изменения, покраснения, акне и купероз, потеря
              тонуса и упругости<br />
              кожи, отечность, целлюлит и т. п.
            </p>
          </div>
          <div class="Proseduri">
            <div class="circle"></div>
            <p class="TEXT">
              С помощью инъекционных методик мы можем разгладить морщины,
              провести объёмное<br />
              моделирование, увлажнить кожу, ввести активные вещества в
              поверхностные и средние слои<br />
              кожи, запустить процессы омоложения.
            </p>
          </div>
          <div class="Proseduri">
            <div class="circle"></div>
            <p class="TEXT">
              Лазерное и фотоомоложение помогут запустить процесс синтеза
              собственного коллагена,<br />
              улучшить светооптические свойства кожи, а также получить
              максимальный эффект подтяжки<br />
              лица без уколов и длительного восстановительного периода.
            </p>
          </div>
          <div class="Proseduri">
            <div class="circle"></div>
            <p class="TEXT">
              Курс процедур лазерной эпиляции поможет навсегда избавиться от
              проблемы<br />
              нежелательных волос.
            </p>
          </div>
        </div>
      </div>
      <div class="ForthContainer">
        <div class="GreyRect">
          <p class="Actualnie">Актуальные спецпредложения</p>
        </div>
        <div class="FourRect">
          <div class="Cosmetologia">
            <img class="laptop" src="images/laptop.png" alt="" />
            <button class="Cosm">Косметология</button>
            <div class="Laser">
              <p class="LaserPhoto">
                Лазерное и<br />
                фотоомоложение
              </p>
              <div class="StrelkaPodrobnee">
                <button class="Strelka_Podrobnee">
                  <div class="arrow-1">
                    <div></div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <div class="Cosmetologia">
            <img class="laptop" src="images/pict2.png" alt="" />
            <button class="Cosm">Косметология</button>
            <div class="Laser">
              <p class="LaserPhoto">
                Лазерное и<br />
                фотоомоложение
              </p>
              <div class="StrelkaPodrobnee">
                <button class="Strelka_Podrobnee">
                  <div class="arrow-1">
                    <div></div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <div class="Cosmetologia">
            <img class="laptop" src="images/pict3.png" alt="" />
            <button class="Cosm">Косметология</button>
            <div class="Laser">
              <p class="LaserPhoto">
                Лазерное и<br />
                фотоомоложение
              </p>
              <div class="StrelkaPodrobnee">
                <button class="Strelka_Podrobnee">
                  <div class="arrow-1">
                    <div></div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <div class="Cosmetologia">
            <img class="laptop" src="images/pict4.png" alt="" />
            <button class="Cosm">Косметология</button>
            <div class="Laser">
              <p class="LaserPhoto">
                Лазерное и<br />
                фотоомоложение
              </p>
              <div class="StrelkaPodrobnee">
                <button class="Strelka_Podrobnee">
                  <div class="arrow-1">
                    <div></div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="FifthContainer">
        <div class="UslugiX6">
          <div class="UslugiX3">
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
          </div>
          <div class="UslugiX3">
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
            <ul class="SPISOK">
              <p class="USLUGI">Услуги</p>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Косметология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Пластическая хирургия</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Стоматология</a>
              </li>
              <li class="SPISOK_menu">
                <a href="#" class="SPISOK_links">Лазерная медецина</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="Telephone_Adres">
          <div class="Telephone812">
            <p class="SlovoTelephone">Телефон</p>
            <p class="Nomer">+7 (812) 123-45-67</p>
          </div>
          <div class="ADRES">
            <p class="SlovoTelephone">Адрес</p>
            <p class="Nomer">Невский пр. 140, пом. 10</p>
            <button class="KakProexat">как проехать?</button>
          </div>
          <div class="ADRES">
            <p class="SlovoTelephone">Адрес</p>
            <p class="Nomer">Большой пр. 12</p>
            <button class="KakProexat">как проехать?</button>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="FOOTER">
        <div class="TsentrCosmelogii">
          <p class="c">
            (c) 2021. Центр космелогии. Все права защищены.<br />
            Наши сертификаты на осуществление деятельности.<br />
            Патенты на использование технологий.
          </p>
          <p class="Politika">Политика конфиденциальности</p>
        </div>
        <div class="Slabovid">
          <button class="Versia">
            <img class="Eye" src="images/eye.png" alt="" />
            <p class="Text_Versia">ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</p>
          </button>
        </div>
        <div class="SILOCHKI">
          <button class="Silki">
            <img src="images/vk.png" alt="" />
          </button>
        </div>
        <div class="SILOCHKI">
          <button class="Silki">
            <img src="images/youtube.png" alt="" />
          </button>
        </div>
        <div class="SILOCHKI">
          <button class="Silki">
            <img src="images/facebook.png" alt="" />
          </button>
        </div>
        <div class="SILOCHKI">
          <button class="Silki">
            <img src="images/instagram.png" alt="" />
          </button>
        </div>
      </div>
    </footer>
    <?php if(!empty($_SESSION['email'])){
    echo'<a href="functions/logout.php">Выйти</a>';
    }
    else echo '<a>Тут ничего нет</a>';
    ?>
  </body>
</html>
