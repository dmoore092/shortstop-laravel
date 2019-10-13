<?php $__env->startSection('title', 'Athletic Prospects | Update Profile'); ?>
<?php $__env->startSection('content'); ?>

<div class="jumbotron col-md-7 ml-auto mr-auto">
    <span class="float-right">
        <?php if(!auth::guest()): ?>
            <?php if(auth::user()->id == $user->id || auth::user()->role == 'admin'): ?>
                <?php echo Form::open(['action' => ['PlayerController@destroy', $user->id], 'method' => 'POST', 'class' => 'btn']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('DELETE PROFILE', ['class' => 'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        <?php endif; ?>
    </span>
    <?php echo Form::open(['action' => ['PlayerController@update', $user->id], 'method' => 'POST']); ?>

    <h1 class="display-4">Edit Profile</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title">Player Info</h5>
                    <p class="card-text">
                        
                        <?php echo e(Form::label('name', 'Name', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('name', $user->name, ['class' => 'form', 'placeholder' => 'Name'])); ?>

                        
                        <?php echo e(Form::label('gender', 'Gender', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'), $user->gender, ['class' => 'form-select'])); ?>

                        <?php echo e(Form::label('cell_phone', 'Cell Phone', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('cell_phone', $user->cell_phone, ['class' => 'form', 'placeholder' => 'Cell Phone'])); ?>

                        <?php echo e(Form::label('home_phone', 'Home Phone', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('home_phone', $user->home_phone, ['class' => 'form', 'placeholder' => 'Home Phone'])); ?>

                        <?php echo e(Form::label('address', 'Address', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('address', $user->address, ['class' => 'form', 'placeholder' => 'Address'])); ?>

                        <?php echo e(Form::label('city', 'City', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('city', $user->city, ['class' => 'form', 'placeholder' => 'City'])); ?>

                        <?php echo e(Form::label('state', 'State', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::select('state', array('New York' => 'New York', 'Alabama' => 'Alabama', 'Alaska' => 'Alaska', 'Arizona' => 'Arizona',
                                                        'Arkansas' => 'Arkansas', 'California' => 'California', 'Colorado' => 'Colorado', 'Connecticut' => 'Connecticut',
                                                        'Delaware' => 'Delaware', 'District of Columbia' => 'District of Columbia','Florida' => 'Florida', 'Georgia' => 'Georgia', 'Hawaii' => 'Hawaii',
                                                        'Idaho' => 'Idaho', 'Illinois' => 'Illinois', 'Indiana' => 'Indiana', 'Iowa' => 'Iowa', 'Kansas' => 'Kansas',
                                                        'Kentucky' => 'Kentucky', 'Louisiana' => 'Louisiana', 'Maine' => 'Maine', 'Maryland' => 'Maryland',
                                                        'Massachusetts' => 'Massachusetts', 'Michigan' => 'Michigan', 'Minnesota' => 'Minnesota',
                                                        'Mississippi' => 'Mississippi', 'Missouri' => 'Missouri', 'Montana' => 'Montana', 'Nebraska' => 'Nebraska',
                                                        'Nevada' => 'Nevada', 'New Hampshire' => 'New Hampshire', 'New Jersey' => 'New Jersey', 'New Mexico' => 'New Mexico',
                                                        'New York' => 'New York', 'North Carolina' => 'North Carolina', 'North Dakota' => 'North Dakota', 'Ohio' => 'Ohio',
                                                        'Oklahoma' => 'Oklahoma', 'Oregon' => 'Oregon', 'Pennsylvania' => 'Pennsylvania',  'Puerto Rico' => 'Puerto Rico','Rhode Island' => 'Rhode Island',
                                                        'South Carolina' => 'South Carolina', 'South Dakota' => 'South Dakota', 'Tennessee' => 'Tennessee',
                                                        'Texas' => 'Texas', 'U.S. Virgin Islands' => 'U.S. Virgin Islands', 'Utah' => 'Utah', 'Vermont' => 'Vermont', 'Virginia' => 'Virginia', 'Washington' => 'Washington',
                                                        'West Virginia' => 'West Virginia', 'Wisconsin' => 'Wisconsin', 'Wyoming' => 'Wyoming',
                                                        ), $user->state, ['class' => 'form-select'])); ?>


                        <?php echo e(Form::label('zip', 'Zip', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('zip', $user->zip, ['class' => 'form', 'placeholder' => '12345'])); ?>

                        <?php echo e(Form::label('highschool', 'Highschool', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('highschool', $user->highschool, ['class' => 'form', 'placeholder' => 'Highschool'])); ?>

                        <?php echo e(Form::label('weight', 'Weight', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('weight', $user->weight, ['class' => 'form', 'placeholder' => 'Weight'])); ?>

                        <span>
                            <?php echo e(Form::label('height', 'Height', array('class' => 'update-label float-left height-labels'))); ?>

                            <?php echo e(Form::selectRange('height_feet', 4, 7, $user->height_feet, ['class' => 'form-range'])); ?>

                            
                            <?php echo e(Form::selectRange('height_inches', 0, 11, $user->height_inches, ['class' => 'form-range'])); ?>

                        </span>
                        <?php echo e(Form::label('grad_year', 'Class Of', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('grad_year', $user->grad_year, ['class' => 'form', 'placeholder' => 'Class Of'])); ?>

                        <?php echo e(Form::label('gpa', 'GPA', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('gpa', $user->gpa, ['class' => 'form', 'placeholder' => 'GPA'])); ?>

                        <?php echo e(Form::label('sat', 'SAT', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('sat', $user->sat, ['class' => 'form', 'placeholder' => 'SAT'])); ?>

                        <?php echo e(Form::label('act', 'ACT', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('act', $user->act, ['class' => 'form', 'placeholder' => 'ACT'])); ?>

                        <?php echo e(Form::label('profile_image', 'Profile Image', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::file('profile_image')); ?>

                    </p>
                </div> 
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title">Sport Info</h5>
                    <p class="card-text">
                        <?php echo e(Form::label('sport', 'Sport', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('sport', $user->sport, ['class' => 'form', 'placeholder' => 'Sport'])); ?>

                        <?php echo e(Form::label('primary_position', 'Primary Position', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('primary_position', $user->primary_position, ['class' => 'form', 'placeholder' => 'Primary Position'])); ?>

                        <?php echo e(Form::label('secondary_position', 'Secondary Position', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('secondary_position', $user->secondary_position, ['class' => 'form', 'placeholder' => 'Secondary Position'])); ?>

                        <?php echo e(Form::label('travel_team', 'Travel Team', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('travel_team', $user->travel_team, ['class' => 'form', 'placeholder' => 'Travel Team'])); ?>

                        <?php echo e(Form::label('showcase1', 'Highlight Video 1', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('showcase1', $user->showcase1, ['class' => 'form', 'placeholder' => ''])); ?>

                        <?php echo e(Form::label('showcase2', 'Highlight Video 2', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('showcase2', $user->showcase2, ['class' => 'form', 'placeholder' => ''])); ?>

                        <?php echo e(Form::label('showcase3', 'Highlight Video 3', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('showcase3', $user->showcase3, ['class' => 'form', 'placeholder' => ''])); ?>

                        <?php echo e(Form::label('personal_statement', 'Personal Statement', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('personal_statement', $user->personal_statement, ['class' => 'form', 'placeholder' => 'Statement'])); ?>

                        <?php echo e(Form::label('commitment', 'Commitment', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('commitment', $user->commitment, ['class' => 'form', 'placeholder' => 'Commitment'])); ?>

                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">
                        <?php echo e(Form::label('twitter', 'Twitter', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('twitter', $user->twitter, ['class' => 'form', 'placeholder' => 'Twitter'])); ?>

                        <?php echo e(Form::label('facebook', 'Facebook', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('facebook', $user->facebook, ['class' => 'form', 'placeholder' => 'Facebook'])); ?>

                        <?php echo e(Form::label('instagram', 'Instagram', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('instagram', $user->instagram, ['class' => 'form', 'placeholder' => 'Instagram'])); ?>

                    </p>
                </div>
            </div>
        </div> 
    </div> 
    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title">References</h5>
                    <span class="card-text">
                        <?php echo e(Form::label('ref1_name', 'Reference 1 Name', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref1_name', $user->ref1_name, ['class' => 'form', 'placeholder' => 'Name'])); ?>

                        <?php echo e(Form::label('ref1_jobtitle', 'Reference 1 Job Title', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref1_jobtitle', $user->ref1_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])); ?>

                        <?php echo e(Form::label('ref1_email', 'Reference 1 Email', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref1_email', $user->ref1_email, ['class' => 'form', 'placeholder' => 'Email'])); ?>

                        <?php echo e(Form::label('ref1_phone', 'Reference 1 Phone', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref1_phone', $user->ref1_phone, ['class' => 'form', 'placeholder' => 'Phone'])); ?>

                        <hr/>
                        <?php echo e(Form::label('ref2_name', 'Reference 2 Name', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref2_name', $user->ref2_name, ['class' => 'form', 'placeholder' => 'Name'])); ?>

                        <?php echo e(Form::label('ref2_jobtitle', 'Reference 2 Job Title', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref2_jobtitle', $user->ref2_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])); ?>

                        <?php echo e(Form::label('ref2_email', 'Reference 2 Email', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref2_email', $user->ref2_email, ['class' => 'form', 'placeholder' => 'Email'])); ?>

                        <?php echo e(Form::label('ref2_phone', 'Reference 2 Phone', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref2_phone', $user->ref2_phone, ['class' => 'form', 'placeholder' => 'Phone'])); ?>

                        <hr/>
                        <?php echo e(Form::label('ref3_name', 'Reference 3 Name', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref3_name', $user->ref3_name, ['class' => 'form', 'placeholder' => 'Name'])); ?>

                        <?php echo e(Form::label('ref3_jobtitle', 'Reference 3 Job Title', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref3_jobtitle', $user->ref3_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])); ?>

                        <?php echo e(Form::label('ref3_email', 'Reference 3 Email', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref3_email', $user->ref3_email, ['class' => 'form', 'placeholder' => 'Email'])); ?>

                        <?php echo e(Form::label('ref3_phone', 'Reference 3 Phone', array('class' => 'update-label'))); ?>

                        <?php echo e(Form::text('ref3_phone', $user->ref3_phone, ['class' => 'form', 'placeholder' => 'Phone'])); ?>

                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php echo e(Form::hidden('_method', 'PUT')); ?>

    <?php echo e(Form::submit('Submit', ['class' => 'btn btn-secondary'])); ?>

  <?php echo Form::close(); ?>

<hr>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dwndis/Projects/shortstop-laravel/shortstop-api/resources/views/profiles/update.blade.php ENDPATH**/ ?>