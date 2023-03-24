<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama siswa                
                </th>
                <th scope="col" class="px-6 py-3">
                    Umur siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    NIS
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; 
            foreach ($siswa  as $data) :
            ?>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    <?= $no++ ?>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $data->nama ?>
                </th>
                <td class="px-6 py-4">
                    <?= $data->umur ?>
                </td>
                <td class="px-6 py-4">
                    <?= $data->nis ?>
                </td>
                <td class="px-6 py-4">
                    <?= $data->kelas ?>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2">Lihat</a>
                    <a href="#" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline pr-2">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>