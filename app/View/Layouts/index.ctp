<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Табыс</title>
        <?php if(isset($meta['keywords'])): ?>
            <meta name="keywords" content="<?=$meta['keywords']?>">
        <?php endif; ?>
        <?php if(isset($meta['description'])): ?>
            <meta name="description" content="<?=$meta['description']?>">
        <?php endif; ?>
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php echo $this->Session->flash('good'); ?>
        <?php echo $this->Session->flash('bad'); ?>
        <div class="top">
             <?=$this->element('header') ?>
            <div class="inner">
                <div class="slider">
                    <div class="sl">
                        <img class="sl__img" src="img/people3.png">
                        <div class="sl-text">
                            <h4 class="sl-heading">
                                <span class="sl-heading__up">Название</span> 
                                <span class="sl-heading__down">текста</span>                                
                            </h4>
                            <p class="sl-text__p">
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей...
                            </p>
                            <a class="more sl-text__more" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                    <div class="sl">
                        <img class="sl__img" src="img/people3.png">
                        <div class="sl-text">
                            <h4 class="sl-heading">
                                <span class="sl-heading__up">Название</span> 
                                <span class="sl-heading__down">текста</span>                                
                            </h4>
                            <p class="sl-text__p">
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей...
                            </p>
                            <a class="more sl-text__more" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="benefits">
                <div class="inner">
                    <ul class="ben-ul">
                        <li class="ben-ul__li">                      
                          <div class="ben-des ben-des--quality">
                            <span class="ben-des__heading">Качество</span>
                            <p class="ben-des__text">Более 10 лет работы на рынке,
                                наши специалисты бла-бла-бла,
                                ну в общем рыба-текст...
                                </p>    
                          </div>
                        </li>
                        <li class="ben-ul__li">                      
                          <div class="ben-des ben-des--qarrancy">
                            <span class="ben-des__heading">Гарантия</span>
                            <p class="ben-des__text">Более 10 лет работы на рынке,
                                наши специалисты бла-бла-бла,
                                ну в общем рыба-текст...
                                </p>    
                          </div>
                        </li>
                        <li class="ben-ul__li">                      
                          <div class="ben-des ben-des--delivery">
                            <span class="ben-des__heading">Доставка</span>
                            <p class="ben-des__text">Более 10 лет работы на рынке,
                                наши специалисты бла-бла-бла,
                                ну в общем рыба-текст...
                                </p>    
                          </div>
                        </li>
                    </ul>
                </div>
        </div>
      <div class="inner">       
          <ul class="category-main">
            <li class="category-main__li">
                <a class="category-des" href="/category/dushevye-kabiny">                                   
                <div class="category-des__img category-des__img--kabina"></div>
                        <span class="category-des__text">
                            Душевые кабины
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/mebel-dlya-vannoy-komnaty">                                   
                        <div class="category-des__img category-des__img--forbath"></div>
                        <span class="category-des__text">
                            Мебель для ванной комнаты
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/sanfayans">                                   
                        <div class="category-des__img category-des__img--sanfoyas"></div>
                        <span class="category-des__text">
                            Санфаяс
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/kafel">                                   
                            <div class="category-des__img category-des__img--kafel"></div>
                        <span class="category-des__text">
                            Кафель
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/smesiteli">                                   
                            <div class="category-des__img category-des__img--smestitel"></div>
                        <span class="category-des__text">
                            Сместители
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/vanny">                                   
                            <div class="category-des__img category-des__img--bath"></div>
                        <span class="category-des__text">
                            Ванны
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/polotencesushiteli">                                   
                            <div class="category-des__img category-des__img--sushka"></div>
                        <span class="category-des__text">
                            Полотенцесушители
                        </span>                                     
                </a>
            </li>
            <li class="category-main__li">
                <a class="category-des" href="/category/aksessuary">                                   
                            <div class="category-des__img category-des__img--akses"></div>
                        <span class="category-des__text">
                            Аксессуары
                        </span>                                     
                </a>
            </li>
          </ul>
          <div class="news-up">
            <span class="up-heading news-up__heading">
                Новости и акции
            </span>
            <a class="more news-up__more" href="/news">
                Поcмотреть все
            </a>
          </div>
          <ul class="news-main">
          <?php foreach($news as $item): ?>
            <li class="news-main__li">
                <div class="news-mini">                 
                    <a class="news-mini__img" href="/news/<?=$item['News']['id']?>">
                        <img alt="<?=$item['News']['title']?>" src="/img/news/thumbs/<?=$item['News']['img']?>">
                    </a>    
                    <div class="news-des">
                        <a class="news-des__heading" href="/news/<?=$item['News']['id']?>">
                        <?= $this->Text->truncate(strip_tags($item['News']['title']), 38, array('ellipsis' => '...', 'exact' => true)) ?></a>
                        <p class="news-des__text">
                        <?= $this->Text->truncate(strip_tags($item['News']['body']), 287, array('ellipsis' => '...', 'exact' => true)) ?> 
                        </p>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
          </ul>
          <div class="our-clients">
            <span class="up-heading our-clients__heading">
                Наши клиенты
            </span>
            <div class="client-carousel">
                <?php foreach($clients as $item): ?>
                <div class="client-carousel__item">
                    <img alt="Клиент" src="/img/client/<?=$item['Client']['img']?>">
                </div>
                <?php endforeach ?>
            </div>
          </div>
      </div>
        <footer class="footer">
            <div class="footer-top">
                <div class="inner footer-top__inner">
                    <div class="footer-left">
                        <ul class="footer-social">
                            <li class="footer-social__item">
                                <a class="social-link social-link--vk" href="#"></a>
                            </li>
                            <li class="footer-social__item">
                                <a class="social-link social-link--facebook" href="#"></a>
                            </li>
                            <li class="footer-social__item">
                                <a class="social-link social-link--instagram"  href="#"></a>
                            </li>
                        </ul>
                        <div class="footer-form">
                            <form action="/feedbacks/add" method="post" accept-charset="utf-8">
                                <input class="footer-form__input" name="data[Feedback][title]" required="required"  type="text" placeholder="Имя">
                                <input class="footer-form__input" name="data[Feedback][email]" required="required" type="text" placeholder="E-mail">
                                <textarea name="data[Feedback][body]" class="footer-form__input footer-form__textarea" placeholder="Сообщение"></textarea>
                                <button class="more footer-form__submit" type="submit">Отправить заявку</button>
                            </form>
                        </div>
                        <div class="footer-cont">
                            <span class="footer-cont__heading">
                                Контакты
                            </span>
                            <ul class="footer-ul">
                                <li class="footer-ul__li footer-ul__li--adress">
                                    Астана, ул. Абая, 94
                                </li>
                                <li class="footer-ul__li">
                                    +7 (701) 206-82-84
                                </li>
                                <li class="footer-ul__li">
                                    +7 (7172) 59-98-88
                                </li>
                                <li class="footer-ul__li">
                                    +7 (7172) 49-91-99
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=l6LJx7KHMN-vvXgeyLRJKXCg4yEo2hXj&amp;width=600&amp;height=305&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="inner fbot-des">
                    <span class="fbot-des__copyright">
                        namesite.kz © 2016, все права защищены
                    </span>
                    <a class="created" target="_blank" href="http://astanacreative.kz">
                        Разработано в <span class="created__span">Астанакреатив</span>
                    </a>
                </div>
            </div>          
        </footer>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
                $('.slider').slick({
              autoplay: true,
                arrows: true,
                speed: 1200,
                autoplaySpeed: 19000,
                  easing: 'easeInOutBack'       
            });
        });
      </script>
    </body>
</html>