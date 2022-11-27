<?php $__env->startSection('title', 'Publisher'); ?>

<?php $__env->startSection('body'); ?>
    <div class="content">
        <div class="Book">
            <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="<?php echo e(asset($p->image)); ?>" alt="Card image cap">
                    <div class="title">
                        <h5 class="card-title"><?php echo e($p->name); ?></h5>
                        <p class="card-text1">Address: <?php echo e($p->address); ?></p>
                        <p class="card-text2">Phone: <?php echo e($p->phone); ?></p>
                        <p class="card-text2">Email: <?php echo e($p->email); ?></p>
                    </div>
                </div>
                <?php $__currentLoopData = $p->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo e(asset($b->image)); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($b->title); ?></h5>
                            <p class="card-text1">by</p>
                            <p class="card-text2"><?php echo e($b->author); ?></p>
                            <a class="btn btn-primary" href="/bookDetail/<?php echo e($b->bookid); ?>">Detail</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\UTS2\resources\views/publisher.blade.php ENDPATH**/ ?>