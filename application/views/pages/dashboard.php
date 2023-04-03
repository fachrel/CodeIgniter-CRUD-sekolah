<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<h1 class="dark:text-white text-4xl mb-5">
    Dashboard Page
</h1>
<h3 class="dark:text-white text-center text-2xl mb-5">
    Siswa
</h3>
<div class="flex flex-col md:flex-row justify-center gap-2 mb-5">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Jumlah Siswa</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$jumlah?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-person"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa yang ada pada database</p>
    </div>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Laki-laki</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$lakiLaki?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-mars"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa Laki-laki yang ada pada database</p>
    </div>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Perempuan</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$perempuan?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-venus"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa Perempuan yang ada pada database</p>
    </div>
</div>

<h3 class="dark:text-white text-center text-2xl mb-5">
    Kelas
</h3>

<div class="flex flex-col md:flex-row justify-center gap-2">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">X RPL A</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$ra?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-code"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa kelas X RPL A didalam database</p>
    </div>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">X RPL B</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$rb?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-code"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa kelas X RPL B didalam database</p>
    </div>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div class="jumlah w-2/3">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">X RPL C</h5>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$rc?></h5>
            </div>
            <div class="icon text-6xl dark:text-white text-right basis-1/3 text-center">
                <i class="fa-solid fa-code"></i>
            </div>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah banyaknya siswa kelas X RPL C didalam database</p>
    </div>
</div>
