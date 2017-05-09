

<?php

require_once  (ROOT.'/model/dbconnect.php');
require_once  (ROOT.'/controllers/samsungController.php');
//require_once (ROOT.'/controllers/AdminController.php');
////var_dump(DbConnect::getConnect()->query("SELECT * from toners"));
//var_dump(DbConnect::getConnect()->query("SELECT * from toners"));
////var_dump($db->conn);



class UpdateExistSamsung
{

    /**
     * @param $procent samsungController Amount of paint in the cartridge
     * @param $fabricator samsungController who is the manufacturer
     * @param $port  samsungController port number in system
     * @return  UpdateExistSamsung return true when matches=true
     *
     */
    public function issetPrinter($procent, $fabricator, $port)
    {

//        $con = DbConnect::getConnect();
//        $show = $result = $con->query("SELECT black_toner,port_name.name,port_name.id from BlackToner
//          LEFT JOIN port_name ON BlackToner.name = port_name.id WHERE port_name.name='{$port}'")->fetch();
////        $show = $result->fetchAll(PDO::FETCH_ASSOC);
//var_dump($show);
//        if ($show) {
//            foreach ($show as $pornterExitst) {
//                if (($pornterExitst['name']) == '$port') {
//                    $result = $con->query("UPDATE BlackToner LEFT JOIN port_name
//                    ON BlackToner.name=port_name.id SET black_toner ='{$procent}' WHERE port_name.name ='{$port}'");
//                }
//            }
//            return true;
//        } elseif (count($show)==0) {
//                try {
//                    $con->beginTransaction();
//                    $con->exec("SELECT id  FROM NameFabricator WHERE fabricator=$fabricator");
//                    $idlastAddFabrication = $con->lastInsertId();
//                    $con->exec("INSERT INTO port_name (name) VALUES ('{$port}')");
//                    $idLastAddPortName = $con->lastInsertId();
//                    $con->exec("INSERT INTO BlackToner (black_toner,Name_fabricator_id,port_name_id)
//                    VALUES ('57','{$idlastAddFabrication}','{$idLastAddPortName}')");
//                } catch (Exception $e) {
//                    $con->rollBack();
//                    echo "Ошибка: " . $e->getMessage();
//                }
//                return true;
//        }


            }
    public function select(){

        $con = DbConnect::getConnect();
        $result =$con->query("SELECT * from blackToner");
        $show = $result->fetchAll();
  
        return $show;


    }
}




