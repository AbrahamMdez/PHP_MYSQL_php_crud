<?php include('db.php') ?>

<?php include('includes/header.php') ?>

<div class="container">
    <div class="row p-4">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title..." autofocus>
                    </div>

                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Description..."></textarea>
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save">
                </form>
            </div>
        </div>
        
        <div class="col-md-8">
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>
         