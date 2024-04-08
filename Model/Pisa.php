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

    //actualizar para el registro a futuro
    public function actualizarDatos($data){
        try {
            $query = "UPDATE cliente set usuario=?,correo=?,nombre=?,telefono=? WHERE id_cliente=?";
            $this->CNX->prepare($query)->execute(array($data->Username,$data->Email,$data->Nombre,$data->Telefono,$data->Fouring,$data->Fouring));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //funcion de eliminar a futuro
    public function delete ($id){
        try {
            $query = "DELETE FROM cliente WHERE id_cliente=?";
            $resultado = $this->CNX->prepare($query);
            $resultado->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
}
?>