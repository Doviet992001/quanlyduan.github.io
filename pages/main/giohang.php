<p style="font-size:2rem;">Giỏ Hàng
  <?php 
    if(isset($_SESSION['dangky'])) {
      echo $_SESSION['dangky'];
    }
  ?>

</p>
<?php 
    if(isset($_SESSION['cart'])) {
    }
    ?>
    <table style="width:100%; text-align:center;border-collapse:collapse;font-size: 1.5rem; "border="1"">
    <tr>
      <th>ID</th>
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th>
      <th>Số lượng</th>
      <th>Giá sản phẩm</th>
      <th>Thành tiền</th>
      <th>Quản lý</th>

    </tr>
    <?php 
    if(isset($_SESSION['cart'])) {
        $i =0;
        $tongtien = 0;
        foreach($_SESSION['cart'] as $cart_item ) {
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'] ;
            $tongtien+=$thanhtien;
            $i++;
        
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $cart_item['masp'] ?></td>
      <td><?php echo $cart_item['tensanpham'] ?></td>
      <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px" ></td>
      <td>
          <a style="text-decoration:none;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
          <?php echo $cart_item['soluong'] ?>
        <a style="text-decoration:none;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>

    </td>
      <td><?php echo number_format($cart_item['giasp']).'vnd' ?></td>
      <td><?php echo number_format($thanhtien).'vnd' ?></td>
      <td><a style="text-decoration:none;" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
    </tr>
    <?php
    }
    ?>
     <tr>
        <td colspan="8">
        <p style="float:left">Tổng tiền: <?php echo number_format($tongtien).'vnd' ?></p>
        <p style="float:right; margin-right:20px;"><a style="text-decoration:none;" href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
        <div style="clear: both;"> 
        <?php
          if(isset($_SESSION['dangky'])) {
            ?>
              <p><a href="pages/main/thanhtoan.php"> Đặt hàng</a></p>
            <?php 
            }else {
              ?>
               <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
              <?php
            } 
        ?>
        </div>
    </td>
        
    </tr>
    <?php
    }else{
    ?>
    <tr>
        <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
    </tr>


    <?php
    }
    ?>
    
  </table>