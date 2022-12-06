<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('bootstrap-datepicker-1.9.0/js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('jquery-validate/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jquery-validate/additional-methods.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/site.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('bootstrap-datepicker-1.9.0/css/bootstrap-datepicker.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('app.header.main_page_title')); ?></div>
                    <div class="card-body">

                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <table class="table">
                                <h4 class='card-title'><?php echo e($course->name); ?></h4>
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
                                <?php $__currentLoopData = $course->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="data-row">
                                        <td><?php echo e($data->beginning); ?></td>
                                        <td><?php echo e($data->duration); ?>  <?php echo e(__('app.table.row.duration_' . $data->duration_classifier_id)); ?></td>
                                        <td><?php echo e($data->price); ?></td>
                                        <td><?php echo e($data->age); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" id="register-courses"
                                                    data-courses-id="<?php echo e($data->id); ?>">
                                                <?php echo e(__('app.table.button_registration')); ?>

                                            </button>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo $course->description; ?><br><br><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5><?php echo e(__('app.registration_modal.header_success')); ?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('app.registration_modal.close')); ?></button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div id="loading">
                    <div>
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-dark" role="status">
                                <span
                                    class="sr-only text-dark"><?php echo e(__('app.registration_modal.spinner.loading')); ?></span>
                            </div>
                        </div>
                        <span class="text-dark"><?php echo e(__('app.registration_modal.spinner.please_wait')); ?></span>
                    </div>
                </div>

                <?php echo Form::open(['route' => 'register.participant', 'id' => 'register-form', 'action' => 'javascript:void(0)']); ?>

                <?php echo e(Form::hidden('courses_id', '', ['id' => 'courses_id'])); ?>


                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('app.registration_modal.header')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <?php echo Form::label('name', __('app.registration_modal.form.name')); ?>

                        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                        <span class="text-danger" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('surname', __('app.registration_modal.form.surname')); ?>

                        <?php echo Form::text('surname', null, ['class' => 'form-control']); ?>

                        <span class="text-danger" id="error_surname"></span>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('birthdate', __('app.registration_modal.form.birthdate')); ?>

                        <?php echo Form::text('birthdate', null, ['class' => 'form-control']); ?>

                        <span class="text-danger" id="error_birthdate"></span>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('email', __('app.registration_modal.form.email')); ?>

                        <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com']); ?>

                        <span class="text-danger" id="error_email"></span>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('phone', __('app.registration_modal.form.phone')); ?>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+370</div>
                            </div>
                            <?php echo Form::text('phone', null, ['class' => 'form-control', 'maxlength' => '8', 'placeholder' => '12345678']); ?>

                        </div>
                        <span class="text-danger" id="error_phone"></span>
                    </div>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('app.registration_modal.close')); ?></button>
                    <?php echo Form::submit( __('app.registration_modal.save'), ['id'=>'register', 'class' => 'btn btn-primary']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/resources/views/site/index.blade.php ENDPATH**/ ?>