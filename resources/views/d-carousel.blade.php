<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="d-overview">
    <div class="d-overview-background">


        <div class="swiper-container" id="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide active-slider">

                    <div class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/1.jpg')}}" data-intensity="-0.8">
                        <!--content text-->
                        <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
{{--                            <h1 class="d-overview-item-content-header">Monday</h1>--}}
                            <figcaption class="c4-layout-bottom-center">
                                <div class="c4-rotate-up-right">
                                    <h4 class="d-overview-item-content-desc">Monday</h4>
                                </div>
                            </figcaption>
                        </figure>
                        <!--content image-->
                        <img src="{{asset('storage/images/image-monday.jpg')}}" alt="Monday"/>
                        <img src="{{asset('storage/images/image-monday.jpg')}}" alt="Monday"/>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/7.jpg')}}" data-intensity="-0.8">
                        <!--content text-->
                        <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
{{--                            <h1 class="d-overview-item-content-header">Tuesday</h1>--}}
                            <figcaption class="c4-layout-bottom-center">
                                <div class="c4-rotate-up-right">
                                    <h4 class="d-overview-item-content-desc">Tuesday</h4>
                                </div>
                            </figcaption>
                        </figure>
                        <!--content image-->
                        <img src="{{asset('storage/images/image-tuesday.jpg')}}" alt="Tuesday"/>
                        <img src="{{asset('storage/images/image-tuesday.jpg')}}" alt="Tuesday"/>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/14.jpg')}}" data-intensity="-0.8">
                        <!--content text-->
                        <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
{{--                            <h1 class="d-overview-item-content-header">Wednesday</h1>--}}
                            <figcaption class="c4-layout-bottom-center">
                                <div class="c4-rotate-up-right">
                                    <h4 class="d-overview-item-content-desc">Wednesday</h4>
                                </div>
                            </figcaption>
                        </figure>
                        <!--content image-->
                        <img src="{{asset('storage/images/image-wednesday.jpg')}}" alt="Wednesday"/>
                        <img src="{{asset('storage/images/image-wednesday.jpg')}}" alt="Wednesday"/>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/13.jpg')}}" data-intensity="-0.8">
                        <!--content text-->
                        <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
{{--                            <h1 class="d-overview-item-content-header">Thursday</h1>--}}
                            <figcaption class="c4-layout-bottom-center">
                                <div class="c4-rotate-up-right">
                                    <h4 class="d-overview-item-content-desc">Thursday</h4>
                                </div>
                            </figcaption>
                        </figure>
                        <!--content image-->
                        <img src="{{asset('storage/images/image-thursday.jpg')}}" alt="Thursday"/>
                        <img src="{{asset('storage/images/image-thursday.jpg')}}" alt="Thursday"/>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/10.jpg')}}" data-intensity="-0.8">
                        <!--content text-->
                        <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
{{--                            <h1 class="d-overview-item-content-header">Friday</h1>--}}
                            <figcaption class="c4-layout-bottom-center">
                                <div class="c4-rotate-up-right">
                                    <h4 class="d-overview-item-content-desc">Friday</h4>
                                </div>
                            </figcaption>
                        </figure>
                        <!--content image-->
                        <img src="{{asset('storage/images/image-friday.jpg')}}" alt="Friday"/>
                        <img src="{{asset('storage/images/image-friday.jpg')}}" alt="Friday"/>
                    </div>

                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>
</div>

<style>
    .d-overview-background{
        width: 100%;
        height: auto;
        background-color: white;
        padding: 50px;
    }
    .swiper-container {
        width: 80%;
        height: 500px;
    }


    .d-overview-item{
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }
    .d-overview-item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: none;
    }
    .d-overview-item-content{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: transparent;
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        z-index: 10000000;
    }
    /*.d-overview-item-content-header{*/
    /*    font-size: 70px;*/
    /*    padding: 0;*/
    /*    margin: 0;*/
    /*    line-height: 1;*/
    /*}*/
    .d-overview-item-content-desc{
        font-size: 46px;
        padding: 0;
        margin: 0;
        line-height: 1;
    }
    @media only screen and (max-width: 600px) {
        .d-overview-background{
            padding: 50px 10px;
        }
        .swiper-container {
            width: 100%;
            height: 300px;
        }
    }
</style>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('storage/libraries/mouse_move_effect/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('storage/libraries/mouse_move_effect/js/three.min.js')}}"></script>
<script src="{{asset('storage/libraries/mouse_move_effect/js/TweenMax.min.js')}}"></script><!--tweenmax is added in index file-->
<script src="{{asset('storage/libraries/mouse_move_effect/js/hover-effect.umd.js')}}"></script>


<script>
    new Swiper('#swiper-container2', {
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        grabCursor: true,
        lazy: true,
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    })


    $(document).ready(function() {
        Array.from(document.querySelectorAll('.d-overview-item')).forEach((el) => {
            const imgs = Array.from(el.querySelectorAll('img'));
            new hoverEffect({
                parent: el,
                intensity: el.dataset.intensity || undefined,
                speedIn: el.dataset.speedin || undefined,
                speedOut: el.dataset.speedout || undefined,
                easing: el.dataset.easing || undefined,
                hover: el.dataset.hover || undefined,
                image1: imgs[0].getAttribute('src'),
                image2: imgs[1].getAttribute('src'),
                displacementImage: el.dataset.displacement
            });
        });
    });
</script>
