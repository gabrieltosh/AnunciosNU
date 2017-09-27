    <script src="{{asset('js/chart-master/Chart.js')}}"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
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
    
		 @if(\Session::has('message'))
             @include('panel.alerts.message')
         @endif  
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>