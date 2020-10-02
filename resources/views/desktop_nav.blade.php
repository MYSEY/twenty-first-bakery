<div class="d-desktop-nav">

    <div class="d-desktop-nav-content">
        <div class="d-desktop-nav-logo">
            <a href=""><img src="{{asset('storage/images/logo.svg')}}" alt="Site Logo"></a>
        </div>
        <div class="d-desktop-nav-menu">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="d-desktop-nav-social">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>

</div>

<style>
    .d-desktop-nav{
        width: 100%;
        height: 70px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        -webkit-box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
        -moz-box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
        box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
        z-index: 1000000;
        position: fixed;
        overflow: hidden;
    }
    .d-desktop-nav-content{
        width: 70%;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .d-desktop-nav-menu{
        flex: 1;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        height: 100%;
        gap: 20px;
    }
    .d-desktop-nav-menu a{
        /*background-color: gray;*/
        /*height: 100%;*/
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        color: white;
        text-transform: uppercase;
        width: 100px;
        letter-spacing: 3px;
        border-bottom: 2px solid transparent;
        transition: 0.3s ease;
    }
    .d-desktop-nav-menu a:hover{
        border-bottom: 2px solid white;
    }
    .d-desktop-nav-logo{
        flex: 1;
        height: 100%;
        padding: 10px;
    }
    .d-desktop-nav-logo img{
        height: 100%;
    }
    .d-desktop-nav-social{
        flex: 1;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
    }
    .d-desktop-nav-social a{
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
        .d-desktop-nav{
            display: none;
        }
    }
</style>
