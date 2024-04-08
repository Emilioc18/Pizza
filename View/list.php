<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
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

                <?php foreach($this->Pizza->): ?>
            </thead>
        </table>
    </div>
</body>
</html>