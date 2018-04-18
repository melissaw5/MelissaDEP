<?php
session_start();
//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'userId' => $_POST["userId"],
    'team' => $_POST["team"]
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);

$_SESSION['Id']= $_POST['userId'];
$_SESSION['Team'] = $_POST['team'];
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
  <div class="home-button">
    Welcome <?php echo $_SESSION['Id']; ?><br>
    Your team is: <?php echo $_SESSION['Team']; ?>
  </div>
  <p><a href="form/form.php">Take the Assessment</a></p>
</body>
</html>
