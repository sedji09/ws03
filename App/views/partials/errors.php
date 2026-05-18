<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="message bg-red-50 border-l-4 border-[#ef4444] text-[#b91c1c] py-3 px-4 my-3 rounded-md shadow-sm flex items-center gap-3">
            <i class="fa-solid fa-triangle-exclamation text-lg"></i>
            <span class="text-sm font-medium"><?= $error ?></span>
        </div>
    <?php endforeach; ?>
<?php endif; ?>