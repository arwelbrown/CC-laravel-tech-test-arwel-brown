<?php $__env->startSection('content'); ?>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success mt-2">
            <p>New quiz created successfully!</p>
        </div>
    <?php endif; ?>
    <h1>List of Quizzes</h1>
    <ul>
    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/quiz/<?php echo e($quiz->id); ?>"><?php echo e($quiz->name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <a class="btn btn-primary" href="<?php echo e(route('quiz.create')); ?>">Create New Quiz</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\CC-TechTest-Laravel\resources\views/quizzes/index.blade.php ENDPATH**/ ?>