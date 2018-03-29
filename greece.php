<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Греция</h1>
                    <div class="lead">
                        <b>Столица</b>: Афины<br>
                        <b>Официальный язык</b>: греческий<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 86 600 км².<br>
                        <b>Население</b>: 11 млн. человек<br>
                        <b>Часовой пояс</b>: EET (UTC +2, летом UTC +3) Разница с Астаной летом - 3 часа, зимой - 3 часа
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
                <p>Лежащая между горами и морем с многочисленными островами, Греция - каприз природы. Если верить легенде, она - плод любви Деметры, богини земледелия, и Посейдона, бога моря. Уникальное во всех смыслах государство, которое находится в Южной Европе. Страна расположена на многочисленных островах и Балканском полуострове. С востока ее омывают воды Эгейского и Фракийского морей, с запада – Ионическое, у юга страны подходят воды Средиземного и Критского морей. Климат Греции очень приятен и мягок. </p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Природные и исторические памятники, а также знаменитая кухня привлекают в Грецию множество туристов со всего света.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Amazing Greece :: From The Sky" src="https://i.vimeocdn.com/video/495381329_1280x536.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/110943884?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Amazing Greece :: From The Sky<br>© Robert Balasko, Art-Studio.tv 2014</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Timelapse Greece 2014" src="https://i.vimeocdn.com/video/491104854_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/107646756?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Timelapse Greece 2014<br>© Laurin Döpfner 2014</figcaption>
                </figure>



                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Древняя Греция за 18 минут" src="https://i.ytimg.com/vi/LJdhEpJ03Ug/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LJdhEpJ03Ug?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Древняя Греция за 18 минут<br>© Arzamas 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Греция гордится своей историей, насчитывающей не одно тысячелетие и наполненной мифами и легендами. Культуры и традиции современной Греции перекочевали прямиком из Древней Греции, которая являлась родиной демократии и философии, где развивалась первоначальная наука, театр и зародились Олимпийские игры.</p>
        <p>Культурное прошлое и настоящее, памятные сооружения и здания, традиции и обычаи – все это делает государство одним из самых посещаемых в мире.</p>
        
        <p>98% граждан исповедуют православие.</p>

        <h5>Праздники</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января – Новый год</li>
                    <li>6 января – Богоявление</li>
                    <li>27 февраля – Чистый понедельник – Начало Великого поста</li>
                    <li>25 марта – День независимости</li>
                    <li>14 апреля – Страстная Пятница</li>
                    <li>16 апреля – Пасха</li>
                    <li>17 апреля – Светлый понедельник</li>
                    <li>1 мая – День трудящихся</li>
                    <li>4 июня – День Святой Троицы</li>
                    <li>5 июня – День Святого Духа</li>
                    <li>15 августа – Успение Святой Богородицы</li>
                    <li>28 октября – День Охи</li>
                    <li>17 ноября – День Политехнио</li>
                    <li>25 - 26 декабря – Рождество Христово</li>
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
                <p>Жителям Казахстана для въезда нужна виза. Чтобы ее получить требуется:</p>
                <ul>
                    <li>справка с работы;</li>
                    <li>ксерокопия паспорта;</li>
                    <li>2 фото размером 35 х 45 мм;</li>
                    <li>Загранпаспорт</li>
                </ul>
                <p>Стоимость всей визы Вам обойдется в 35 евро. Генеральное консульство Греции поможет в получении всей информации.</p>
                <p>Дорога сюда незатруднительна: рейсы из г. Салоники в Астану или Алматы или же через Стамбул и Москву.</p>
                <a href="http://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span class="h6"><b>Посольство Греции в Казахстане</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>109 Microdistrict Karaotkel 2
                                    010000, Astana
                                    Kazakhstan</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Телефон</div>
                                <span>+77172 563714, 563755</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>EMAIL</div>
                                <span>gremb.ast@mfa.gr</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Сайт</div>
                                <span><a href="https://www.mfa.gr/missionsabroad/ru/kazakhstan-ru">mfa.gr</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Таможенная служба Греции - <a href="http://www.gsis.gr/gsis/info/gsis_site/index.html" target="_blank">gsis.gr</a></p>

        <p>Пошлинами не облагаются:</p>
        <ul>
            <li>Сигареты количеством до 200 штук</li>
            <li>1.5 литра алкоголя крепче 22°</li>
        </ul>
        <p>Под запретом перевоз оружия, наркотических веществ.</p>
        <p>При посещении страны с домашним питомцем необходимы справки о всех прививках.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Транспортная инфраструктура развита очень хорошо. Весь транспорт удобен, оборудован кондиционерами, не перегружен.</p>
                <p>Покупка билета на полтора часа (включает в себя проезд на любом виде транспорта) обойдется в 1,40 евро.</p>
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
                                <div>Любой вид транспорта</div>
                                <span>1.4 €/1.5 часа </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~0.68€/км</span>
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
                <p>Дороги в Афинах и Салониках характерны большим количеством пробок, загруженностью.</p>
                <p>С севера на юг простирается автострада с отличным покрытием, предполагающая уплату за проезд по ней.</p>
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
                                <div>АИ-95</div>
                                <span>1.52 €/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1.70 €/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1.31 €/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие по Криту, Греция" src="https://i.ytimg.com/vi/C3F_OxiVpNc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/C3F_OxiVpNc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Путешествие по Криту, Греция<br>© От Точки До Точки 2016</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Медицина в Греции находится на весьма высоком уровне, во всех отелях и аэропортах дежурят бригады скорой помощи. Рекомендуется оформлять медицинскую страховку, а иначе помощь обойдется слишком дорого.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>

        <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
        <sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>В стране функционируют таксофоны, для использования которых необходима карта предоплаты. Приобрести можно по цене 5-20 евро.</p>
                <p>Телефонный код Греции — 30.</p>
                <p>Телефонный код Афин — 210.</p>
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
                                <div> Международная Справочкая</div>
                                <span>169</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>100</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>166</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="#20 Райский Корфу. Греция. Орёл и Решка. Рай и Ад" src="https://i.ytimg.com/vi/lxUom8xt-Mw/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/lxUom8xt-Mw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">#20 Райский Корфу. Греция. Орёл и Решка. Рай и Ад<br>© Орел и Решка 2017</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>