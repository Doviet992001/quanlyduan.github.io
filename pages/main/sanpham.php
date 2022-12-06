<p>Chi tiết sản phẩm</p>
<?php
$sql_chitiet =
"SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img width="60%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">

        <div class="chitiet_sanpham">
            <h1>Tên sản phẩm:<?php echo $row_chitiet['tensanpham'] ?></h1>
            <br/>
            <h2>Mã sản phẩm:<?php echo $row_chitiet['masp'] ?></h2>
            <br/>
            <h2>Giá sản phẩm:<?php echo number_format ($row_chitiet['giasp']).'vnd' ?></h2>
            <br>
            <h2>Số lượng sản phẩm:<?php echo $row_chitiet['soluong'] ?></h2>
            <br/>
            <h2>Danh mục :<?php echo $row_chitiet['tendanhmuc'] ?></h2>
            <p><input type="submit" name="themgiohang" value="Thêm giỏ hàng"></p>
            
        </div>
    </form>
</div>
    <?php
}
?>

<style>
    p {
        font-size: 2rem;
    }
    .wrapper_chitiet {
        display: flex;
    }

    .chitiet_sanpham {
        margin-left: -100px;
    }
</style>
