<?php view('views/partials/head.php'); ?>
<p class="text-center text-2xl font-thin pt-4">My Notes</p>
<div class="flex gap-4 md:gap-8 flex-col w-full px-6 py-4 md:px-32 md:py-6" style="font-family: Arial; letter-spacing: .1rem;">
    <?php foreach ($notes as $note) : ?>
        <a href="/note?id=<?= $note['id'] ?>">
            <div class="h-14 w-full bg-slate-100 rounded-xl text-center border-1 border-slate-600 flex items-center justify-center">
                <?= $note ? htmlspecialchars($note['body']) : "DB Not Connected"; ?>
            </div>
        </a>
    <?php endforeach; ?>

        <p class="mt-6 ml-2"><a href="/notes/create" class="p-1 bg-slate-100 rounded-md w-20 text-center bg-slate-500">Create Note</a></p>
</div>
<?php view('views/partials/head.php'); ?>