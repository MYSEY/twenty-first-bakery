<div class="d-gallery">

    <div class="d-gallery-background" style="background-image: url('{{asset("storage/images/gallery_background.jpg")}}')">
        <div class="d-gallery-content">

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

            <div class="d-gallery-item">
                <div class="d-gallery-item-overlay"></div>
                <img class="d-gallery-item-image" src="{{asset('storage/images/gallery_one.jpg')}}" alt="">
            </div>

        </div>
    </div>

</div>

<style>
    .d-gallery-background{
        width: 100%;
        height: auto;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: 50% 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 100px 0;
    }
    .d-gallery-content{
        margin-top: 800px;
        width: 70%;
        height: auto;
        /*background-color: red;*/
        display: flex;
        flex-direction: row;
        gap: 20px;
        flex-wrap: wrap;
    }
    .d-gallery-item{
        flex: 1 0 30%;
        height: 600px;
        background-color: white;
        cursor: pointer;
        overflow: hidden;
        position: relative;
    }
    .d-gallery-item .d-gallery-item-image{
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.3s ease;
    }
    .d-gallery-item-overlay{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0, 0.7);
        opacity: 0;
        transition: 0.3s ease;
        z-index: 1000;
    }
    .d-gallery-item:hover .d-gallery-item-image{
        transform: scale(1.1);
    }
    .d-gallery-item:hover .d-gallery-item-overlay{
        opacity: 1;
    }
    @media only screen and (max-width: 600px) {
        .d-gallery-background{
            background-size: contain;
            background-position: 50% 0;
            padding: 10px;
            z-index: 100000000;
            overflow: hidden;
            margin-top: -15%;
        }
        .d-gallery-content{
            margin: 250px 0 100px 0;
            width: 100%;
            flex-direction: column;
            gap: 20px;
            flex-wrap: nowrap;
        }
        .d-gallery-item{
            flex: 1 0 100%;
            height: 300px;
        }
    }
</style>
