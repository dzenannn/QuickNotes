<?php require ('partials/head.php'); ?>
<p class="text-center text-2xl font-thin pt-4">My Notes</p>
<div class="flex gap-4 md:gap-8 flex-col w-full px-6 py-4 md:px-32 md:py-6" style="font-family: Arial; letter-spacing: .1rem;">
        <?php foreach ($notes as $note) : ?>
            <div class="h-14 w-full bg-slate-100 rounded-xl text-center border-1 border-slate-600 flex items-center justify-center">
                <a href="/notes"><?= $note['body']; ?></a>
            </div>
        <?php endforeach; ?>
</div>
<?php require ('partials/foot.php'); ?>