<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    // get ten danh muc
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

?>
<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h3>
<ul class="product__list">
    <?php
    while($row_pro = mysqli_fetch_array($query_pro)){
    ?>

    <li class="product__item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>"style="text-decoration:none; color:black">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" class="product__item-img">
            <h2 class="product__item-name">Tên sản phẩm : <?php echo $row_pro['tensanpham'] ?></h2>
            <p class="product__item-price">Giá: <?php echo number_format($row_pro['giasp']).'vnđ'?></p>
         </li>
    </a>
     <?php
    }
    ?>                   
</ul>