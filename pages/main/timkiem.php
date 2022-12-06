<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa ='';
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
<ul class="product__list">
    <?php
    while($row = mysqli_fetch_array($query_pro)) { 
    ?>
    <li class="product__item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" style="text-decoration:none; color:black">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="product__item-img">
            <h2 class="product__item-name">Tên sản phẩm : <?php echo $row['tensanpham'] ?></h2>
            <p class="product__item-price">Giá: <?php echo number_format($row['giasp']).'vnđ'?></p>
            <p><?echo $row['tensanpham'] ?><p>
    </a>

     </li>
    <?php
    }
    ?>
                   
</ul>