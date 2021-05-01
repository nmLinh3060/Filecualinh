<?php
    require_once("Database/dbhelper.php");

    function dictrics(){
        $sql = "select name from devvn_quanhuyen";
        $districresult = executeResult($sql);

        foreach($districresult as $item) {
            echo'
                <option value="">'.$item['name'].'</option>';
        }
    }
    
                                                        
?>