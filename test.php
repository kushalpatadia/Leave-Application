<!DOCTYPE html>
<html>
<head>
<!-- CSS Files -->
<title>LMS</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="index.css" />
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- CSS Files links ends -->
  
  <!-- Script links -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <!-- Script links ends -->
<script src="jquery-1.8.0.min.js"></script>
<script src="search.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="datefunction1.js"></script>
<script src="submit.js"></script>

</head>
<body>
<div class="row" style="border; background-color: #B0C4DE">
<div class="col-sm-4">
<br><br><br>
  <button type="button" class="btn btn-primary btn-lg btn-block" id="holiday_btn">Holidays</button>
  <div id="div1"></div>
</div>
  <div class="jumbotron col-sm-4" style="border: solid;border-color: green">
      <center><h2 style="color: blue"><u><l>Leave Management System</l></u></h2></center>
      <br><br>
        <form method="post" name="form1">
            <div class="input-group">
              <input type="text" class="search form-control"  name="search" placeholder="Search User" id="searchid">
              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" ></span></span>
            </div>
            <div id="result"></div>
            <label style="color: blue" class="input-group">Full Day</label>
            <div class="input-group">
              <input type="date" class="form-control" placeholder="From Date" name="date1" id="date1" >
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              <input type="date" name="date2" placeholder="To Date" id="date2" class="form-control">
            </div>
            <label style="color: blue">Half Day</label>
            <div class="input-group">
              <input type="date" placeholder="From Date" name="date3" id="date3" class="form-control">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              <input type="date" name="date4" placeholder="To Date" id="date4" class="form-control">
            </div>
            <div class="input-group">
              <label for="Total" class="input-group-addon">Total Full-Day Leaves: </label>
              <label for="Total" class="input-group-addon"><input type="text" id="diff" name="diff" disabled></label>
            </div>
            <div class="input-group">
              <label for="Total" class="input-group-addon">Total Half-Day Leaves: </label>
              <label for="Total" class="input-group-addon"><input type="text" id="diff1" name="diff1" disabled></label>
            </div>
            <button type="button" class="btn btn-default btn-lg btn-block" id="click12" value="Total">TOTAL</button>
            <div class="input-group">
              <label for="total" class="input-group-addon">Total All Final Leave:</label>
              <label for="total" class="input-group-addon"><input type="text" id="diff2" name="diff2" disabled></label>
            </div>
            <button type="submit" name="add_ajax" value="add by ajax" id="add_ajax" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
  </div>
  <div class="col-sm-4">
    <br><br><br>
    <button type="button" class="btn btn-primary btn-lg btn-block" id="find">SEARCH</button>
    <div id="div2">
      <form method="post" name="form2"  >
        <div class="input-group">
          <input type="text" class="form-control" name="findme" placeholder="Search User" id="findme">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit" id="find_me"><i class="glyphicon glyphicon-search" ></i></button>
          </div>
          </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment" disabled></textarea>
            </div>
      </form>
    </div>
  </div>
</div>
</body>
</html> 