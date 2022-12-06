<?php 
include('../../config/config.php');
    $tensanpham = $_POST['tensanpham'];
    $masanpham = $_POST['masanpham'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    // xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $noidung = $_POST['noidung'];
    $danhmuc = $_POST['danhmuc'];

    if(isset($_POST['themsanpham'])) {
        // them
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,noidung,id_danhmuc) 
        VALUE('".$tensanpham."','".$masanpham."','".$gia."','".$soluong."','".$hinhanh."','".$noidung."','".$danhmuc."')" ;
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=add');
    }elseif(isset($_POST['suasanpham'])) {
        // sua
        if($hinhanh!='') {
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        
        $sql_update = "UPDATE tbl_sanpham SET 
        tensanpham='".$tensanpham."',masp='".$masanpham."',giasp='".$gia."',soluong='".$soluong."',hinhanh='".$hinhanh."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' 
         WHERE id_sanpham='$_GET[idsanpham]'" ;
         // xoa hinh anh cu
         $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        }else {
            $sql_update = "UPDATE tbl_sanpham SET 
            tensanpham='".$tensanpham."',masp='".$masanpham."',giasp='".$gia."',soluong='".$soluong."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' 
             WHERE id_sanpham='$_GET[idsanpham]'" ;    
        }
        mysqli_query($mysqli,$sql_update);
        
        header('Location:../../index.php?action=quanlysanpham&query=add');
    }else{
        $id=$_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham where id_sanpham = '".$id."' ";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=add');
    }

?>