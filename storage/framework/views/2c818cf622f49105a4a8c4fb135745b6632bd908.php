

<?php $__env->startSection('title'); ?>
Show data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="d-flex justify-content-center m-3">
    <a href="posts/create" class="m-3 btn btn-success">Add New Post</a>
    <a href="<?php echo e(route('posts.archive')); ?>" class="m-3 btn btn-success">Restore Deleted Posts</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Pagination</th>
                <th scope="col">Title</th>
                <th scope="col">slug</th>
                <th scope="col">Poster</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($post->id); ?></th>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->slug); ?></td>
                <td> <img width="50px" src="<?php echo e(asset($post->image)); ?>"</td>
                <td><?php echo e($post->user->name); ?></td>
                <td><?php echo e($post->created_at->format('Y-m-d')); ?></td>
                <td class="d-flex justify-content-center  ">
                    <a href="<?php echo e(route('posts.show',$post->id)); ?>" class="m-2 h-75 btn btn-secondary">View</a>
                    <a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="m-2 h-75 btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Are you Sure you want to delete post : <?php echo e($post->title); ?>?')" class="m-2 h-75 btn btn-danger">Delete</>
                    </form>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center m-3">
    <span>
        <?php echo e($posts->links()); ?>

    </span>
</div>
<?php $__env->stopSection(); ?>

</body>

</html>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\master\Desktop\laravel\Laravel_Labs_ITI\resources\views/index.blade.php ENDPATH**/ ?>