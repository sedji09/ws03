<?php
use Framework\Session;
?>

<!-- Nav -->
<header class="bg-blue-100 text-white p-4" style="padding-left: 2rem; padding-right: 2rem;">
  <div class="container mx-auto flex justify-between items-center">

    <h1 class="text-3xl font-semibold">
      <a class="logo" href="/">Prosple</a>
    </h1>
    <nav class="space-x-4">
      <?php if (Session::has('user')): ?>
        <div class="flex justify-betweeen items-center gap-4">
          <div>Welcome, <?php echo Session::get('user')['name']; ?></div>
          <form method="POST" action="/auth/logout">
            <button type="submit" class="text-white inline-block hover:underline">Logout</button>
          </form>
          <a href="/listings/create"
            class="post-job-btn text-white px-4 py-2 rounded hover:shadow-md transition duration-300">
            <i class="fa fa-edit"></i> Post a Job
          </a>
        </div>
      <?php else: ?>
        <a href="/auth/login" class="text-white hover:underline">Login</a>
        <a href="/auth/register" class="text-white hover:underline">Register</a>
      <?php endif; ?>




    </nav>
  </div>
</header>