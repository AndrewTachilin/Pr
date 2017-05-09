<?php

require_once  (ROOT.'/model/dbconnect.php');
require_once (ROOT.'/controllers/AdminController.php');
//var_dump(DbConnect::getConnect()->query("SELECT * from toners"));
//var_dump(DbConnect::getConnect()->query("SELECT * from role"));
////var_dump($db->conn);
//$con = DbConnect::getConnect();
//$result =$con->query("SELECT * FROM ");
//$result =$con->query("SELECT `name`,black_toner,fabricator from port_name LEFT JOIN NameFabricator ON NameFabricator.port_id = port_name.port_id LEFT JOIN BlackToner ON BlackToner.port_id = port_name.port_id where port_name.port_id = 3");
//$show = $result->fetchAll(PDO::FETCH_ASSOC);
//var_dump($show);



class AdminExist{

    /**
     * @param $query string building in AdminController
     * @param $inputUserName input by user in form
     * @param $inputPassword input by user in form
     * @return return true when matcher=true
     */
    protected function issetAdmin($query,$inputUserName,$inputPassword){

        $con = DbConnect::getConnect();
        $result =$con->query($query);
        $show = $result->fetchAll(PDO::FETCH_ASSOC);
             foreach ($show as $accsess){
                if(($accsess['name'])== $inputUserName && ($accsess['password'] == $inputPassword ) ) {
                    return true;
                }
            }



    }
}


