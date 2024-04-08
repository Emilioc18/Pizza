<?php
class pizzita{
    public $CNX;
    public $name;
    public $Oneing;
    public $Twoing;
    public $Threeing;
    public $Fouring;
    public $Price;

    public function __construct() {
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e){
            die($e->getMessage());
        }
    
    }

    
    public function guardar($data){
        try {
            $query = "INSERT INTO pizzas(nombre, Ing_1, Ing_2, Ing_3, Ing_4, Precio) VALUES(?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->name,$data->Oneing,$data->Twoing,$data->Threeing,$data->Fouring,$data->Price));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
    try{
        $query = "SELECT z.nombre,z.Ing_1,z.Ing_2,z.Ing_3,z.Ing_4,z.Precio FROM pizzas z ORDER BY z.nombre";
        $resultado = $this->CNX->prepare($query);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
     } catch (Exception $e){
        die ($e->getMessage());
     }
  }

   public function cargarnombre($name){
    try {
        $query = "SELECT * from pizzas where nombre=?";
        $resultado = $this->CNX->prepare($query);
        $resultado->execute(array($name));
        return $resultado->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
        die($e->getMessage());
    }

 }

    //actualizar para el registro a futuro
    public function actualizarDatos($data){
        try {
            $query = "UPDATE pizzas set Ing_1=?,Ing_2=?,Ing_3=?,Ing_4=?,Precio=? WHERE nombre=?";
            $this->CNX->prepare($query)->execute(array($data->Oneing,$data->Twoing,$data->Threeing,$data->Fouring,$data->Price,$data->name));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //funcion de eliminar a futuro
    public function delete ($name){
        try {
            $query = "DELETE FROM pizzas WHERE nombre=?";
            $resultado = $this->CNX->prepare($query);
            $resultado->execute(array($name));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
}
?>