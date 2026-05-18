<?php
loadPartial('head'); ?>
<?php
loadPartial('navbar'); ?>

<!-- Registration Form Box -->
<div class="flex flex-1 justify-center items-center py-16">
  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-lg mx-6">
    <h2 class="auth-title text-4xl text-center font-bold mb-4">Register</h2>
    <?php loadPartial('errors', ['errors' => $errors ?? []]); ?>
    <form method="POST" action="/auth/register">
      <div class="mb-4">
        <input type="text" name="name" placeholder="Full Name"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $users['name'] ?? '' ?>" />
      </div>
      <div class="mb-4">
        <input type="email" name="email" placeholder="Email Address"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $users['email'] ?? '' ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="city" placeholder="City" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= $users['city'] ?? '' ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="state" placeholder="State" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= $users['state'] ?? '' ?>" />
      </div>
      <div class="mb-4">
        <input type="password" name="password" placeholder="Password"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <div class="mb-4">
        <input type="password" name="password_confirmation" placeholder="Confirm Password"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none">
        Register
      </button>

      <p class="mt-4 text-gray-500 text-center">
        Already have an account?
        <a class="text-blue-900" href="/auth/login">Login</a>
      </p>
    </form>
  </div>
</div>

<?php
loadPartial('footer'); ?>