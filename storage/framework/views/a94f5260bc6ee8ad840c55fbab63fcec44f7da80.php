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

                        <?php echo Form::open(['method' => 'POST', 'route' => 'edit.content', 'id' => 'edit-content']); ?>



                        <div class="form-group">
                            <?php echo Form::label('contacts_text_lt', __('app.admin.edit_pages.form.contacts_lt')); ?>

                            <?php echo Form::textarea('contacts_text_lt', null, ['id' => 'summernote2', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('about_text_lt', __('app.admin.edit_pages.form.about_lt')); ?>

                            <?php echo Form::textarea('about_text_lt', null, ['id' => 'summernote4', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('contacts_text_en', __('app.admin.edit_pages.form.contacts_en')); ?>

                            <?php echo Form::textarea('contacts_text_en', null, ['id' => 'summernote3', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('about_text_en', __('app.admin.edit_pages.form.about_en')); ?>

                            <?php echo Form::textarea('about_text_en', null, ['id' => 'summernote5', 'class' => 'form-control', 'rows' => '3']); ?>

                        </div>


                        


                        
                        <?php echo Form::submit( __('app.admin.create_course.form.save'), ['id'=>'editContent', 'class' => 'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/admin/edit-content.blade.php ENDPATH**/ ?>