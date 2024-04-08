<?php
 include_once "Model/Pisa.php";

 class control{
    public $Pizota;

    public function __construct(){
		$this->Pizota = new pizzita;
	}

    public function registrar(){
        $alm = new pizzita();
		$alm->name = $_POST['txtname'];
		$alm->Oneing = $_POST['Txtoneing'];
		$alm->Twoing = $_POST['Txttwoing'];
		$alm->Threeing = $_POST['Txtthreeing'];
		$alm->Fouring = $_POST['Txtfouring'];
        $alm->Price = $_POST['Txtprice'];
        $this->Pizota->guardar($alm);
        $_SESSION['error_message'] = "¡Usuario Registrado exitosamente!";
    }

    public function index(){
        include_once "View/form.php";
    }


 }
?>