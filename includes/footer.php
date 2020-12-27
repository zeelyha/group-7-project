<footer class="section page-footer black lighten-1">
        <footer class="footer-copyright black lighten-1">
          <div class="container center-align">&copy; 2020 LadiesAtWork team7</div>
        </footer>
    </footer> 


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
            $('.slider').owlCarousel({
              loop: true,
              autoplay: true,
              autoplayTimeout: 2000, //2000ms = 2s;
              autoplayHoverPause: true,
            });
            $('.tabs').tabs();
            $('.slider').slider({
              fullWidth: true,
              indicators: false,
              height: 500
            });
            $(".cont").slice(0, 3).show();
            $("#loadMore").on("click", function(e){
              e.preventDefault();
              $(".cont:hidden").slice(0, 3).slideDown();
              if($(".cont:hidden").length == 0) {
                $("#loadMore").text("No Content").addClass("noContent");
              }
            });
            
        });
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWiKzQSvSx1E9UXgLQB9jPdhzBS0pR9yM&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
    <script src="./js/map.js"></script>
</body>
</html>