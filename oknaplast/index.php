<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <meta name="description" content="Пластиковые окна с доставкой по Днепропетровску">
    <meta name="author" content="Honcharov Aleksandr - http://wd.honcharovs.com">
    <title>Steel Plast - Хорошие окна для вашей семьи</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.css">
    <!-- Disable-responsiveness CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/disable-responsiveness-bootstrap.css">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/roboto/roboto.css">
    <!-- Project CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <meta name='yandex-verification' content='633511efafe0432d' />        
    <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter27348644 = new Ya.Metrika({id:27348644, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/27348644" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->    
    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->           
    <?php wp_head(); ?>
</head>

<body>
     
    <!-- callback -->
    <div class="modal fade" id="z-callback" tabindex="-1" role="dialog" aria-labelledby="z-callback" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">          
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
            <h4 class="modal-title" id="myModalLabel">Оставьте свои контактные данные <br>и наш менеджер Вам перезвонит</h4>
            <form class="form-horizontal modal___form" action="z-callback.php" role="form" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="form-icon-name"></span></div>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Как Вас зовут?" required="required" pattern='[A-Za-zА-Яа-яЁё\s]{2,}' title="Поле должно содержать только буквы, не менее 2х">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="form-icon-phone"></span></div>                                
                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Ваш номер телефона" required="required" pattern="[+()0-9\s]{6,}" title='Поле должно содержать не менее 6 цифр'>
                    </div>                                       
                    <button type="submit" class="modal____button">Отправить</button>  
                    <input type="hidden" name="what_form" value="Нажали на кнопку - <b>Заказать обратный звонок</b> или <b>кнопку оставить заявку.</b><br><br><b>Нужно перезвонить!</b>">
                </div>
            </form>            
          </div>          
        </div>
      </div>
    </div>
       
    <!-- callback know_more -->
    <div class="modal fade" id="z-know_more" tabindex="-1" role="dialog" aria-labelledby="z-know_more" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">          
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
            <h4 class="modal-title" id="myModalLabel">Оставьте свои контактные данные <br>и наш менеджер перезвонит Вам <br> через 15 минут</h4>
            <form class="form-horizontal modal___form" action="z-callback.php" role="form" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="form-icon-name"></span></div>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Как Вас зовут?" required="required" pattern='[A-Za-zА-Яа-яЁё\s]{2,}' title="Поле должно содержать только буквы, не менее 2х">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="form-icon-phone"></span></div>                                
                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Ваш номер телефона" required="required" pattern="[+()0-9\s]{6,}" title='Поле должно содержать не менее 6 цифр'>
                    </div>                                       
                    <button type="submit" class="modal____button">Отправить</button>  
                    <input type="hidden" name="what_form" value="Нажали на кнопку - <b>Узнать больше</b> в <b>популярных предложениях</b><br><br><b>Нужно перезвонить через 15 минут с момента получения этого письма!</b>">
                </div>
            </form>            
          </div>          
        </div>
      </div>
    </div>
        
    <!-- sertificates big -->
        <!-- sertificate-big-1 -->
        <div class="modal fade" id="sertificate-big-1" tabindex="-1" role="dialog" aria-labelledby="sertificate-big-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">          
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>                            
                <img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-59-big.png" width="600" alt="Сертификат на готовое изделие">
              </div>          
            </div>
          </div>
        </div> 
        <!-- sertificate-big-2 -->
        <div class="modal fade" id="sertificate-big-2" tabindex="-1" role="dialog" aria-labelledby="sertificate-big-2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">          
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>                            
                <img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-60-big.png" width="600" alt="Сан заключение стр. 1">
                <img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-60-big-1.png" width="600" alt="Сан заключение стр. 2">
              </div>          
            </div>
          </div>
        </div>
        <!-- sertificate-big-3 -->
        <div class="modal fade" id="sertificate-big-3" tabindex="-1" role="dialog" aria-labelledby="sertificate-big-3" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">          
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                <img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-61-big.png" width="600" alt="Сертификат соответствия">
              </div>          
            </div>
          </div>
        </div>  
          
    <!-- 01 - header / Start -->
    <header class="header">

        <div class="header_top">
               
            <div class="container">
               
                <div class="row">
                
                    <div class="col-xs-2">                   
                        <div class="header_top__logo"></div>                    
                    </div>

                    <div class="col-xs-5">
                        <span class="header_top__slogan">Хорошие окна для вашей семьи</span>
                    </div>

                    <div class="col-xs-3">
                        <span class="header_top__address">
                            Днепропетровск, <br>
                            ул. Героев Сталинграда, 133 <br>
                            Салон «Окна, двери»
                        </span>
                        <span class="header_top__worktime">Работаем по будням с 9 до 18:00</span>
                    </div>

                    <div class="col-xs-2 text-right">
                        <span class="header_top__phones">
                            (056) 763-70-70<br>
                            (067) 63-000-62<br>
                            (066) 28-007-49
                        </span>
                    </div>
                
                </div><!-- .row / end-->
                        
            </div><!-- .container / end-->

        </div><!-- .header_top / end -->
        
        <div class="header_main">
               
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-xs-8 col-xs-offset-4">
                        
                        <div class="header_main__button ___button_callback pull-right clearfix" data-toggle="modal" data-target="#z-callback">Заказать обратный звонок</div>
                        
                        <span class="header_main__title">
                            ПОЛУЧИТЕ НЕМЕЦКИЕ ОКНА REHAU <br>
                            ЧЕРЕЗ 2 ДНЯ И НАСЛАЖДАЙТЕСЬ ТЕПЛОМ <br>
                            ДАЖЕ ПРИ -30°
                        </span>
                        
                        <span class="header_main__description">
                            Монтаж с ювелирной точностью. <br>
                            Лучшая комплектация в Днепропетровске. 
                        </span>
                        
                        <span class="header_main__discount">
                            Скидка 40% на все окна до 28 февраля
                        </span>
                        
                        <span class="header_main__counter">
                            
                            <div class="countdown-wrp">
                                <div class="time">
                                    <div class="countdown">
                                        <div class="timecount"></div>
                                        <div class="caption">
                                            <span class="label">дни</span>
                                            <span class="label">часы</span>
                                            <span class="label">мин</span>
                                            <span class="label">сек</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </span>
                        
                    </div><!-- .col-xs- / end-->
                    
                </div><!-- .row / end-->
                
                <div class="row">
                    
                    <div class="col-xs-11">
                        
                       <div class="header_main__find_out_the_cost">
                           
                            <span class="header_main__find_out_the_cost___title">
                               Узнать стоимость остекления
                            </span>
                           
                            <span class="header_main__find_out_the_cost___description">                               
                               Отправьте заявку, и мы перезвоним через 15 минут
                            </span>
                            
                            <form class="form-horizontal header_main__find_out_the_cost___form" action="z-callback.php" role="form" method="post">
                                <div class="form-group">
                                    <div class="input-group">                                  
                                        <div class="input-group-addon"><span class="form-icon-name"></span></div>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Как Вас зовут?" required="required" pattern='[A-Za-zА-Яа-яЁё\s]{2,}' title="Поле должно содержать только буквы, не менее 2х">
                                    </div>
                                    <div class="input-group">  
                                       <div class="input-group-addon"><span class="form-icon-phone"></span></div>                                
                                        <input class="form-control" id="phone" name="phone" type="phone" placeholder="Ваш номер телефона" required="required" pattern="[+()0-9\s]{6,}" title='Поле должно содержать не менее 6 цифр'>
                                    </div>                              
                                    <button type="submit" class="header_main__find_out_the_cost___form____button ___button_in_form">Получить просчет</button>
                                    <input type="hidden" name="what_form" value="Отправилено из формы - <b>Узнать стоимость остекления. Хотят получить просчет.</b><br><br><b>Нужно перезвонить в течении 15 минут с момента получения этого письма!</b>">
                                </div>
                            </form>
                           
                           
                       </div> 
                        
                    </div><!-- .col-xs- / end-->
                    
                </div><!-- .row / end-->
                
            </div><!-- .container / end--> 
                
        </div><!-- .header_main / end -->
        
        <div class="header_advantages">
           
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-xs-4">
                      
                        <span class="header_advantages__title">                            
                            7 лет
                        </span>
                        
                        <span class="header_advantages__description">
                            делаем качественные окна
                        </span>
                       
                    </div><!-- col-xs- / end -->
                    
                    <div class="col-xs-4">
                      
                        <span class="header_advantages__title">                            
                            7275 семей
                        </span>
                        
                        <span class="header_advantages__description">
                            заказали все окна у нас
                        </span>
                       
                    </div><!-- col-xs- / end -->
                    
                    <div class="col-xs-4">
                      
                        <span class="header_advantages__title">                            
                            70% клиентов
                        </span>
                        
                        <span class="header_advantages__description">
                            обращаются к нам по <br>
                            рекомендации знакомых
                        </span>
                       
                    </div><!-- col-xs- / end -->                  
                    
                </div><!-- .row / end-->
                
           </div><!-- .container / end-->
            
        </div><!-- .header_main / end -->

    </header> 
    <!-- 01 - header / End -->

    <!-- 02 - section four reasons / Start -->
    <section class="four_reasons">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="four_reasons__title">
                        4 причины заказать окна у нас                        
                    </div>
                    
                    <!-- Reason 1 -->
                    <div class="four_reasons__reason">
                        <span class="four_reasons__reason___number">1</span>
                        <span class="four_reasons__reason___name">Вы получаете готовые окна через 2 дня</span>
                    </div>
                    
                    <div class="four_reasons__description">
                        Чтобы уже на этой неделе вы получили новые окна, в течение часа после замера мы передаем заказ на <br>
                        производство. Все комплектующие всегда в наличии на нашем складе, а производство окон и <br>
                        стекольный цех находятся на одной территории.
                    </div>
                    
                    <div class="four_reasons__result">
                        Благодаря этому мы делаем все заказы в 7 раз быстрее по сравнению со стандартными условиями<br>  
                        производителей. Всегда точно в срок.
                    </div>
                    
                    <!-- Reason 2 -->
                    <div class="four_reasons__reason ____second">
                        <span class="four_reasons__reason___number">2</span>
                        <span class="four_reasons__reason___name">Ваши новые окна идеально подходят к размерам проемов</span>
                    </div>
                    
                    <div class="four_reasons__description">
                        Потому что к вам на замер приезжает инженер-конструктор. Он знает особенности разных видов <br>
                        строений, оценивает состояние стен, рассчитывает ветровую нагрузку, подбирает толщину стекла, с <br>
                        ювелирной точностью измеряет балкон. Другие экономят на услугах профессиональных инженеров, и <br>
                        замер делает человек из монтажной бригады. 
                    </div>
                    
                    <div class="four_reasons__result">
                        Цена ошибки в несколько миллиметров – зазоры между створками, сквозняки <br>
                        и промерзание окна.
                    </div>
                    
                    <!-- Reason 3 -->
                    <div class="four_reasons__reason ____third">
                        <span class="four_reasons__reason___number">3</span>
                        <span class="four_reasons__reason___name">Вам помогают сертифицированные специалисты Rehau</span>
                    </div>
                    
                    <div class="four_reasons__description">
                        Чтобы помочь вам выбрать подходящие окна для частного дома, офиса, или квартиры, наши <br>
                        менеджеры и монтажники закончили Академию Rehau.
                    </div>
                    
                    <div class="four_reasons__result">
                        Мы хотим, чтобы у вас дома было тепло и уютно, поэтому предлагаем профили Rehau, стекла <br>
                        Guardian и фурнитуру G-U. Такие окна мы поставили себе в детские, на кухни и в дома родителей.
                    </div>
                    
                    <!-- Reason 4 -->
                    <div class="four_reasons__reason">
                        <span class="four_reasons__reason___number">4</span>
                        <span class="four_reasons__reason___name">Ваши окна всегда в отличном состоянии</span>
                    </div>
                    
                    <div class="four_reasons__description">
                        Нужно отрегулировать фурнитуру, заменить уплотнители или комплектующие?
                    </div>
                    
                    <div class="four_reasons__result">
                        Мы ремонтируем металлопластиковые окна всех фирм. Даже если вы заказали окна не у нас – <br>
                        обращайтесь, поможем.
                    </div>
                    
                </div><!-- col-xs- / end -->
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->
        
    </section>   
    <!-- 02 section four reasons / End -->
    
    <!-- 03 - section mersedes / Start -->
    <section class="mersedes">
      
        <div class="mersedes_title">
            ОКНА STEEL PLAST – «МЕРСЕДЕС» В МИРЕ ОКОН
        </div>
       
        <article class="mersedes_box">
        
            <div class="container">           

                <div class="row">                    

                    <div class="col-xs-5">

                        <div class="mersedes_image"></div>

                    </div><!-- col-xs- / end -->

                    <div class="col-xs-7">

                        <div class="mersedes_header">Профили Rehau (Германия)</div>

                        <div class="mersedes_description">
                            Внутри пластикового профиля Rehau находится металлический <br>
                            усилитель толщиной 1,5 мм. Благодаря этому ваши окна служат 25 лет и <br>
                            более. Чтобы сэкономить, недобросовестные производители ставят в <br>
                            профили усилитель 0,8 - 1,2 мм. Такие окна нужно «рихтовать» уже при <br>
                            первом похолодании, со временем створки провисают, и эта <br>
                            деформация мешает закрывать окно. Тонкий армир быстро ржавеет. В <br>
                            результате новенькие окна приходится через 3 года менять.<br><br>

                            Мы импортируем профили из Германии и подтверждаем их качество <br>
                            сертификатами.
                        </div>

                        <div class="mersedes_functions">
                            <div class="mersedes_functions__function ___rehau">
                                <span class="mersedes_functions__function_1___icon"></span>
                                Профиль 3 или 5 камер
                            </div>
                            <div class="mersedes_functions__function ___rehau">
                                <span class="mersedes_functions__function_2___icon"></span>
                                Идеальная звукоизоляция
                            </div>
                            <div class="mersedes_functions__function ___rehau">
                                <span class="mersedes_functions__function_3___icon"></span>
                                У вас дома тепло, даже когда на улице -30°.
                            </div>
                        </div>

                    </div><!-- col-xs- / end -->

                </div><!-- .row / end-->

            </div><!-- .container / end-->
            
        </article><!-- .mersedes_box / end -->
        
        <article class="mersedes_box _second">
        
            <div class="container">           

                <div class="row">
                   
                    <div class="col-xs-7">

                        <div class="mersedes_header">Фурнитура G-U</div>

                        <div class="mersedes_description">
                            Оконная фурнитура G-U получила признание во всем мире благодаря <br>
                            безупречной работе и надежности. Именно фурнитура делает окно <br>
                            герметичным и защищает от промерзания, продувания.<br><br>                            

                            Поэтому мы рекомендуем использовать только фурнитуру G-U. <br>
                            Качественная фурнитура – залог хорошего окна.
                        </div>

                        <div class="mersedes_functions">
                            <div class="mersedes_functions__function ___g-u">
                                <span class="mersedes_functions__function_1___icon"></span>
                                Выдерживает створку окна массой до 130 кг.
                            </div>
                            <div class="mersedes_functions__function ___g-u">
                                <span class="mersedes_functions__function_2___icon"></span>
                                Гарантия функциональности – 10 лет.
                            </div>                            
                        </div>

                    </div><!-- col-xs- / end -->
                    
                    <div class="col-xs-5">

                        <div class="mersedes_image _second"></div>

                    </div><!-- col-xs- / end -->                    

                </div><!-- .row / end-->

            </div><!-- .container / end-->
            
        </article><!-- .mersedes_box _second / end -->
        
        <article class="mersedes_box _third">
        
            <div class="container">           

                <div class="row">                    

                    <div class="col-xs-5">

                        <div class="mersedes_image _third"></div>

                    </div><!-- col-xs- / end -->

                    <div class="col-xs-7">

                        <div class="mersedes_header">Стекла Guardian Clima Guard Solar</div>

                        <div class="mersedes_description">
                            Специальное покрытие отражает 60% солнечной энергии и работает как <br>
                            закрытые жалюзи летом. Благодаря этому ваша комната нагревается в <br>
                            2 раза меньше, чем помещение со стандартными стеклопакетами. <br>
                            Зимой стекла Guardian отражают энергию от нагревательных приборов <br>
                            внутрь помещения, и ваша комната остается теплой, даже когда на <br>
                            улице -30.<br><br>

                            Выбирая окна со стеклами Guardian Clima Guard Solar, вы экономите на <br>
                            кондиционировании и отоплении и наслаждаетесь уютом в любую <br>
                            погоду.
                        </div>

                        <div class="mersedes_functions">
                            
                            <div class="mersedes_functions__function ___gcgs">                                
                                Защищают от жары летом и сохраняют тепло зимой
                            </div>                            
                            
                        </div>

                    </div><!-- col-xs- / end -->

                </div><!-- .row / end-->

            </div><!-- .container / end-->
            
        </article><!-- .mersedes__box / end -->

    </section>   
    <!-- 03 - section mersedes  / End -->
    
    <!-- 04 - section popular_offers / Start -->
    <section class="popular_offers">
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="popular_offers__title">Популярные предложения</div>
                    
                    <div class="popular_offers__description">Мы выполняем все виды остекления - от простого окна до фасадного остекления.</div>
                    
                </div><!-- col-xs- / end -->
                
                
                <!-- оffer 1 -->
                <div class="col-xs-3">
                    
                    <div class="popular_offers__offer _smaller">
                       
                        <div class="popular_offers__offer___header">
                            Окно в комнату
                        </div>
                       
                        <div class="popular_offers__offer___image"></div>
                       
                        <div class="popular_offers__offer___dimensions">
                            1300 x 1400 мм
                        </div>
                       
                        <div class="popular_offers__offer___description">
                            Профиль Rehau <br>
                            (3 камеры, монтажная <br>
                            глубина 60 мм)<br><br>
                            
                            Двухкамерный <br>
                            стеклопакет Guardian Clima <br>
                            Guard Solar<span class="popular_offers__offer___description____icon" data-toggle="popover" title="" data-content="«В наших климатических условиях для окон, которые выходят на улицу, однокамерные стеклопакеты 4-16-4 не подходят»." data-placement="top"></span><br><br>
                            
                            Фурнитура G-U
                        </div>
                        
                        <div class="popular_offers__offer___prices">
                            <span class="popular_offers__offer___prices____title">
                                Стоимость: от
                            </span>
                            <span class="popular_offers__offer___prices____price_old">
                                <strike>3666 грн.</strike>
                            </span>
                            <span class="popular_offers__offer___prices____price_current">
                                2200 грн.
                            </span>
                        </div>
                        
                        <div class="popular_offers__offer___button ___button_offers" data-toggle="modal" data-target="#z-know_more">Узнать больше</div>
                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- 2 offer -->
                <div class="col-xs-3">
                    
                    <div class="popular_offers__offer _bigger">
                       
                        <div class="popular_offers__offer___recomend_stripe"></div>
                        
                        <div class="popular_offers__offer___header _bigger">
                            Окно в комнату<br>
                            "Плюс"
                        </div>
                       
                        <div class="popular_offers__offer___image"></div>
                       
                        <div class="popular_offers__offer___dimensions">
                            1300 x 1400 мм
                        </div>
                       
                        <div class="popular_offers__offer___description">
                            Профиль Rehau <br>
                            (5 камер, монтажная <br>
                            глубина 70 мм)<br><br>
                            
                            Двухкамерный <br>
                            стеклопакет Guardian Clima <br>
                            Guard Solar<span class="popular_offers__offer___description____icon" data-toggle="popover" title="" data-content="«В наших климатических условиях для окон, которые выходят на улицу, однокамерные стеклопакеты 4-16-4 не подходят»." data-placement="top"></span><br><br>
                            
                            Фурнитура G-U
                        </div>
                        
                        <div class="popular_offers__offer___prices">
                            <span class="popular_offers__offer___prices____title">
                                Стоимость: от
                            </span>
                            <span class="popular_offers__offer___prices____price_old">
                                <strike>3977 грн.</strike>
                            </span>
                            <span class="popular_offers__offer___prices____price_current">
                                2386 грн.
                            </span>
                        </div>
                        
                        <div class="popular_offers__offer___button ___button_offers" data-toggle="modal" data-target="#z-know_more">Узнать больше</div>
                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- 3 offer -->
                <div class="col-xs-3">
                    
                    <div class="popular_offers__offer _smaller">
                       
                        <div class="popular_offers__offer___header">
                            Окно в зал
                        </div>
                       
                        <div class="popular_offers__offer___image ___third"></div>
                       
                        <div class="popular_offers__offer___dimensions">
                            2100 x 1400 мм
                        </div>
                       
                        <div class="popular_offers__offer___description">
                            Профиль Rehau <br>
                            (3 камеры, монтажная <br>
                            глубина 60 мм)<br><br>
                            
                            Двухкамерный <br>
                            стеклопакет Guardian Clima <br>
                            Guard Solar<span class="popular_offers__offer___description____icon" data-toggle="popover" title="" data-content="«В наших климатических условиях для окон, которые выходят на улицу, однокамерные стеклопакеты 4-16-4 не подходят»." data-placement="top"></span><br><br>
                            
                            Фурнитура G-U
                        </div>
                        
                        <div class="popular_offers__offer___prices">
                            <span class="popular_offers__offer___prices____title">
                                Стоимость: от
                            </span>
                            <span class="popular_offers__offer___prices____price_old">
                                <strike>5333 грн.</strike>
                            </span>
                            <span class="popular_offers__offer___prices____price_current">
                                3200 грн.
                            </span>
                        </div>
                        
                        <div class="popular_offers__offer___button ___button_offers" data-toggle="modal" data-target="#z-know_more">Узнать больше</div>
                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- 4 offer -->
                <div class="col-xs-3">
                    
                    <div class="popular_offers__offer _bigger __fourth">
                        
                        <div class="popular_offers__offer___header">
                            Балконный блок<br>                     
                        </div>
                       
                        <div class="popular_offers__offer___image ___fourth"></div>
                       
                        <div class="popular_offers__offer___dimensions ___fourth">
                            дверь 700 x 2100 мм,<br>
                            окно 1200 x 1400 мм
                        </div>
                       
                        <div class="popular_offers__offer___description ___fourth">
                            Профиль Rehau <br>
                            (3 камеры, монтажная <br>
                            глубина 60 мм)<br><br>
                            
                            Однокамерный <br>
                            стеклопакет Guardian Clima <br>
                            Guard Solar<span class="popular_offers__offer___description____icon" data-toggle="popover" title="" data-content="«В наших климатических условиях для окон, которые выходят на улицу, однокамерные стеклопакеты 4-16-4 не подходят»." data-placement="top"></span>                            
                        </div>
                        
                        <div class="popular_offers__offer___prices">
                            <span class="popular_offers__offer___prices____title ____fourth">
                                Стоимость: от
                            </span>
                            <span class="popular_offers__offer___prices____price_old">
                                <strike>5340 грн.</strike>
                            </span>
                            <span class="popular_offers__offer___prices____price_current">
                                3204 грн.
                            </span>
                        </div>
                        
                        <div class="popular_offers__offer___button ___button_offers" data-toggle="modal" data-target="#z-know_more">Узнать больше</div>
                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- additional_features -->
                <div class="col-xs-12">
                    
                    <div class="popular_offers__additional_features">
                       
                        <div class="popular_offers__additional_features___title">Дополнительные возможности</div>
                        
                        <div class="popular_offers__additional_features___item">москитная сетка, отливы, подоконник, детский замок, полотно «антикошка».</div>
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- find_out_the_cost -->
                <div class="col-xs-12">
                        
                       <div class="header_main__find_out_the_cost _po">
                           
                            <span class="header_main__find_out_the_cost___title">
                               Как подобрать пластиковые окна за 30 минут и точно рассчитать размер?
                            </span>
                            
                           <form class="form-horizontal header_main__find_out_the_cost___form" action="z-callback.php" role="form" method="post">
                                <div class="form-group">
                                    <div class="input-group">                                  
                                        <div class="input-group-addon"><span class="form-icon-name"></span></div>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Как Вас зовут?" required="required" pattern='[A-Za-zА-Яа-яЁё\s]{2,}' title="Поле должно содержать только буквы, не менее 2х">
                                    </div>
                                    <div class="input-group">  
                                       <div class="input-group-addon"><span class="form-icon-phone"></span></div>                                
                                        <input class="form-control" id="phone" name="phone" type="phone" placeholder="Ваш номер телефона" required="required" pattern="[+()0-9\s]{6,}" title='Поле должно содержать не менее 6 цифр'>
                                    </div>                              
                                    <button type="submit" class="header_main__find_out_the_cost___form____button ___button_in_form">Узнать</button>
                                    <input type="hidden" name="what_form" value="Отправилено из формы - <b>Хотят узнать как подобрать пластиковые окна за 30 минут и точно рассчитать размер?</b><br><br><b>Нужно перезвонить и рассказать!</b>">
                                </div>
                            </form>
                           
                           
                       </div> 
                        
                    </div><!-- .col-xs- / end-->
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 04 - section popular_offers   / End -->
    
    <!-- 05 - section ten_years_warranty / Start -->
    <section class="ten_years_warranty">
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="ten_years_warranty__block" title="10 лет гарантии на все - на окна, на монтаж">
                        
                        <div class="ten_years_warranty__block___text">
                            Все обязательства мы указываем в договоре и всегда выполняем обещания
                        </div>
                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 05 - section ten_years_warranty / End -->
    
    <!-- 06 - section reviews / Start -->
    <section class="reviews">
    
        <div class="container">
            
            <div class="row">
                
                
                <!-- Title -->
                <div class="col-xs-12">
                    
                    <div class="reviews_title">
                        Отзывы наших клиентов
                    </div>
                    
                </div><!-- col-xs- / end -->
                
            </div>
              
        </div>
               
        <div class="container">
                
            <div class="row imageSlider">
                
                    <ul>
                        <!-- Review 1 -->
                        <li>
                
                            <!-- left image -->
                            <div class="col-xs-3">

                                <div class="reviews_image _1"></div>

                            </div><!-- col-xs- / end -->

                            <!-- Right content -->
                            <div class="col-xs-8 col-xs-offset-1">

                                <div class="reviews_review">

                                    <div class="reviews_review__title">
                                        Александр Гончаров
                                    </div>

                                    <div class="reviews_review__social_link">
                                        <span class="reviews_review__social_link___icon"></span>
                                        <a class="reviews_review__social_link___link clearfix" href="http://vk.com/id14933346" target="_blank">Посмотреть профиль покупателя</a>
                                    </div>

                                    <div class="reviews_review__blockqoute">
                                        Steel Plast - одна из тех немногих компаний, в которых "качество" ставят на <br>
                                        более высокий уровень, нежели "количество".
                                    </div>

                                    <div class="reviews_review__text">
                                        Заказал у вас окна, потому что находитесь близко к моему дому. Как оказалось, <br>
                                        хорошие специалисты, грамотно, понятно и доходчиво объяснили, что по итогу я <br>
                                        получу за свои деньги.
                                    </div>

                                    <div class="reviews_review__more_link" data-toggle="collapse" data-target="#review_full_text-1" aria-expanded="true" aria-controls="review_full_text-1">
                                        Читать дальше                            
                                    </div>

                                    <div class="reviews_review__text_full collapse" id="review_full_text-1">

                                        <p>Окна стоят уже более 3-х лет. За это время в окне на кухне только почистили резиночки уплотнителей от пыли и по совету Виктора подрегулировали. Двухкамерный стеклопакет себя оправдал в плане шумо- и термоизоляции вполне. Окнами лично я доволен.</p>

                                        <p>Пришел с полным отсутствием понимания, какие бывают окна, и с чем их едят. Наталья помогла подобрать профиль и фурнитуру, и даже посоветовала ручки поменять на более прочные, о чем ни капельки не жалею. У родителей простые ручки, и они уже болтаются, а мои - стояли, стоят и стоять будут. :)</p>

                                        <p>После оформления и оплаты заказа монтажники приехали и сделали все быстро четко и качественно.</p>

                                        <p>Запомнилось человеческое отношение и доходчивое объяснение Натальи и Качественная работа Виктора. Steel Plast - одна из тех немногих компаний, в которых "качество" ставят на более высокий уровень нежели "количество". Приятно работать с профессионалами.</p>

                                    </div>

                                </div>

                            </div><!-- col-xs- / end -->

                            <!-- Divider -->
                            <div class="col-xs-12">

                                <hr class="reviews_divider">

                            </div><!-- col-xs- / end -->
                    
                        </li>
                        <!-- Review 2 -->
                        <li>
                
                            <!-- left image -->
                            <div class="col-xs-3">

                                <div class="reviews_image _2"></div>

                            </div><!-- col-xs- / end -->

                            <!-- Right content -->
                            <div class="col-xs-8 col-xs-offset-1">

                                <div class="reviews_review">

                                    <div class="reviews_review__title">
                                        Ольга Ковальчук
                                    </div>

                                    <div class="reviews_review__social_link">
                                        <span class="reviews_review__social_link___icon"></span>
                                        <a class="reviews_review__social_link___link clearfix" href="http://vk.com/id24346481" target="_blank">Посмотреть профиль покупателя</a>
                                    </div>

                                    <div class="reviews_review__blockqoute">
                                        Первый мой заказ был более трёх лет назад. Второй заказ - более года. <br>Качество СУПЕР!!! 
                                        Была очень тронута вниманием, теплотой и заботой.
                                    </div>

                                    <div class="reviews_review__text">
                                        После проведенного мониторинга и положительных отзывов, мой выбор остановился именно на фирме "Steel Plast" т.к. Качественная продукция за хорошую цену у порядочных продавцов, которые гарантированно проведут сделку от начала до конца на УРА! Подберут самый наилучший вариант!!! Да ещё и дальнейшее сопровождение - регулировка.
                                    </div>

                                    <div class="reviews_review__more_link" data-toggle="collapse" data-target="#review_full_text-2" aria-expanded="true" aria-controls="review_full_text-2">
                                        Читать дальше                        
                                    </div>

                                    <div class="reviews_review__text_full collapse" id="review_full_text-2">

                                        <p>Первый мой заказ более трёх лет назад. Второй заказ - более года. Качество СУПЕР!!! За все это время была только микроцарапка на стекле, замену привезли в течение суток. Была очень тронута вниманием, теплотой и заботой. Профессиональностью и коммуникабельностью специалистов восхищаюсь до сих пор!</p>

                                        <p>Сомнений не возникло, т.к. изначально специалисты провели превосходную презентацию своего товара, после которой мы сообща произвели оптимальный и самый лучший для меня выбор!</p>

                                        <p>После предварительных просчетов, мой заказ был принят в работу без отлагательств. Специалистами были проведены точные замеры с важными рекомендациями. Менеджер, на всех этапах постоянно был со мной на связи. Согласовывали удобное для меня время. Не могу оставить без внимания работу монтажников: оперативность, приветливость и чистота работы. Проведённая работа произвела на меня колоссальное впечатление и превзошла все мои ожидания.</p>

                                        <p><b>Запомнилось и понравилось всё, даже заграничные компании столько сервиса не могут себе позволить. Команда этой фирмы заслуживает все похвал и наилучших рекомендаций!!!</b></p>
                                        
                                        <p>Мои рекомендации производят впечатление. Не могут поверить! А сделав заказ, убеждаются в правдивости моих слов.</p>

                                    </div>

                                </div>

                            </div><!-- col-xs- / end -->

                            <!-- Divider -->
                            <div class="col-xs-12">

                                <hr class="reviews_divider">

                            </div><!-- col-xs- / end -->
                    
                        </li>
                        <!-- Review 3 -->
                        <li>
                
                            <!-- left image -->
                            <div class="col-xs-3">

                                <div class="reviews_image _3"></div>

                            </div><!-- col-xs- / end -->

                            <!-- Right content -->
                            <div class="col-xs-8 col-xs-offset-1">

                                <div class="reviews_review">

                                    <div class="reviews_review__title">
                                        Алёна Юрко
                                    </div>

                                    <div class="reviews_review__social_link">
                                        <span class="reviews_review__social_link___icon"></span>
                                        <a class="reviews_review__social_link___link clearfix" href="http://vk.com/id26899307" target="_blank">Посмотреть профиль покупателя</a>
                                    </div>

                                    <div class="reviews_review__blockqoute">
                                        Здесь я заказываю не только окна, но и двери с 2007 года. До сегодняшнего дня не было никаких проблем. Очень довольна продукцией.
                                    </div>

                                    <div class="reviews_review__text">
                                        Узнав о том, что на рынке появилась фирма "Steel Plast", слышала положительные отзывы, решила установить окна у себя дома. Отличное качество, хорошая установка, качественная фурнитура, приемлемая стоимость. Теперь всем своим знакомым рекомендую обращаться в "Steel Plast".
                                    </div>

                                    <div class="reviews_review__more_link" data-toggle="collapse" data-target="#review_full_text-3" aria-expanded="true" aria-controls="review_full_text-3">
                                        Читать дальше                        
                                    </div>

                                    <div class="reviews_review__text_full collapse" id="review_full_text-3">

                                        <p>Здесь я заказываю не только окна, но и двери с 2007 года. До сегодняшнего дня не было никаких проблем. Очень довольна продукцией.</p>

                                        <p>По правде, до знакомства с сотрудниками фирмы, абсолютно не разбиралась какие окна ставить, какие лучше. Когда обратилась, мне менеджеры всё рассказали, толково объяснили, с профессиональной точки зрения посоветовали, что лучше, подобрали именно то, что нужно. Заметно, что люди относятся к своей работе очень трепетно.</p>

                                        <p>Как только я обратилась за заказом, замерщики приехали моментально. Замеры были точными, что при установке очень важно. Менеджеры всегда на связи, если вдруг возникали какие-либо вопросы или уточнения. После заказа установка производится в кратчайшие сроки.</p>

                                        <p>В работе мне нравится то, что менеджеры и сотрудники подстраиваются под клиента. Ребята-установщики выполняют свою работу на 100%. Одним словом, приятно с ними сотрудничать.</p>
                                        
                                        <p>После того, как обратилась сама за заказом - осталась довольна. Теперь советую своим друзьям, коллегам и родным обращаться именно сюда. Как говорится "Благодарный клиент приведёт 10 человек, а неблагодарный - отговорит 100". Я благодарна работникам фирмы за отзывчивость, порядочность и профессионализм.</p>

                                    </div>

                                </div>

                            </div><!-- col-xs- / end -->

                            <!-- Divider -->
                            <div class="col-xs-12">

                                <hr class="reviews_divider">

                            </div><!-- col-xs- / end -->
                    
                        </li>
                        <!-- Review 4 -->
                        <li>
                
                            <!-- left image -->
                            <div class="col-xs-3">

                                <div class="reviews_image _4"></div>

                            </div><!-- col-xs- / end -->

                            <!-- Right content -->
                            <div class="col-xs-8 col-xs-offset-1">

                                <div class="reviews_review">

                                    <div class="reviews_review__title">
                                        Римма Гринченко
                                    </div>

                                    <div class="reviews_review__social_link">
                                        <span class="reviews_review__social_link___icon"></span>
                                        <a class="reviews_review__social_link___link clearfix" href="https://vk.com/id21480113" target="_blank">Посмотреть профиль покупателя</a>
                                    </div>

                                    <div class="reviews_review__blockqoute _oneline">
                                        Продукция, представленная в вашем магазине, - выше всяких похвал.
                                    </div>

                                    <div class="reviews_review__text">
                                        Пользуюсь вашими окнами не так давно, с качеством проблем не возникает. Окна с хорошим «именем» найти достаточно сложно, но все-таки реально, а ваши окна «говорят» сами за себя.
                                    </div>

                                    <div class="reviews_review__more_link" data-toggle="collapse" data-target="#review_full_text-4" aria-expanded="true" aria-controls="review_full_text-4">
                                        Читать дальше                        
                                    </div>

                                    <div class="reviews_review__text_full collapse" id="review_full_text-4">

                                        <p>Продавцы вашего магазина подошли к вопросу выбора творчески и со знанием дела, что значительно ускорило процесс.</p>

                                        <p>Работа над моим заказом проходила прекрасно. Получила больше, чем ожидала. Ведь всегда хочется чуточку лучше, но в данном случае работа ваших продавцов удовлетворила все запросы.</p>

                                        <p>Современный мир движется в бешенном ритме, поэтому важно видеть результаты любого труда как можно быстрее, но при этом, чтобы не страдало качество работы. На вашей работе это не отражается. Быстро и качественно.</p>

                                        <p>Для родных и близких хочется самого лучшего, и когда проверено на себе, то не страшно давать рекомендации, ведь продукция, представленная в вашем магазине, - выше всяких похвал.</p>

                                    </div>

                                </div>

                            </div><!-- col-xs- / end -->

                            <!-- Divider -->
                            <div class="col-xs-12">

                                <hr class="reviews_divider">

                            </div><!-- col-xs- / end -->
                    
                        </li>
                        <!-- Review 5 -->
                        <li>
                
                            <!-- left image -->
                            <div class="col-xs-3">

                                <div class="reviews_image _5"></div>

                            </div><!-- col-xs- / end -->

                            <!-- Right content -->
                            <div class="col-xs-8 col-xs-offset-1">

                                <div class="reviews_review">

                                    <div class="reviews_review__title">
                                        Александр Яковенко
                                    </div>

                                    <div class="reviews_review__social_link">
                                        <span class="reviews_review__social_link___icon"></span>
                                        <a class="reviews_review__social_link___link clearfix" href="http://vk.com/id11670544" target="_blank">Посмотреть профиль покупателя</a>
                                    </div>

                                    <div class="reviews_review__blockqoute">
                                        Я рекомендую вас своим знакомым и, как мне известно, несколько человек по моим рекомендациям воспользовалось услугами вашей компании.
                                    </div>

                                    <div class="reviews_review__text">
                                        Узнал о вашей компании от ваших клиентов, проанализировав отзывы, решил заказать у вас. Пользуюсь окнами три года, проблем не возникало. Решил не экономить на качестве и заказал окна в нормальном профиле. Изделиями доволен.
                                    </div>

                                    <div class="reviews_review__more_link" data-toggle="collapse" data-target="#review_full_text-5" aria-expanded="true" aria-controls="review_full_text-5">
                                        Читать дальше                        
                                    </div>

                                    <div class="reviews_review__text_full collapse" id="review_full_text-5">

                                        <p>При выборе окон посмотрел характеристики профиля и стеклопакетов, а сотрудники вашего офиса помогли окончательно определиться с выбором.</p>

                                        <p>Окна были готовы в 3-дневный срок, а монтаж по моей просьбе производился в удобный мне день.</p>

                                        <p>Запомнились установщики окон, которые максимально аккуратно произвели демонтаж старых окон и довольно быстро установили металлопластиковые окна.</p>

                                        <p>Я рекомендую вашу компанию своим знакомым и, как мне известно, несколько человек по моим рекомендациям воспользовалось вашими услугами.</p>

                                    </div>

                                </div>

                            </div><!-- col-xs- / end -->

                            <!-- Divider -->
                            <div class="col-xs-12">

                                <hr class="reviews_divider">

                            </div><!-- col-xs- / end -->
                    
                        </li>
                    
                    </ul>                
            
            </div>
               
            <div class="row">
                
                <!-- Bottom reviews navigation left -->
                <div class="col-xs-6 clearfix prev">
                    
                    <div class="reviews_previous_review">
                        
                        <span class="reviews_previous_review_text">Предыдущий отзыв</span>
                    
                    </div>
                    
                </div>
                
                <!-- Bottom reviews navigation right-->
                <div class="col-xs-6 clearfix next">
                    
                    <div class="reviews_next_review">
                        
                        <span class="reviews_next_review_text">Следующий отзыв</span>
                    
                    </div>
                    
                </div>
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 06 - section reviews  / End -->
    
    <!-- 07 - section how-we-work / Start -->
    <section class="how_we_work">
    
        <div class="container">
            
            <div class="row">
                
                <img class="how_we_work_line_left" src="<?php bloginfo('template_url'); ?>/img/fig-42.png" width="233" height="236" alt="">
                
                <img class="how_we_work_line_middle" src="<?php bloginfo('template_url'); ?>/img/fig-42.png" width="233" height="236" alt="">
                
                <img class="how_we_work_line_right" src="<?php bloginfo('template_url'); ?>/img/fig-43.png" width="229" height="236" alt="">
                
                <div class="col-xs-12">
                    
                    <div class="how_we_work_title">                        
                        Как мы работаем?                        
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 1 -->
                <div class="col-xs-3">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-36.png" width="89" height="74" alt="">
                    
                        <div class="how_we_work_item_description">
                            Вы оставляете заявку<br>
                            на сайте или по телефону
                        </div>

                        <div class="how_we_work_item_button ___button_how_we_work" data-toggle="modal" data-target="#z-callback">
                            Оставить заявку
                        </div>
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 2 -->
                <div class="col-xs-3 col-xs-offset-1">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-37.png" width="86" height="74" alt="">
                    
                        <div class="how_we_work_item_description">
                            Мы звоним вам<br>
                            и уточняем все детали
                        </div>                        
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 3 -->
                <div class="col-xs-3 col-xs-offset-1">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-38.png" width="91" height="77" alt="">
                    
                        <div class="how_we_work_item_description">
                            В удобное вам время<br>
                            инженер делает замер
                        </div>                        
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 4 -->
                <div class="col-xs-3">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-39.png" width="90" height="75" alt="">
                    
                        <div class="how_we_work_item_description">
                            Через 5 дней<br>
                            устанавливаем готовые окна
                        </div>                        
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 5 -->
                <div class="col-xs-3 col-xs-offset-1">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-40.png" width="79" height="74" alt="" style="margin-left:10px;">
                    
                        <div class="how_we_work_item_description">                            
                            Заключаем договор
                        </div>                        
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <!-- item 6 -->
                <div class="col-xs-3 col-xs-offset-1">
                   
                    <div class="how_we_work_item">
                    
                        <img src="<?php bloginfo('template_url'); ?>/img/fig-41.png" width="79" height="74" alt="">
                    
                        <div class="how_we_work_item_description">                            
                            Рассчитываем точную <br>
                            стоимость окон
                        </div>                        
                    
                    </div>
                    
                </div><!-- col-xs- / end -->
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 07 - section how-we-work  / End -->
    
    <!-- 08 - section our_team / Start -->
    <section class="our_team">
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="our_team_title">
                        Наша команда
                    </div>
                    
                    <div class="our_team_sertified">
                        Все наши сотрудники – сертифицированные специалисты Rehau
                    </div>
                    
                </div><!-- col-xs- / end -->
                
            </div><!-- .row / end-->
            
            <div class="row">
                
                <!-- item 1 -->                            
                <div class="our_team_item">
                
                    <div class="col-xs-3">
                        
                        <img class="our_team_item__img" src="<?php bloginfo('template_url'); ?>/img/fig-44.png" width="220" height="220" alt="Чернега Светлана Анатольевна">
                        
                    </div>
                    
                    <div class="col-xs-9 plpr">                        
                        
                        <div class="our_team_item__title">
                            Чернега<br>
                            Светлана Анатольевна
                        </div>
                        
                        <div class="our_team_item__position">
                            Менеджер по продажам, опыт работы - 2 года
                        </div>
                        
                        <div class="our_team_item__description">
                           
                            <p>Общаясь со Светланой, будьте уверены: она учтет все ваши пожелания и поможет выбрать <br>
                            идеальный вариант окон для вашего дома.</p>
                            
                            <p>Светлана понимает клиентов с полуслова и знает нюансы каждой комплектации.</p>
                            
                        </div>
                        
                    </div>
                
                </div>

                <!-- item 2 -->                   
                <div class="our_team_item">
                
                    <div class="col-xs-3">
                        
                        <img class="our_team_item__img" src="<?php bloginfo('template_url'); ?>/img/fig-45.png" width="220" height="220" alt="Игнатенко Наталья Петровна">
                        
                    </div>
                    
                    <div class="col-xs-9 plpr">                        
                        
                        <div class="our_team_item__title">                            
                            Игнатенко<br>
                            Наталья Петровна
                        </div>
                        
                        <div class="our_team_item__position">
                            Менеджер по продажам, опыт работы - 6 лет
                        </div>
                        
                        <div class="our_team_item__description">
                          
                            <p>С 2008 года помогает людям выбирать хорошие окна. Досконально знает свое дело и с <br>
                            душой подходит к каждому клиенту. Следит, чтобы вы получили заказ точно в <br>
                            назначенный день, и отвечает за результат работы.</p>
                            
                        </div>
                        
                    </div>
                
                </div>
                
                <!-- item 3 -->                   
                <div class="our_team_item">
                
                    <div class="col-xs-3">
                        
                        <img class="our_team_item__img" src="<?php bloginfo('template_url'); ?>/img/fig-46.png" width="220" height="220" alt="Николенко Виктор Борисович">                        
                        
                    </div>
                    
                    <div class="col-xs-9 plpr">                        
                        
                        <div class="our_team_item__title"> 
                            Николенко<br>
                            Виктор Борисович
                        </div>
                        
                        <div class="our_team_item__position">
                            Инженер-конструктор, опыт работы – 16 лет
                        </div>
                        
                        <div class="our_team_item__description">
                          
                            <p>Приезжая к вам на замер, не просто измеряет высоту и ширину проема, но и обращает <br>
                            внимание на состояние проема, анализирует и предлагает схему монтажа согласно <br>
                            требованиям и технологии строительным нормам, утвержденным  ДСТУ. Точно <br>
                            рассчитывает все виды нагрузок и проектирует даже нестандартные конструкции в <br>
                            инженерной программе AutoCad.</p>
                            
                        </div>
                        
                    </div>
                
                </div>
                
                <div class="col-xs-12">
                    
                    <hr class="divider">
                    
                </div>
                <!-- item 4 - left -->
                <div class="our_team_item bl">
                    
                    <div class="col-xs-2">
                                
                        <img class="our_team_item__img" src="<?php bloginfo('template_url'); ?>/img/fig-47.png" width="161" height="161" alt="Матвиевский Юрий Николаевич">
                                
                    </div>
                            
                    <div class="col-xs-4 plpr">
                               
                        <div class="our_team_item__title"> 
                            Матвиевский<br>
                            Юрий Николаевич
                        </div>
                        
                        <div class="our_team_item__position">
                            Бригадир монтажной бригады,<br>
                            опыт работы – 15 лет
                        </div>
                                
                    </div>
                    
                </div>
                
                <!-- item 5 - right -->
                <div class="our_team_item bl">
                    
                    <div class="col-xs-2">
                                
                        <img class="our_team_item__img" src="<?php bloginfo('template_url'); ?>/img/fig-48.png" width="161" height="161" alt="fig-48.png">
                                
                    </div>
                            
                    <div class="col-xs-4 plpr">
                               
                        <div class="our_team_item__title">                             
                            Гурбич<br>
                            Сергей Григорьевич
                        </div>
                        
                        <div class="our_team_item__position">                            
                            Монтажник,<br>
                            опыт работы – 15 лет
                        </div>
                                
                    </div>
                    
                </div>
            
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 08 - section our_team  / End -->
        
    <!-- 09 - section certificates / Start -->
    <section class="certificates">
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="certificates_title">                        
                        Сертификаты                        
                    </div>                    
                    
                </div><!-- col-xs- / end -->        
                
                <div class="col-xs-12">
                
                    <div class="certificates_carousel">
                        
                        <div class="certificates_carousel__carousel">
                            
                            <ul>
                                <!-- img 1 -->
                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-59.png" width="231" height="326" alt="Сертификат на готовое изделие" data-toggle="modal" data-target="#sertificate-big-1"></li>
                                <!-- img 2 -->
                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-60.png" width="231" height="326" alt="Сан заключение" data-toggle="modal" data-target="#sertificate-big-2"></li>
                                <!-- img 3 -->
                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-61.png" width="231" height="326" alt="Сан заключение" data-toggle="modal" data-target="#sertificate-big-3"></li>
                                <!-- img 4 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                <!-- img 5 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                <!-- img 6 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                <!-- img 7 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                <!-- img 8 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                <!-- img 9 -->
<!--                                <li><img class="certificates_carousel__carousel___img" src="<?php bloginfo('template_url'); ?>/img/fig-58.png" width="231" height="326" alt=""></li>-->
                                
                            </ul>                            
                            
                        </div><!-- certificates_carousel__carousel / end -->
                        
<!--                        <div class="certificates_carousel_prev"></div>-->
                        
<!--                        <div class="certificates_carousel_next"></div>-->
                        
                    </div><!-- certificates_carousel / end -->
                
                </div><!-- col-xs- / end -->
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 09 - section certificates  / End -->
    
    <!-- 10 - section still_have_questions / Start -->
    <section class="still_have_questions">
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="still_have_questions_title">                        
                        Остались вопросы?
                    </div>
                    
                </div><!-- col-xs- / end -->
                
                <div class="col-xs-12">
                
                    <div class="header_main__find_out_the_cost _shq">
                           
                        <span class="header_main__find_out_the_cost___title">
                           Отправьте заявку
                        </span>
                          
                        <span class="header_main__find_out_the_cost___description">                               
                           и мы перезвоним вам через 20 минут
                        </span>
                            
                        <form class="form-horizontal header_main__find_out_the_cost___form" action="z-callback.php" role="form" method="post">
                            <div class="form-group">
                                <div class="input-group">                                  
                                    <div class="input-group-addon"><span class="form-icon-name"></span></div>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Как Вас зовут?" required="required" pattern='[A-Za-zА-Яа-яЁё\s]{2,}' title="Поле должно содержать только буквы, не менее 2х">
                                </div>
                                <div class="input-group">  
                                   <div class="input-group-addon"><span class="form-icon-phone"></span></div>                                
                                    <input class="form-control" id="phone" name="phone" type="phone" placeholder="Ваш номер телефона" required="required" pattern="[+()0-9\s]{6,}" title='Поле должно содержать не менее 6 цифр'>
                                </div>                              
                                <button type="submit" class="header_main__find_out_the_cost___form____button ___button_in_form">Перезвоните мне</button>
                                <input type="hidden" name="what_form" value="Отправилено из блока - <b>Остались вопросы?</b><br><br><b>Нужно перезвонить в течении 20 минут с момента получения этого письма!</b>">
                            </div>
                        </form>
                        
                    </div>     
                
                </div>
                
            </div><!-- .row / end-->
            
        </div><!-- .container / end-->

    </section>   
    <!-- 10 - section still_have_questions  / End -->
    
    <!-- 11 - section located_near / Start -->
    <section class="located_near">
       
        <div class="located_near_title">                        
            Мы рядом
        </div>   
        
        <!-- Карта (начало) -->        
        <div id="ymaps-map-id_1140437" style="width: auto; height: 515px;"></div>
        <script type="text/javascript">
        function fid_1140437(ymaps) {
            var objects = [];
            var events = {};
            try{

            }catch(e){
                alert(e);
            };
            var map; objects["map1"] = map = new ymaps.Map("ymaps-map-id_1140437", {
                center: [48.40394422204137,35.001364078182036], 
                zoom: 13,
                type: "yandex#map",
                behaviors:['drag','dblClickZoom']
            });
            map.controls
            .add("zoomControl",{"top":207.5,"left":10});	
            map.geoObjects
                .add(objects['Point4'] = new ymaps.Placemark([48.404178892412666,35.001277813489985], {"iconContent":"Steel Plast - салон «Окна, двери»","xname":"Point4","metaType":"Point"},{"preset":"twirl#blueStretchyIcon","zIndex":"10","visible":true,"iconImageHref":"http://api-maps.yandex.ru/2.0.39/release/../images/2c3d90d4e522c1f62b6cf3e59f7a877d.png","iconImageSize":[37,42],"iconImageOffset":[-10,-40],"iconContentLayout":"twirl#geoObjectIconContent","balloonContentBodyLayout":"twirl#geoObjectBalloonBodyContent","hintContentLayout":"twirl#geoObjectHintContent"}));

        };
        </script>
        <script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.full&lang=ru-RU&onload=fid_1140437"></script>
        <!-- Карта (конец) -->        

    </section>   
    <!-- 11 - section located_near  / End -->        

    <!-- 12 - footer / Start -->
    <footer class="footer">
    
        <div class="container">
               
                <div class="row">
                
                    <div class="col-xs-2">                   
                        <div class="footer_logo"></div>                    
                    </div>

                    <div class="col-xs-5">
                        <span class="header_top__slogan">Хорошие окна для вашей семьи</span>
                    </div>

                    <div class="col-xs-3">
                        <span class="header_top__address">
                            Днепропетровск, <br>
                            ул. Героев Сталинграда, 133 <br>
                            Салон «Окна, двери»
                        </span>
                        <span class="header_top__worktime">Работаем по будням с 9 до 18:00</span>
                    </div>

                    <div class="col-xs-2 text-right">
                        <span class="header_top__phones">
                            (056) 763-70-70<br>
                            (067) 63-000-62<br>
                            (066) 28-007-49
                        </span>
                    </div>
                    
                    <div class="col-xs-12">
                        
                        <div class="header_main__button ___button_callback pull-right clearfix" data-toggle="modal" data-target="#z-callback">Заказать обратный звонок</div>
                        
                    </div>
                
                </div><!-- .row / end-->
                        
            </div><!-- .container / end-->

    </footer>   
    <!-- 12 - footer / End -->       
    
    <!-- jquery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-latest.js"></script>    
    <!-- counter -->
    <script src="<?php bloginfo('template_url'); ?>/js/county.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //$('.timecount').county({ endDateTime: ((new Date()).getTime() + (30*24*60*60*1000) + (09*60*60*1000) + (24*60*1000) + (38*1000)), reflection: false, animation: 'scroll', theme: 'black'});
            $('.timecount').county({ endDateTime: new Date('2015/02/28 00:00:00'), reflection: false, animation: 'scroll', theme: 'black' });
	   });
    </script>
    <!-- bootstrap -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>    
    <!-- carousel -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousellite.js"></script>    
    <!-- sertificates carousel -->
    <script>
        $(".certificates_carousel .certificates_carousel__carousel").jCarouselLite({
            btnNext: ".certificates_carousel .certificates_carousel_next",
            btnPrev: ".certificates_carousel .certificates_carousel_prev",
            speed: 500            
        });
    </script>
    <script>
        $(".imageSlider").jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev",
            visible: 1,
            speed: 500,
            circular: false
        });
    </script>     
    <!-- popover -->
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>    
    <!-- nicescroll -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
	<script>
		$(document).ready(
            function() {
	           $("body").niceScroll();
            }            
        );	
        $(document).ready(
            function() {
	           $(".modal").niceScroll();
            }            
        );
        $(document).ready(
            function() {
	           $(".reviews_review__text_full").niceScroll();
            }            
        );
    </script>
        <noscript>
            <style>
                html, body {
                    overflow:visible;
                }
            </style>
        </noscript>    
        <?php wp_footer(); ?>
</body>
</html>