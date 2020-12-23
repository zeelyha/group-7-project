<footer class="section page-footer black lighten-1">
        <footer class="footer-copyright black lighten-1">
          <div class="container center-align">&copy; 2020 LadiesAtWork</div>
        </footer>
    </footer> 


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.slider').owlCarousel({
              loop: true,
              autoplay: true,
              autoplayTimeout: 2000, //2000ms = 2s;
              autoplayHoverPause: true,
            });
        });
    </script>
    
</body>
</html>