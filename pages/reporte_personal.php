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
    <link rel="stylesheet" href="../assets/css/reporte.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="../assets/img/logo.png" alt="logo institucional">
    </header>
    <main>
        <h1 class="title title_compras">Reporte del Personal</h1>
        <section class="container container_inputs">
            <div>
                <label for="idPersonal">Id Personal</label>
                <div>
                    <select name="idPersonal" id="idPersonal" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="personal1">Personal 1</option>
                        <option value="personal2">Personal 2</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <div>
                    <input type="text" id="nombre" placeholder="Escribir aquí..." class="input_compras">
                </div>
            </div>
            <div>
                <label for="cargo">Cargo</label>
                <div>
                    <select name="cargo" id="cargo" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="cargo1">Cargo 1</option>
                        <option value="cargo2">Cargo 2</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="estado">Estado</label>
                <div>
                    <select name="estado" id="estado" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="estado1">Estado 1</option>
                        <option value="estado2">Estado 2</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="container container_buttons">
            <div class="container_buttons_left">
                <button class="button button_registrar button_actualizar">
                    <span>Actualizar</span>
                    <img src="../assets/icons/actualizar-flecha.png" alt="icono registrar">
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