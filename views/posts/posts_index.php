<div class="span8">
    <?php foreach($posts as $post): ?>
        <h1><a href="<?php echo BASE_URL;?>posts/view/<?php echo $post['post_id'];?>"><?php echo $post['post_subject'];?></a></h1>
        <p><?php echo $post['post_text']; ?></p>
        <div>
            <span class="badge badge-success">Posted<?php echo $post['post_created'] ;?></span>
            <div class="pull-right">
                <span class="label"><?php echo $post['user_id'] ;?></span>
            </div>
        </div>
    <?php endforeach ?>
</div>

