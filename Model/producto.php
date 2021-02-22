<?php
class producto{
    public $conn;
    public $nombre_producto;
    public $referencia;
    public $precio;
    public $peso;
    public $id_categoria;
    public $stock;
    public $fecha_creacion;
    public $fecha_ultima_venta;    

    public function __construct(){
        try{
            $this->conn = conexion::conectar();
        } catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){
        try{
            $query = "SELECT p.id, p.nombre_producto, p.referencia, p.precio, p.peso, dbo_categoria.categoria, p.stock,p.fecha_creacion,p.fecha_ultima_venta FROM dbo_producto p INNER JOIN dbo_categoria ON p.id_categoria = dbo_categoria.id ";
            $stm = $this->conn->prepare($query);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarCategoria(){
        try{
            $query = "SELECT * FROM dbo_categoria";
            $stm = $this->conn->prepare($query);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(producto $data){
        try{
            $query = "INSERT INTO dbo_producto(nombre_producto, referencia, precio, peso, id_categoria, stock, fecha_creacion) VALUES (?,?,?,?,?,?,now())";            
            $this->conn->prepare($query)->execute(array($data->nombre_producto,$data->referencia,
            $data->precio,$data->peso,$data->id_categoria,$data->stock));
        } catch (Exception $e){
            echo 'Error';
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $query = "DELETE FROM dbo_producto where id = ?";
            $stm = $this->conn->prepare($query);
            $stm->execute(array($id));
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarInfo($id){
        try{
            $query = "SELECT * FROM dbo_producto where id = ?";
            $stm = $this->conn->prepare($query);
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}
?>