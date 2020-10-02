<div class="d-overview">

    <div class="d-overview-background">
        <div class="d-overview-content">

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="300" class="d-overview-item">
                <div class="d-overview-item-content">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <p class="d-overview-item-content-desc">Chocolate</p>
                </div>
                <img src="{{asset('storage/images/S21_3389.jpg')}}" alt="">
            </div>

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300" class="d-overview-item">
                <div class="d-overview-item-content">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <p class="d-overview-item-content-desc">Chocolate</p>
                </div>
                <img src="{{asset('storage/images/S21_3389.jpg')}}" alt="">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="600" class="d-overview-item">
                <div class="d-overview-item-content">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <p class="d-overview-item-content-desc">Chocolate</p>
                </div>
                <img src="{{asset('storage/images/S21_3389.jpg')}}" alt="">
            </div>

        </div>
    </div>

</div>

<style>
    .d-overview-background{
        width: 100%;
        height: auto;
        background-color: white;
    }
    .d-overview-content{
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
        gap: 30px;
    }
    .d-overview-item{
        flex: 1;
        height: 800px;
        cursor: pointer;
        overflow: hidden;
        position: relative;
    }
    .d-overview-item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-overview-item-content{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
    }
    .d-overview-item-content:hover{
        opacity: 1;
    }
    .d-overview-item-content-header{
        font-size: 70px;
    }
    .d-overview-item-content-desc{
        font-size: 46px;
    }
    @media only screen and (max-width: 600px) {
        .d-overview-content{
            flex-direction: column;
            gap: 10px;
        }
        .d-overview-item{
            height: 400px;
        }
        .d-overview-item-content{
            opacity: 1;
        }
    }
</style>
