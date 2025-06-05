<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre_area'] ?? '';
    $nivel = $_POST['nivel'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';

    if (!empty($nombre) && !empty($nivel)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO areas_trabajo (nombre_area, nivel, descripcion) VALUES (?, ?, ?)");
            $stmt->execute([$nombre, $nivel, $descripcion]);

            echo "<script>alert('Área registrada con éxito'); window.location.href='../pages/registro_area.php';</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Error al registrar: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Debes llenar todos los campos!'); window.history.back();</script>";
    }
} else {
    header("Location: registro_area.php");
    exit;
}

?>