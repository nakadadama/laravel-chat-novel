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
            <?php echo e(__('新規登録')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                
                <div class="flex flex-col">
                <h2 class="text-2xl font-semibold mb-4">ChatGPTを使って小説を書こう  apiに課金してないのでエラーメッセージがでるので 
                <a class="text-blue-500 hover:text-blue-600 underline"  href=" https://chat.openai.com/ ">chat.openai</a>
                にログインして小説を作ってください。
                </h2>
                <form method="POST">
    <?php echo csrf_field(); ?>
    <div class="flex flex-col mb-4">
        <textarea rows="10" cols="50" name="sentence" class="mb-4" placeholder="例:2000文字でリンゴを含めた気持ちが明るくなるような小説を書いて"><?php echo e(isset($sentence) ? $sentence : ''); ?></textarea>
        <button type="submit" class="bg-blue-500 text-white text-lg py-2 px-4 rounded-lg">ChatGPTで小説を生成する</button>
    </div>
</form>

<textarea rows="10" cols="50" name="chat_response" class="bg-gray-100 p-4 rounded-lg" placeholder="出力結果"><?php echo e(isset($chat_response) ? $chat_response : ''); ?></textarea>


<div class="mt-4">
<div class="flex flex-col">
<h2 class="text-2xl font-semibold mb-5">投稿フォーム</h2>
  <!-- フォームの開始 -->
  <form method="POST" action="<?php echo e(route('chat_gpt-confirm')); ?>">
    <?php echo csrf_field(); ?>
    <div class="flex flex-col items-start">
        <h2 class="text-2xl font-semibold mb-2">タイトル</h2>
        <input type="text" name="title" class="bg-gray-100 p-2 rounded-lg mb-4 w-full" placeholder="タイトルを入力してください">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-500"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <h2 class="text-2xl font-semibold mb-2">文章</h2>
        <textarea rows="10" cols="50" name="content" class="bg-gray-100 p-2 rounded-lg w-full" placeholder="文章を入力してください"></textarea>
        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-500"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit" class="bg-yellow-500 text-white text-lg py-2 px-4 rounded-lg mt-4 mx-auto w-full">投稿確認画面</button>
    </div>
</form>

        <!-- フォームの終了 -->
</div>
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
<?php /**PATH /var/www/html/resources/views/chat.blade.php ENDPATH**/ ?>