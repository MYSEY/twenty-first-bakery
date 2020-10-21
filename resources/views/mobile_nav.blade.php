<div class="d-mobile-nav">

    <div class="d-mobile-nav-background">
        <div class="d-mobile-nav-content">
            <div class="d-mobile-nav-logo">
                <a href=""><img src="{{asset('storage/images/logo.svg')}}" alt="Site Logo"></a>
            </div>
            <div class="d-mobile-nav-icon">
                <button data-pushbar-target="mypushbar1" class="hamburger" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

</div>


<div data-pushbar-id="mypushbar1" data-pushbar-direction="right">
    <div class="d-nav-content">

        <button data-pushbar-close class="hamburger" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
        </button>

{{--        <div class="d-nav-menu-wrapper">--}}
{{--            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'home' ? 'd-nav-menu-item-active' : '' }}" href="#">Hello</a>--}}
{{--            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'product' ? 'd-nav-menu-item-active' : '' }}" href="#">Menu</a>--}}
{{--            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'dealer' ? 'd-nav-menu-item-active' : '' }}" href="#">menu</a>--}}
{{--            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'contact' ? 'd-nav-menu-item-active' : '' }}" href="#">Menu</a>--}}
{{--            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'test_drive' ? 'd-nav-menu-item-active' : '' }}" href="#">Menu</a>--}}

{{--            <div class="lang-switcher">--}}
{{--                <p class="lang-switcher-header">Languages</p>--}}
{{--                <div class="lang-switcher-content">--}}
{{--                    <a class="order-second" href="{{route(Route::currentRouteName(), 'en')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_the_United_Kingdom_%282-3%29.svg" alt=""></a>--}}
{{--                    <a class="order-first" href="{{route(Route::currentRouteName(), 'laos')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Flag_of_Laos.svg" alt=""></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js"></script>
<script>
    $(document).ready(function() {
        new Pushbar({
            blur:true,
            overlay:true,
        });
    });
</script>

<style>
    .d-mobile-nav-background{
        display: none;
    }
    @media only screen and (max-width: 600px) {
        .d-mobile-nav-background{
            width: 100%;
            height: 70px;
            background-color: white;
            overflow: hidden;
            z-index: 10;
            position: fixed;
            display: block;
            -webkit-box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
            -moz-box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
            box-shadow: 0px 3px 16px -6px rgba(107,107,107,1);
            top: 0;
        }
        .d-mobile-nav-content{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
        }
        .d-mobile-nav-logo{
            flex: 1;
            height: 100%;
            padding: 10px;
        }
        .d-mobile-nav-logo img{
            height: 100%;
        }
        .d-mobile-nav-icon{
            flex: 1;
            height: 100%;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
    }
</style>
