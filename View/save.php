<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
</head>
<body>
    <div class="container">
        <form method="post" action="?c=guardar">
            <div class="row">
                <div class="col m12">
                    <div class= "card black white-text center-align">
                        <h2>Crear productos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Nombre: 
                </div>
                <div class=" col m3">
                    <input type="hidden" name="txtId" value="<?php echo $prod->id?>">
                    <input type="text" name="txtnombre" value="<?php echo $prod->nombre_producto?>">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Referencia: 
                </div>
                <div class=" col m3">
                    <input type="text" name="txtreferencia">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Precio: 
                </div>
                <div class=" col m3">
                    <input type="text" name="txtprecio">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Peso: 
                </div>
                <div class=" col m3">
                    <input type="text" name="txtpeso">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Categoria: 
                </div>
                <div class=" col m3">
                    <select name="cmbCategoria" >
                        <?php foreach($this->MODEL->cargarCategoria() as $k) : ?>
                            <option value="<?php echo $k->id ?>"> <?php echo $k->categoria ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">
                Stock: 
                </div>
                <div class=" col m3">
                    <input type="text" name="txtstock">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m6">
                <input type="submit" name="btnSave" value="Guardar" class="btn red z-depth-3">
                </div>
                <div class="col m3"></div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>