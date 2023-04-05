<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Create New Quiz!</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Something went wrong!</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($err); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('quiz.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-2">
                    <label for="quizName"><strong>Quiz Name</strong></label>
                    <input type="text" name="quizName" id="quizName" class="form-control" placeholder="Quiz name"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="q1"><strong>Question 1</strong></label>
                    <input type="text" name="q1" id="q1" class="form-control" placeholder="Type Question 1 here"/>
                    <div class="form-check">
                        <label for="a1">Yes</label>
                        <input type="radio" name="a1" id="a1" class="form-check-input" value="y"/>
                    </div>
                    <div class="form-check">
                        <label for="a1">No</label>
                        <input type="radio" name="a1" id="a1" class="form-check-input" value="n"/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="q2"><strong>Question 2</strong></label>
                    <input type="text" name="q2" id="q2" class="form-control" placeholder="Type Question 2 here"/>
                    <div class="form-check">
                        <label for="a2">Yes</label>
                        <input type="radio" name="a2" id="a2" class="form-check-input" value="y"/>
                    </div>
                    <div class="form-check">
                        <label for="a2">No</label>
                        <input type="radio" name="a2" id="a2" class="form-check-input" value="n"/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="q3"><strong>Question 3</strong></label>
                    <input type="text" name="q3" id="q3" class="form-control" placeholder="Type Question 3 here"/>
                    <div class="form-check">
                        <input type="radio" name="a3" id="a3" class="form-check-input" value="y"/>
                        <label for="a3">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="a3" id="a3" class="form-check-input" value="n"/>
                        <label for="a3">No</label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary my-2">Submit</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <a class="btn btn-info" href="<?php echo e(route('quiz.index')); ?>">Back to home</a>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\CC-TechTest-Laravel\resources\views/quizzes/create.blade.php ENDPATH**/ ?>