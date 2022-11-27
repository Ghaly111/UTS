<?php $__env->startSection('title', 'Publisher'); ?>

<?php $__env->startSection('body'); ?>
    <div class="content">
        <div class="Book">
            <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="<?php echo e(asset($p->image)); ?>" alt="Card image cap">
                    <br>
                    <div>
                        <h5 class="card-title"><?php echo e($p->name); ?></h5>
                        <p class="card-text1">Address: <?php echo e($p->address); ?></p>
                        <p class="card-text2">Phone: <?php echo e($p->phone); ?></p>
                        <p class="card-text2">Email: <?php echo e($p->email); ?></p>
                    </div>
                    <div class="button">
                    <a href="/publisher/detail/<?php echo e($p->publisherid); ?>" class="btn btn-dark mt-2 justify-content-center">Publisher Detail</a>
                </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\UTS2\resources\views//publisher.blade.php ENDPATH**/ ?>