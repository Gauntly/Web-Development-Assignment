<?php
require_once "configureDB.php";
$StatusCodeFlag = false;
$StatusFlag = false;
$ShareFlag = false;
$DateFlag = false;
$PermissionFlag = false;
$ConnectionFlag = false;
$ErrorCode = 0;
$ErrorDef = "";
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connection) {
    $ErrorCode = 7;
    exit;
} else {
    $ConnectionFlag = true;
    checksExist($connection);
}


/* We use a pattern that first checks to make sure we have a capital S at the start of the status code.
 * We then make sure that we have 4 additional digits are added to the end of the code before
 * we accept the Status Code.
 *
 * We are reusing code from the searchstatusprocess. We check to see if a status code is already if it is we refuse
 * to attempt to add it to the db.
*/
    $Status_Code = $_POST["Status_code"];
    if (!preg_match("/^(S\d{4})$/", $_POST["Status_code"])) {
        $ErrorCode = 1;
    } else {
        mysqli_select_db($connection, 'StatusDB');
        $statuscode = mysqli_real_escape_string($connection, $_POST['Status_code']);
        $search_status = "SELECT * FROM status WHERE status_code LIKE '$statuscode'";
        $data = mysqli_query($connection, $search_status);
        $row = $data->fetch_assoc();
        if($Status_Code == $row["status_code"]){
           $ErrorCode = 6;
        }else{
            $StatusCodeFlag = true;
        }


    }

//Checks if there is anything to post, checks for null and whitespace.
if (isset($_POST["Status"]) && (!preg_match('/\s/', $_POST["Status"]))) {
    $Status = $_POST["Status"];
    $StatusFlag = true;
} else {
        $ErrorCode = 2;
}

if (isset($_POST["Share"])) {
    $Share = $_POST["Share"];
    $ShareFlag = true;
} else {
    $ErrorCode = 3;
}

if (isset($_POST["Date"]) && (preg_match("/^\d{2}\/\d{2}\/\d{2}$/", $_POST["Date"]))){
    $Date = $_POST["Date"];
    $DateFlag = true;
} else {
    $ErrorCode = 4;
}
if((isset($_POST["db_Like"])) || (isset($_POST["db_Comment"])) || (isset($_POST["db_Share"]))){

$dbLike = ($_POST["db_Like"]);
$dbComment = ($_POST["db_Comment"]);
$dbShare = ($_POST["db_Share"]);
$PermissionFlag = true;
}else{
    $ErrorCode = 5;
}



switch ($ErrorCode){
    case 1: $ErrorDef = "The status code you have entered does not match the requirements.</br>
    Please use a capital S followed by 4 numbers. For example: S1234.";
    break;

    case 2: $ErrorDef = "We can't post anything if there is not anything to post!";
    break;

    case 3: $ErrorDef = "Please choose who you would like to see your status by selecting either Everyone, Public or Only Me.";
        break;

    case 4: $ErrorDef = "Please Insert a correctly formatted date.";
        break;

    case 5: $ErrorDef = "We need to set permissions!";
        break;

    case 6: $ErrorDef = "This status code is already used please select a new one.";
        break;

    case 7: $ErrorDef =  "There is an error connecting to the database!";
        break;
}




if (($ConnectionFlag == true) && ($StatusCodeFlag == true) && ($StatusFlag == true) && ($ShareFlag == true) && ($DateFlag == true) && ($PermissionFlag == true)) {

    $injectStatus = "INSERT INTO status (status_code,status,share,status_date,db_like,db_comment,db_share)
    VALUES('$Status_Code','$Status','$Share','$Date','$dbLike','$dbComment','$dbShare');";

    mysqli_select_db($connection, 'StatusDB');
    mysqli_query($connection, $injectStatus);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Status Posted!</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background: #eee;">
<div class="container">
    <div class="jumbotron text-center">
        <?php if (($ConnectionFlag == true) && ($StatusCodeFlag == true) && ($StatusFlag == true) && ($ShareFlag == true) && ($DateFlag == true) && ($PermissionFlag == true)) {
            echo '<h1 class="display-3">Status Posted!</h1>';
            echo '<p  class="lead">Successfully posted a status!</p>';
            echo '<p>Your Status Code is: '.$_POST["Status_code"].' </p>';
        }else{
        echo '<h1 class="display-3">Status Post Failed</h1>';
        echo '<p  class="lead">We ran into an error!</p>';
        echo '<p> '.$ErrorDef.'</p>';} ?>
        <p><a class="btn btn-lg btn-success" href="index.php" role="button">Home</a>
            <a class="btn btn-lg btn-primary" href="about.php" role="button">About</a>
            <a class="btn btn-lg btn-warning" href="poststatusform.php" role="button">Post Status</a></p>
    </div>
</div>
</body>
</html>
