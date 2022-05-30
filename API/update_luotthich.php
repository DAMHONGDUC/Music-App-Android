<?php
    require "connect.php";
    
    if (strlen($_POST['idBaiHat']) > 0)
	{
	$idbaihat = $_POST['idBaiHat'];
    
    $query = "select LuotThich 
            from baihat
            where $idbaihat = idBaiHat";
    
    $data = mysqli_query($con, $query);
    
    $row = mysqli_fetch_assoc($data);
    
    $tong_luotthich = $row['LuotThich'];
    
    $query_update = "update baihat
                    set LuotThich = $tong_luotthich + 1
                    where idBaiHat = $idbaihat";
    
    $data_update = mysqli_query($con,$query_update);
    
    if($data_update) echo "OK";
    else echo "Fail";
	}
?>
    