<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5 text-danger text-danger">Delete Term</h1>
        </div>
    </div>
    <div class="row">
        Are you sure you want to delete <?= $model->term ?> ?
    </div>
    <div class="row mt-2">
        <form action="" method="POST">
            <input type="hidden" name="term" value="<?= $model->id ?>">
            <div>
                <input type="submit" value="Delete term" class="mt-2 btn btn-danger">
            </div>
        </form>
    </div>
</div>