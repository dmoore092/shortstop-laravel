<?php $__env->startSection('title', 'Athletic Prospects | Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron col-md-7 ml-auto mr-auto">
    <h1 class="display-4">
        <?php echo e($user->name); ?>

        <?php if(!auth::guest()): ?>
            <?php if(auth::user() or auth::user()->role == 'admin'): ?>
            
                <a class="btn btn-secondary" href="/players/<?php echo e($user->id); ?>/edit">Edit</a>
            <?php endif; ?>
        <?php endif; ?>
    </h1>
    <h4><?php echo e($user->highschool); ?></h4>
    <hr>
    <h2 class="display-5"></h2>
    <div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            <img src="/images/<?php echo e($user->profile_image); ?>" cclass="col-sm-4 img-fluid" style="max-width:300px" alt="Player Profile Image">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Player Info</h5>
                        <?php if($user->id == 1 or $user->id == 2): ?>
                        <p class="card-text"><span class="profile-labels">Gender:</span> <?php echo e($user->gender); ?><p>
                        <p class="card-text"><span class="profile-labels">Cell Phone:</span> <?php echo e($user->cell_phone); ?> <p>
                        <p class="card-text"><span class="profile-labels">Home Phone:</span> <?php echo e($user->home_phone); ?> <p>
                        <?php endif; ?>
                        <p class="card-text"><span class="profile-labels">Email: </span><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a><p>
                        <p class="card-text"><span class="profile-labels">Address:</span> <?php echo e($user->address); ?><p>
                        <p class="card-text"><span class="profile-labels">City:</span> <?php echo e($user->city); ?> <p>
                        <p class="card-text"><span class="profile-labels">State:</span> <?php echo e($user->state); ?><p>
                        <p class="card-text"><span class="profile-labels">Zip:</span> <?php echo e($user->zip); ?> <p>
                        <p class="card-text"><span class="profile-labels">Class of:</span> <?php echo e($user->grad_year); ?> <p>
                        <p class="card-text"><span class="profile-labels">Height:</span> <?php echo e($user->height_feet); ?>' <?php echo e($user->height_inches); ?>''<p>
                        <p class="card-text"><span class="profile-labels">Weight:</span> <?php echo e($user->weight); ?> <p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sport Info</h5>
                        <p class="card-text"><span class="profile-labels">Sport:</span> <?php echo e($user->sport); ?></p>
                        <p class="card-text"><span class="profile-labels">Primary Position:</span> <?php echo e($user->primary_position); ?> </p>
                        <p class="card-text"><span class="profile-labels">Secondary Position:</span> <?php echo e($user->secondary_position); ?></p>
                        <p class="card-text"><span class="profile-labels">Travel Team:</span> <?php echo e($user->travel_team); ?> </p>
                        <p class="card-text"><span class="profile-labels">GPA:</span> <?php echo e($user->gpa); ?></p>
                        <p class="card-text"><span class="profile-labels">ACT:</span> <?php echo e($user->act); ?></p>
                        <p class="card-text"><span class="profile-labels">SAT:</span> <?php echo e($user->sat); ?></p>
                        <p class="card-text"><span class="profile-labels">Facebook:</span> <?php echo e($user->facebook); ?> </p>
                        <p class="card-text"><span class="profile-labels">Instagram:</span> <?php echo e($user->instagram); ?> </p>
                        <p class="card-text"><span class="profile-labels">Twitter:</span> <?php echo e($user->twitter); ?></p>
                        <p class="card-text"><span class="profile-labels">Commitment:</span> <?php echo e($user->commitment); ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <small>When you become committed to a college, please send us an email at <a href="mailto:kprestano@athleticprospects.com">kprestano@athleticprospects.com</a> </small>
    </div>
    <?php if($user->showcase1 !== null || $user->showcase2 !== null || $user->showcase3 !== null): ?>
    <hr>
    <div>
        <h4>Videos</h4>
        <div class="row">
            <?php if($user->showcase1 !== null): ?>
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="https://www.youtube.com/embed/<?php echo e($user->showcase1); ?>"></iframe>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($user->showcase2 !== null): ?>
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="<?php echo e($user->showcase2); ?>"></iframe>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($user->showcase2 !== null): ?>
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="<?php echo e($user->showcase3); ?>"></iframe>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if($user->ref1_name !== null || $user->ref2_name !== null || $user->ref2_name !== null): ?>
    <hr>
    <div>
        <h4>References</h4>
        <div class="row">
            <?php if($user->ref1_name !== null): ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header"><?php echo e($user->ref1_name); ?></div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> <?php echo e($user->ref1_jobtitle); ?></p>
                        <p class="card-text"><span class="profile-labels">Email:</span> <?php echo e($user->ref1_email); ?></p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> <?php echo e($user->ref1_phone); ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if($user->ref2_name !== null): ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header"><?php echo e($user->ref2_name); ?></div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> <?php echo e($user->ref2_jobtitle); ?></p>
                        <p class="card-text"><span class="profile-labels">Email:</span> <?php echo e($user->ref2_email); ?></p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> <?php echo e($user->ref2_phone); ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if($user->ref3_name !== null): ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header"><?php echo e($user->ref3_name); ?></div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> <?php echo e($user->ref3_jobtitle); ?></p>
                        <p class="card-text"><span class="profile-labels">Email:</span> <?php echo e($user->ref3_email); ?></p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> <?php echo e($user->ref3_phone); ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
<div>




    <hr class="my-4">
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/profiles/player.blade.php ENDPATH**/ ?>