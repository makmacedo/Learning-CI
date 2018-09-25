<h2><?= $title ?></h2>
<div class="new">
    <a class="btn btn-secondary btn-md float-right" href="<?php echo site_url('/posts/create');?>">New</a>
</div>

<?php foreach($posts as $post) :?>
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><?php echo $post['created_by']; ?>
            <div class="float-right"><small>Posted on: <?php echo $post['created_at'] ?></small></div>
        </div>
        <div class="card-body">
            <div>
                <h4><?php echo $post['title']; ?></h4>
                <div>
                    <span class="badge badge-pill badge-info"><i class="far fa-thumbs-up"></i> <?php echo $post['likes'] ?></span>
                    <span class="badge badge-pill badge-danger"><i class="far fa-thumbs-down"></i> <?php echo $post['dislikes'] ?></span>
                </div>
            </div>
            <p class="card-text"><?php echo $post['body']; ?></p>
            <a class="btn btn-primary btn-sm float-right" href="<?php echo site_url('/posts/' . $post['slug']);?>">Read more</a>
        </div>
    </div>
<?php endforeach;?>

<script>$('#blog').addClass("active");</script>