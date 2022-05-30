<?php
        require "connect.php";
        $query = "SELECT *
        FROM quangcao qc
        order by rand(". date("Ymd") . ") limit 6";
        
        $data = mysqli_query($con,$query);
        
        class QuangCao
        {
            function QuangCao($idQuangCao2,$HinhAnh2,$NoiDung2,$HinhAnhResize2,$TenCaSi2,$idPlayList2)
            {
                $this->idQuangCao = $idQuangCao2;
                $this->HinhAnh = $HinhAnh2;
                $this->NoiDung = $NoiDung2;
                $this->HinhAnhResize = $HinhAnhResize2;
                $this->TenCaSi = $TenCaSi2;
                $this->idPlayList = $idPlayList2;
            }
        }
        
        $mangquangcao = array();
        while ($row = mysqli_fetch_assoc($data))
        {
            array_push($mangquangcao, new QuangCao($row['idQuangCao']
                                                    ,$row['HinhAnh']
                                                    ,$row['NoiDung']
                                                    ,$row['HinhAnhResize']
                                                    ,$row['TenCaSi']
                                                    ,$row['idPlayList']));
        }
        echo json_encode($mangquangcao)
        
?>      

