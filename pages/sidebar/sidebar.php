<div class="sidebar">
    <ul class="sidebar__list">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while($row = mysqli_fetch_array($query_danhmuc)) {
        ?>
    <li class="sidebar__item"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" class="sidebar__item-link">
        <?php echo $row['tendanhmuc'] ?>
    </a></li>
        <?php 
        }
        ?>
    </ul>
 </div>