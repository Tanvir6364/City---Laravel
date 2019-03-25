

<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- for-meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-meta-tags-->
    <link href="{{asset('public/frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/css/flexslider.css')}}" type="text/css" media="screen" Department="" />
    <link href="{{asset('public/frontEnd/css/services.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('public/frontEnd/css/ziehharmonika.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontEnd/css/team.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontEnd/css/wickedpicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontEnd/css/jquery-ui.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/frontEnd/css/JiSlider.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('public/admin/css/animate.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('public/frontEnd/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js">




        {{--Adminnnnnn--}}






</head>

<body>
<div class="main" id="home">
    {{--Header--}}
        @include('frontEnd.includes.header')

    <!-- banner -->
    {{--Menu--}}
    @include('frontEnd.includes.menu')

</div>
<!-- banner -->

@yield('mainContent')

<!-- //services-bottom -->

<!-- footer -->
@include('frontEnd.includes.footer')
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script src="{{asset('public/frontEnd/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('public/frontEnd/js/JiSlider.js')}}"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
    })
</script><script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script src="{{asset('public/frontEnd/js/ziehharmonika.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.ziehharmonika').ziehharmonika({
            collapsible: true,
            prefix: ''
        });
    });
</script>
<!-- stats -->
<script src="{{asset('public/frontEnd/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/frontEnd/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<script type="text/javascript">
    $(function(){
        $("#bars li .bar").each(function(key, bar){
            var percentage = $(this).data('percentage');

            $(this).animate({
                'height':percentage+'%'
            }, 1000);
        })
    })
</script>

<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Health Plus
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <img src="{{asset('public/frontEnd/images/g9.jpg')}}" alt=" " class="img-responsive" />
                    <p>Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur? Quis autem
                        vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur, vel illum qui
                        dolorem eum fugiat quo voluptas nulla pariatur.
                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                            esse quam nihil molestiae consequatur.</i></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->

<!-- flexSlider -->
<script defer src="{{asset('public/frontEnd/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('public/frontEnd/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontEnd/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('public/frontEnd/js/jarallax.js')}}"></script>
<script src="{{asset('public/frontEnd/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>

<script src="{{asset('public/frontEnd/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>