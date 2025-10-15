<?php
$productos = [
    [
        'nombre' => 'Portátil Gamer Lenovo LOQ Ryzen 7 RTX 4070',
        'precio' => 5499000,
        'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_877891-MLA88103811437_072025-O.webp',
        'marca' => 'Lenovo',
        'descripcion' => 'Ryzen 7, 16GB RAM, 512GB SSD, RTX 4070 8GB',
    ],
    [
        'nombre' => 'Televisor Samsung 65" UHD 4K Smart TV',
        'precio' => 2699900,
        'imagen' => 'https://exitocol.vtexassets.com/arquivos/ids/29176139/Televisor-SAMSUNG-65-Pulgadas-LED-Uhd-4K-Smart-TV-UN65DU7000KXZL-3555752_a.jpg?v=638883826079300000',
        'marca' => 'Samsung',
        'descripcion' => 'Crystal UHD, Smart TV, modelo UN65DU7000KXZL',
    ],
    [
        'nombre' => 'Auriculares Xiaomi Earbuds Inalámbricos',
        'precio' => 249000,
        'imagen' => 'https://www.alkomprar.com/medias/6941812768471-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNTI3MHxpbWFnZS93ZWJwfGFHVTFMMmczWWk4eE5EYzVOelE1TmpnME5ETXhPQzgyT1RReE9ERXlOelk0TkRjeFh6QXdNVjgzTlRCWGVEYzFNRWd8NzBlNDRhN2NiNzdiOTRiODYxMDc1MGRmOGFjYTZmNDhiNzNhMTU1YmExN2FjZGIzZmJjNmFhY2EyZTU0NDZkZg',
        'marca' => 'Xiaomi',
        'descripcion' => 'Cancelación de ruido, batería extendida, sonido envolvente',
    ],
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ecommerce</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            color: #333;
        }

        .grid-productos {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .tarjeta {
            background-color: #fff;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .tarjeta img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .contenido {
            padding: 15px;
            flex: 1;
        }

        .contenido h2 {
            font-size: 18px;
            margin: 0 0 10px;
            color: #222;
        }

        .contenido p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .precio {
            font-size: 20px;
            color: #e91e63;
            font-weight: bold;
            margin-top: 10px;
        }

        .boton {
            display: block;
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
            border-top: 1px solid #eee;
        }

        .boton:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>Productos Disponibles</h1>
        <div class="grid-productos">
            <?php foreach ($productos as $producto): ?>
            <div class="tarjeta">
                <img src="<?php echo $producto['imagen']; ?>" alt="Imagen de <?php echo $producto['nombre']; ?>">
                <div class="contenido">
                    <h2><?php echo $producto['nombre']; ?></h2>
                    <p>Marca: <?php echo $producto['marca']; ?></p>
                    <p><?php echo $producto['descripcion']; ?></p>
                    <p class="precio">$<?php echo number_format($producto['precio'], 0, ',', '.'); ?></p>
                </div>
                <a href="#" class="boton">Ver producto</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
