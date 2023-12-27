@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Контакты</h1>
            </div>
        </div>
    </section>

    <section class="our-experience grey-bg sp-two">
        <div class="container">
            <div class="sec-title deep">
                <div class="big-title">Региональные центры</div>
                <h1>Наши офисы и контакты</h1>
            </div>
            <div class="tab-box tab-box-contacts">
                <ul class="tab-list">
                    <li><a href="#tab-one" class="active-btn tab-btn">Астана</a></li>
                    <li><a href="#tab-two" class="tab-btn">Усть-Каменогорск</a></li>
                    <li><a href="#tab-three" class="tab-btn">Семей</a></li>
                    <li><a href="#tab-four" class="tab-btn">Кокшетау</a></li>
                    <li><a href="#tab-five" class="tab-btn">Павлодар</a></li>
                    <li><a href="#tab-six" class="tab-btn">Туркестан</a></li>
                    <li><a href="#tab-seven" class="tab-btn">Талдыкорган</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-item active-tab" id="tab-one">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Шоссе Коргалжын, 19, <br> Бизнес-центр
                                    "Korgalzhyn"</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <h6 class="m-0">ЦКЦ</h6>
                                    <p class="m-0">+7(747) 095 12-42</p>
                                    <p class="m-0">+7(717) 279 04-49</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <h6 class="m-0">ЦКЦ Корпоративный отдел</h6>
                                    <p class="m-0">+7(747) 095 12-42</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map1" style="width: 100%; height: 400px;"></div>
                    </div>

                    <div class="tab-item" id="tab-two">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Мызы 16/1, ТД Альшемали, <br>офис 412-413</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-26</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(723)220 85-02</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map2" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="tab-item" id="tab-three">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Площадь Абая 5, <br>Бизнес-центр "Жаксылык", 101 офис</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-25</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(722) 236 03-30</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map3" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="tab-item" id="tab-four">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Момышулы 41а, 3 этаж</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-17</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(716) 290 11-38</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map4" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="tab-item" id="tab-five">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Исиналиева Михаила 1a, 202 офис</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-32</p>
                                    <p class="m-0">+7(718) 239 08-64</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">Экибастуз</p>
                                    <p class="m-0">+7(747) 095 12-40</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map5" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="tab-item" id="tab-six">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Кожанова 41/1</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-19</p>
                                </div>
                            </li>

                            <li><span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">Кентау: +7(747) 095 12-24</p>
                                    <p class="m-0">Тюлькубас: +7(747) 095 12-16</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map6" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="tab-item" id="tab-seven">
                        <ul class="contact-info-list mb-30">
                            <li><span class="icon flaticon-signs mr-3"></span>
                                <p class="m-0">Проспект Нурсултана Назарбаева, 173в, <br>(Юридический колледж), 3 этаж, Офис 322</p>
                            </li>
                            <li>
                                <span class="icon flaticon-headphones"></span>
                                <div class="ml-3">
                                    <p class="m-0">+7(747) 095 12-35</p>
                                </div>
                            </li>
                        </ul>
                        <div id="map7" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section sp-two">
        <div class="container">
            <div class="sec-title centered">
                <h1>Контактная форма</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="default-form-area">
                        <form id="contact-form" class="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value=""
                                               placeholder="Имя" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_subject" class="form-control" value=""
                                               placeholder="Фамилия" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email"
                                               value="" placeholder="Email" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_phone" class="form-control" value=""
                                               placeholder="Телефон" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required"
                                                  placeholder="Ваше сообщение" aria-required="true"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-btn text-center">
                                <div class="form-group style-two">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                           value="">
                                    <button class="theme-btn btn-style-one" type="submit"
                                            data-loading-text="Please wait...">Связаться с нами
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
    <script>

        DG.then(function () {
            const maps = [];

            function initializeMaps() {
                maps.push(
                    DG.map('map1', {
                        center: [51.146752, 71.371511],
                        zoom: 16
                    }),

                    DG.map('map2', {
                        center: [49.961392, 82.633933],
                        zoom: 16
                    }),

                    DG.map('map3', {
                        center: [50.406418, 80.249136],
                        zoom: 16
                    }),

                    DG.map('map4', {
                        center: [53.283583, 69.378605],
                        zoom: 17
                    }),

                    DG.map('map5', {
                        center: [52.278323, 76.936989],
                        zoom: 17
                    }),

                    DG.map('map6', {
                        center: [43.30206, 68.272081],
                        zoom: 17
                    }),

                    DG.map('map7', {
                        center: [45.014735, 78.351735],
                        zoom: 17
                    }),
                );

                maps.forEach((map, index) => {
                    DG.marker(map.getCenter()).addTo(map).bindPopup('Helios Soft');
                });
            }

            initializeMaps();
            const tabs = document.querySelectorAll('.tab-list .tab-btn');
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function () {
                    maps[index].invalidateSize();
                });
            });
        })

    </script>

@endsection
