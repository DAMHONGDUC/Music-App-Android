<?php
	require "connect.php";
	
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
	
	if (strlen($_POST['idChuDe']) > 0)
	{
	    $idchude = $_POST['idChuDe'];
	    $query_theloai = "select * from theloai where idChuDe = '$idchude'";
	    $data_theloai = mysqli_query($con, $query_theloai);
	    $arraytheloai = array();
	    
	    while($row = mysqli_fetch_assoc($data_theloai))
	    {
	        array_push($arraytheloai , new TheLoai($row['idTheLoai'],
	                                                $row['idChuDe'],
	                                                $row['TenTheLoai'],
	                                                $row['HinhTheLoai'],
	                                                $row['idPlayList']
	                                                
	                                                ));
	    }
	    echo json_encode($arraytheloai);
	}
	    
?>