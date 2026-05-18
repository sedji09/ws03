<?php
use Framework\Session;
?>

<?php $successMessage = Session::getFlashMessage('success_message'); ?>
<?php if($successMessage !== null) : ?>
    <div class="message bg-green-50 border-l-4 border-green-500 text-green-700 py-3 px-4 my-3 rounded-md shadow-sm flex items-center gap-3">
        <i class="fa-solid fa-circle-check text-lg"></i>
        <span class="text-sm font-medium"><?= $successMessage ?></span>
    </div>
<?php endif; ?>

<?php $errorMessage = Session::getFlashMessage('error_message'); ?>
<?php if($errorMessage !== null) : ?>
    <div class="message bg-red-50 border-l-4 border-[#ef4444] text-[#b91c1c] py-3 px-4 my-3 rounded-md shadow-sm flex items-center gap-3">
        <i class="fa-solid fa-triangle-exclamation text-lg"></i>
        <span class="text-sm font-medium"><?= $errorMessage ?></span>
    </div>
<?php endif; ?>
