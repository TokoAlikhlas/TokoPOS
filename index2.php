
<?php 

/*
 *	PERINGATAN ! tidak untuk mengubah kode ini, kecuali jika bisa php
 */
 
session_start();

     if($_SESSION['admin']){
        
        require 'config.php';
        
        include $view;
        
    //class custom pdo ==============================================================
     
        $lihat = new view($config);
        $toko = $lihat -> toko();
    //end class custom pdo ===========================================================	
     
        //  admin
            include 'admin/template/header2.php';
            include 'admin/template/sidebar2.php';
                if(!empty($_GET['page'])){
                    include 'admin/module/'.$_GET['page'].'/index2.php';
                }else{
                    include 'admin/template/home2.php';
                }
            include 'admin/template/footer2.php';
        // end admin
    }else{
        echo '<script>window.location="login.php";</script>';
    }
?>

