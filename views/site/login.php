<?php

    require "header.php";
?>

<div class="container">

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Log in</h2>
            </div>
            <div class="panel-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary form-control" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php
    require "footer.php";
?>