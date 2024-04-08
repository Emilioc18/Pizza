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
        include_once "View/form.php";
    }

    public function Editpizza(){
        $alm = new pizzita();
		$alm->name = $_POST['txtname'];
		$alm->Oneing = $_POST['Txtoneing'];
		$alm->Twoing = $_POST['Txttwoing'];
		$alm->Threeing = $_POST['Txtthreeing'];
		$alm->Fouring = $_POST['Txtfouring'];
        $alm->Price = $_POST['Txtprice'];
        $this->Pizota->actualizarDatos($alm);
        include_once "View/list.php";
    }
    public function dPizza(){

		$this->Pizota->delete($_REQUEST['nombre']);

		include_once "View/list.php";
	}

    public function actPizza(){
        $alm = new pizzita();
		if(isset($_REQUEST['nombre'])){
			$alm = $this->Pizota->cargarnombre($_REQUEST['nombre']);
		}
		include_once "View/Edit_Pizza.php";
    }

    public function index(){
        include_once "View/form.php";
    }

    public function Listica(){
        include_once "View/list.php";
    }

 }
?>