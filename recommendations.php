<!DOCTYPE html>

<html lang="en">

<head>
   <title>ATX Adventures Recommendations Page</title>
   <meta charset="UTF-8">
   <meta name="description" content="Coding up the basics of our website's recommendations page">
   <meta name="author" content="Snigdha Pakala, Stuti Gupta, Lauren Perry, Manavi Shah">
   <link rel="stylesheet" href="recommendations.css">
   <link rel="stylesheet" href="nav-bar.css">
</head> 

<body>
<script language = "javascript" type = "text/javascript">

   function ajaxFunction(server,user,pwd,dbName){
      var ajaxRequest;  // The variable that makes Ajax possible!
      
      ajaxRequest = new XMLHttpRequest();
      ajaxRequest.onreadystatechange = function(){
         if(ajaxRequest.readyState == 4){
               var ajaxDisplay = document.getElementById('ajaxDiv');
               ajaxDisplay.innerHTML = ajaxRequest.responseText;
         }
      }

      var radios = document.getElementsByName('activity');

      for (var i = 0, length = radios.length; i < length; i++) {
         if (radios[i].checked) {
            var activity = radios[i].value
            break;
         }
      }

      var queryString = "?activity=" + activity ;
      
      ajaxRequest.open("GET", "recupdate.php" + queryString, true);
      ajaxRequest.send(null);
   }

</script>
   <div class = "logo"><a href="home.html"><img id = "logo" src="media/logo.png" alt="picture of logo" width="360" height="360"></a></div>
   <br><br><br>
   <div class="topnav">
      <ul>
         <li><a class = "headers" href="home.html">Home</a></li>
         <li><a class = "headers" href="login.php">Login</a></li>
         <li><a class = "active headers" href="recommendations.php">Recommendations</a></li>
         <li><a class = "headers" href="bucket_login.php">Bucket List</a></li>
         <li><a class = "headers" href="contact.php">Contact</a></li>
      </ul>
   </div>

   <h1 id = "header">Austin Top 3 Attractions</h1>
   <div id = "top_ten">
      <div class = "column">
         <figure>
            <img class = "attractions" src = "media/bats.jpeg" alt = "picture of bat bridge"/>
            <figcaption id = "caption" ><a href="https://www.austintexas.org/things-to-do/outdoors/bat-watching/" style="color: #8ca778" target="_blank">Bat Watching</a></br> You cannot call yourself a true Austin local if you haven't watched the evening bat show off Congress Ave!</figcaption>
         </figure>
      </div>
      <div class = "column">
         <figure>
            <img class = "attractions" src = "media/sixth.jpg" alt = "picture of sixth street"/>
            <figcaption id = "caption" ><a href="https://6street.com/guide-to-austins-6th-street/" style="color: #8ca778" target="_blank">6th Street </a></br> This is THE Nighttime entertainment spot of Austin. It has dive bars, restaurants, delicious food trucks, and lots of music!</figcaption>
         </figure>
      </div>
      <div class = "column">
         <figure>
            <img class = "attractions" src = "media/barton.jpg" alt = "picture of barton springs"/>
            <figcaption id = "caption" ><a href="https://austinot.com/guide-barton-springs-pool" style="color: #8ca778" target="_blank">Barton Springs </a></br> If you are a nature person, this is the perfect daytime activity for you. Go swimming, hiking, or enjoy the recreational park!</figcaption>
         </figure>
      </div>
   </div>

   <div id = 'ajaxDiv'>
   <h2 id = "header">What kind of activities are you interested in?</h2>
   <form id = "preferences" method = "POST" action = "recommendations.php" onsubmit= "return false">
      <?php
      print <<<TOP
      <div class = "activity_checkbox">
         <label><input name = "activity" type = "radio" value = "outdoor" /> Outdoor Activities  </label></br>
         <label><input name = "activity" type = "radio" value = "bar" /> Bar Hopping  </label></br>
         <label><input name = "activity" type = "radio" value = "foodtrucks" /> Food Trucks </label></br>
         <label><input name = "activity" type = "radio" value = "art" /> Art </label></br>
         <label><input name = "activity" type = "radio" value = "diningin" /> Dining In  </label>
      </div>
      <div>
         <button onclick = "ajaxFunction()" id = "submit">Submit</button>
      </div>
TOP;
      ?>
   </form>
   </div>
</body>
</html>
