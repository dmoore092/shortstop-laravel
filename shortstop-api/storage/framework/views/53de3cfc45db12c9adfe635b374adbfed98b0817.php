<h1 class="display-4">Admin Dashboard</h1>
<a class="btn btn-secondary" href="">Download Database</a>
<hr class="my-4">
<ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="blog-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="home" aria-selected="true">Post A Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="profile" aria-selected="false">Edit Site Content</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="home" aria-selected="true">Pay For Web Development</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="blog" role="tabpanel" aria-labelledby="home-tab"><?php echo $__env->make('includes.post_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="profile-tab"><?php echo $__env->make('includes.update_site_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="contact-tab">pay for web development</div>
      </div>
<?php /**PATH /home/vagrant/code/shortstop-api/resources/views/includes/admin.blade.php ENDPATH**/ ?>