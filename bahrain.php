<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Бахрейн</h1>
                        <div class="lead">
                            <b>Столица</b>: Манама<br>
                            <b>Официальный язык</b>: арабский<br>
                            <b>Валюта</b>: BHD - бахрейнский динар(1000 филс).<br>
                            <b>Территория</b>: 750 км²<br>
                            <b>Население</b>: 1.4 млн человек<br>
                            <b>Часовой пояс</b>: UTC +3. Разница с Астаной -3 часа
                        </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="decorative-divider" preserveAspectRatio="none" viewBox="0 0 100 100">
        <polygon fill="#F8F9FB" points="0 100 100 100 100 0"></polygon>
    </svg>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <p>Бахрейн - это островное государство, расположенное на архипелаге  в Персидском заливе, имеющем такое же имя. Климат островов близок к тропическому, с теплой зимой (в январе термометр показывает в среднем +17 С) и крайне влажным знойным летом (летом термометр может показывать +37 С). Но при этом ~ 90 мм осадков выпадает на территорию королевства за год.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bahrain Timelapse - National Day Version" src="https://i.vimeocdn.com/video/386238942_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/55798862?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Bahrain Timelapse - National Day Version<br>© Sonny Saguil 2012</figcaption>
                </figure>

                <hr>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="География Сейчас! Бахрейн" src="https://i.ytimg.com/vi/lsHHhtt5fA8/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/lsHHhtt5fA8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">География Сейчас! Бахрейн<br>© Трудности перевода 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#safety">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#other">Прочее</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Бахрейн - это достаточно либеральная страна в плане образа жизни.</p>
        <p>Но все же иностранцам, выбравшим жизнь в Королевстве Бахрейн или пребывающим здесь временно, стоит почитать ислам, его устои, традиции.</p>

        <p>Например, во время Рамадана (х.), общего мусульманского поста, месяц в социальных зонах действуют ограничения на приемы пищи днем.</p>
        <p>Кроме этого, из-за перевеса количества шиитского населения есть некоторые ограничения во время основных шиитских празднеств, в особенности 9—10 Мухаррам (х.) — Ашура (Память о мученической смерти имама Хусейна).</p>
        <p>Также не стоит забывать о том, что распитие алкогольных напитков на улицах наказывается по закону.</p>

        <h5>Праздничные и нерабочие дни</h5>

            <div class="card bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Нерабочие дни:</h6>
                    <ul>
                        <li>1 января — Новый год;</li>
                        <li>1 мая — День труда;</li>
                        <li>16 декабря — День независимости, день восхода на престол покойного Эмира Исы бен Сальмана Аль-Халифы;</li>
                        <li>17 декабря — начало правления Короля Хамада бен Исы Аль-Халифы;</li>
                    </ul>
                </div>
            </div>
            <p>Выходными днями считаются пятница и суббота.</p>

            <div class="card bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Переходящие праздники по исламскому календарю Хиджре (х.). </h6>
                    <ul>
                        <li>Мухаррам (х.) — Новый год по Хиджре; </li>
                        <li>Мухаррам (х.) — Ашура (Память о мученической смерти имама Хусейна);</li>
                        <li>Шавваль(х.) — Ид-аль-фитр (Ураза Байрам), окончание месяца Рамадан;</li>
                        <li>Зуль-Хиджжа (х.) — День Арафа (паломники, совершающие Хадж, пребывают в местности Арафа);</li>
                        <li>Зуль-Хиджжа (х.) — праздник жертвоприношения Ид-аль-Адха (Курбан-байрам).</li>
                    </ul>
                </div>
            </div>

        <!--<div class="video-cover">
            <img alt="Image" src="https://images.unsplash.com/photo-1516387938699-a93567ec168e" class="bg-image" />
            <div class="video-play-icon">
                <i class="icon-controller-play"></i>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/EwJHgWu_o5I?autoplay=1&showinfo=0&rel=0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="video-cover">
            <img alt="Image" src="https://images.unsplash.com/photo-1516387938699-a93567ec168e" class="bg-image" />
            <div class="video-play-icon">
                <i class="icon-controller-play"></i>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/uyrqXo7pY0s?autoplay=1&showinfo=0&rel=0" allowfullscreen></iframe>
            </div>https://www.youtube.com/embed/EwJHgWu_o5I
        </div>-->
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container"> 
        <h2>Посещение гражданами Казахстана</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
        <p>Для посещения Королевства Бахрейн казахстанцам нужна виза, её оформить можно электронно.</p>
        <p>Для оформления визы вам необходимы сканированная фотография для паспорта(должна быть не старше 6 месяцев размером 3,5*4,5). Скан(цветной) вашего загранпаспорта, он не должен быть старше 10 лет и действовать должен как минимум 3 месяца после истечения срока действия визы. Также вы должны предоставить подтверждение брони отеля(доказательства нужны именно от отеля, не от посредников) и бронирование билетов туда и обратно. Если есть приглашение, то его также желательно предоставить.</p>
        <h5>Авиасообщение</h5>
        <p>К сожалению, прямых авиарейсов из Казахстана в Бахрейн нет. В аэропорт Бахрейна можно долететь с пересадкой в Стамбуле, Дубай и Франкфурте</p>
        <a href="http://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
           <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Электронная виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span class="h6"><b>Рекомендации</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>У девушек до 30 лет без сопровождения отца, брата или мужа при оформлении электронной визы могут возникнуть трудности, поэтому рекомендуется обращаться в посольство</div>
                            </div>
                        </li>
                    </ul>
                </div>

    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Таможенная служба Бахрейна - <a href="http://www.bahraincustoms.gov.bh/" target="_blank">bahraincustoms.gov.bh</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Стоит помнить, что провезти вы(если вам 18 лет и больше) можете без пошлины: 1 литр слабоалкогольных напитков, ящик пива в банках и 1 литр крепких напитков, насчет табака, с собой вы можете провозить 50 сигар, не более 400 сигарет и 250 грамм табака в открытой упаковке.</p>
        <p>Алкогольные напитки:</p>
        <ul>
            <li>Крепкий алкоголь - 1 литр</li>
            <li>Ящик пива в банках</li>
            <li>Слабоалкогольные напитки - 1 литр</li>
        </ul>
        <p>Табачные изделия:</p>
        <ul>
            <li>Сигары - 50 штук</li>
            <li>Сигареты - 400 штук</li>
            <li>Табак - 250 грамм в открытой упаковке</li>
        </ul>
        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Драгоценности и ювелирные украшения вы должны задекларировать перед въездом в королевство Бахрейн. И помните, что транспортировка жемчуга ограничена.</p>

        <p>Для импорта или экспорта художественных и культурно-исторических ценностей и оружия необходимо сначала получить специальное разрешение от правительства Бахрейна.</p>



        <h5>Автомобили</h5>
        <p>При ввозе автомобиля помните о пошлине размером в 5%</p>
        <p>Однако, если автомобиль зарегистрирован в стране-участнице Совета сотрудничества арабских государств Персидского залива (ССАГПЗ), она вам не грозит.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>К сожалению, общественный транспорт в королевстве развит слабо. Вы можете перемещаться между городами на автомобилях, такси, машинах, взятых в аренду. Автобусы, с помощью которых вы можете перемещаться между районами имеют низкие тарифы, однако, туристам не рекомендуется ими пользоваться из-за сложности расписания и маршрутов.</p>
                <p>Такси вы можете узнать по классическим шашечкам на крыше. Вам следует договориться о цене заранее, так как счетчиков обычно нет, они не работают или их просто не включают.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Транспорт</div>
                                <span>~ 1.5$</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 1$</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>



        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Правила дорожного движения в Бахрейне ничем не будут выделяться для казахстанцев.</p>
                <p>В городе автотранспорт может двигаться с максимальной скорость в 50 км/ч.</p>
                <p>На трассах разрешено разгоняться до 80-100 км/ч, максимальная скорость зависит от трассы, также скорость на подъезде к населенным пунктам ограничена 50 км/ч.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span> 0.53 $/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bahrain Timelapse 8th Nov 2011 GO PRO HERO2 HD cam" src="https://i.vimeocdn.com/video/214767036_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/31812140?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Bahrain Timelapse 8th Nov 2011 GO PRO HERO2 HD cam<br>© Bobansky 2011</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>В Бахрейне нет каких-либо опасных для здоровья человека заболеваний</p>
        <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
        <sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>
                   В королевстве есть 3 своих поставщика мобильной связи - Batelco, Zain, Viva, каждый из них охватывает весь остров
                </p>

                <h5>Интернет</h5>
                <p>Обычно wi-fi можно найти во всех отелях среднего класса и выше, скорость приемлемая, зачастую соединение есть только на первом этаже отеля.
                </p>
                <p>Также распространены интернет-кафе, ориентированные на рабочих из Индии и Пакистана.</p>

                <h5>Телефонная связь</h5>
                <p>По всему королевству расположены телефоны-автоматы. С их помощью можно звонить даже в другие страны.</p>
                <p>Синие аппраты работают по монетам. Красные - по телефонным карточкам номиналами в 25, 50, 100, 200 и 500 динаров. Автоматы серебристого цвета принимают и карточки, и монеты</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дорожно-транспортная полиция</div>
                                <span>199</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый центр приема экстренных звонков</div>
                                <span>999</span>
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Льготы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>С понедельника по четверг с 19.00 до 7.00 и весь день в пятницу</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


    </div>
</section>
<section id="safety" class="bg-white">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Бахрейн - развитая и безопасная страна, ограничений для туристов по перемещению нет, явных угроз также нет. Количество преступлений в стране невелико.</p>
    </div>
</section>
<section id="other">
    <div class="container">
        <h2>Прочее</h2>

        <h5>Банкоматы</h5>

        <p>В стране можно спокойно использовать большинство международных карт.</p>
        
        <h5>Уровень Цен</h5>

        <p>Обед средней цены в ресторане обойдется вам в 10 бахр. динаров.</p>
        <p>Стоимость ночи в четырёх звездной гостинице обойдется в 70 бахр. динаров.</p>
    </div>
</section>
<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>