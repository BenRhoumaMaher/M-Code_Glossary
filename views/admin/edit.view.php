<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5 text-danger text-danger">Edit Term</h1>
        </div>
    </div>
    <div class="row mt-2">
        <form action="" method="POST">
            <input type="hidden" name="originalTerm" value="<?= $model->id; ?>">
            <div class="form-group mb-2">
                <label for="term"><span class="fw-bold">Term : </span></label>
                <input class="form-control" type="text" name="term" id="term" value="<?= $model->term; ?>">
            </div>
            <div class="form-group">
                <label for="term"><span class="fw-bold">Definition : </span></label>
                <textarea class="form-control" type="text" name="definition" id="definition" rows="5"><?= $model->definition; ?></textarea>
            </div>
            <div>
                <input type="submit" value="Edit term" class="mt-2 btn btn-danger">
            </div>
        </form>
    </div>
</div>