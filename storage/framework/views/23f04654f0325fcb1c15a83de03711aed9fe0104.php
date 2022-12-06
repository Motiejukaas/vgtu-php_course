<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('app.header.main_page_title')); ?></div>
                    <div class="card-body">
                        <table class="table">
                            <h4> Kursas 1</h4>
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('app.table.header.course_beginning')); ?></th>
                                <th scope="col"><?php echo e(__('app.table.header.course_duration')); ?></th>
                                <th scope="col"><?php echo e(__('app.table.header.course_price')); ?></th>
                                <th scope="col"><?php echo e(__('app.table.header.course_age')); ?></th>
                                <th scope="col"><?php echo e(__('app.table.header.course_registration')); ?></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>2019...</td>
                                <td>3 menesiai</td>
                                <td>195</td>
                                <td>11-14</td>
                                <td><button type="button" class="btn btn-primary"><?php echo e(__('app.table.button_registration')); ?></button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/index.blade.php ENDPATH**/ ?>
