<?php require base_path('views/partials/head.php'); ?>
    <p class="text-center text-2xl font-thin pt-4">Create a note</p>
    <div class="flex gap-4 md:gap-8 flex-col w-full px-6 py-4 md:px-32 md:py-6" style="font-family: Arial; letter-spacing: .1rem;">
        <form method="POST" class="flex flex-col items-center">
            <textarea
            placeholder="emergency meeting at 8pm..."
            class="placeholder:text-[15px] md:placeholder:text-[18px] bg-slate-300 p-2 w-[70vw] h-full"
            name="body"
            rows="10"
            ><?= $_POST['body'] ?? '' ?></textarea>
            <?php if(isset($errors['body'])) : ?>
                <p class="text-red-700 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>
            <button type="submit" class="bg-slate-300 mt-4 w-40 p-1.5 rounded-md cursor-pointer">Create</button>
        </form>
    </div>
<?php require base_path('views/partials/foot.php'); ?>