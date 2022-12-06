<p>Thêm sản phẩm </p>
<table border="1" width="50%">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr> 
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr> 
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham"></td>
        </tr>
        <tr> 
            <td>Giá sản phẩm</td>
            <td><input type="text" name="gia"></td>
        </tr>
        <tr> 
            <td>Số lượng </td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr> 
            <td>Hình ảnh sản phẩm</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr> 
            <td>Nội dung</td>
            <td><textarea row="5" name="noidung" ></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" >
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        
        <tr> 
            
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>

    </form>

</table>