<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = $_POST['producto'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $proveedor = $_POST['proveedor'] ?? '';
    $fechaCompra = $_POST['fechaCompra'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $precioUnitario = $_POST['precioUnitario'] ?? '';
    $movilidad = $_POST['movilidad'] ?? '';
    $precioTotal = $_POST['precioTotal'] ?? '';
    $garantia = $_POST['garantia'] ?? '';
    $factura = $_POST['factura'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $imagen = $_POST['imagen'] ?? '';
    $estado = $_POST['estado'] ?? '';

    if (!empty($producto) && !empty($categoria) && !empty($proveedor) && !empty($fechaCompra) && !empty($cantidad) && !empty($precioUnitario) && !empty($movilidad) && !empty($precioTotal) && !empty($garantia) && !empty($factura) && !empty($marca) && !empty($modelo) && !empty($imagen) && !empty($estado)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO compras ()"); /* aqui me quedé */
        } catch (\Throwable $th) {
            
        }
    }
}
?>