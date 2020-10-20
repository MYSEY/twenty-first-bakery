<div class="d-footer">

    <div class="d-footer-background" style="background-image: url('{{asset('storage/images/footer.jpg')}}')">
        <div class="d-footer-content">
            <img class="d-footer-logo" src="{{asset('storage/images/logo.svg')}}" alt="">
            <p class="d-footer-text">&copy Twenty First Backery — All Rights Reserved<br/>Proudly Made For You.</p>
            <div class="d-footer-social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

</div>

<style>
    .d-footer-background{
        width: 100%;
        height: auto;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .d-footer-content{
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 100px;
        background-color: rgba(200, 233, 226, 0.7);
    }
    .d-footer-logo{
        width: 50px;
    }
    .d-footer-text{
        color: white;
        text-align: center;
    }
    .d-footer-social{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .d-footer-social a{
        padding: 10px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #AED5C3;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
    }
    @media only screen and (max-width: 600px) {
        .d-footer-content{
            gap: 5px;
            padding: 30px 0;
        }
    }
</style>
