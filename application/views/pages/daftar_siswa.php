<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<h1 class="dark:text-white text-4xl mb-5">
    Daftar Siswa Page
</h1>
<div class="container">
    <a href="<?= base_url()?>tambah" class="inline-flex items-center text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="fa-solid fa-plus text-base mr-2"></i>Tambah Siswa</a>
</div>


<div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    Jenis kelamin                
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
                    <?= $data->kelamin ?>
                </td>
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
                    <a href="<?= site_url('view/'.$data->id)?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2">Lihat</a>
                    <a href="<?= site_url('siswa/edit/'.$data->id)?>" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline pr-2">Edit</a>
                    <a type="button" data-modal-toggle="deleteModal<?=$data->id?>" class="cursor-pointer font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
        <div id="deleteModal<?=$data->id?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal<?=$data->id?>">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                    <div class="flex justify-center items-center space-x-4">
                        <button data-modal-toggle="deleteModal<?=$data->id?>" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            No, cancel
                        </button>
                        <a href="<?= site_url('siswa/hapus/'.$data->id)?>" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Yes, I'm sure
                        </a>
                        <!-- <a href="<?= site_url('siswa/hapus/'.$data->id)?>" class="inline-flex items-center text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hapus Siswa</a> -->
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </table>
</div>