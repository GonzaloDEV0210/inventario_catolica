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
</head>
<body>
    <header class="header">
        <img class="logo" src="../assets/img/logo.png" alt="logo institucional">
    </header>
    <main>
        <h1 class="title title_compras">Registro de Compras</h1>
        <form action="../process/procesar_compra.php" method="post">
            <section class="container container_inputs">
                <div>
                    <label for="producto">Producto</label>
                    <div>
                        <input name="producto" type="text" id="producto" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="categoria">Categoría</label>
                    <div>
                        <input name="categoria" type="text" id="categoria" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="proveedor">Proveedor</label>
                    <div>
                        <input name="proveedor" type="text" id="proveedor" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="fechaCompra">Fecha Compra</label>
                    <div>
                        <input name="fechaCompra" type="date" id="fechaCompra" placeholder="Seleccione" class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="cantidad">Cantidad</label>
                    <div>
                        <input name="cantidad" type="number" id="cantida" placeholder="0" class="input_compras input_num">
                    </div>
                </div>
                <div>
                    <label for="precioUnitario">Precio Unitario</label>
                    <div>
                        <input name="precioUnitario" type="number" id="precioUnitario" placeholder="0.0" class="input_compras input_num">
                    </div>
                </div>
                <div>
                    <label for="movilidad">Costo Movilidad</label>
                    <div>
                        <input name="movilidad" type="number" id="movilidad" placeholder="0.0" class="input_compras input_num">
                    </div>
                </div>
                <div>
                    <label for="precioTotal">Precio Total</label>
                    <div>
                        <input name="precioTotal" type="text" id="precioTotal" placeholder="0.0" class="input_compras input_num input_total" readonly>
                    </div>
                </div>
                <div>
                    <label for="garantia">Garantía</label>
                    <div>
                        <input name="garantia" type="text" id="garantia" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="subirFactura">Subir Factura (Ruta)</label>
                    <div>
                        <input name="factura" type="text" id="subirFactura" class="input_compras input_file" placeholder="Escribir aquí...">
                    </div>
                </div>
                <div>
                    <label for="marca">Marca</label>
                    <div>
                        <input name="marca" type="text" id="marca" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="modelo">Modelo</label>
                    <div>
                        <input name="modelo" type="text" id="modelo" placeholder="Escribir aquí..." class="input_compras">
                    </div>
                </div>
                <div>
                    <label for="imagen">Subir Imagen (Ruta)</label>
                    <div>
                        <input name="imagen" type="text" id="imagen" class="input_compras input_file" placeholder="Escribir aquí...">
                    </div>
                </div>
                <div>
                    <label for="estado">Estado</label>
                    <div>
                        <select name="estado" id="estado" class="input_compras">
                            <option value="seleccione">Seleccione</option>
                            <option value="nuevo">Nuevo</option>
                            <option value="segunda">De segunda</option>
                        </select>
                    </div>
                </div>
            </section>
            <section class="container container_buttons">
                <div class="container_buttons_left">
                    <button type="submit" class="button button_registrar">
                        <span>Registrar</span>
                        <img src="../assets/icons/registrar.png" alt="icono registrar">
                    </button>
                    <a href="../pages/seleccionar.php" class="button button_volver style_a">
                        <span class="style_a">Volver</span>
                        <img src="../assets/icons/volver-flecha.png" alt="icono volver">
                    </a>
                </div>
                <a href="../pages/reporte_compras.php" target="_blank" rel="noopener noreferrer">
                    <button class="button button_reporte">
                        <span>Reporte</span>
                        <img src="../assets/icons/archivo-excel.png" alt="icono excel">
                    </button>
                </a>
            </section>
        </form>
    </main>
</body>
</html>