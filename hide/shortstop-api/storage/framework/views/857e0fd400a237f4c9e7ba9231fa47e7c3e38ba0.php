<?php $__env->startSection('title', 'Athletic Prospects | Players'); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron col-md-7 ml-auto mr-auto">
    <h1 class="display-4">Players</h1>
        <?php echo Form::open(); ?>

            <?php echo e(Form::label('football', 'Football')); ?>

            <?php echo e(Form::checkbox('football', 'football', false, array('id'=>'football'))); ?>

            
        <?php echo Form::close(); ?>

  <p class="lead"></p>
  <hr class="my-4">
    <div class="row d-flex justify-content-around">
        <?php if(count($players) > 0): ?>
            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($player->role == 'player'): ?>
                    <div class="card col-lg-3 mb-4 <?php echo e($player->sport); ?>"  style="max-width: 15rem;">
                        <img src="/images/<?php echo e($player->profile_image); ?>" class="card-img" alt="Player Profile Image">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/players/<?php echo e($player->id); ?>"><?php echo e($player->name); ?></a></h5>
                            <p class="card-text">
                                Sport: <?php echo e($player->sport); ?>

                                <br>
                                Position: <?php echo e($player->primary_position); ?>

                                <br>
                                <p class="card-text"><?php echo e($player->commitment); ?></p>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h1>No Players Found</h1>
        <?php endif; ?>
    </div>

  <hr class="my-4">
  <?php echo e($players->links()); ?>

  <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/profiles/players.blade.php ENDPATH**/ ?>