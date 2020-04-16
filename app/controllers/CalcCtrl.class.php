<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl { 
    private $form;
    private $wynik;
    
    //konstruktor
    public function __construct(){
        $this->form = new CalcForm();
        $this->wynik = new CalcResult();
}
public function getParams(){
	$this->form->Baza = getFromRequest('Baza');
	$this->form->IloscShota = getFromRequest('IloscShota');
	$this->form->MocShota = getFromRequest('MocShota');
}

public function validate(){
    if ( ! (isset($this->form->Baza) && isset($this->form->IloscShota) && isset($this->form->MocShota))) {
	return false;
}

if ($this->form->Baza == "") {
    getMessages()->addError('Nie podano ilości bazy');
}
if ($this->form->IloscShota == "") {
    getMessages()->addError('Nie podano ilości shota');
}

	if (!getMessages()->isError()) {
	
	if (! is_numeric($this->form->Baza)) {
            getMessages()->addError('Ilość bazy nie może być liczbą zmiennoprzecinkową!');
	}
	
	if (! is_numeric($this->form->IloscShota)) {
            getMessages()->addError('Ilosc Shota nie może być liczbą zmiennoprzecinkową!');
	}	
        }
        return !getMessages()->isError();

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
   
    getSmarty()->assign('page_title','Kalkulator Nikotynowy');
    getSmarty()->assign('page_description','Obiektowosc');
    getSmarty()->assign('page_header','Kalkulator Nikotynowy');

    getSmarty()->assign('form',$this->form);
    getSmarty()->assign('wynik',$this->wynik);

//wywołanie szablonu
    getSmarty()->display('CalcView.tpl');
    }
}