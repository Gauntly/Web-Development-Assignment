<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-3">About</h1>
        <p  class="lead">I have created a status posting service.</br>
            We create a status with a unique code and make save it to our database.</br>
            We retrieve the database query and post the results.
        </p>
        <p><a class="btn btn-lg btn-success" href="index.php" role="button">Home</a>
            <a class="btn btn-lg btn-warning" href="searchstatusform.php" role="button">Search</a>
            <a class="btn btn-lg btn-primary" href="poststatusform.php" role="button">Post</a>
        </p>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h2>What special features have you done,</h2>
                <p>
                <span class="lead">or attempted, in creating the site that we should know about?</span>
                </p>
            <p> I have included Bootstrap to style my site, making it more aesthetically pleasing.</br>
                I have also included a search all function in the search form. simply type <kbd>**SELECT ALL</kbd> </br>
                and the query will post all posts.</p>
                <p>
                I also tried to attempt to add a regex that checked for a whitespace in the status. If that was the only thing added it would fail to post.
                <br><kbd>(!preg_match('/\s/', $_POST["Status"]))</kbd> but unfortunately it caused a regular status posted to also fail.
                    <br>I had tried various methods of checking for a valid date. After doing some research I discovered <kbd>DateTime::createFromFormat</kbd>
                    It works wells for this use case.
                </p>
            </p>
        </div>
    </div> <!--Row Ends-->

    <div class="row">
        <div class="col-lg-6">
            <h2>Which parts did you have trouble with?</h2>
            <p>Retrieving data from the database was a little tricky.
                I had no trouble conecting to the database but creating the table was annoying.
                After a but of time I realised I had to select the database before creating the table.</p>
        </div>
    </div> <!--Row Ends-->

    <div class="row">
        <div class="col-lg-6">
            <h2>What would you like to do better next time?</h2>
            <p>I would like to have written this in Angular.
                We could have swapped in components as opposed to loading pages everytime.
            <p>If I had more time id also try and implement a new table that I could store the about page in.</p>
            </p>
        </div>
    </div> <!--Row Ends-->

    <div class="row">
        <div class="col-lg-6">
            <h2>What references/sources</h2>
            <p>
            <span class="lead">have you used to help you learn how to create your website?</span>
            </p>
            <p>
                <a class="btn btn-xs btn-success" href="https://www.w3schools.com">w3schools</a>
                <a class="btn btn-xs btn-warning" href="https://www.stackoverflow.com">StackOverflow</a>
                <a class="btn btn-xs btn-primary" href="http://getbootstrap.com/css/">BootStrap</a>
                <a class="btn btn-xs btn-danger" href="http://regexr.com">Regex</a>
                <a class="btn btn-xs btn-default" href="http://php.net/docs.php">PHP-Documentation</a>
            </p>
        </div>
    </div> <!--Row Ends-->

    <div class="row">
        <div class="col-lg-6">
            <h2>What you have learnt along the way?</h2>
            <p>
                I have learned a lot about regex. Creating patterns.</br>
                I have learned how to conenct mysqli to php.</br>
                Learning styling has been interesting as well.</br>
                I have learned commands like var_dump() which have been super helpful to make sure my data is being
                correctly.
            </p>
        </div>
    </div> <!--Row Ends-->


</div> <!--Container Ends-->


</div>
</body>
</html>