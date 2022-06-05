<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="stylesheet"
          type="text/css"
          href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header_body">
            <img src="{{asset('images/logo.png')}}"
                 alt="">
            <nav class="header_nav">
                <ul class="header_list">
                    <li>
                        <a href=""
                           class="header_link">Служения</a>
                    </li>
                    <li>
                        <a href=""
                           class="header_link">Местоположение</a>
                    </li>
                    <li>
                        <a href=""
                           class="header_link">Пожервования</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header_social_networks">
        <a href="">
            <img src="{{asset('images/social_networks/instagram.png')}}"
                 alt="">
        </a>
        <a href="">
            <img src="{{asset('images/social_networks/vk.png')}}"
                 alt="">
        </a>
        <a href="">
            <img src="{{asset('images/social_networks/youtube.png')}}"
                 alt="">
        </a>
    </div>
</header>
<section class="slider_section">
    <section class="splide"
             aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="slider_speakers_image_div">
                        <div class="container">
                            <img src="{{asset('images/speakers/speaker_Oleg.png')}}"
                                 alt="">
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="slider_speakers_image_div">
                        <div class="container">
                            <img src="{{asset('images/speakers/speaker_Sergey.png')}}"
                                 alt="">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</section>
<footer class="footer">
    <div class="header_social_networks footer_soc_networks">
        <a href="">
            <img src="{{asset('images/social_networks/instagram.png')}}"
                 alt="">
        </a>
        <a href="">
            <img src="{{asset('images/social_networks/vk.png')}}"
                 alt="">
        </a>
        <a href="">
            <img src="{{asset('images/social_networks/youtube.png')}}"
                 alt="">
        </a>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
