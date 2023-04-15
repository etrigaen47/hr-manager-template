<link rel="stylesheet" href="f-components/bootstrap.min.css">
<link rel="stylesheet" href="f-components/fullcalendar.min.css">

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" /> -->
<!-- JS for jQuery -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- JS for full calender -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script> -->
<!-- bootstrap css and js -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

<div id="calendar"></div>
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="f-components/jquery-3.4.1.min.js"></script>
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="f-components/moment.min.js"></script>
<script src="f-components/fullcalendar.min.js"></script>
<script src="f-components/bootstrap.min.js"></script>

<script>
      $(document).ready(function() {
          //display_events();
          var calendar = $('#calendar').fullCalendar({
                      defaultView: 'month',
                      timeZone: 'local',
                      editable: true,
                      selectable: true,
                      selectHelper: true,
                    //   select: function(start, end) {
                    //       //alert(start);
                    //       //alert(end);
                    //       $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
                    //       $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
                    //       $('#event_entry_modal').modal('show');
                    //   },
                    //   events: events,
                    //   eventRender: function(event, element, view) {
                    //       element.bind('click', function() {
                    //           alert(event.event_id);
                    //       });
                    //   }
                  });
      });

    //   function display_events() {
    //       var events = new Array();
    //       $.ajax({
    //           url: 'public/components/display_event.php',
    //           dataType: 'json',
    //           success: function (response) {

    //               var result=response.data;
    //               $.each(result, function (i, item) {
    //                   events.push({
    //                       event_id: result[i].event_id,
    //                       title: result[i].title,
    //                       start: result[i].start,
    //                       end: result[i].end,
    //                       color: result[i].color,
    //                       url: result[i].url
    //                   });
    //               })
    //               var calendar = $('#calendar').fullCalendar({
    //                   defaultView: 'month',
    //                   timeZone: 'local',
    //                   editable: true,
    //                   selectable: true,
    //                   selectHelper: true,
    //                   select: function(start, end) {
    //                       //alert(start);
    //                       //alert(end);
    //                       $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
    //                       $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
    //                       $('#event_entry_modal').modal('show');
    //                   },
    //                   events: events,
    //                   eventRender: function(event, element, view) {
    //                       element.bind('click', function() {
    //                           alert(event.event_id);
    //                       });
    //                   }
    //               }); //end fullCalendar block
    //           },//end success block
    //           error: function (xhr, status) {
    //               //alert(response.msg);
    //           }
    //       });//end ajax block
    //   }
  </script>