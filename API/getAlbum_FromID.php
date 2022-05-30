<?php
	require "connect.php";
    
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
	
	if (strlen($_POST['idAlbum']) > 0)
	{
	$idalbum = $_POST['idAlbum'];
	$query_album = "select * from album where idAlbum = '$idalbum'";
	$data_album = mysqli_query($con, $query_album);
	
	$arrayAlbum = array();
	
	while ($row =  mysqli_fetch_assoc($data_album))
	{
	    array_push($arrayAlbum, new Album($row['idAlbum']
                                                ,$row['TenAlbum']
                                                ,$row['TenCaSiAlbum']
                                                ,$row['HinhAlbum']));
	}
	echo json_encode($arrayAlbum);
	}
?>