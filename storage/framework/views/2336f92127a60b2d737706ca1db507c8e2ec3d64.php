<?php $__env->startSection('title', 'Publisher Detail'); ?>

<?php $__env->startSection('title2', 'Publisher Detail'); ?>

<?php $__env->startSection('body'); ?>
    <div class="content">
        <div class="Book">
            <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="<?php echo e(asset($p->image)); ?>" alt="Card image cap">
                    <div class="title">
                        <h5 class="card-title"><?php echo e($p->name); ?></h5>
                        <p class="card-text1">Address: <?php echo e($p->address); ?></p>
                        <p class="card-text2">Phone: <?php echo e($p->phone); ?></p>
                        <p class="card-text2">Email: <?php echo e($p->email); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo e(asset($bd->image)); ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text2">Title : <?php echo e($bd->title); ?></p>
                    <p class="card-text2">Author : <?php echo e($bd->author); ?></p>
                    <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="card-text2">Publisher : <?php echo e($p->name); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="card-text2">Year : <?php echo e($bd->year); ?></p>
                    <p class="card-text2">Synopsis : <?php echo e($bd->synopsis); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\UTS2\resources\views/publisherdetail.blade.php ENDPATH**/ ?>