<div class="d-our-story">

    <div class="d-our-story-background" style="background-image: url('{{asset('storage/images/our_story_background.jpg')}}')">

        <div class="d-our-story-content" >
            <div data-tilt class="js-tilt d-our-story-img">
                <img data-aos="flip-up" src="{{asset('storage/images/our_story_image.jpg')}}" alt="">
            </div>
            <div class="d-our-story-text">
                <h1 data-aos="fade-up" class="d-our-story-text-header">Our Story</h1>
                <p data-aos="fade-up" class="d-our-story-text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation</p>
            </div>
        </div>

    </div>

</div>

<style>
    .d-our-story-background{
        width: 100%;
        height: auto;
        background-position: 50% 100%;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 100px;
        overflow: hidden;
    }
    .d-our-story-content{
        height: 100%;
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }
    .d-our-story-img{
        flex: 1;
        height: 100%;
        /*background-color: red;*/
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .d-our-story-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-our-story-text{
        flex: 1;
        height: 100%;
        /*background-color: blue;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .d-our-story-text .d-our-story-text-header{
        font-weight: bold;
        font-size: 40px;
    }
    .d-our-story-text .d-our-story-text-desc{
        font-size: 22px;
    }
    @media only screen and (max-width: 600px) {
        .d-our-story-background{
            padding: 50px 10px;
        }
        .d-our-story-content{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    }
</style>
