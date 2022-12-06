<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
 ?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        
    }
?>

<div class="menu">
         <ul class="menu__list">
            <li class="menu__item"><a href="index.php" class = "menu__item-link"> Trang chủ</a></li> 
            <?php 
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>  
            <li class="menu__item"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class = "menu__item-link">
            <?php echo $row_danhmuc['tendanhmuc'] ?> </a></li>  
                <?php 
                    }
                ?>
            <li class="menu__item"><a href="index.php?quanly=giohang" class = "menu__item-link">
                    Giỏ hàng </a></li>  
            <?php 
                if(isset($_SESSION['dangky'])){      
            ?>
             <li class="menu__item"><a href="index.php?dangxuat=1" class = "menu__item-link">
                   Đăng xuất</a> </li>  
                   <li class="menu__item"><a href="index.php?quanly=thaydoimatkhau" class = "menu__item-link">
                   Thay đổi mật khẩu</a> </li>  

            <?php
            }else {
                ?>
             <li class="menu__item"><a href="index.php?quanly=dangky" class = "menu__item-link">
                   Đăng ký</a> </li>  

                <?php
            }
            ?>
        </ul>
        <p>
            <form action="index.php?quanly=timkiem" method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </p>
    </div>