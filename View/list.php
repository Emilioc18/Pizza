<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="Resources/Listyle.css">
    <script src="https://kit.fontawesome.com/cb0dc3f2f3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="table-container">
        <table class="table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ingrediente-1</th>
                    <th>Ingrediente-2</th>
                    <th>Ingrediente-3</th>
                    <th>Ingrediente-4</th>
                    <th>Precio</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>

                <?php foreach($this->Pizota->listar() as $k): ?>
                    <tr>
                        <td><?php echo $k->nombre; ?></td>
                        <td><?php echo $k->Ing_1; ?></td>
                        <td><?php echo $k->Ing_2; ?></td>
                        <td><?php echo $k->Ing_3; ?></td>
                        <td><?php echo $k->Ing_4; ?></td>
                        <td><?php echo $k->Precio; ?></td>
                        <td>
                          <a href="?resp=actPizza&nombre=<?php echo $k->nombre; ?>" class="Actualizarbtn"><i class="fa-solid fa-upload"></i>Actualizar</a>
                        </td>
                        <td>
                          <a href="?resp=dPizza&nombre=<?php echo $k->nombre; ?>" class="Eliminarbtn"><i class="fa-solid fa-circle-xmark"></i>Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>    
            </thead>
        </table>
    </div>
</body>
</html>