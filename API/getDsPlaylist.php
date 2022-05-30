<?php
    require "connect.php";
	$query = "select * from playlist order by rand()";
	
	$data = mysqli_query($con,$query);
	
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
	
	$mangPlaylist = array();
    while ($row = mysqli_fetch_assoc($data))
    {
        array_push($mangPlaylist, new Playlist($row['idPlayList']
                                                ,$row['Ten']
                                                ,$row['TenCaSi']
                                                ,$row['HinhIcon']));
    }
    echo json_encode($mangPlaylist)
?>   