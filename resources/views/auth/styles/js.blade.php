    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('pagina/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('js/common-scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gritter-conf.js')}}"></script>
    <!--script for this page-->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>    
      <script src="{{asset('js/zabuto_calendar.js')}}"></script>  
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('js/jquery.backstretch.min.js')}}"></script>
   
    <script>
       $.backstretch("{{asset('../assets/images/educacion4.jpg')}}", {speed: 500});
    </script>