<div class="d-cake-card">

    <div class="d-cake-card-background">
        <div class="d-cake-card-content">

            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" class="d-cake-card-item">
                <div class="d-cake-card-img">
                    <img src="{{asset('storage/images/card_one.jpg')}}" alt="">
                </div>
                <div class="d-cake-card-text">
                    <h1>Peper & sweet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="200" class="d-cake-card-item">
                <div class="d-cake-card-img">
                    <img src="{{asset('storage/images/card_one.jpg')}}" alt="">
                </div>
                <div class="d-cake-card-text">
                    <h1>Peper & sweet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="400" class="d-cake-card-item">
                <div class="d-cake-card-img">
                    <img src="{{asset('storage/images/card_one.jpg')}}" alt="">
                </div>
                <div class="d-cake-card-text">
                    <h1>Peper & sweet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="600" class="d-cake-card-item">
                <div class="d-cake-card-img">
                    <img src="{{asset('storage/images/card_one.jpg')}}" alt="">
                </div>
                <div class="d-cake-card-text">
                    <h1>Peper & sweet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>

        </div>
    </div>

</div>

<style>
    .d-cake-card-background{
        width: 100%;
        height: auto;
        /*background-color: red;*/
        padding: 100px;
    }
    .d-cake-card-content{
        width: 100%;
        height: auto;
        /*background-color: blue;*/
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }
    .d-cake-card-item{
        flex: 1;
        height: auto;
        /*background-color: yellow;*/
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 0 40px;
    }
    .d-cake-card-img{
        width: 100%;
        flex: 1;
        overflow: hidden;
        /*background-color: green;*/
        height: auto;
    }
    .d-cake-card-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-cake-card-text{
        width: 100%;
        flex: 1;
        overflow: hidden;
        /*background-color: orange;*/
        height: 200px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        padding: 10px;
    }
    @media only screen and (max-width: 600px) {
        .d-cake-card-background{
            padding: 50px 10px;
        }
        .d-cake-card-content{
            flex-direction: column;
            gap: 30px;
        }
        .d-cake-card-item{
            flex: 1;
            height: auto;
            /*background-color: yellow;*/
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0;
            padding: 0 40px;
        }
    }
</style>
