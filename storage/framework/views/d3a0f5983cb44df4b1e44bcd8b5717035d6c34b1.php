<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('app.admin.create_course.title')); ?></div>
                    <div class="card-body">


                        <a href="<?php echo e(route('course.form')); ?>" type="button" class="btn btn-primary">
                            Create a course
                        </a><br><br>


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kursas</th>
                                <th scope="col">Mygtukai</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($course-> id); ?></th>
                                    <td><?php echo e($course->name); ?></td>
                                    <td class="table-buttons">
                                        <button type="button" class="btn btn-info btn-sm">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/admin/create-course.blade.php ENDPATH**/ ?>