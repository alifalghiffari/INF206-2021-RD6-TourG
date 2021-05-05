<?php
//memulai Session
session_start();
//memuat dan menginisialisasi class User
include 'user_Admin.php';
$user = new User();
if(isset($_POST['daftarSubmit'])){
 //memeriksa apakah rincian user kosong
    if(!empty($_POST['nik']) && !empty($_POST['nip'])  && !empty($_POST['gampong']) && !empty($_POST['kode_pos']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
  //membandingkan password and konfirmasi password
        if($_POST['password'] !== $_POST['confirm_password']){
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Konfirmasi password harus sama dengan password.'; 
        }else{
   //memeriksa apakah user sudah ada di dalam database
            $kondSblmnya['where'] = array('nik'=>$_POST['nik']);
            $kondSblmnya['return_type'] = 'count';
            $userSblmnya = $user->getRows($kondSblmnya);
            if($userSblmnya > 0){
                $sesiData['status']['type'] = 'error';
                $sesiData['status']['msg'] = 'NIK sudah ada, silakan gunakan NIK yang lain.';
            }else{
    //memasukkan data user dalam database
                $userData = array(
                    'nik' => $_POST['nik'],
                    'nip' => $_POST['nip'],
                    'gampong' => $_POST['gampong'],
                    'kode_pos' => $_POST['kode_pos'],
                    'password' => md5($_POST['password'])
                    //'telp' => $_POST['telp']
                );
                $insert = $user->insert($userData);
    //Status ditetapkan berdasarkan data yang dimasukkan
                if($insert){
                    $sesiData['status']['type'] = 'sukses';
                    $sesiData['status']['msg'] = 'Anda telah berhasil didaftarkan.';
                }else{
                    $sesiData['status']['type'] = 'error';
                    $sesiData['status']['msg'] = 'Terjadi masalah, silahkan coba lagi.';
                }
            }
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Isi semua bidang.'; 
    }
 //menyimpan status pendaftaran ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
    $redirectURL = ($sesiData['status']['type'] == 'sukses')?'index_Admin.php':'daftar_Admin.php';
 //mengalihkan ke halaman index/pendaftaran
    header("Location:".$redirectURL);
}elseif(isset($_POST['loginSubmit'])){
    //memeriksa apakah login yang diinput kosong
    if(!empty($_POST['nik']) && !empty($_POST['password'])){
  //mendapatkan data user dari class user
        $kondisi['where'] = array(
            'nik' => $_POST['nik'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $kondisi['return_type'] = 'single';
        $userData = $user->getRows($kondisi);
  //Menetapkan data dan status user berdasarkan login
        if($userData){
            $sesiData['userLoggedIn'] = TRUE;
            $sesiData['userID'] = $userData['id'];
            $sesiData['status']['type'] = 'sukses';
            $sesiData['status']['msg'] = 'Selamat Datang '.$userData['username'].'!';
        }else{
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Nik atau password salah, silahkan coba lagi.'; 
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Masukkan Nik and password.'; 
    }
 //menyimpan status login ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
 //mengalihkan ke halaman home
    header("Location:index_Admin.php");
}elseif(!empty($_REQUEST['logoutSubmit'])){
 //menghapus data Session
    unset($_SESSION['sesiData']);
    session_destroy();
 //menyimpan Status logout ke dalam Session
    $sesiData['status']['type'] = 'sukses';
    $sesiData['status']['msg'] = 'Anda telah berhasil logout dari akun Anda.';
    $_SESSION['sesiData'] = $sesiData;
 //mengalihkan ke halaman home
    header("Location:index_Admin.php");
}else{
 //mengalihkan ke halaman home
    header("Location:index_Admin.php");
}