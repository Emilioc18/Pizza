<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La piazza di la Nonna</title>
    <link rel="stylesheet" href="Resources/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cb0dc3f2f3.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form method="post" action="?resp=registrar">
                    <h2>Registro de Pizza</h2>
                    <div class="input_contenedor">
                        <input type="text" name="txtname" required>
                        <label for="#">Nombre</label>
                    </div>
                    <div class="input_contenedor">
                        <input type="text" name="Txtoneing" required>
                        <label for="#">Ingrediente-1</label>
                    </div>
                    <div class="input_contenedor">
                        <input type="text" name="Txttwoing" required>
                        <label for="#">Ingrediente-2</label>
                    </div>
                    <div class="input_contenedor">
                        <input type="text" name="Txtthreeing" required>
                        <label for="#">Ingrediente-3</label>
                    </div>
                    <div class="input_contenedor">
                        <input type="text" name="Txtfouring" required>
                        <label for="#">Ingrediente-4</label>
                    </div>
                    <div class="input_contenedor">
                        <input type="text" name="Txtprice" required>
                        <label for="#">Precio</label>
                    </div>
                    <div class="button-container">
                        <button type=submit>Agregar</button>
                    </div>
                    <div class="Enlace">
                    <p><a href="?resp=Listica"><i class="fa-solid fa-clipboard-list"></i>List</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>