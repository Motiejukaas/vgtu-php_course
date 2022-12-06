<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('summernote-0.8.12/dist/summernote-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('summernote-0.8.12/dist/lang/summernote-lt-LT.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('summernote-0.8.12/dist/summernote-bs4.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('app.admin.create_course.title')); ?></div>
                    <div class="card-body">


                        <?php echo Form::open(['method' => 'POST', 'route' => 'course.create', 'id' => 'create-course']); ?>


                        <div class="form-group">
                            <?php echo Form::label('name_lt', __('app.admin.create_course.form.name_lt')); ?>

                            <?php echo Form::text('name_lt', null, ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('name_en', __('app.admin.create_course.form.name_en')); ?>

                            <?php echo Form::text('name_en', null, ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('description_lt', __('app.admin.create_course.form.description_lt')); ?>

                            <?php echo Form::textarea('description_lt', null, ['id' => 'summernote0', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('description_en', __('app.admin.create_course.form.description_en')); ?>

                            <?php echo Form::textarea('description_en', null, ['id' => 'summernote1', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>

                        <?php echo Form::submit( __('app.admin.create_course.form.save'), ['id'=>'registerCourse', 'class' => 'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/admin/form.blade.php ENDPATH**/ ?>