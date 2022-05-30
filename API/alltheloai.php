<?php
	require "connect.php";
	$query = "SELECT * FROM theloai order by rand()";
	
	class TheLoai
	{
	    function TheLoai($idTheLoai2, $idChuDe2, $TenTheLoai2, $HinhTheLoai2, $idPlayList2)
	    {
	        $this->idTheLoai = $idTheLoai2;
	        $this->idChuDe = $idChuDe2;
	        $this->TenTheLoai = $TenTheLoai2;
	        $this->HinhTheLoai = $HinhTheLoai2;
	        $this->idPlayList = $idPlayList2;
	    }
	}
	
	$data = mysqli_query($con, $query);
	$arraytheloai = array();
	
	while($row = mysqli_fetch_assoc($data))
	{
	    array_push($arraytheloai , new TheLoai($row['idTheLoai'],
	                                                $row['idChuDe'],
	                                                $row['TenTheLoai'],
	                                                $row['HinhTheLoai'],
	                                                $row['idPlayList']
	                                                
	                                                ));
	}
	
	echo json_encode($arraytheloai);
	
?>