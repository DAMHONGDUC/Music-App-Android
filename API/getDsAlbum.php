<?php
	require "connect.php";
	$query = "select * from album order by rand()";
	$data = mysqli_query($con,$query);
	
	class Album
	{
	    function Album($idAlbum2,$TenAlbum2,$TenCaSiAlbum2,$HinhAlbum2)
	    {
	        $this->idAlbum = $idAlbum2;
	        $this->TenAlbum = $TenAlbum2;
	        $this->TenCaSiAlbum = $TenCaSiAlbum2;
	        $this->HinhAlbum = $HinhAlbum2;
	    }
	}
	
	$arrayAlbum = array();
	
	while ($row =  mysqli_fetch_assoc($data))
	{
	    array_push($arrayAlbum, new Album($row['idAlbum']
                                                ,$row['TenAlbum']
                                                ,$row['TenCaSiAlbum']
                                                ,$row['HinhAlbum']));
	}
	echo json_encode($arrayAlbum);
	
?>