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
            <?php echo e(__('投稿一覧')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <h2 class="text-2xl font-semibold mb-5">投稿一覧</h2>
            <div class="flex mb-3">
                            <div class="w-2/6 pr-4">
                                <p class="font-semibold title-font text-gray-700 mb-2">日付</p>
                                <p class="font-semibold title-font text-gray-700">名前</p>
                            </div>
                            <div class="w-3/6 pr-4">
                                <h3 class="text-lg font-semibold mb-2">タイトル</h3>
                                <p class="text-lg font-semibold mb-2">文章</p>
                            </div>
                            <div class="w-1/6">
                          
                            </div>
                        </div>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex mb-3">
                            <div class="w-2/6 pr-4">
                                <p class="font-semibold title-font text-gray-700 mb-2"><?php echo e($article->created_at->format('d M Y')); ?></p>
                                <p class="font-semibold title-font text-gray-700"><?php echo e($article->user->name); ?></p>
                            </div>
                            <div class="w-3/6  pr-4">
                                <h3 class="text-lg font-semibold mb-2"><?php echo e($article->title); ?></h3>
                                <p class="text-lg font-semibold mb-2"><?php echo e(substr($article->content, 0, 200)); ?></p>
                            </div>
                            <div class="w-1/6">
                            <a href="<?php echo e(route('all-articles.show', $article->id)); ?>" class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php /**PATH /var/www/html/resources/views/all-articles/index.blade.php ENDPATH**/ ?>