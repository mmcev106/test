<div class="card text-center">
    <div class="card-header">
        Details
    </div>
    <div class="card-body">
        <h5 class="card-title"><?=$data['name']?></h5>
        <p class="card-text"><?=$data['description']?></p>
        <p class="card-text"><strong>url: </strong><a href="<?=$data['url']?>" target="_blank"><?=$data['url']?></a></p>
        <p class="card-text"><strong>created at: </strong><?=$data['created_at']?></p>
        <p class="card-text"><strong>last push: </strong><?=$data['pushed_at']?></p>
    </div>
    <div class="card-footer text-muted">
        <a href="/" class="btn btn-primary">Go back</a>
    </div>
</div>