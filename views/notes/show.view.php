<?php require base_path('views/partials/head.php'); ?>
    <p class="text-center text-2xl font-thin pt-4"><?= $heading ?></p>
    <a href="/notes" class="<?= $class ?> <?= "bg-slate-100 hover:bg-slate-200" ?> ml-6">Go Back</a>
    <div class="flex gap-4 md:gap-8 flex-col w-full px-6 py-4 md:px-32 md:py-6" style="font-family: Arial; letter-spacing: .1rem;">
        <div class="h-14 w-full bg-slate-100 rounded-xl text-center border-1 border-slate-600 flex items-center justify-center">
            <?= htmlspecialchars($note['body']); ?>
        </div>
    </div>
<?php require base_path('views/partials/foot.php'); ?>