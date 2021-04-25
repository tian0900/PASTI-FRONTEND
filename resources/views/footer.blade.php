<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
 
  <script>$(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});</script>

  
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Sopanagaman Official
                    <a rel="nofollow noopener" href="#" target="_blank"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery')}}/jquery.min.js"></script>
    <script src="{{asset('bootstrap')}}/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('js')}}/custom.js"></script>
    <script src="{{asset('js')}}/owl.js"></script>
    <script src="{{asset('js')}}/slick.js"></script>
    <script src="{{asset('js')}}/isotope.js"></script>
    <script src="{{asset('js')}}/accordions.js"></script>
    <script src="{{asset('jquery')}}/jquery.min.js"></script>
    <script src="{{asset('bootstrap')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js')}}/custom.js"></script>
    <script src="{{asset('js')}}/owl.js"></script>
    <script src="{{asset('js')}}/slick.js"></script>
    <script src="{{asset('js')}}/isotope.js"></script>
    <script src="{{asset('js')}}/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
