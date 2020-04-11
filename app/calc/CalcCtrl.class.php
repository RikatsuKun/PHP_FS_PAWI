<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl { 
    private $msgs;
    private $form;
    private $wynik;
    
    //konstruktor
    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->wynik = new CalcResult();
}
public function getParams(){
	$this->form->Baza = isset($_REQUEST['Baza']) ? $_REQUEST['Baza'] : null;
	$this->form->IloscShota = isset ($_REQUEST ['IloscShota'])? $_REQUEST['IloscShota'] : null;
	$this->form->MocShota = isset ($_REQUEST ['MocShota']) ? $_REQUEST['MocShota'] : null;
}

public function validate(){
    if ( ! (isset($this->form->Baza) && isset($this->form->IloscShota) && isset($this->form->MocShota))) {
	return false;
}

if ($this->form->Baza == "") {
	$this->msgs->addError('Nie podano ilości bazy');
}
if ($this->form->IloscShota == "") {
	$this->msgs->addError('Nie podano ilości shota');
}

	if (! $this->msgs->isError()) {
	
	if (! is_numeric($this->form->Baza)) {
		$this->msgs->addError('Ilość bazy nie może być liczbą zmiennoprzecinkową!');
	}
	
	if (! is_numeric($this->form->IloscShota)) {
		$this->msgs->addError('Ilosc Shota nie może być liczbą zmiennoprzecinkową!');
	}	
        }
        return ! $this->msgs->isError();

}
public function process(){
    $this->getParams();
    
    if ($this->validate()){
        
        $this->form->Baza = intval($this->form->Baza);
        $this->form->IloscShota = intval($this->form->IloscShota);
        
        $this->wynik->IloscNikotyny = $this->form->IloscShota * $this->form->MocShota;
        $this->wynik->IloscLiquidu = $this->form->IloscShota + $this->form->Baza;
                
        switch ($this->form->MocShota){
            case '6' :
			$this->wynik->wynik = $this->wynik->IloscNikotyny / $this->wynik->IloscLiquidu;
                        break;
	case '12' :
			$this->wynik->wynik = $this->wynik->IloscNikotyny / $this->wynik->IloscLiquidu;
                        break;
	case '18' :
			$this->wynik->wynik = $this->wynik->IloscNikotyny / $this->wynik->IloscLiquidu;
		        break;
	default :
			$this->wynik->wynik = $this->wynik->IloscNikotyny / $this->wynik->IloscLiquidu;
                        break;
	}
        }
        $this->generateView();
    }

public function generateView(){
   global $conf;
   
   $smarty = new Smarty();
   $smarty->assign('conf',$conf);
  
    $smarty->assign('page_title','Kalkulator Nikotynowy');
    $smarty->assign('page_description','Obiektowosc');
    $smarty->assign('page_header','Kalkulator Nikotynowy');

    $smarty->assign('form',$this->form);
    $smarty->assign('wynik',$this->wynik);
    $smarty->assign('msgs',$this->msgs);

//wywołanie szablonu
    $smarty->display($conf->root_path.'/app/calc/CalcView.tpl');

}
}