<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="mt-4">
    <div class="flex flex-col">
        <h2 class="text-2xl font-semibold mb-5">投稿確認</h2>

        <h2 class="text-2xl font-semibold mb-2">タイトル</h2>
        <p><?php echo e($title); ?></p>

        <h2 class="text-2xl font-semibold mb-2">文章</h2>
        <p><?php echo e($content); ?></p>

        <!-- フォームの送信ボタン -->
        <form method="POST" action="<?php echo e(route('articles.store')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="title" value="<?php echo e($title); ?>">
            <input type="hidden" name="content" value="<?php echo e($content); ?>">

            <button type="submit" class="bg-yellow-500 text-white text-lg py-2 px-4 rounded-lg mt-4">投稿する</button>
        </form>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/confirm.blade.php ENDPATH**/ ?>