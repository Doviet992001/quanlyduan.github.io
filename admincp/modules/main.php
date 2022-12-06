<div class="main">
    <?php 
               if(isset($_GET['action']) && $_GET['query']) {
                $tam = $_GET['action'];
                $query = $_GET['query'];
            }else {
                $tam = '';
                $query = '';
            }
            if($tam=='quanlydanhmucsanpham' && $query == 'add') {
                include("modules/quanlydanhmucsp/add.php");
                include("modules/quanlydanhmucsp/list.php");
            }elseif($tam=='quanlydanhmucsanpham' && $query == 'remove') {
                include("modules/quanlydanhmucsp/remove.php");
            }elseif($tam=='quanlysanpham' && $query == 'add') {
                include("modules/quanlysp/add.php");
                include("modules/quanlysp/list.php");
            }elseif($tam=='quanlysp' && $query == 'remove'){
                include("modules/quanlysp/remove.php");
            }elseif($tam=='quanlydonhang' && $query == 'lietke'){
                include("modules/quanlydonhang/lietke.php");
            }elseif($tam=='donhang' && $query == 'xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
            }else {
                include('modules/dashboard.php');
                    
            }
            
            
    ?>
</div>  