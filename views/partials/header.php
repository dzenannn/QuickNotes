<?php require('./classes/navbutton.php') ?>
<div class="w-full bg-slate-300 flex justify-between px-2 py-4 items-center border-b-1 border-black-900">
    <a href="/">
        <!-- <img src="/assets/logo.png" class="h-16 w-16 ml-4 rounded-full drop-shadow-md cursor-pointer"> -->
    <div class="ml-4 rounded-full drop-shadow-md cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4.3"><path fill="f1f5f9" stroke="#006dff" d="M8 6C8 4.89543 8.89543 4 10 4H30L40 14V42C40 43.1046 39.1046 44 38 44H10C8.89543 44 8 43.1046 8 42V6Z"/><path stroke="#000" stroke-linecap="round" d="M16 20H32"/><path stroke="#000" stroke-linecap="round" d="M16 28H32"/></g></svg>
    </div>
    </a>
    <div class="flex gap-12 mr-30 xl:mr-[40vw]">
            <a href="/" class="<?= $class ?> <?= isUrl('/') ? "bg-slate-500" : "bg-slate-100" ?>">Home</a>
            <a href="/notes" class="<?= $class ?> <?= isUrl('/notes') ? "bg-slate-500" : "bg-slate-100" ?>">Notes</a>
    </div>
</div>