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
	
	if (strlen($_POST['idTheLoai']) > 0)
	{
	$idtheloai = $_POST['idTheLoai'];
	$query_baihat = "select * from baihat where idTheLoai = '$idtheloai'";
	$data_baihat = mysqli_query($con, $query_baihat);
	
	$arraybaihat = array();
	
	while($row = mysqli_fetch_assoc($data_baihat))
	{
	    array_push($arraybaihat , new BaiHat($row['idBaiHat'],
	                                        $row['TenBaiHat'],
	                                        $row['HinhBaiHat'],
	                                        $row['CaSi'],
	                                        $row['LinkBaiHat'],
	                                        $row['LuotThich']));
	   
	}
	
	echo json_encode($arraybaihat);
	}
?>