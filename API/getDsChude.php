<?php
	require "connect.php";
	$querychude = "select * from chude order by rand()";
	$datachude = mysqli_query($con,$querychude);

	class ChuDe
	{
	function ChuDe($idChuDe2,$TenChuDe2,$HinhChuDe2)
	{
	    $this->idChuDe = $idChuDe2;
	    $this->TenChuDe = $TenChuDe2;
	    $this->HinhChuDe = $HinhChuDe2;
	}
	}
	
	$mangChuDe = array();
	
	while ($row = mysqli_fetch_assoc($datachude))
    {
        array_push($mangChuDe, new ChuDe($row['idChuDe']
                                                ,$row['TenChuDe']
                                                ,$row['HinhChuDe']));
    }
	
	
	echo json_encode($mangChuDe)

?>