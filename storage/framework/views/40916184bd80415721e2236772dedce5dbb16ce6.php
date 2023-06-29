
<?php $__env->startSection('content'); ?>
    <div class="wishlist">

        <?php if(Session::has('Wishlist')): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Promotion_price</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $product_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <a class="pull-left" href="/page"><img src="source/image/product/<?php echo e($products['item']['image']); ?>" alt="" width="100px" height="100px"></a>
                            </td>
                            <td><?php echo e($products['item']['name']); ?></td>
                            <td><?php echo e($products['item']['description']); ?></td>
                            <td><?php echo e($products['item']['promotion_price']); ?></td>
                            <td><?php echo e($products['item']['unit']); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_Wishlist-main\resources\views/page/Wishlist.blade.php ENDPATH**/ ?>