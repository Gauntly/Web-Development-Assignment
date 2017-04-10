<?php
require_once "configureDB.php";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connection) {
    echo "There is an error connecting to the database!";
    exit;
} else {
    checksExist($connection);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<?php
mysqli_select_db($connection, 'StatusDB');
$statuscode = mysqli_real_escape_string($connection, $_GET['Status_code']);
$search_status = "SELECT * FROM status WHERE status_code LIKE '$statuscode'";
$data = mysqli_query($connection, $search_status);

if ($data->num_rows > 0) {
    echo '<div class="container">';
    echo '<div class="jumbotron text-center">';
    echo '<h1 class="display-3">Status Found!</h1>';
    echo '</div>';
    // output data of each row
    while ($row = $data->fetch_assoc()) {
        switch ($row["share"]) {
            case 1:
                $viewPriv = "Everyone";

                break;

            case 2:
                $viewPriv = "Friends";
                break;

            case 3:
                $viewPriv = "Only Me";
                break;
        }

        if($row["db_like"] || $row["db_comment"] || $row["db_share"]) {

            $SharePrivs = "";

            if ($row["db_like"] == 1) {
                $can_like = " Can Like";
                $SharePrivs .= $can_like;
            }
            if ($row["db_comment"] == 1) {
                $can_comment = " Can Comment";
                $SharePrivs .= $can_comment;
            }
            if ($row["db_share"] == 1) {
                $can_share = " Can Share";
                $SharePrivs .= $can_share;
            }
        }

        echo '<ul class="list-group">';
        echo '<li class="list-group-item"><b>Status ID: </b><span class="text-info">' . $row["status_code"] . ' </span> </li>';
        echo '<li class="list-group-item"><b>Status:</b> <span class="text-info">' . $row["status"] . '</span> </li>';
        echo '<li class="list-group-item"><b>Who can view: </b> <span class="text-info">' . $viewPriv . '</span></li>';
        echo '<li class="list-group-item"><b>Privilages: </b> <span class="text-info">' . $SharePrivs . '</span></li></ul>';
        echo '<p class="text-center"><a class="btn btn-lg btn-success" href="index.php" role="button">Home</a>
            <a class="btn btn-lg btn-warning" href="searchstatusform.php" class="btn btn-warning">Search for Another Status</a></p>';
        echo '</div>';
        }
}else{
    echo '<div class="container">';
    echo '<div class="jumbotron text-center">';
    echo '<h1 class="display-3">No Status Found!</h1>';

    echo '<p><a class="btn btn-lg btn-success" href="index.php" role="button">Home</a>
            <a class="btn btn-lg btn-warning" href="searchstatusform.php" class="btn btn-warning">Search for Another Status</a></p>';
    echo '</div>';
}
?>
<body style="background: #eee">

</body>
</html>
