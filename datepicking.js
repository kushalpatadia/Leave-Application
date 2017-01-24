         $( function() {
          $('#date1').datepicker();
          $('#date2').datepicker();
          

          $('#date2').change(function() {
              var diff = $('#date1').datepicker("getDate") - $('#date2').datepicker("getDate");
              $('#diff').text(diff / (1000*60*60*24) * -1);
          });
        });
