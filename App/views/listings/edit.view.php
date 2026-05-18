<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="flex flex-1 justify-center items-start py-12">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-2xl mx-6">
        <h2 class="form-heading text-4xl text-center font-bold mb-4">Edit Job Listing</h2>

        <form method="POST" action="/listings/<?= $listing->id ?>">
            <input type="hidden" name="_method" value="PUT">
            <h2 class="form-subheading text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>
           <?php loadPartial('errors', ['errors' => $errors ?? []]); ?>
            <div class="mb-4">
                <input type="text" name="title" placeholder="Job Title"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing->title ?? '' ?>" />
            </div>
            <div class="mb-4">
                <textarea name="description" placeholder="Job Description"
                    class="w-full px-4 py-2 border rounded focus:outline-none"><?= $listing->description ?? '' ?></textarea>
            </div>
            <div class="mb-4">
                <input type="text" name="salary" placeholder="Annual Salary"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->salary ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="requirements" placeholder="Requirements"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->requirements ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="benefits" placeholder="Benefits"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->benefits ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="tags" placeholder="Tags"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->tags ?? '' ?>" />
            </div>
            <h2 class=" text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info & Location
            </h2>
            <div class="mb-4">
                <input type="text" name="company" placeholder="Company Name"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->company ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="address" placeholder="Address"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    value="<?= $listing->address ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="city" placeholder="City"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing->city ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="state" placeholder="State"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing->state ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="text" name="phone" placeholder="Phone"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing->phone ?? '' ?>" />
            </div>
            <div class=" mb-4">
                <input type="email" name="email" placeholder="Email Address For Applications"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing->email ?? '' ?>" />
            </div>
            <button
                class=" w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
            <a href="/listings/<?= $listing->id ?>"
                class="block text-center w-full cancel-btn px-4 py-2 rounded focus:outline-none">
                Cancel
            </a>
        </form>
    </div>
</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>