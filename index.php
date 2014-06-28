<!DOCTYPE html>
<html>
<head>
</head>
<script src="pace.js"></script>
<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
<script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.3.0/firebase-simple-login.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link href="loadingbar2.css" rel="stylesheet" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>GetMeetUp v1.0</title>

  <?php
  session_start();
  $_SESSION['allowed_access'] = true;
  ?>

  
  <script type="text/javascript">

var firebaseRef = new Firebase("https://intense-fire-9670.firebaseio.com/");
    var auth = new FirebaseSimpleLogin(firebaseRef, function(error, user) {
      if (error) {
        // an error occurred while attempting login
        alert(error);
      } else if (user) {
        // user authenticated with Firebase

    

        // Log out so we can log in again with a different provider.
        //auth.logout();
      } else {
        window.location.href = "login.php";
      }
    });
    function logout() {
      auth.logout();
      window.location.href = "login.php";
      
    }

  //auth.logout();
$(window).load(function(){
$("#add-address").click(function(e){
        e.preventDefault();
        var numberOfAddresses = $("#form1").find("input[name^='data[address]']").length;
        var label = '<label for="data[address][' + numberOfAddresses + ']"></label> ';
        var input = '<input type="text" name="data[address][' + numberOfAddresses + ']" id="data[address][' + numberOfAddresses + ']" placeholder= "Address ' + (numberOfAddresses+1) + '"/>';
        var removeButton = '<button class="remove-address">Remove</button>';
        var html = "<div class='address'>" + label + input + removeButton + "</div>";
        $("#form1").find("#add-address").before(html);
    });

$(document).on("click", ".remove-address",function(e){
    e.preventDefault();
    $(this).parents(".address").remove();
    //update labels
    $("#form1").find("label[for^='data[address]']").each(function(){
        //$(this).html("Address " + ($(this).parents('.address').index() + 1));
        $(this).next("input").attr("placeholder","Address " + ($(this).parents('.address').index() + 1));

    });
});

});//]]>  

$(document).ready(function(){
        $(".main").hide();
     });

    $(window).load(function(){
       
        $(".main").fadeIn("slow");
     });


</script>



<body>


<div class = "main">
<p><a href="javascript:logout();">Logout</a></p>
  <form id="form1" method="post" action = "h.php">
    <div class="address">
        <!--<label for="data[address][0]">Address 1</label>-->
        <input type="text" name="data[address][0]" id="data[address][0]" placeholder = "Address 1" />
    </div>
    <button id="add-address">Add address</button>
    <br />Method of Travel
    <select name="dropdown" id="dropdown">
    <option value="DRIVING">Driving</option>
    <option value="TRANSIT">Public Transportation</option>
    <option value="BICYCLING">Biking</option>
    <option value="WALKING">Walking</option>
    </select>
    <br>
    <input type="text" name="keyword" id="keyword" placeholder = "What Kind of Place" />
    <br>
    <input type="submit" value="Submit" />
</form>

</div>
  
</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50600257-1', 'getmeetup.com');
  ga('send', 'pageview');

</script>


</html>
