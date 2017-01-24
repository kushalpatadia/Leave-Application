$( function() {
      var disable=['01/14/2017','01/26/2017','03/13/2017','06/25/2017',
      '08/07/2017','08/14/2017','08/15/2017','09/30/2017','10/02/2017',
      '10/19/2017','10/20/2017','12/25/2017'];
      
      var disables=['2017/01/14','2017/01/26','2017/03/13','2017/06/25',
      '2017/08/07','2017/08/14','2017/08/15','2017/09/30','2017/10/02',
      '2017/10/19','2017/10/20','2017/12/25'];    
          $('#date1').datepicker({
                   daysOfWeekDisabled: "0",
                   format:"yyyy-mm-dd",
                   datesDisabled:disables
                });

          $('#date2').datepicker({
                    daysOfWeekDisabled: "0",
                    format:"yyyy-mm-dd",
                    datesDisabled:disables,
                    });
          $('#date3').datepicker({
                daysOfWeekDisabled: "0",
                format:"yyyy-mm-dd",
                datesDisabled:disables
                     });
          $('#date4').datepicker({
                daysOfWeekDisabled: "0",
                format:"yyyy-mm-dd",
                datesDisabled:disables
              });
          var difffull;
          var diffhalf;
          var difffull1 = 0;
          var diffhalf1 = 0 ;
          var count = 0;
         

         
         $('#date2').change(function() {
         var a=$('#date1').datepicker("getDate");
         var b=$('#date2').datepicker("getDate");
         var start= new Date(a);
         var end = new Date(b);
         if (start > end ) {
                alert('insert proper date');
              }
          var weekend= 0;
                    for (i = start.valueOf(); i <= end.valueOf(); i+= 86400000) 
                    {
                        var temp = new Date(i);
                        var holiday;
                        for (var j = 0; j < disable.length; j++) {
                          holiday = disable[j];
                        if (!(temp < new Date(holiday)) && !(temp > new Date(holiday))) {
                          weekend++;
                        }
                        }
                        if (temp.getDay() == 0 ) 
                        {
                            weekend++;
                        }
                  }
              difffull=b-a;
              difffull1 = (difffull / 86400000 + 1)-weekend;
              $('#diff').val(difffull1);
              if (x > y ) {
                difffull1=0;
                $('#diff').val(difffull1);
              }
            }); 
        $('#date4').change(function() {
              var weekend = 0;
              var c = $('#date3').datepicker("getDate");
              var d = $('#date4').datepicker("getDate");
              var start= new Date(c);
              var end = new Date(d);
              var m=c.getDate();
              var n=d.getDate();
              if (m > n ) {
                alert('insert proper date');
              }
              var weekend= 0;
                    for (i = start.valueOf(); i <= end.valueOf(); i+= 86400000) 
                    {
                        var temp = new Date(i);
                        var holiday;
                        for (var j = 0; j < disable.length; j++) {
                          holiday = disable[j];
                        if (!(temp < new Date(holiday)) && !(temp > new Date(holiday))) {
                          weekend++;
      
                        }
                    }
                        if (temp.getDay() == 0 || temp.getDay() == 6) 
                        {
                            weekend++;
                        }
                  }
              diffhalf = d - c ;
              diffhalf1 = ((diffhalf / 86400000 + 1)-weekend);
              diffhalf1=diffhalf1/2;
              if (m > n ) {
                diffhalf1 = 0;
              }
              $('#diff1').val(diffhalf1);
            });   
          $('#click12').click(function(){
            var final = (difffull1 + diffhalf1 - count);
            $('#diff2').val(final);

          });
          

          });