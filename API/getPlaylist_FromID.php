<?php
    require "connect.php";
	
	class Playlist
	{
	    function Playlist($idPlayList2, $Ten2, $TenCaSi2, $HinhIcon2)
	    {
	        $this->idPlayList = $idPlayList2;
	        $this->Ten = $Ten2;
	        $this->TenCaSi =  $TenCaSi2;
	        $this->HinhIcon = $HinhIcon2;
	        
	    }
	}
	
	if (strlen($_POST['idPlayList']) > 0)
	{
	$idplaylist = $_POST['idPlayList'];
	$query_playlist = "select * from playlist where idPlayList = '$idplaylist'";
	$data_playlist = mysqli_query($con, $query_playlist);
	
	$mangPlaylist = array();
    while ($row = mysqli_fetch_assoc($data_playlist))
    {
        array_push($mangPlaylist, new Playlist($row['idPlayList']
                                                ,$row['Ten']
                                                ,$row['TenCaSi']
                                                ,$row['HinhIcon']));
    }
    echo json_encode($mangPlaylist);
    }
?>   