<?php
	require "connect.php";
    
    class BaiHat
	{
	    function BaiHat($idBaiHat, $TenBaiHat, $HinhBaiHat, $CaSi, $LinkBaiHat, $LuotThich ,$idQuangCao)
	    {
	        $this->idBaiHat = $idBaiHat;
	        $this->TenBaiHat = $TenBaiHat;
	        $this->HinhBaiHat = $HinhBaiHat;
	        $this->CaSi = $CaSi;
	        $this->LinkBaiHat = $LinkBaiHat;
	        $this->LuotThich = $LuotThich;
	        $this->idQuangCao = $idQuangCao;
	    }
	}
	
	if (strlen($_POST['idBaiHat']) > 0)
	{
	$idbaihat = $_POST['idBaiHat'];
	$query_baihat = "select * from baihat where idBaiHat = '$idbaihat'";
	$data_baihat = mysqli_query($con, $query_baihat);
	
	$arraybaihat = array();
	
	while($row = mysqli_fetch_assoc($data_baihat))
	{
	    array_push($arraybaihat , new BaiHat($row['idBaiHat'],
	                                        $row['TenBaiHat'],
	                                        $row['HinhBaiHat'],
	                                        $row['CaSi'],
	                                        $row['LinkBaiHat'],
	                                        $row['LuotThich'],
	                                        $row['idQuangCao']
	    ));
	}
	
	echo json_encode($arraybaihat);
	}
?>