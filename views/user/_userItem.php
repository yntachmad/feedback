<div class="card m-1" style="width:16rem">
    <div class="card-header text-muted border-bottom-0">
        <?= $model->level; ?>
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-7">
                <h2 class="lead"><?= $model->full_name; ?></h2>
                <!-- <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p> -->
                
            </div>
            <div class="col-5 text-center">
                <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="text-right">
            <a href="#" class="btn btn-sm bg-teal">
                <i class="fas fa-comments"></i>
            </a>
            <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-user"></i> View Profile
            </a>
        </div>
    </div>
</div>