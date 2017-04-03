<!DOCTYPE html>
<html>
<head>
    <title>New Status</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<div class="container">
    <h1>Post a Status</h1>
    <div class="row">
        <div class="well well-lg">
            <form class="form-horizontal" method="post" action="poststatusprocess.php" id="status-post">
                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Status Code</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Status_Code" placeholder="Status Code"
                               name="Status_code" required>
                    </div>
                </div>

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Status</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Status" placeholder="Status" name="Status" required>
                    </div>
                </div>


                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Share</label>
                    <div class="col-lg-3 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Public
                            </label>
                            <label>
                                <input type="checkbox"> Friends
                            </label>
                            <label>
                                <input type="checkbox"> Only Me
                            </label>
                        </div>
                    </div>
                </div>

                <!--The date uses a php -->
                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Date </label>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" id="Date" placeholder="dd/mm/yyyy" name="Date"
                               value="<?php echo date("d/m/y"); ?>" required>
                    </div>
                </div>

                <div class="form-group form-group">
                    <label class="col-lg-2 control-label" for="formGroupInputLarge">Permissions</label>
                    <div class="col-lg-3 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Like
                            </label>
                            <label>
                                <input type="checkbox">Comment
                            </label>
                            <label>
                                <input type="checkbox">Share
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group form-group">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                        <button class="btn btn-success">Submit</button>
                        <a href="index.php" class="btn btn-danger">Go Back</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gauntly
 * Date: 3/04/17
 * Time: 11:52 AM
 */
