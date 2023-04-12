
    </div>

    <footer id="footer" class="footer color-bg">
        <div class="main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 width25">
                        <div class="module-heading">
                            <h4 class="module-title">Usefull Links</h4>
                        </div>
                        <div class="module-body">
                            <ul class="usefull_links">
                                <li><a href="{{url('about')}}"> About Us </a></li>
                                <li><a href="{{url('contactus')}}"> Contact Us </a></li>
                                <li><a href="{{url('FAQs')}}"> FAQ </a></li>
                                <li><a href="{{url('partnerus')}}"> Partner with us </a></li>
                                <li><a href="{{url('privacy_policy')}}"> Privacy Policy </a></li>
                                <li><a href="{{url('terms')}}"> Terms and Conditions </a></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 width25">
                        <div class="module-heading">
                            <h4 class="module-title">Payment options</h4>
                        </div>
                        <div class="module-body social appsbar">
                            <ul class="link">
                                <li>
                                    <a target="_blank" rel="nofollow" href="#" title="Facebook">
                                        <img style="width: auto; height: auto;" src="https://cdn.sheeel.com/skin/frontend/sheeel/default/images/payment-cards-icon.png" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 width25">
                        <div class="module-heading">
                            <h4 class="module-title">Follow us</h4>
                        </div>
                        <div class="module-body social">
                            <ul class="link">
                                <li class="fb"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                                <li class="tw"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                                <li class="googleplus"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                                <li class="youtube"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 width25">
                        <div class="module-heading">
                            <h4 class="module-title">Download our app</h4>
                        </div>
                        <div class="module-body social appsbar myapp">
                            <ul class="link">
                                <li>
                                    <a target="_blank" rel="nofollow" href="#" title="Facebook">
                                        <img src="https://cdn.sheeel.com/skin/frontend/sheeel/default/images/app-store.svg" />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" rel="nofollow" href="#" title="Facebook">
                                        <img src="https://cdn.sheeel.com/skin/frontend/sheeel/default/images/google-play.svg" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p> &copy; 2022 Sheeel Dot Com General Trading WLL. All Rights Reserved. </p>
            </div>
        </div>
    </footer>

    {{-- <script src="assets/js/jquery-1.11.1.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/hilios/jQuery.countdown@2.0.4/dist/jquery.countdown.min.js"></script> 
    <script>
// 		// Set the date we're counting down to
// 		var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// 		// Update the count down every 1 second
// 		var x = setInterval(function() {

// 		  // Get today's date and time
// 		  var now = new Date().getTime();
		    
// 		  // Find the distance between now and the count down date
// 		  var distance = countDownDate - now;
		    
// 		  // Time calculations for days, hours, minutes and seconds
// 		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
// 		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
// 		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
// 		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
// 		  // Output the result in an element with id="demo"
// 		  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
// 		  + minutes + "m " + seconds + "s ";
		    
// 		  // If the count down is over, write some text 
// 		  if (distance < 0) {
// 		    clearInterval(x);
// 		    document.getElementById("demo").innerHTML = "EXPIRED";
// 		  }
// 		}, 1000);

        $(function(){
            $('[data-countdown]').each(function() {
                var $this = $(this), finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('%Hh : %Mm : %Ss'));
                });
            });
        });

	</script>

    <script>
    $(document).ready(function(){
        $('.myproducts .products').mouseover(function(){
            $(this).parent().find('.inside_subcat').slideDown();
        });
        $('.myproducts .products').mouseleave(function(){
            $(this).parent().find('.inside_subcat').slideUp();
        });
    });
    </script>
    <script>
    $(function(){
        var current = location.pathname;
        $('.sidemenu li').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active
            if($this.attr('href').indexOf(current) !== -1){
                $this.parent().addClass('myactive');
            }
        })
    })
    </script>


    <script>
        $(document).ready(function(){
            $('.togglebar').click(function(){
                $('.menu').toggle();
            });
        });
    </script>
    
    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>
    
    <style>
    .ajay a{font-size: 12px !important;}
    </style>
    
    <script>
    $(document).ready(function(){
        $('.mysubmenu_sec').hide();
        $('.menu-item a').click(function(){
            $('.mysubmenu_sec').show();
        });
        $('#restaurent_btn').click(function(){
            $('#auto_sec, #entertain_sec, #health_sec, #beauty_sec, #sweet_sec').hide();
            $('#restaurent_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('#auto_btn').click(function(){
            $('#entertain_sec, #restaurent_sec, #health_sec, #beauty_sec, #sweet_sec').hide();
            $('#auto_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('#entertain_btn').click(function(){
            $('#auto_sec, #restaurent_sec, #health_sec, #beauty_sec, #sweet_sec').hide();
            $('#entertain_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('#health_btn').click(function(){
            $('#auto_sec, #restaurent_sec, #entertain_sec, #beauty_sec, #sweet_sec').hide();
            $('#health_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('#beauty_btn').click(function(){
            $('#auto_sec, #restaurent_sec, #health_sec, #entertain_sec, #sweet_sec').hide();
            $('#beauty_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('#sweet_btn').click(function(){
            $('#auto_sec, #restaurent_sec, #health_sec, #beauty_sec, #entertain_sec').hide();
            $('#sweet_sec').show();
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('.mysubmenu_sec li a').click(function(){
            $('.mysubmenu_sec li').removeClass('ajay');
            $(this).parent().addClass('ajay');
        });
    });
    </script>
    

    <script>
   // Disable Right click and source code

    // $(window).on("load",function(){document.onkeydown=function(e){return 123!=e.keyCode&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="I".charCodeAt(0))&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="J".charCodeAt(0))&&((!e.ctrlKey||e.keyCode!="U".charCodeAt(0))&&((!e.ctrlKey||e.keyCode!="C".charCodeAt(0))&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="C".charCodeAt(0))&&void 0)))))},$("html").on("contextmenu",function(){return!1})});
    </script>

</body>

</html>
