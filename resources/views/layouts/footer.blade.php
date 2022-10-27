<!-- Footer -->
<footer class="sticky-footer">
    <div class="container">
        <a class="text-center">
            <small class="font-15">Copyright © <?php echo date("D,M,Y"); ?> Course Management System</small>
    </div>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
    <i class="ti-angle-double-up"></i>
</a>


<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/plugins/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Slick Slider Js -->
<script src="{{asset('assets/plugins/slick-slider/slick.js')}}"></script>

<!-- Slim Scroll -->
<script src="{{asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js')}}"></script>

<!-- Angular Tooltip -->
<script src="{{asset('assets/plugins/angular-tooltip/angular.js')}}"></script>
<script src="{{asset('assets/plugins/angular-tooltip/angular-tooltips.js')}}"></script>
<script src="{{asset('assets/plugins/angular-tooltip/index.js')}}"></script>

<!-- Morris.js charts -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.js')}}"></script>

<!-- Custom Chart JavaScript -->
<script src="{{asset('assets/dist/js/custom/dashboard/dashboard.js')}}"></script>
<!-- Custom Chartjs JavaScript -->
<script src="{{asset('assets/dist/js/custom/chart/chartjs.js')}}"></script>



<!-- Custom scripts for all pages -->
<script src="{{asset('assets/dist/js/glovia.js')}}"></script>
<script src="{{asset('assets/dist/js/jQuery.style.switcher.js')}}"></script>

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

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'print','copy', 'excel', 'pdf', 'colvis' ]
        } );
        table.buttons().container()
            .appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
    } );
</script>
<script type="text/javascript">
    function SetDate()
    {
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;
        var today = year + "-" + month + "-" + day;
        document.getElementById('myDate1').value = today;
        document.getElementById('myDate2').value = today;
        document.getElementById('myDate').value = today;
        document.getElementById('myDate3').value = today;
        document.getElementById('myDate4').value = today;
    }
</script>


<body onload="SetDate();">
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@yield('charts')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

@yield('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

@yield('page_scripts')


</div>



<!-- Wrapper -->

</body>

</html>
