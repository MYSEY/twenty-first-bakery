<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twenty First Bakery</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

        <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!--AOS-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css"/>
        <link href="{{asset('storage/libraries/hamburger/hamburgers.min.css')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('storage/libraries/snow/snowfall.css')}}">

        <!--light gallery-->
        <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">

        <!--Izmir - ImageHover CSS Library-->
        <link rel="stylesheet" href="{{asset('storage/libraries/Izmir_hover_effect/izmir.min.css')}}">

        <style>
            @font-face {
                font-family: 'helvethaica';
                src: url("{{asset('storage/fonts/DB Helvethaica X Med Cond v3.2.ttf')}}");
            }
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                text-decoration: none;
                font-family: helvethaica, Arial;
            }
            a:hover{
                text-decoration: none;
            }
        </style>
    </head>
    <body>

        <div>

            <snowfall>
                <snowflake><span>❄</span>️️</snowflake>
                <snowflake><span>🍂</span>️️</snowflake>
                <snowflake><span>💝</span> ️️</snowflake>
                <snowflake><span>🌟</span>️</snowflake>
                <snowflake><img src="{{asset('storage/images/snowflake.png')}}">️</snowflake>
            </snowfall>

            @include('desktop_nav')
            @include('mobile_nav')
            @include('banner')
            @include('our_story')
            @include('overview')
            @include('cake_card')
            @include('map')
            @include('contact')
            @include('gallery')
            @include('footer')

        </div>

        <!--AOS-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!--light gallery-->
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'))
        </script>

    </body>
</html>