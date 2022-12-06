<?php 
    if(isset($_POST['dangky'])) {
        $tenkhachang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = ($_POST['diachi']);
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
        VALUE('".$tenkhachang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
        if($sql_dangky) {
            echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
?>

<p>Đăng ký thành viên</p>
<form action="" method="POST">
    <table border="1" style="border-collapse: collapse; font-size: 2rem; ">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr> <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="dienthoai"></td>
        </tr> <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi"></td>
        </tr> <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="matkhau"></td>
        </tr> 
        <tr>
            <td><input type="submit" name="dangky" value="Đăng Ký"></td>
            <td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a> </td>

        </tr>
    </table>
</form>