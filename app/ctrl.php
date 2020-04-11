<?php

require_once dirname(__FILE__).'/../config.php';

$action = isset ($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default : //calcView
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        //Obiekt dla wybranej klasy
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
        break;
        
    case 'calcProcess' :
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        //Obiekt dla wybranej klasy
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
//itd...
}
