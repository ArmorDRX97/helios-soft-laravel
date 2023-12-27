@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>О компании</h1>
            </div>
        </div>
    </section>


    <section class="feature-case-section-two sp-seven">
        <div class="container">
            <div class="feature-case-two">
                <div class="row align-items-md-center">
                    <div class="col-lg-6 pr-lg-5">
                        <div class="image"><img src="front/images/resource/case-4.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner-box">
                            <div class="sec-title deep">
                                <div class="big-title">>О Нас</div>
                                <h1>Удовлетворенность клиента - миссия нашей компании</h1>
                            </div>
                            <div class="service-text">
                                <p>Мы нацелены на создание долгосрочных отношений, основанных на взаимном доверии и
                                    понимании. Наше стремление не просто поддерживать, а активно развивать
                                    сотрудничество с клиентами, помогает им достигать высоких результатов в их деловой
                                    деятельности.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-experience-three sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered deep">
                <div class="big-title">Услуги</div>
                <h1>Наши продукты</h1>
            </div>
            <div class="text-center mb-80">
                <div class="text mb-40">
                    Наша компания – единственный отечественный разработчик инновационной системы для образовательных учреждений и
                    предприятий малого и среднего бизнеса. Мы специализируемся на упрощении
                    бухгалтерского учета, налогового учета, управление кадровым составом, предоставлении сервисов, таких как
                    зарплатный калькулятор и многое другое. Мы не только создаем продукт высочайшего качества, но и
                    обеспечиваем полный цикл обучения и профессиональной поддержки для наших клиентов.
                </div>
                <div class="link-btn"><a href="/contact" class="theme btn-style-one">Связаться с нами</a></div>
            </div>

            <div class="row">
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="/favorit" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-computer-1"></span>
                        </div>
                        <h4>ИС "Favorit"</h4>
                        <div class="text">
                            Единая облачная система планирования, учета и анализа
                        </div>
                    </a>
                </div>
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="/calculator" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="fa fa-calculator"></span>
                        </div>
                        <h4>Калькулятор</h4>
                        <div class="text">Зарлпатный калькулятор начальных
                            и средних образовательных учреждений
                        </div>
                    </a>
                </div>
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="/service-favorit" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-headphones"></span>
                        </div>
                        <h4>Обучение и поддержка</h4>
                        <div class="text">Авторские курсы обучения в системе "Favorit" и дальнейшее сопровождение
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="history-section grey-bg sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="content-section history-content">

                        <div class="sec-title style-two deep">
                            <div class="big-title">История компании</div>
                            <h1>Наша история</h1>
                        </div>
                        <div class="text mb-80">

                            В 1996 году начало разработки информационной системы "Favorit" было предвестием инноваций в
                            области технологий и информационных технологий. В тот период команда разработчиков
                            сфокусировалась на создании уникального продукта, способного эффективно решать широкий
                            спектр задач, начиная от управления данными и заканчивая оптимизацией бизнес-процессов.
                            Вплоть до момента запуска, каждый этап разработки преследовал стратегическую цель -
                            предоставить пользователям мощный инструмент, соответствующий самым высоким стандартам
                            функциональности и надежности.
                        </div>

                        <!--Timeline Container-->
                        <div class="timeline-container">
                            <div class="vertical-line"></div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>1998</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Старт компании</h4>
                                        <div class="text">
                                            Была представлена первая версия нового программоного продукта ИС "Favorit",
                                            целью которой является учет административно-хозяйственных операций.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2002</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Укрепление позиций</h4>
                                        <div class="text">
                                            Широкое применение и использование в подразделениях АО НК "Казахстан Темир
                                            Жолы"
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2008</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Интеграция</h4>
                                        <div class="text">
                                            Для обеспечения максимальной гибкости и удобства использования, в ходе
                                            разработки "Favorit" была успешно реализована функциональность интеграции из
                                            других информационных систем. Эта инновационная возможность позволяет
                                            пользователям эффективно взаимодействовать с уже существующими системами,
                                            обеспечивая беспрецедентный уровень совместимости и обмена данными между
                                            различными платформами.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2012</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Регистрация прав</h4>
                                        <div class="text">
                                            Для обеспечения юридической защиты объекта авторского права в рамках проекта
                                            "Favorit" была проведена процедура регистрации прав на соответствующий
                                            интеллектуальный продукт.
                                        </div>
                                        <br>
                                        <div class="text">
                                            С получением прав на объект авторского права открылись возможности для
                                            коммерческого использования продукта. Коммерческое использование продукта
                                            способствовало не только
                                            развитию самой информационной системы, но и поддерживала экономический рост
                                            через предоставление эффективных решений для бизнес-сообщества.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2014</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Сертификация</h4>
                                        <div class="text">
                                            Важным этапом в разработке информационной системы "Favorit" было получение
                                            сертификата соответствия требованиям информационной безопасности. Этот
                                            сертификат подтверждает, что система была создана и функционирует с
                                            соблюдением высочайших стандартов безопасности, обеспечивая надежную защиту
                                            конфиденциальных данных и эффективное управление рисками в цифровой среде.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2018</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Реестр</h4>
                                        <div class="text">
                                            Был запущен проект <b>"Облачная система учета и планирования
                                                административно-хозяйственной деятельности для государственных
                                                организаций".</b>
                                            <br>
                                            <br>
                                            ИС "Favorit" была включена в <b>"Реестр доверенной продукции электронной
                                                промышленности и программного обеспечения Республики Казахстан"</b>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2022</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>Индустриальный сертификат</h4>
                                        <div class="text">
                                            Получение индустриального сертификата является значимым достижением в
                                            развитии информационной системы "Favorit". Этот сертификат подтверждает
                                            соответствие продукта промышленным стандартам и требованиям, что является
                                            важным подтверждением его высокого качества, надежности и соответствия
                                            стандартам отрасли.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{--                <div class="col-lg-4">--}}
                {{--                    <div class="request-callback">--}}
                {{--                        <div class="inner-box">--}}
                {{--                            <h4>Оставьте заявку на обратный звонок</h4>--}}
                {{--                            <div class="text">Оставьте вашу заявку, и мы свяжемся с вами в ближайшее время. Наши--}}
                {{--                                специалисты готовы помочь вам.--}}
                {{--                            </div>--}}
                {{--                            <div class="phone-number"><span class="flaticon-headphones"></span>+7 (999) 999 99-99</div>--}}
                {{--                            <div class="link-btn"><a href="#" class="theem-btn btn-style-one">Свяжитесь с нами</a></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>



    <section class="our-team sp-two">
        <div class="container">
            <div class="sec-title style-two centered deep">
                <h1>Руководство компании</h1>
            </div>
            <div class="row">
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team1.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Бутумбаев Серик</a></h4>
                            <div class="designation">Директор</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team3.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Андрей Николаевич</a></h4>
                            <div class="designation">Заместитель директора</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team2.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Четтыкбаевна Шолпан</a></h4>
                            <div class="designation">Заместитель директора по развитию</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team4.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Нурпеисов Даурен</a></h4>
                            <div class="designation">Исполнительный директор</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
