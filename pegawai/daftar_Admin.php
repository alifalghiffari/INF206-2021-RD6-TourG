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
    <title>Tournament Aplication</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h1>Tournament Aplication</h1>
 <div class="container">
  <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
  <div class="regisForm">
   <form action="akunuser_Admin.php" method="post">
    <input type="text" name="nik" placeholder="NIK" required="">
    <input type="text" name="nip" placeholder="NIP" required="">
    <input type="text" name="gampong" placeholder="Gampong" required="">
    <input type="text" name="kode_pos" placeholder="Kode Pos" required="">
    <input type="password" name="password" placeholder="Password" required="">
    <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required="">
    <div class="tbl-kirim">
     <input type="submit" name="daftarSubmit" value="Create Account">
    </div>
   </form>
  </div>
 </div>
</body>
</html>