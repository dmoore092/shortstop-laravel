<?php $__env->startSection('title', 'Athletic Prospects | Blog'); ?>
<?php $__env->startSection('content'); ?>
    <div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">Blog @ Athletic Prospects</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/images/<?php echo e($post->post_image); ?>" class="card-img" alt="Blog Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo e($post->title); ?> </h5>
                            <p class="card-text">
                                <?php echo e($post->text); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <hr class="my-4">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/pages/blog.blade.php ENDPATH**/ ?>