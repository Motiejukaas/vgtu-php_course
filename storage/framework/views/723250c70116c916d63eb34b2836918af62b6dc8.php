<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('app.admin.home.home_dashboard')); ?></div>
                    <div class="card-body">


                            <table class="table table-hover">
                                <h4 class='card-title'><?php echo e(__('app.admin.home.home_title')); ?></h4>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.course_id')); ?></th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.name')); ?></th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.surname')); ?></th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.email')); ?></th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.phone')); ?></th>
                                    <th scope="col"><?php echo e(__('app.admin.home.table.birthdate')); ?></th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $__currentLoopData = $courses_participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="data-row">
                                    <th scope="row"><?php echo e($participant->id); ?></th>
                                    <td><?php echo e($participant->courses_id); ?></td>
                                    <td><?php echo e($participant->name); ?></td>
                                    <td><?php echo e($participant->surname); ?></td>
                                    <td><?php echo e($participant->email); ?></td>
                                    <td><?php echo e($participant->phone); ?></td>
                                    <td><?php echo e($participant->birthdate); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/admin/home.blade.php ENDPATH**/ ?>