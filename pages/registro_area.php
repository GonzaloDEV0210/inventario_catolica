<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario - Católica School</title>
    <link rel="shortcut icon" href="../assets/icons/icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="../assets/css/styles.css"> -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/seleccionara.css">
    <link rel="stylesheet" href="../assets/css/registro_compras.css">
    <link rel="stylesheet" href="../assets/css/solicitud_mantenimientos.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="../assets/img/logo.png" alt="logo institucional">
    </header>
    <main>
        <h1 class="title title_compras">Registrar Área</h1>
        <section class="container container_inputs">
            <div>
                <label for="area">Nombre Área</label>
                <div>
                    <input type="text" id="area" placeholder="Escribir aquí..." class="input_compras">
                </div>
            </div>
            <div class="container_textarea">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" placeholder="Escribir aquí..." class="input_compras text_area"></textarea>
            </div>
        </section>
        <section class="container container_buttons">
            <div class="container_buttons_left">
                <button class="button button_registrar">
                    <span>Registrar</span>
                    <img src="../assets/icons/registrar.png" alt="icono registrar">
                </button>
                <button class="button button_volver">
                    <span>Volver</span>
                    <img src="../assets/icons/volver-flecha.png" alt="icono volver">
                </button>
            </div>
            <button class="button button_reporte">
                <span>Reporte</span>
                <img src="../assets/icons/archivo-excel.png" alt="icono excel">
            </button>
        </section>
    </main>
</body>
</html>