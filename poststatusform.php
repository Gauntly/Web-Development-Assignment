<!DOCTYPE html>
<html>
<head>
    <title>New Status</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-3">Post a Status</h1>
    </div>

        <div class="well well-lg">
            <form class="form-horizontal" method="post" action="poststatusprocess.php" id="status-post">

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Status Code</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Status_Code" placeholder="Status Code"
                               name="Status_code" required>
                    </div>
                </div> <!--Status Code-->

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Status</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Status" placeholder="Status" name="Status" required>
                    </div>
                </div> <!-- End Of Status-->

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Share</label>
                    <div class="col-lg-5 col-sm-10">
                        <div class="checkbox">
                            <label><input type="radio" id="Share" name="Share" value="1" checked> Public </label>
                            <label> <input type="radio" id="Share" name="Share" value="2"> Friends </label>
                            <label> <input type="radio" id="Share" name="Share" value="3"> Only Me </label>
                        </div>
                    </div>
                </div> <!-- End of Share-->
                <!--The date uses a php -->
                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Date </label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Date" placeholder="dd/mm/yy" name="Date"
                               value="<?php echo date("d/m/y"); ?>" required>
                    </div>
                </div> <!-- End of Date -->

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Permissions</label>
                    <div class="col-lg-3 col-sm-12">
                        <div class="checkbox">
                            <label class="col-lg-4"> <input type="checkbox" id=db_Like" name="db_Like" checked="1"> Like </label>
                            <label class="col-lg-4"><input type="checkbox" id="db_Comment" name="db_Comment" checked="1"> Comment </label>
                            <label class="pull-right"> <input type="checkbox" id="db_Share" name="db_Share" checked="1"> Share</label>
                        </div>
                    </div>
                </div> <!-- End of Permissions -->

                <div class="form-group form-group">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                        <button class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a href="index.php" class="btn btn-danger">Go Back</a>
                    </div>
                </div> <!-- End of Submissions -->

            </form>

        </div>
</div>
</body>
</html>
