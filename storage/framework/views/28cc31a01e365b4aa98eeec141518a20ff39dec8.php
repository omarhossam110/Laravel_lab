

<?php $__env->startSection('title'); ?> create <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('posts.update',  $post['id'])); ?>">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($post['title']); ?>">
    </div>
  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input name="description" class="form-control" value="<?php echo e($post['description']); ?>">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ITI\Backend\Laravel\Lab1\resources\views/posts/edit.blade.php ENDPATH**/ ?>