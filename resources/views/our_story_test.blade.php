<style>
    body {
        background-color:darkgray;
        position: absolute;
        top: 0;
        left:0;
        width: 100%;
        height:100%;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -webkit-perspective: 1000px;
    }

    #container {
        outline: 1px solid transparent;
        position: absolute;
        left:50%;
        top:50%;
        margin-left: -250px;
        margin-top: -265px;
        height: 537px;
        width: 500px;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        background: url('http://zadesigns.com/tron/background.jpg') no-repeat;
        transform: translateZ(0px);
        -moz-transform: translateZ(0px);
        -webkit-transform: translateZ(0px);
    }

    .figure{
        outline: 1px solid transparent;
        width: 142px;
        height: 483px;
        background: url('http://zadesigns.com/tron/tron.png') no-repeat;
        position: absolute;
        transform: translateZ(120px);
        -moz-transform: translateZ(120px);
        -webkit-transform: translateZ(120px);
        bottom: 0px;
        left: 50%;
        margin-left: -71px;
    }

    .gsap {
        outline: 1px solid transparent;
        width: 396px;
        height: 128px;
        background: url('http://zadesigns.com/tron/GSAP.png') no-repeat;
        position: absolute;
        transform: translateZ(60px);
        -moz-transform: translateZ(60px);
        -webkit-transform: translateZ(60px);
        top: 30px;
        left: 50%;
        margin-left: -198px;
    }
    .tagline {
        width:500px;
        outline: 1px solid transparent;
        position: absolute;
        transform: translateZ(80px);
        -moz-transform: translateZ(80px);
        -webkit-transform: translateZ(80px);
        bottom: 0px;
        left:50%;
        margin-left:-280px;
        padding-left: 30px;
        padding-right: 30px;
        background: rgba(0,0,0,0.6);
        font-family: Arial, Helvetica, "Helvetica-Neue", san-serif;
        color: #FFF;
        font-size: 30px;
        line-height: 60px;
        text-align:center;
        color: #F9E48B;
        text-transform: uppercase;

    }
</style>

<div id="container">
    <div class="gsap"></div>
    <div class="figure"></div>
    <div class="tagline">
        GSAP 3D Parallax Demo
    </div>
</div>

<script>
    $(document).ready(function() {

        var request = null;
        var mouse = { x: 0, y: 0 };
        var cx = window.innerWidth / 2;
        var cy = window.innerHeight / 2;

        $('body').mousemove(function(event) {

            mouse.x = event.pageX;
            mouse.y = event.pageY;

            cancelAnimationFrame(request);
            request = requestAnimationFrame(update);
        });

        function update() {

            dx = mouse.x - cx;
            dy = mouse.y - cy;

            tiltx = (dy / cy);
            tilty = - (dx / cx);
            radius = Math.sqrt(Math.pow(tiltx,2) + Math.pow(tilty,2));
            degree = (radius * 20);
            TweenLite.to("#container", 1, {transform:'rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)', ease:Power2.easeOut});
        }

        $(window).resize(function() {
            cx = window.innerWidth / 2;
            cy = window.innerHeight / 2;
        });
    });
</script>
