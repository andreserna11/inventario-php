<?php
include_once 'Model/producto.php';
class productoController{
    public $MODEL;

    public function __construct(){
        $this->MODEL = new producto();
    }
    public function index(){
        include_once 'View/home.php';
    }

    public function nuevo(){
        $prod = new producto();        
        if(isset($_REQUEST['id'])){
            $prod = $this->MODEL->cargarInfo($_REQUEST['id']);
        }
        include_once 'View/save.php';
    }

    public function guardar(){
        $save = new producto();
        $save->id= $_POST['txtId'];
        $save->nombre_producto = $_POST['txtnombre'];
        $save->referencia = $_POST['txtreferencia'];
        $save->precio = $_POST['txtprecio'];
        $save->peso = $_POST['txtpeso'];
        $save->id_categoria = $_POST['cmbCategoria'];
        $save->stock = $_POST['txtstock'];        

        $save->id > 0 ? $this->MODEL->update($save) : $this->MODEL->registrar($save);

        header("Location: index.php");
    }

    public function eliminar(){
        $this->MODEL->delete($_REQUEST['id']);
        header("Location: index.php");
    }
}

?>