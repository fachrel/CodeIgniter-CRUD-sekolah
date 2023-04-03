
<div class="w-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pb-10 pt-6">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?= base_url('assets/picture/profile.jpg')?>" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?=$nama?></h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Jenis kelamin : <?=$kelamin?></span>
        <span class="text-sm text-gray-500 dark:text-gray-400">Umur : <?=$umur?></span>
        <span class="text-sm text-gray-500 dark:text-gray-400">NIS : <?=$nis?></span>
        <span class="text-sm text-gray-500 dark:text-gray-400">Kelas : <?=$kelas?></span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <a href="<?= site_url('siswa/edit/'.$id)?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</a>
        </div>
    </div>
</div>
