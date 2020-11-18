
<style>
    #container {
        width: 100%;
        height:100vh;
        overflow: hidden;
        position: fixed;
        z-index: 1000000;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    .roundSmall,
    .roundMedium,
    .roundLarge {
        background: #fff;
        border-radius: 50%;
        position: absolute;
        width: 3px;
        height: 3px;
    }
    .roundMedium {
        width: 4px;
        height: 4px;
    }
    .roundLarge {
        width: 5px;
        height: 5px;
    }
    .starSmall,
    .starMedium,
    .starLarge {
        position: absolute;
        width: 10px;
        height: 10px;
        /*background: url(http://www.freepngimg.com/thumb/snowflakes/52-snowflake-png-image-thumb.png);*/
        background: url("/images/52-snowflake-png-image-thumb.png");
        background-size: 100% 100%;
    }
    .starMedium {
        width: 15px;
        height: 15px;
    }
    .starLarge {
        width: 20px;
        height: 20px;
    }
    .realSmall,
    .realMedium,
    .realLarge {
        position: absolute;
        width: 25px;
        height: 25px;
        /*background: url(http://pngimg.com/upload/snowflakes_PNG7576.png);*/
        background-image: url("/images/frozen.svg");
        background-size: 100% 100%;
    }
    .realMedium {
        width: 30px;
        height: 30px;
    }
    .realLarge {
        width: 40px;
        height: 40px;
    }
    .sharpSmall,
    .sharpMedium,
    .sharpLarge {
        position: absolute;
        width: 20px;
        height: 20px;
        background-size: 100% 100%;
        /*background: url(http://pngimg.com/upload/snowflakes_PNG7559.png);*/
        background-image: url("/images/snowflake.png");
    }
    .sharpMedium {
        width: 28px;
        height: 28px;
    }
    .sharpLarge {
        width: 35px;
        height: 35px;
    }
    .ringSmall,
    .ringMedium,
    .ringLarge {
        position: absolute;
        width: 15px;
        height: 15px;
        /*background-image: url(http://www.freepngimg.com/thumb/snowflakes/13-white-snowflake-png-image-thumb.png);*/
        background-image: url("/images/13-white-snowflake-png-image-thumb.png");
        background-size: 100% 100%;
    }
    .ringMedium {
        width: 25px;
        height: 25px;
    }
    .ringLarge {
        width: 35px;
        height: 35px;
    }
    @media only screen and (max-width: 600px) {
        #container {
            display: none;
        }
    }
</style>


<div id='container'></div>


<script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            console.log("mobile")
        } else {
            console.log("Desktop")
            $(document).ready(function() {
                snowRunning();
            });
        }
    }

    let x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes


    function snowRunning(){
        let w = window.innerWidth , h = window.innerHeight,
            container = document.getElementById("container"),
            sizes = ["Small", "Medium", "Large"],
            types = ["round", "star", "real", "sharp", "ring"],
            snowflakes = 50;

        for (let i = 0; i < snowflakes; i++) {
            let snowflakeDiv = document.createElement('div');
            let sizeIndex = Math.ceil(Math.random() * 3) -1; //get random number between 0 and 2
            let size = sizes[sizeIndex]; //get random size
            let typeIndex = Math.ceil(Math.random() * 5) -1;
            let type = types[typeIndex];
            TweenMax.set(snowflakeDiv, {attr: {class: type + size}, x: R(0,w), y: R(-200,-150) });
            container.appendChild(snowflakeDiv);
            snowing(snowflakeDiv);
        }

        function snowing(element) {
            TweenMax.to(element, R(5,12), {y: h+100, ease: Linear.easeNone, repeat:-1, delay: -15});
            TweenMax.to(element, R(4,8), {x: '+=100', repeat: -1, yoyo: true, ease: Sine.easeInOut});
            TweenMax.to(element, R(2,8), {rotation: R(0,360), repeat: -1, yoyo: true, ease:Sine.easeInOut, delay: -5});
        };

        function R(min,max) {
            return min + Math.random() * (max-min)
        };
    }
</script>
