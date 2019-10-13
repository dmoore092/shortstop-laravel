<div class="jumbotron" style="background-color: #fbfbfb">
    <div class="card">
        <div class="card-header">
            Post A Blog
        </div>
        <div class="card-body">
                <?php echo e(Form::open(['action' => ['BlogController@create', '3'], 'method' => 'POST'])); ?>

                    <?php echo e(Form::label('title', 'Title:', array('class' => 'blog-label'))); ?>

                    <?php echo e(Form::text('title', 'Title', ['class' => 'form'])); ?><br>
                    <?php echo e(Form::label('tags', 'Tags:', ['class' => 'form'])); ?>

                    <?php echo e(Form::text('tags', 'Tags', ['class' => 'form'])); ?><br>
                    <?php echo e(Form::textarea('content', 'Content', ['class' => 'form'])); ?><br>
                    <?php echo e(Form::submit('Post Blog', ['class' => 'btn btn-secondary'])); ?>

                <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/includes/post_blog.blade.php ENDPATH**/ ?>