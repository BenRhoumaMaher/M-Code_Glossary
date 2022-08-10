<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5 text-danger">Login</h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="form-group">
                <label for="email" class="fw-bold">Email :</label>
                <input class="form-control w-75" type="text" name="email" id="email">
            </div>
            <div class="form-group mt-2">
                <label for="password" class="fw-bold">Password :</label>
                <input class="form-control w-75" type="password" name="password" id="password">
            </div>
            <div class="form-group mt-4">
                <input type="submit" value='Login' name="login" class="btn btn-danger">
            </div>
        </form>
    </div>
    <div class="row text-danger">
        <?php
        if (isset($view_bag['$emailerror'])) {
            echo $view_bag['$emailerror'];
        }
        ?>
    </div>
</div>