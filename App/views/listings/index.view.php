<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>
<!-- Job Listings -->
<section>
    <div class="container mx-auto p-4 mt-4" style="padding-left: 2.5rem; padding-right: 2.5rem;">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">All Jobs</div>
        <?php if (isset($_SESSION['success_message'])) : ?>
            <div class="message bg-green-100 p-3 my-3">
                <?= $_SESSION['success_message'] ?>
            </div>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <?php foreach ($listings as $listing): ?>
                <!-- Job Listing 1: Software Engineer -->
                <div class="rounded-lg shadow-md bg-white" style="display: flex; flex-direction: column; height: 100%;">
                    <div class="p-4" style="display: flex; flex-direction: column; flex-grow: 1;">
                        <h2 class="text-xl font-semibold title-color"> <?= $listing->title ?> </h2>
                        <p class="text-gray-700 text-md mt-2" style="flex-grow: 1;">
                            <?= $listing->description ?>
                        </p>
                        <ul class="my-4 bg-gray-100 p-4 rounded card-meta-list">
                            <li>
                                <strong>Salary:</strong>
                                <span><?= formatSalary($listing->salary) ?></span>
                            </li>
                            <li>
                                <strong>Location:</strong>
                                <span><?= $listing->city ?>, <?= $listing->state ?> <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-1">Local</span></span>
                            </li>
                            <?php if(!empty($listing->tags)) : ?>
                                <li class="mb-2">
                                    <strong>Tags:</strong>
                                    <span><?= $listing->tags ?></span>
                                </li>
                            <?php endif; ?>
                        </ul>
                        

                        <a href="/listings/<?= $listing->id ?>"
                            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200"
                            style="margin-top: auto;">
                            Details
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>