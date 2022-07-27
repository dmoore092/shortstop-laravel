<?php $__env->startSection('title', 'Athletic Prospects | Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="jumbotron col-md-7 ml-auto mr-auto">
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <?php if($user->role === 'admin'): ?>
        <?php echo $__env->make('includes.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <h1 class="display-4">Dashboard</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/images/<?php echo e($user->profile_image); ?>" class="card-img" alt="Player Profile Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">My Profile</h5>
                        <p class="card-text">
                            <?php echo e($user->name); ?> <br>
                            <a href="/players/<?php echo e($user->id); ?>/edit">Edit My Profile</a>
                            <br>
                            <a href="/players/<?php echo e($user->id); ?>">View My Profile</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <hr class="my-4">
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/dashboard.blade.php ENDPATH**/ ?>