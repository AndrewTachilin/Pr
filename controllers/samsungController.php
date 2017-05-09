<?php
define ('DIRSEP', DIRECTORY_SEPARATOR);
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


    public function actionSamsung()
    {

        $arrayofSamsungs = [

            'sm2622',
            'sm2626',
            'sm2752',
            'sm2847',
            'sm2861',
            'sm6210',
            'sm2831',
            'sm2855',
            'sm2865',
            'sm2974',
            'sm2844',
            'sm2803',
            'sm2742',
            'sm2690',
            'sm2834',
            'sm2854',
            'sm2832',
            'sm2779',
            'sm2730',
            'sm6170',
        ];
//        print_r($arrayofSamsungs);

        foreach ($arrayofSamsungs as $oneSamsung) {

//         $path = file_get_contents('http://' . $oneSamsung . '/sws/app/information/home/home.json');

//            $regularExpression = '/remaining:\s([0-9]{1,3})/';
//            $check = preg_match_all($regularExpression, $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0][0]);
//                $procentCartridge = explode(" ", $fullname[0]);
//            }
//            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0]);
//                $nameAndType = explode(" ", $fullname[1]);
//                var_dump($nameAndType);
//            }

//            var_dump($arrayofSamsungs);


//            if (parent::issetPrinter($procentCartridge[1], $nameAndType[0], $oneSamsung)) {
//
//            }
        }



//return $oneSamsung;
    }
    public function selectall(){
       if(parent::select()){
             return (parent::select());
        }
    }


    public function ErrorCatcher($errno, $errstr)
    {
        echo '<h1>cannot connect to printer </h1>'.ac;
    }

//
//    public function actionHp()
//    {
//
//        $arrayofHps = [
//            'hp2472',
//            'hp2635',
//        ];
//        foreach ($arrayofHps as $oneHp) {
//            $path = file_get_contents('http://' . $oneHp . 'info_suppliesStatus.html?tab=Status&menu=SupplyStatus');
//            $regularExpression = '/remaining:\s([0-9]{1,3})/';
//            $check = preg_match_all($regularExpression, $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0][0]);
//                $procentCartridge = explode(" ", $fullname[0]);
//            } else return false;
//            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0]);
//                $nameAndType = explode(" ", $fullname[1]);
//                var_dump($nameAndType);
//            } else return false;
//            if (parent::issetPrinter($procentCartridge[1], $nameAndType[0], $oneHp)) {
//                echo 'its ok';
//            }
//
//        }
//
//
//    }
}






$samung = new SamsungController();
$samung->selectall();
$resultOfall  = $samung->selectall();
//var_dump($resultOfall);
foreach ($resultOfall as $all){}
