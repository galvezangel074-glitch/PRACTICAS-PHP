<?php
$radio = $_POST['radio'] ?? '';
$r = (float)$radio;
$area = pi() * pow($r, 2);
$perimetro = 2 * pi() * $r;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y perímetro de un círculo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; color: #333; }
        input, button { padding: 6px; margin: 5px 0 15px; display: block; }
        input { width: 200px; border: 1px solid #aaa; }
        .res { margin-top: 20px; border-top: 1px solid #ddd; padding-top: 15px; }
    </style>
</head>
<body>
    <h2>Área y perímetro de un círculo</h2>
    <p style="color: #666; font-size: 14px;">Área = πr² &nbsp;&nbsp; Perímetro = 2πr</p>
    <form method="POST">
        <label for="radio">Radio del círculo:</label>
        <input type="text" id="radio" name="radio" value="<?= htmlspecialchars($radio) ?>">
        <button type="submit">Calcular</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && $r > 0): ?>
        <div class="res">
            <p>Radio: <?= $r ?></p>
            <p>Área: <?= number_format($area, 2) ?></p>
            <p>Perímetro: <?= number_format($perimetro, 2) ?></p>
        </div>
    <?php endif; ?>
</body>
</html>