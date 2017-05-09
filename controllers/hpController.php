<?php

include_once(ROOT . '/model/UpdateExistSamsung.php');

class SamsungController extends UpdateExistSamsung
{
//    public function __construct()
//    {
//        set_error_handler(array($this, 'ErrorCatcher'));
//
//
//        $errorVarArray['real index'] = true;
//        echo $errorVarArray['error index'];
//    }

    /**
     * @param $path = path to printer
     * @return false if in path  if no math by regular expression
     */






    public function actionHp()
    {

        $arrayofHps = [
            'hp2472',
            'hp2635',
        ];
        foreach ($arrayofHps as $oneHp) {
            $path = file_get_contents('http://' . $oneHp . 'info_suppliesStatus.html?tab=Status&menu=SupplyStatus');
            $regularExpression = '/remaining:\s([0-9]{1,3})/';
            $check = preg_match_all($regularExpression, $path, $matches);
            if ($check) {
                $procentCartridge = explode('"', $matches[0][0]);

            } else return false;
            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
            if ($check) {
                $fullname = explode('"', $matches[0]);
                $nameAndType = explode(" ", $fullname[1]);
                var_dump($nameAndType);
            } else return false;
            if (parent::issetPrinter($procentCartridge[1], $nameAndType[0], $oneHp)) {
                echo 'its ok';
            }

        }


    }
}





$samung = new SamsungController();
//$samung->actionSamsung();
//$resultSamsung = $samung->actionSamsung();
//var_dump($resultSamsung);
//var_dump($resultSamsung);