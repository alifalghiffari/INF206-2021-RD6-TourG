<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tournament Application</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h1>Tournament Application</h1>
 <div class="container">
        <?php
   if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])){
    include 'user_Admin.php';
    $user = new User();
    $kondisi['where'] = array(
     'id' => $sesiData['userID'],
    );
    $kondisi['return_type'] = 'single';
    $userData = $user->getRows($kondisi);
  ?>
        <h2>Selamat Datang <?php echo $userData['nik']; ?>!</h2>
        <a href="akunuser_Admin.php?logoutSubmit=1" class="logout">Logout</a>
  <div class="regisForm">
   <p><b>Username: </b><?php echo $userData['nik']; ?></p>
            <p><b>NIP: </b><?php echo $userData['nip']; ?></p>
            <p><b>Gampong: </b><?php echo $userData['gampong']; ?></p>
  </div>
        <?php }else{ ?>
  <h3>Login ke akun Anda</h3>
        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
  <div class="regisForm">
   <form action="akunuser_Admin.php" method="post">
    <input type="text" name="nik" placeholder="NIK" required="">
    <input type="password" name="password" placeholder="Pssword" required="">
    <div class="tbl-kirim">
     <input type="submit" name="loginSubmit" value="Login">
    </div>
   </form>
  </div>
        
 </div>
 <p>Tidak Mempunyai Akun?<a href="daftar_Admin.php">Create Account</a></p>
 <?php } ?>
</body>
</html>