<?php
error_reporting(0);
include("koneksi.php");

    // $mac = $_POST['mac'];
    $nama = $_POST['nama'];
    // $pass = $_POST['pass'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    // $gender = $_POST['gender'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $bagian = $_POST['bagian'];
    $profesi = $_POST['profesi'];
    $perusahaan = $_POST['perusahaan'];
    $other = $_POST['other'];
    if( !empty(trim($other))) {
        $keahlian = $_POST['other'];
    } else {
        $keahlian = $_POST['keahlian'];
    }
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $foto = $_FILES['foto'];

    // $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $image   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
         $image_name = addslashes($_FILES['foto']['name']);
            $image_size = getimagesize($_FILES['foto']['tmp_name']);

    if($image_size == 0) {
            mysql_query("UPDATE tb_user SET
                nama         = '$nama',
                tgl_lahir    = '$tanggal_lahir',
                kota         = '$kota',
                no_hp        = '$no_hp',
                profesi      = '$profesi',
                bagian      = '$bagian',
                perusahaan   = '$perusahaan',
                keahlian     = '$keahlian',
                instagram    = '$instagram',
                linkedln     = '$linkedin',
                facebook     = '$facebook'
                WHERE email  = '$email'")
                or die("Update data pada table member bdv gagal. ".mysql_error());
        }else{
            mysql_query("UPDATE tb_user SET
                nama         = '$nama',
                tgl_lahir    = '$tanggal_lahir',
                kota         = '$kota',
                no_hp        = '$no_hp',
                profesi      = '$profesi',
                bagian      = '$bagian',
                perusahaan   = '$perusahaan',
                keahlian     = '$keahlian',
                instagram    = '$instagram',
                linkedln     = '$linkedin',
                facebook     = '$facebook',
                foto         = '$image'
                WHERE email  = '$email'")
                or die("Update data pada table member bdv gagal. ".mysql_error());
        }
?>
<script>
	alert('Update user berhasil');
	document.location='lihat-data.php?email=<?php echo $email?>';
</script>