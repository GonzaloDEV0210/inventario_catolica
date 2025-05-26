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
        <h1 class="title title_compras">Solicitudes de Mantenimientos</h1>
        <section class="container container_inputs">
            <div>
                <label for="activo">Id Activo</label>
                <div>
                    <input type="text" id="activo" placeholder="Escribir aquí..." class="input_compras">
                </div>
            </div>
            <div>
                <label for="proveedor">Proveedor</label>
                <div>
                    <select name="proveedor" id="proveedor" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="proveedor1">Proveedor 1</option>
                        <option value="proveedor2">Proveedor 2</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="fechaMantenimiento">Fecha Mantenimiento</label>
                <div>
                    <input type="date" id="fechaMantenimiento" placeholder="Seleccione" class="input_compras">
                </div>
            </div>
            <div>
                <label for="fechaEntrega">Fecha Entrega</label>
                <div>
                    <input type="date" id="fechaEntrega" placeholder="Seleccione" class="input_compras">
                </div>
            </div>
            <div>
                <label for="estadosm">Estado</label>
                <div>
                    <select name="estadosm" id="estadosm" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Seminuevo">Seminuevo</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="tipoMantenimiento">Tipo Mantenimiento</label>
                <div>
                    <select name="tipoMantenimiento" id="tipoMantenimiento" class="input_compras">
                        <option value="seleccione">Seleccione</option>
                        <option value="Mantenimiento1">Mantenimiento 1</option>
                        <option value="Mantenimiento2">Mantenimiento 2</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="costo">Costo</label>
                <div>
                    <input type="number" id="costo" placeholder="0.0" class="input_compras input_num">
                </div>
            </div>
            <div>
                <label for="movilidad">Movilidad</label>
                <div>
                    <input type="number" id="movilidad" placeholder="0.0" class="input_compras input_num">
                </div>
            </div>
            <div>
                <label for="precioTotal">Precio Total</label>
                <div>
                    <input type="text" id="precioTotal" placeholder="0.0" class="input_compras input_num input_total" readonly>
                </div>
            </div>
            <div>
                <label for="subirRRHH">Subir RRHH</label>
                <div>
                    <input type="file" id="subirRRHH" class="input_compras input_file">
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