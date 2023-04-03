<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<h1 class="dark:text-white text-4xl mb-5">
    Tambah Siswa Page
</h1>
<?php echo form_open('siswa/simpan_siswa'); ?>


<div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama anda</label>
        <input type="text" id="nama" name="nama" value="" class='<?= (!form_error('nama')) ? "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" : "bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"?>'>
        <?= (validation_errors()) ? (form_error('nama', '<div class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp! </span>', '</div>')) : "";?>
    </div>
    <div class="mb-6">
        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
        <input type="text" id="nis" name="nis" value="" class='<?= (!form_error('nis')) ? "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" : "bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"?>'>
        <?= (validation_errors()) ? (form_error('nis', '<div class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp! </span>', '</div>')) : "";?>
    </div>
    <div class="mb-6">
        <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">umur</label>
        <input type="text" id="umur" name="umur" value="" class='<?= (!form_error('umur')) ? "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" : "bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"?>'>
        <?= (validation_errors()) ? (form_error('umur', '<div class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp! </span>', '</div>')) : "";?>
    </div>


    <div class="mb-6">
        <label for="kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Jenis Kelamin</label>
        <select id="kelamin" name="kelamin" class='<?= (!form_error('kelamin')) ? "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" : "bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"?>'>
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    
    <?= (validation_errors()) ? (form_error('kelas', '<div class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp! </span>', '</div>')) : "";?>
    <div class="mb-6">
        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kelas</label>
        <select id="kelas" name="kelas" class='<?= (!form_error('kelas')) ? "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" : "bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"?>'>
            <option selected>Pilih kelas</option>
            <option value="X RPL A">X RPL A</option>
            <option value="X RPL B">X RPL B</option>
            <option value="X RPL C">X RPL C</option>
        </select>
    </div>
    <?= (validation_errors()) ? (form_error('kelas', '<div class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp! </span>', '</div>')) : "";?>
    <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>