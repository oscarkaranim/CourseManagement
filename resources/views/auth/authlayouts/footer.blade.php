</div>
<!-- .login-container -->

</div> <!-- .login-sidebar -->
</div> <!-- .row -->
</div>


<!-- Bootstrap core JavaScript-->
<script src={{asset('assets/plugins/jquery/jquery.min.js')}}></script>
<script src={{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- Core plugin JavaScript-->
<script src={{asset('assets/plugins/jquery-easing/jquery.easing.min.js')}}></script>

<!-- Slick Slider Js -->
<script src={{asset('assets/plugins/slick-slider/slick.js')}}></script>

<!-- Slim Scroll -->
<script src={{asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js')}}></script>

<!-- Custom scripts for all pages-->
<script src={{asset('assets/dist/js/glovia.js')}}></script>
<script src={{asset('assets/dist/js/jQuery.style.switcher.js')}}></script>
<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#styleOptions').styleSwitcher();
    });
</script>

<script>
    $('.dropdown-toggle').dropdown()
</script>

</body>

</html>
