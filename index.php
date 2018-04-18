<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Drug Education Project</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row home">
      <div class="unc-background">
          <img src="images/ramses.jpg" alt="UNC mascot Ramses" />
      </div>
      <div class="description">
        <h1>Drug Education Program</h1>
        <br />
        <p>
        This short program will ask you questions about how much alcohol you drink and which drugs you use (illegal, prescription, and over-the-counter). When you are finished, you’ll instantly get a response with information specific to what you answered. Your information can help you increase your health and improve your athletic performance.
        </p>
        <br />
        <div class="home-button">
          <div>
            <form id="introForm" method="POST" action="intro.php">

              <div class="input-group">
                <p>Enter your Unique ID Number</p>
            		<input type="number" name="userId" >
            	</div>

              <br/>

              <div class="input-group">
                <p>Please choose which team you play for:</p>
                <p>Athletic Team: <select name="team">
                  <option value="basketball">Basketball</option>
                  <option value="baseball">Baseball</option>
                  <option value="football">Football</option>
                  <option value="volleyball">Volleyball</option>
                  <option value="soccer">Soccer</option>
                </select>
                </p>
              </div>

              <br/>

              <div class="input-group">
            		<button type="submit" id="btn">Next</button>
            	</div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
