<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Сайт">
    <title>Умный ёжик</title>
    <!--[if lt IE 9]>
    <script src="https://www.html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>

<div class="mobile-menu">
    <a href="#main-blockTitle" class="mobile-menu__link anchor">Преимущества</a>
    <a href="#question" class="mobile-menu__link anchor">Проблемы</a>
    <a href="#plan" class="mobile-menu__link anchor">Программа развития</a>
    <a href="#statistics" class="mobile-menu__link anchor">Наши достижения</a>
    <a href="#appeal" class="mobile-menu__link anchor">Видео обращение</a>
    <a href="#result" class="mobile-menu__link anchor">Результаты обучения</a>
    <a href="#comment" class="mobile-menu__link anchor">Отзывы</a>
    <a href="#offer" class="mobile-menu__link anchor">Ограниченное предложение</a>
    <a href="#gallery" class="mobile-menu__link anchor">Наша жизнь</a>
    <a href="#contact" class="mobile-menu__link anchor">Обратная связь</a>
    <div class="main-tel">
        <div class="main-circle"><img src="{{ asset('img/main/icon-tel.svg') }}" alt=""></div>
        <a href="tel:+77058090348" class="main-tel__link">+7 (705) 809-03-48 (Казахстан)</a>
    </div>
    <div class="main-tel">
        <div class="main-circle"><img src="{{ asset('img/main/icon-tel.svg') }}" alt=""></div>
        <a href="tel:+79627022812" class="main-tel__link">+7 (962) 702-28-12 (Россия)</a>
    </div>
</div>

<a href="#main" class="link-up anchor">
    <img src="{{ asset('img/arrow-up.svg') }}" alt="">
</a>

<main class="main" id="main">
    <header class="header">
        <div class="container-custom">
            <a href="{{ route('index') }}" class="header-logo">
                <img src="{{ asset('img/main/main-logo.png') }}" alt="">
            </a>
            <div class="main-wrapper">
                <div class="main-tel">
                    <div class="main-circle"><img src="{{ asset('img/main/icon-tel.svg') }}" alt=""></div>
                    <a href="tel:+77058090348" class="main-tel__link">+7 (705) 809-03-48 (Казахстан)</a>
                </div>
                <div class="main-tel">
                    <div class="main-circle"><img src="{{ asset('img/main/icon-tel.svg') }}" alt=""></div>
                    <a href="tel:+79627022812" class="main-tel__link">+7 (962) 702-28-12 (Россия)</a>
                </div>
                <div class="main-tel">
                    <div class="main-circle">
                        <button class="menu-btn">
                            <span></span>
                        </button>
                    </div>
                    Меню
                </div>
            </div>
            <button class="menu-btn mobile-btn">
                <span></span>
            </button>
        </div>
        <!-- /.container-custom -->
    </header>
    <!-- /.header -->
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" style="position:fixed; z-index: 1000;top: 150px; width: 300px; right: 50px" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <div class="container-custom">
        <div class="main-blockTitle pt-1" id="main-blockTitle">
            <h1 class="main-title">Онлайн детский сад</h1>
        </div>
        <p class="main-subtitle">Курс раннего развития ребёнка по авторской методике Юлии Чучуло</p>
        <h2 class="main-tagline">Мы успешно развиваем</h2>
        <div class="main-list">
            <div class="main-item">
                <img src="{{ asset('img/main/icon-logics.svg') }}" alt="" class="main-item__img">
                Логику
            </div>
            <!-- /.main-item -->
            <div class="main-item">
                <img src="{{ asset('img/main/icon-memory.svg') }}" alt="" class="main-item__img">
                Память
            </div>
            <!-- /.main-item -->
            <div class="main-item">
                <img src="{{ asset('img/main/icon-attention.svg') }}" alt="" class="main-item__img">
                Внимание
            </div>
            <!-- /.main-item -->
            <div class="main-item">
                <img src="{{ asset('img/main/icon-speech.svg') }}" alt="" class="main-item__img">
                Речь
            </div>
            <!-- /.main-item -->
        </div>
        <!-- /.main-list -->
        <a href="#offer" class="btn orange-link-btn col-sm-4 py-4 mt-3 w-100 px-3 ">Получите доступ на месяц всего за 2 500 р.<span></span></a>
    </div>
    <!-- /.container-custom -->
</main>
<!-- /.main -->

<section class="question pb-5 mb-5" id="question">
    <div class="container-custom">
        <div class="question-block question-block_1">
            <h3 class="question-block__title">Хотите дать своему малышу лучшее,</h3>
            <p class="question-block__text">но не знаете, что для этого сделать?</p>
            <span></span>
        </div>
        <!-- /.question-block question-block_1 -->
        <div class="question-block question-block_2">
            <h3 class="question-block__title">Нет времени на долгие занятия</h3>
            <p class="question-block__text">и изучение всего многообразия методик?</p>
            <span></span>
        </div>
        <!-- /.question-block question-block_2 -->
        <div class="question-block question-block_3">
            <h3 class="question-block__title">Боитесь упустить</h3>
            <p class="question-block__text">важный виток в развитии необходимых навыков?</p>
            <span></span>
        </div>
        <!-- /.question-block question-block_3 -->
    </div>
    <!-- /.container-custom -->
</section>
<!-- /.question -->

<section id="complecs" class="py-5 mb-5">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center col-12">
        <h2 class="font-weight-bold section-title text-green-gradient">В онлайн детском садике «Умный Ёжик» вас ждёт комплексная программа развития и малыша, и мамы</h2>
      </div>
    </div>

    <div class="row mt-5 align-items-center justify-content-center">
      <div class="col-md-5"><img class="img-fluid w-100" src="{{ asset('img/complecs/undraw_time_management_30iu 1.svg') }}" alt="undraw_time_management_30iu 1.svg"></div>
      <div class="col-md-6 col-10 mt-3 mt-md-0">
        <div class="row">
          <div class="col-md-6 offset-md-2 text-center text-md-left">
            <p class="h3 font-weight-normal">Вам скучно проводить целый день со своим малышом?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 align-items-center justify-content-center">
      <div class="col-md-5 order-md-12"><img class="img-fluid w-100" src="{{ asset('img/complecs/undraw_feeling_blue_4b7q 1.svg') }}" alt="undraw_time_management_30iu 1.svg"></div>
      <div class="col-md-6 col-10 order-md-1 mt-3 mt-md-0">
        <div class="row">
          <div class="col-md-6 offset-md-2 text-center text-md-left">
            <p class="h3 font-weight-normal">Быстро устаете от совместных игр и не знаете, что придумать еще?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 align-items-center justify-content-center">
      <div class="col-md-5"><img class="img-fluid w-100" src="{{ asset('img/complecs/undraw_quality_time_wiyl 1.svg') }}" alt="undraw_time_management_30iu 1.svg"></div>
      <div class="col-md-6 col-10 mt-3 mt-md-0">
        <div class="row">
          <div class="col-md-6 offset-md-2 text-center text-md-left">
            <p class="h3 font-weight-normal">Не вовлекаетесь в деятельность ребенка и не знаете, как себя заставить?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 align-items-center justify-content-center">
      <div class="col-md-6 order-md-12"><img class="img-fluid w-100" src="{{ asset('img/complecs/undraw_searching_p5ux 1.svg') }}" alt="undraw_time_management_30iu 1.svg"></div>
      <div class="col-md-5 col-10 order-md-1 mt-3 mt-md-0">
        <div class="row">
          <div class="col-md-6 offset-md-2 text-center text-md-left">
            <p class="h3 font-weight-normal">Не знаете, с чего начать и когда лучше приступить к занятиям с ребенком?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5 pt-5">
      <div class="col-10">
        <div class="card border-0 bg-white" id="img-like">
          <div class="card-body border-0 pt-5 pb-5 mt-4">
            <div class="row">
              <div class="col-md-4 offset-md-1">
                <div class="row">
                  <div class="col-12">
                    <p class="h4 font-weight-bold">Впервые все секретные техники педагогов раннего развития доступны каждой маме!</p>
                  </div>
                  <div class="col-12">
                    <a href="#offer" class="btn orange-link-btn py-4 mt-3 w-100 px-3 ">Получите доступ на месяц всего за 2 500 р.<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5 pt-5">
      <div class="col-10 mt-md-5">
        <div class="card border-0 bg-white mt-md-5" style="border-radius: 41px;">
          <div class="card-body">
            <div class="row p-4 mt-3">
              <div class="col-lg-6 offset-lg-1">
                <p class="h3 font-weight-bold">
                  Больше не нужно искать детские центры или сады с качественными педагогами и эффективными методиками
                </p>
                <p class="font-weight-normal h5 pt-3">С нашей авторской программой педагогической подготовки мамы вы станете первым и лучшим учителем для своего малыша.</p>
              </div>
              <img src="{{ asset('img/complecs/Group 87.svg') }}" alt="group 87" class="position-absolute d-none d-lg-block" id="img-girl">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="complecs" class="py-5 mb-5">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center col-12">
        <h2 class="font-weight-bold section-title text-green-gradient"> «Мама – учитель №1»</h2>
      </div>
    </div>

    <div class="row justify-content-center align-self-stretch mt-5 px-md-5">
      <div class="col-lg-3 col-md-4 col-sm-6 my-3 my-md-0">
        <div class="card h-100 border-0 card-mom">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('img/complecs/photo-1.png') }}" alt="photo-1" class="img-fluid w-100">
              </div>
              <div class="col-12 px-4 m-2 mt-3 mb-3">
                <p class="font-weight-bold h4" style="color: #28A352;">Живые вебинары</p>
                <p class="h5">по эффективным техникам развития ребенка дома.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 my-3 my-md-0">
        <div class="card h-100 border-0 card-mom">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('img/complecs/photo-2.png') }}" alt="photo-2" class="img-fluid w-100">
              </div>
              <div class="col-12 px-4 m-2 mt-3 mb-3">
                <p class="font-weight-bold h4" style="color: #28A352;">Интересные видеоуроки</p>
                <p class="h5">с заданиями на прокачку новых навыков.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 my-3 my-md-0">
        <div class="card h-100 border-0 card-mom">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('img/complecs/photo-3.png') }}" alt="photo-3" class="img-fluid w-100">
              </div>
              <div class="col-12 px-4 m-2 mt-3 mb-3">
                <p class="font-weight-bold h4" style="color: #28A352;">Закрытый чат</p>
                <p class="h5">поддержки с куратором и автором программы.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 my-3 my-md-0">
        <div class="card h-100 border-0 card-mom">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('img/complecs/photo-4.png') }}" alt="photo-1" class="img-fluid w-100">
              </div>
              <div class="col-12 px-4 m-2 mt-3 mb-3">
                <p class="font-weight-bold h4" style="color: #28A352;">Полезные материалы</p>
                <p class="h5">дополнительные материалы к каждому уроку.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-10">
        <div class="card border-0 bg-white card-calendar">
          <div class="card-body border-0 pt-5 pb-5 mt-4">
            <div class="row px-1">
{{--              <div class="col-md-2 col-8 pb-4 align-items-center d-flex d-md-none mr-auto ml-auto">--}}
{{--                <img src="{{ asset('img/complecs/Group 96.svg') }}" alt="" class="img-fluid">--}}
{{--              </div>--}}
              <div class="col-md-4 offset-md-1">
                <div class="row">
                  <div class="col-12">
                    <p class="h5 font-weight-normal" style="font-family: 'Circe'">А также полный доступ на месяц занятий для малыша по авторской методике "Умный Ёжик! Занятия по грамматике, математике и, конечно, увлекательные творческие поделки и опыты.</p>
                  </div>
                  <div class="col-12">
                    <a href="#offer" class="btn orange-link-btn py-4 mt-3 w-100 px-3 ">Получите доступ на месяц всего за 2 500 р.<span></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 align-items-center mr-auto d-none d-md-flex ml-auto">
                <img src="{{ asset('img/complecs/Group 96.svg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="plan" id="plan">
    <h2 class="plan-title section-title text-center ml-auto mr-auto">Программа развития нужных психологических функций и моторных навыков для деток 2+</h2>
    <div class="container-custom">
        <div class="plan-item plan-item_1"><img src="{{ asset('img/plan/img-1.png') }}" alt="" class="plan-item__img"><span>36 видеоуроков для самостоятельных занятий с малышом дома</span><img src="{{ asset('img/plan/line.svg') }}" alt="" class="plan-line"></div>
        <!-- /.plan-item plan-item_1 -->
        <div class="plan-item plan-item_2"><img src="{{ asset('img/plan/img-2.png') }}" alt="" class="plan-item__img"><span>занятие длится от 15 минут в день</span></div>
        <!-- /.plan-item plan-item_2 -->
        <div class="plan-item plan-item_3"><img src="{{ asset('img/plan/img-3.png') }}" alt="" class="plan-item__img"><span><strong>Со всеми необходимыми</strong> авторскими пособиями для печати.</span></div>
        <!-- /.plan-item plan-item_3 -->
        <div class="plan-item plan-item_4"><img src="{{ asset('img/plan/img-4.png') }}" alt="" class="plan-item__img"><span><strong>Работа с теми материалами,</strong> которые каждая хозяйка легко найдет в своем доме.</span></div>
        <!-- /.plan-item plan-item_4 -->
        <img src="{{ asset('img/plan/mobile-img.png') }}" alt="" class="plan-img">
    </div>
    <!-- /.container-custom -->
    <a href="#offer" class="btn orange-link-btn py-4 ml-auto mr-auto d-block col-sm-3 mt-3 w-100 px-3 ">Получите доступ на месяц всего за 2 500 р.<span></span></a>
</section>
<!-- /.plan -->

<section class="statistics" id="statistics">
    <h2 class="statistics-title section-title">Немного цифр</h2>
    <div class="statistics-body">
        <div class="statistics-top">
            <div class="statistics-block statistics-block_1">
                <span class="statistics-block_color">уже</span>
                <span class="statistics-block_color statistics-block__number">8</span>
                <span>лет методике</span>
            </div>
            <!-- /.statistics-block statistics-block_1 -->
            <div class="statistics-block statistics-block_2">
                <span class="statistics-block_color">более</span>
                <span class="statistics-block_color statistics-block__number">432</span>
                <span>веселых занятий в год</span>
            </div>
            <!-- /.statistics-block statistics-block_2 -->
            <div class="statistics-block statistics-block_3">
                <span class="statistics-block_color">более</span>
                <span class="statistics-block_color statistics-block__number">1000</span>
                <span>счастливых пользователей</span>
            </div>
            <!-- /.statistics-block statistics-block_3 -->
        </div>
        <div class="statistics-content">
            <img src="{{ asset('img/statistics/mobile-img.png') }}" alt="" class="statistics-content__img">
            <h4 class="statistics-body__title">Юлия Чучуло мама 4 детей</h4>
            <p class="statistics-body__text">Автор методики «Умный Ёжик», педагог раннего развития, директор детского центра «Радость моя», соучредитель детского сада «Солнышко» и детского центра «Рикки-Тикки-Тави», основатель консалтинговой компании Admin School.</p>
        </div>
    </div>
</section>
<!-- /.statistics -->

<section class="appeal" id="appeal">
    <div class="appeal-wrapper">
        <h2 class="appeal-title section-title">Обращение от автора программы</h2>
        <svg width="234" height="146" viewBox="0 0 234 146" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M212.518 144.876C213.002 145.143 213.61 144.966 213.876 144.482L218.215 136.597C218.481 136.113 218.305 135.505 217.821 135.239C217.337 134.973 216.729 135.149 216.463 135.633L212.606 142.642L205.597 138.785C205.113 138.519 204.505 138.696 204.239 139.18C203.972 139.663 204.149 140.271 204.633 140.538L212.518 144.876ZM1.05205 40.9989C53.7161 38.2533 100.664 44.0019 137.34 60.475C173.98 76.9318 200.381 104.093 212.04 144.279L213.96 143.722C202.119 102.908 175.27 75.3189 138.16 58.6506C101.086 41.9986 53.7839 36.2471 0.947922 39.0017L1.05205 40.9989Z" fill="#28A352"/>
        </svg>
        <video src="{{ asset('video/video.mp4') }}" controls></video>
    </div>
</section>
<!-- /.appeal -->

<section class="result" id="result">
    <h2 class="result-title section-title">Результаты обучения по методике</h2>
    <div class="container-custom">
        <div class="result-block">
            <img src="{{ asset('img/result/img-1.png') }}" alt="" class="result-block__img">
            <img src="{{ asset('img/result/mobile-img-1.png') }}" alt="" class="result-block__mobileImg">
            <div class="result-content">
                <h3 class="result-content__title">Для мамы</h3>
                <ul class="result-content__list">
                    <li class="result-content__item">Получение педагогических знаний и навыков для работы с малышом дома.</li>
                    <li class="result-content__item">Уверенность в собственных силах.</li>
                    <li class="result-content__item">Удовлетворение от того, что время, проведенное с ребенком наполнено полезной информацией и развивающей игрой.</li>
                    <li class="result-content__item">Повышение уровня спокойствия и хорошего настроения.</li>
                </ul>
            </div>
        </div>
        <div class="result-block result-block_2">
            <img src="{{ asset('img/result/mobile-img-2.png') }}" alt="" class="result-block__mobileImg">
            <div class="result-content">
                <h3 class="result-content__title">Для малыша</h3>
                <ul class="result-content__list">
                    <li class="result-content__item">Развитие и укрепление нейронных связей благодаря систематике занятий.</li>
                    <li class="result-content__item">Увлекательное познание мира, через живые игры и опыты.</li>
                    <li class="result-content__item">Стабильное развитие новых навыков и умений.</li>
                    <li class="result-content__item">Развитие речи.</li>
                    <li class="result-content__item">Развитие памяти и внимания.</li>
                </ul>
            </div>
            <img src="{{ asset('img/result/img-2.png') }}" alt="" class="result-block__img">
        </div>
    </div>
    <!-- /.container-custom -->
</section>
<!-- /.result -->

<section class="comment" id="comment">
    <h2 class="comment-title section-title">Отзывы о нашей работе</h2>
    <div class="container-custom">
        <div class="comment-slider">

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/1.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/2.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/3.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/4.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/5.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/6.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            <div class="comment-slide">
                <div class="comment-block">
                    <img src="{{ asset('img/comment/7.jpg') }}" alt="1.png" style="width: 100%; padding: 15px;">
                </div>
            </div>

            </div>
        </div>
    </div>
    <!-- /.container-custom -->
</section>
<!-- /.comment -->

<section class="offer" id="offer">
    <img src="{{ asset('img/offer/offer-bg.png') }}" alt="" class="offer-bg">
    <div class="container-custom">
        <div class="offer-access">
            <h2 class="offer-access__title">Ограниченное предложение</h2>
            <svg width="172" height="296" viewBox="0 0 172 296" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M103.523 291.232C103.667 292.048 104.445 292.592 105.261 292.448L118.555 290.096C119.371 289.952 119.915 289.174 119.771 288.358C119.626 287.542 118.848 286.998 118.032 287.142L106.216 289.232L104.126 277.416C103.981 276.6 103.203 276.056 102.387 276.2C101.571 276.344 101.027 277.122 101.171 277.938L103.523 291.232ZM1.592 28.4141C58.5617 44.5134 99.108 88.4926 117.906 139.24C136.709 190.004 133.682 247.343 103.771 290.111L106.229 291.83C136.817 248.095 139.79 189.684 120.719 138.198C101.642 86.6956 60.4381 41.9262 2.40783 25.5271L1.592 28.4141Z" fill="#B2DB34"/>
            </svg>
            <p class="offer-access__text">Успейте приобрести программу “Умный Ёжик” по самой выгодной цене до конца июля</p>
            <button class="offer-access__btn section-btn" id="paybox">
                получите доступ на месяц
                <img src="{{ asset('img/offer/discount.png') }}" alt="">
                <span></span>
            </button>
        </div>
        <div class="offer-features">
            <h3 class="offer-features__title">Приобретая абонемент на месяц, вы получаете:</h3>
            <div class="offer-item">
              <img src="{{ asset('img/offer/uil_clock.png') }}" alt=""><span> Доступ к обучающей программе для мамы: <br> <span style="color: #28A352;">«Мама-учитель №1»</span></span>
            </div>
            <div class="offer-item">
                <img src="{{ asset('img/offer/icon-time.svg') }}" alt="">36 занятий по 15 минут
            </div>
            <div class="offer-item">
                <img src="{{ asset('img/offer/icon-lesson.svg') }}" alt="">занятие длится от 15 минут в день
            </div>
            <div class="offer-item">
                <img src="{{ asset('img/offer/icon-creation.svg') }}" alt="">Увлекательные творческие задания и опыты
            </div>
            <div class="offer-item">
                <img src="{{ asset('img/offer/icon-support.svg') }}" alt="">Онлайн поддержка от самого автора программы
            </div>
            <div class="offer-item">
                <img src="{{ asset('img/offer/icon-global.svg') }}" alt="">12 мини-лекций с лайфхаками маме для эффективных занятий!
            </div>
        </div>
    </div>
    <!-- /.container-custom -->
</section>
<!-- /.offer -->

<div class="gallery" id="gallery">
    <div class="container-custom">
        <h2 class="gallery-title section-title">Наша жизнь</h2>
        <div class="gallery-slider">
            <img src="{{ asset('img/gallery/img-1.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-2.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-3.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-4.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-5.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-6.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-7.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-8.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-9.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-10.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-11.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-12.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-13.jpg') }}" alt="" class="gallery-slider__img">
            <img src="{{ asset('img/gallery/img-14.jpg') }}" alt="" class="gallery-slider__img">
        </div>
        <div class="wrapper-slider">
            <div class="gallery-nav">
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-1.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-2.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-3.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-4.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-5.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-6.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-7.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-8.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-9.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-10.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-11.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-12.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-13.jpg') }}" alt="" class="gallery-nav__img"></div>
                <div class="gallery-navSlide"><img src="{{ asset('img/gallery/img-14.jpg') }}" alt="" class="gallery-nav__img"></div>
            </div>
            <div class="next">
                <img src="{{ asset('img/gallery/arrow.svg') }}" alt="">
            </div>
            <div class="prev">
                <img src="{{ asset('img/gallery/arrow.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- /.container-custom -->
</div>
<!-- /.gallery -->

<section class="contact" id="contact">
    <div class="contact-block">
        <h2 class="contact-title">Мы с радостью ответим на ваши вопросы в любой из соц сетей или позвоним вам</h2>
        <span class="contact-subtitle">Позвоните мне</span>
        <form action="#" class="contact-form">
            <input type="text" class="contact-form__input" placeholder="Ваше имя" required>
            <input type="tel" class="contact-form__input contact-form__tel" placeholder="+7 (___)___-__-__" required>
            <button class="contact-form__btn section-btn">Перезвоните мне <span></span></button>
        </form>
        <div class="contact-soc">
            <h6 class="contact-soc__title">Ждем ваших сообщений</h6>
            <div class="contact-flex">
                <div class="contact-link">
                    <div class="contact-circle contact-circle_1">
                        <img src="{{ asset('img/contact/icon-telegram.svg') }}" alt="">
                    </div>
                    Telegram
                </div>
                <div class="contact-link">
                    <div class="contact-circle contact-circle_2">
                        <img src="{{ asset('img/contact/icon-whatsapp.svg') }}" alt="">
                    </div>
                    Whats app
                </div>
                <div class="contact-link">
                    <div class="contact-circle contact-circle_3">
                        <img src="{{ asset('img/contact/icon-vk.svg') }}" alt="">
                    </div>
                    Vkontakte
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.contact -->

<!-- css -->
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $('#paybox').on('click', () => {
        document.location = "{{ route('pay') }}";
    })
</script>

</body>
</html>
