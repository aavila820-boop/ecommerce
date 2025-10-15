@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Agregar Nuevo Producto</title>
        <style>
            /* Paleta de Colores Azules Vívidos:
            - Fondo: Gradiente Azul Cielo Suave (#E0F7FA)
            - Color Primario (Acento): Azul Cian Brillante (#00BCD4)
            - Color Secundario (Botón): Azul Índigo (#3F51B5)
            - Fuente: Poppins (o sistema)
            - Formas: Muy redondeadas
            */

            body {
                font-family: 'Poppins', 'Segoe UI', sans-serif;
                /* Se recomienda enlazar la fuente Poppins desde Google Fonts */
                background: linear-gradient(135deg, #E0F7FA 0%, #BBDEFB 100%);
                /* Gradiente de azul muy suave */
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .contenedor {
                max-width: 550px;
                width: 90%;
                margin: 40px auto;
                background-color: #FFFFFF;
                padding: 40px;
                box-shadow: 0 15px 30px rgba(0, 188, 212, 0.25);
                /* Sombra de color cian/azul */
                border-radius: 20px;
                /* Muy redondeado */
                border: 5px solid #80DEEA;
                /* Borde suave de color turquesa claro */
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
                color: #00BCD4;
                /* Azul Cian Brillante */
                font-weight: 800;
                font-size: 32px;
                text-shadow: 1px 1px 0 #BBDEFB;
                /* Sombra sutil de azul claro */
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-weight: 600;
                color: #444;
                /* Gris oscuro para buena legibilidad */
                font-size: 16px;
            }

            input[type="text"],
            input[type="number"],
            textarea,
            select {
                width: 100%;
                padding: 14px 18px;
                margin-bottom: 20px;
                border: 2px solid #E0F0F5;
                border-radius: 12px;
                font-size: 16px;
                box-sizing: border-box;
                transition: border-color 0.3s, box-shadow 0.3s;
                background-color: #FAFCFF;
            }

            input[type="text"]:focus,
            input[type="number"]:focus,
            textarea:focus,
            select:focus {
                border-color: #00BCD4;
                /* Azul Cian al enfocarse */
                outline: none;
                box-shadow: 0 0 0 4px rgba(0, 188, 212, 0.25);
                /* Anillo de enfoque azul */
            }

            textarea {
                resize: vertical;
                min-height: 120px;
            }

            /* Estilo para el botón con Azul Índigo/Oscuro */
            .boton {
                display: block;
                width: 100%;
                padding: 18px;
                background-color: #3F51B5;
                /* Azul Índigo Profundo */
                color: white;
                font-size: 18px;
                font-weight: 700;
                border: none;
                border-radius: 15px;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
                text-transform: uppercase;
                letter-spacing: 1px;
                box-shadow: 0 8px 15px rgba(63, 81, 181, 0.4);
                /* Sombra para darle "altura" */
            }

            .boton:hover {
                background-color: #00BCD4;
                /* Azul Cian/Acento en hover */
                box-shadow: 0 10px 20px rgba(0, 188, 212, 0.5);
            }

            .boton:active {
                transform: translateY(2px);
                box-shadow: 0 4px 10px rgba(63, 81, 181, 0.4);
            }

            /* Estilo para el campo de selección (select) */
            select {
                appearance: none;
                background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%2300BCD4" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>');
                background-repeat: no-repeat;
                background-position: right 18px center;
                padding-right: 40px;
            }
        </style>
    </head>

    <body>
        <div class="contenedor">
            <h1>¡Publica algo genial!</h1>
            <form method="post" action="#">
                <label for="id">ID del Producto</label>
                <input type="text" id="id" name="id" placeholder="Ej: P12345 - Único y especial">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="¡El nombre que enamorará a todos!">

                <label for="precio">Precio (COP)</label>
                <input type="number" id="precio" name="precio" placeholder="¿Cuánto cuesta esta belleza?">

                <label for="categoria">Categoría</label>
                <select id="categoria" name="categoria">
                    <option value="">-- Selecciona una categoría con amor --</option>
                    <option value="audio">🎶 Audio (Sonido)</option>
                    <option value="computadores">💻 Computadores (PCs)</option>
                    <option value="televisores">📺 Televisores (Imagen)</option>
                    <option value="accesorios">🔗 Accesorios (Extras)</option>
                </select>

                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca" placeholder="¿Quién lo hizo?">

                <label for="imagen">URL de la Imagen</label>
                <input type="text" id="imagen" name="imagen" placeholder="¡Una foto que lo diga todo!">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" placeholder="Cuentanos por qué este producto es el mejor..."></textarea>

                <button type="submit" class="boton">🚀 Cargar y Vender 🚀</button>
            </form>
        </div>
    </body>

    </html>
@endsection
