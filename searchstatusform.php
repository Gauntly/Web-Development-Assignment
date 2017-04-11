<!DOCTYPE html>
<html>
<head>
    <title>Search Status</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background: #eee;">
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-3">Search a Status</h1>
        <form method="get" action="searchstatusprocess.php">
        <p>Status Code:
        <input type="text" name="status" id="status" required>
        <button class="btn btn-success" type="submit">Search</button>
        </p>
        <p><a class="btn btn-lg btn-success" href="index.php" role="button">Home</a>
            <a class="btn btn-lg btn-warning" href="about.php" role="button">About</a>
            <a class="btn btn-lg btn-primary" href="poststatusform.php" role="button">Post</a>
        </p>
        </form>
    </div>
</div>
</body>
</html>
