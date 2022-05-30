<?php
	require "connect.php";
	$query = "SELECT * FROM baihat ORDER BY rand() LIMIT 5";
	
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
	
	$data = mysqli_query($con, $query);
	$arraybaihat = array();
	
	while($row = mysqli_fetch_assoc($data))
	{
	    array_push($arraybaihat , new BaiHat($row['idBaiHat'],
	                                        $row['TenBaiHat'],
	                                        $row['HinhBaiHat'],
	                                        $row['CaSi'],
	                                        $row['LinkBaiHat'],
	                                        $row['LuotThich']
	    ));
	}
	
	echo json_encode($arraybaihat);
?>