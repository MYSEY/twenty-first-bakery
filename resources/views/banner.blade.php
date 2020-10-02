<div class="d-banner">

    <div class="d-banner-background" style="background-image: url('{{asset('storage/images/S21_7029.jpg')}}')">
        <div class="d-banner-content" >
            <div class="d-banner-content-logo">
                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" src="{{asset('storage/images/logo.svg')}}" alt="">
            </div>
            <div class="d-banner-content-cake">
                <img data-aos="fade-down" src="{{asset('storage/images/cake.png')}}" alt="">
            </div>
        </div>
    </div>

</div>

<style>
    .d-banner-background{
        width: 100%;
        height: 100vh;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .d-banner-content{
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .d-banner-content-logo{
        width: 10%;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
    }
    .d-banner-content-logo img{
        width: 100%;
    }
    .d-banner-content-cake{
        width: 50%;
        position: absolute;
        bottom: 10%;
        left: 50%;
        transform: translateX(-50%);
    }
    .d-banner-content-cake img{
        width: 100%;
    }
</style>
