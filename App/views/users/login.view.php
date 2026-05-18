<?php
loadPartial('head'); ?>
<?php
loadPartial('navbar'); ?>

<!-- Login Form Box -->
<div class="flex flex-1 justify-center items-center py-16">
  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-xl mx-6">
    <h2 class="auth-title text-4xl text-center font-bold mb-4">Login</h2>

    <?php loadPartial('errors', ['errors' => $errors ?? []]); ?>
    <form method="POST" action="/auth/login">
      <div class="mb-4">
        <input type="email" name="email" placeholder="Email Address"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <div class="mb-4">
        <input type="password" name="password" placeholder="Password"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <div class="flex justify-end mb-4">
        <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Forgot Password?</a>
      </div>
      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none">
        Login
      </button>

      <p class="mt-4 text-gray-500 text-center">
        Don't have an account?
        <a class="text-blue-900 text-center" href="/auth/register">Register</a>
      </p>
    </form>
  </div>
</div>


<?php
loadPartial('footer'); ?>