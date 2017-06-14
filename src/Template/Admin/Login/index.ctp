<?php 
$err = array();
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <?php if ($err): ?>
                <div class="clearfix"></div>
                <?php foreach ($err as $value): ?>
                    <div class="alert alert-danger">
                        <?php echo $value; ?>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>
            <div class="panel-body">
                <form role="form" action="<?php echo $BASE_URL;?>/admin/login" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="txtEmail" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="txtPass" type="password" value="">
                        </div>
                        <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>