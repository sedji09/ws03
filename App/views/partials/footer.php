<!-- Footer -->
<footer class="bg-blue-900 mt-8">

    <!-- Main columns -->
    <div class="max-w-6xl mx-auto px-10 pt-10 pb-8 flex flex-wrap gap-12">

        <!-- Brand -->
        <div class="flex-1 min-w-40">
            <p class="text-xl font-bold text-white mb-1">Prosple</p>
            <p class="text-sm text-blue-300 leading-relaxed">
                A job board for students<br>and fresh graduates.
            </p>
        </div>

        <!-- Company -->
        <div class="flex-1 min-w-32">
            <p class="text-xs font-bold text-white uppercase tracking-widest mb-3">Company</p>
            <ul class="space-y-2 list-none p-0 m-0">
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">About Prosple</a></li>
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Careers</a></li>
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Contact Us</a></li>
            </ul>
        </div>

        <!-- For Employers -->
        <div class="flex-1 min-w-32">
            <p class="text-xs font-bold text-white uppercase tracking-widest mb-3">For Employers</p>
            <ul class="space-y-2 list-none p-0 m-0">
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Post a Job</a></li>
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Browse Candidates</a></li>
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Employer FAQ</a></li>
            </ul>
        </div>

        <!-- For Job Seekers -->
        <div class="flex-1 min-w-32">
            <p class="text-xs font-bold text-white uppercase tracking-widest mb-3">For Job Seekers</p>
            <ul class="space-y-2 list-none p-0 m-0">
                <li><a href="/listings" class="text-sm text-blue-300 no-underline hover:text-white">Browse Jobs</a></li>
                <li><a href="#" class="text-sm text-blue-300 no-underline hover:text-white">Resume Tips</a></li>
                <li><a href="/register" class="text-sm text-blue-300 no-underline hover:text-white">Create Account</a>
                </li>
            </ul>
        </div>

        <!-- Social icons -->
        <div class="flex items-start justify-end gap-2">
            <a href="#" aria-label="Facebook"
                class="w-9 h-9 border border-blue-700 rounded-md flex items-center justify-center text-blue-300 text-sm hover:border-white hover:text-white">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" aria-label="Instagram"
                class="w-9 h-9 border border-blue-700 rounded-md flex items-center justify-center text-blue-300 text-sm hover:border-white hover:text-white">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" aria-label="Twitter/X"
                class="w-9 h-9 border border-blue-700 rounded-md flex items-center justify-center text-blue-300 text-sm hover:border-white hover:text-white">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="#" aria-label="LinkedIn"
                class="w-9 h-9 border border-blue-700 rounded-md flex items-center justify-center text-blue-300 text-sm hover:border-white hover:text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

    </div>

    <!-- Bottom bar -->
    <div class="border-t border-blue-800">
        <div class="max-w-6xl mx-auto px-10 py-4 flex items-center justify-between flex-wrap gap-2">
            <div class="flex gap-5 flex-wrap">
                <a href="#" class="text-xs text-blue-300 no-underline hover:text-white">Terms of Service</a>
                <a href="#" class="text-xs text-blue-300 no-underline hover:text-white">Privacy Policy</a>
            </div>
            <p class="text-xs text-blue-400 m-0">&copy; <?= date('Y') ?> Prosple. All rights reserved.</p>
        </div>
    </div>

</footer>

</body>

</html>