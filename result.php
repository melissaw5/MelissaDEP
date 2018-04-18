<?php
session_start();
?>

<?php
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
$result = curl_exec($ch); ?>


    <?php

?>

    <html>

    <head>
        <title>Drug Education Project Results</title>
        <link rel="stylesheet" type="text/css" href="result.css">
    </head>

    <body>
        <table class "data-table">
            <caption class="title">Alcohol Consumption Calender Results</caption>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Drank Alchohol?</th>
                    <th>Drank How Much Alcohol</th>
                    <th>Drank for How Long?</th>
                </tr>
            </thead>
            <tbody>
                <!--Use a while loop to make a table row for every DB row-->
                <?php while( $row = $sql->fetch()) : ?>
                <tr>
                    <!--Each table column is echoed in to a td cell-->
                    <td>
                        <?php echo $row['Day']; ?>
                    </td>
                    <td>
                        <?php echo $row['Drank Alcohol?']; ?>
                    </td>
                    <td>
                        <?php echo $row['Drank How Much Alcohol']; ?>
                    </td>
                    <td>
                        <?php echo $row['Drank for How Long?']; ?>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>

        <table class="data-table2">
           <caption class="title">You Said You've Experienced These Symptoms:</caption>
            <thead>
                <tr>
                    <th>Question</th>
                </tr>
            </thead>
            <tbody>
                <!--Use a while loop to make a table row for every DB row-->
                <?php while( $row = $sql->fetch()) : ?>
                <tr>
                    <!--Each table column is echoed in to a td cell-->
                    <td>
                        <?php echo $row['Question']; ?>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </body>

    </html>