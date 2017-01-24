$(document).ready(function(){
  $('#add_ajax').click(function(){
    var name = $('#searchid').val();
    var full_f = $('#date1').val();
    var full_t = $('#date2').val();
    var half_f = $('#date3').val();
    var half_t = $('#date4').val();
    var count_f = $('#diff').val();
    var count_h = $('#diff1').val();
    var total = $('#diff2').val();
    $.ajax({
            type: "post",
            url: "sendajax.php",
            data: 'name='+name+'&full_f='+full_f+'&full_t='+full_t+
            '&half_f='+half_f+'&half_t='+half_t+'&count_f='+count_f+'&count_h='+count_h+'&total='+total,
            success: function(){
              alert('data inserted');
            }
    })
  });
  $("#holiday_btn").click(function(){
      $("#div1").load("holidays.php");
      $("#div1").hide("holidays.php");
  });
  $("#holiday_btn").dblclick(function(){
      $("#div1").show("demo_test.txt");
  });
  $("#div2").hide();
  $("#find").click(function(){
    $("#div2").show();
  });
  
  $('#find_me').click(function(){
    var findme = $('#findme').val();
    $.ajax({
      type:"POST",
      url : "getdata.php",
      data : 'findme='+findme,
      success : function(response){
        alert(response);
        $("#comment").val(response);
      },
      async:false
    })
  });
});
