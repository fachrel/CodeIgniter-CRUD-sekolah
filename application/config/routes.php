<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'siswa';
$route['dashboard'] = 'siswa/index';
$route['tambah'] = 'siswa/tambah_siswa';
$route['siswa'] = 'siswa/daftar_siswa';
$route['view/(:num)'] = 'siswa/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
