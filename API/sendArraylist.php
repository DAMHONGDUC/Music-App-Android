<?php
	require "connect.php";
	
	class BaiHat
	{
	    function BaiHat($idBaiHat, $TenBaiHat, $HinhBaiHat, $CaSi, $LinkBaiHat, $LuotThich )
	    {
	        $this->idBaiHat = $idBaiHat;
	        $this->TenBaiHat = $TenBaiHat;
	        $this->HinhBaiHat = $HinhBaiHat;
	        $this->CaSi = $CaSi;
	        $this->LinkBaiHat = $LinkBaiHat;
	        $this->LuotThich = $LuotThich;
	    }
	}
	
	$result = array();
	
	foreach($_POST['Array_idBaiHat'] as $val) 
    {
        $id = mysql_real_escape_string($val);
            
        $query = "select * from baihat where idBaiHat = '$id'";
        $data = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($data);
        array_push($result , new BaiHat($row['idBaiHat'],
	                                        $row['TenBaiHat'],
	                                        $row['HinhBaiHat'],
	                                        $row['CaSi'],
	                                        $row['LinkBaiHat'],
	                                        $row['LuotThich']));
    }
    echo json_encode($result);
?>