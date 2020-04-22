<?php
if (isset($_GET['code'])) {
//$scope = $_GET['scope']
$url = 'https://www.strava.com/oauth/token';
$data = array('client_id' => '25207', 'client_secret' => '634736abc3260393a70db95076219ca6632023bf', 'code' => strval($_GET['code']), 'grant_type' => 'authorization_code');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo(" "); }
else {
$jsondata = json_decode($result, true);

// Get all data to store in Database 
$access_token = $jsondata["access_token"];
$refresh_token = $jsondata["refresh_token"];
$expires_at = $jsondata["expires_at"];
$athlete_id = $jsondata["athlete"]["id"];
$firstname = $jsondata["athlete"]["firstname"];
$lastname = $jsondata["athlete"]["lastname"];
$country = $jsondata["athlete"]["country"];
$sex = $jsondata["athlete"]["sex"];
$expire = strtotime ($expires_at);

// Write into db
// connect to the database
$db = mysqli_connect('45.44.220.195', 'bastien', 'club300', 'rgt_rank');
  	$id = $_SESSION['id'];
	$strava_link = true;
  	$query = "UPDATE Players 
  			  SET Strava_link = $strava_link
			  WHERE Player_ID='$id'";
  	mysqli_query($db, $query);
	$query = "INSERT INTO Strava_access_token (Player_ID, Athlete_ID, access_token, expires_at)
			  VALUES ('$id', '$athlete_id', '$access_token', FROM_UNIXTIME($expires_at));";
	mysqli_query($db, $query);
	$query = "INSERT INTO Strava_refresh_token (Player_ID, Athlete_ID, refresh_token)
				VALUES ('$id', '$athlete_id', '$refresh_token')" ;
	mysqli_query($db, $query);
	

// Print to screen
echo " -------- INFORMATION FOR DEBUGING --------<br>";
echo "Athlete id: ", strval($athlete_id), "<br>";
echo "Name: ", $firstname, " ", $lastname, "<br>";
echo "Country: ", $country, "<br>";
echo "Sex: ", $sex, "<br>";
echo "access_token: ", $access_token, "<br>";
echo "refresh_token: ", $refresh_token, "<br>";
echo "expires_at: ", strval($expires_at), "<br>";
//echo "scope: ", $scope, "<br>";
echo " -------- INFORMATION FOR DEBUGING --------<br>";
/* header('location: index.php') */;
}
}
?>
