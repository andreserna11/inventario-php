<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class= "card black white-text center-align">
                    <h2>Lista de Productos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <table class="table-responsive z-depth-3">
                    <tr class="black">
                        <th class="white-text center-align">Id</th>
                        <th class="white-text center-align">Nombre de producto</th>
                        <th class="white-text center-align">Referencia</th>
                        <th class="white-text center-align">Precio</th>
                        <th class="white-text center-align">Peso</th>
                        <th class="white-text center-align">Categoría</th>
                        <th class="white-text center-align">Stock</th>
                        <th class="white-text center-align">Fecha de creación</th>
                        <th class="white-text center-align">Fecha de  última venta</th>
                        <th class="white-text center-align">Eliminar</th>
                        <th class="white-text center-align">Actualizar</th>

                    </tr>
                    <?php foreach($this->MODEL->listar() as $k): ?>
                        <tr>
                            <td><?php echo $k->id; ?></td>
                            <td><?php echo $k->nombre_producto; ?></td>
                            <td><?php echo $k->referencia; ?></td>
                            <td><?php echo $k->precio; ?></td>
                            <td><?php echo $k->peso; ?></td>
                            <td><?php echo $k->categoria; ?></td>
                            <td><?php echo $k->stock; ?></td>
                            <td><?php echo $k->fecha_creacion; ?></td>
                            <td><?php echo $k->fecha_ultima_venta; ?></td>
                            <td>
                                <a href="?c=eliminar&id=<?php echo $k->id; ?>" class="btn red z-depth-3">Eliminar</a>
                            </td>
                            <td>
                                <a href="?c=nuevo&id=<?php echo $k->id; ?>" class="btn blue z-depth-3">Actualizar</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </table>
                <a href="?c=nuevo" class="btn btn-block black z-depth-3">Nuevo</a>
            </div>
        </div>
    </div>
</body>
</html>