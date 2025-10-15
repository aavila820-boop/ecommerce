<?php
$producto = [
    'nombre' => 'Auriculares Inalámbricos Xiaomi Earbuds',
    'precio' => 249000,
    'precio_original' => 299000,
    'imagen' => 'https://www.alkomprar.com/medias/6941812768471-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNTI3MHxpbWFnZS93ZWJwfGFHVTFMMmczWWk4eE5EYzVOelE1TmpnME5ETXhPQzgyT1RReE9ERXlOelk0TkRjeFh6QXdNVjgzTlRCWGVEYzFNRWd8NzBlNDRhN2NiNzdiOTRiODYxMDc1MGRmOGFjYTZmNDhiNzNhMTU1YmExN2FjZGIzZmJjNmFhY2EyZTU0NDZkZg',
    'descripcion' => 'Auriculares con cancelación de ruido, batería de larga duración y sonido envolvente.',
    'marca' => 'Xiaomi',
    'disponible' => true,
    'envio' => 'Envío gratis a todo el país',
];
// NOTA: El código PHP se mantiene intacto. Solo se modifica el CSS/HTML.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ecommerce - Detalle de Producto</title>
    <style>
        /* Paleta Seria y de Alta Tecnología (Azules):
        - Fondo: Gris muy claro (#F4F7F9)
        - Color Primario (Botón/Acento): Azul Vívido (#007AFF)
        - Color Secundario (Descuento): Cian Eléctrico (#00BCD4)
        - Tipografía: Limpia y moderna (Sistema)
        - Bordes: Suaves pero definidos (8px a 10px)
        */

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #F4F7F9;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 1050px;
            /* Un poco más amplio para productos */
            margin: 60px auto;
            background-color: #FFFFFF;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            /* Sombra elegante */
            border-radius: 10px;
            /* Bordes suaves */
            border: 1px solid #EAEAEA;
        }

        .producto {
            display: flex;
            flex-direction: row;
            gap: 40px;
            /* Más espacio entre imagen e info */
        }

        .producto img {
            width: 450px;
            /* Imagen más grande y prominente */
            max-width: 50%;
            /* Asegura que no ocupe más de la mitad */
            border-radius: 8px;
            object-fit: contain;
            /* Asegura que la imagen se vea bien */
            border: 1px solid #E0E7E9;
        }

        .info {
            flex: 1;
        }

        .info h1 {
            font-size: 36px;
            margin-bottom: 5px;
            color: #1A1A1A;
            font-weight: 600;
        }

        .marca {
            font-size: 16px;
            color: #667788;
            margin-bottom: 5px;
            text-transform: uppercase;
            /* Serio y detallado */
        }

        .descripcion {
            font-size: 17px;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.6;
            /* Mejor legibilidad */
            padding-top: 15px;
            border-top: 1px solid #F0F0F0;
            /* Separador sutil */
            margin-top: 15px;
        }

        /* --- Seccion de Precios --- */
        .precio-group {
            margin-bottom: 25px;
        }

        .precio {
            font-size: 34px;
            color: #007AFF;
            /* Azul Vívido para el precio actual */
            font-weight: 800;
            /* Extra bold para el precio */
            margin-right: 15px;
            display: inline-block;
        }

        .precio-original {
            font-size: 20px;
            color: #AAB7C4;
            /* Gris frío */
            text-decoration: line-through;
            margin-left: 0;
            display: inline-block;
        }

        .etiqueta-descuento {
            display: inline-block;
            background-color: #00BCD4;
            /* Cian Eléctrico para el descuento */
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 4px;
            margin-left: 10px;
            letter-spacing: 0.5px;
        }

        /* --- Informacion de Logística --- */
        .envio,
        .vendedor {
            font-size: 15px;
            margin-top: 10px;
            color: #555;
            padding: 5px 0;
        }

        /* --- Botón de Compra --- */
        .boton-comprar {
            display: block;
            /* Ocupa todo el ancho disponible */
            width: 100%;
            text-align: center;
            margin-top: 30px;
            padding: 15px 25px;
            background-color: #007AFF;
            /* Azul principal */
            color: white;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s, transform 0.1s;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 122, 255, 0.3);
            /* Sombra para resaltar */
        }

        .boton-comprar:hover {
            background-color: #0063CC;
            box-shadow: 0 6px 20px rgba(0, 122, 255, 0.4);
        }

        .boton-comprar:active {
            transform: translateY(1px);
        }


        .agotado {
            color: #CC0000;
            background-color: #FFEEEE;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <div class="producto">
            <img src="<?php echo $producto['imagen']; ?>" alt="Imagen de <?php echo $producto['nombre']; ?>">

            <div class="info">
                <h1><?php echo $producto['nombre']; ?></h1>

                <div class="marca">Marca: <strong><?php echo $producto['marca']; ?></strong></div>
                <div class="marca">ID: <span style="font-weight: bold; color: #333;">{{ $id }}</span></div>
                <div class="marca">Categoría: <span style="font-weight: bold; color: #333;">{{ $category }}</span>
                </div>

                <p class="descripcion"><?php echo $producto['descripcion']; ?></p>

                <div class="precio-group">
                    <?php if ($producto['precio'] < $producto['precio_original']): ?>
                    <span class="precio-original">$<?php echo number_format($producto['precio_original'], 0, ',', '.'); ?></span>
                    <?php endif; ?>

                    <span class="precio">$<?php echo number_format($producto['precio'], 0, ',', '.'); ?></span>

                    <?php if ($producto['precio'] < $producto['precio_original']): ?>
                    <span class="etiqueta-descuento">AHORRA -<?php echo round(100 - ($producto['precio'] / $producto['precio_original']) * 100); ?>%</span>
                    <?php endif; ?>
                </div>

                <div class="envio">
                    📦 **Envío:** <?php echo $producto['envio']; ?>
                </div>

                <?php if ($producto['disponible']): ?>
                <a href="#" class="boton-comprar">🛒 Agregar al Carrito</a>
                <?php else: ?>
                <div class="agotado">Producto agotado. ¡Vuelve pronto!</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
