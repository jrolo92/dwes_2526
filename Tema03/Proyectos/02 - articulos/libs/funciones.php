<?php
    function get_tabla_categorias(){
        return [
            [
                'id' => 0,
                'nombre' => 'Eléctronica'
            ],
            [
                'id' => 1,
                'nombre' => 'Almacenamiento'
            ],            
            [
                'id' => 2,
                'nombre' => 'Portatiles'
            ],
            [
                'id' => 3,
                'nombre' => 'Accesorios'
            ]     
        ];
    }
    
    function get_tabla_articulos(){
        return [
            [
                'id' => 1,
                'descripcion' => 'Portátil - HP - 15',
                'modelo' => 'HP15-2023',
                'categoria_id' => 2,
                'unidades' => 50,
                'precio' => 379.00
            ],
            [
                'id' => 2,
                'descripcion' => 'Disco Duro Externo - Seagate - 1TB',
                'modelo' => 'SG1TB-USB3',
                'categoria_id' => 1,
                'unidades' => 120,
                'precio' => 59.99
            ],
            [
                'id' => 3,
                'descripcion' => 'Ratón Inalámbrico - Logitech - M185',
                'modelo' => 'M185-BLACK',
                'categoria_id' => 3,
                'unidades' => 200,
                'precio' => 14.50
            ],
            [
                'id' => 4,
                'descripcion' => 'Auriculares Bluetooth - Sony - WH-CH510',
                'modelo' => 'WHCH510-B',
                'categoria_id' => 0,
                'unidades' => 80,
                'precio' => 39.99
            ],
            [
                'id' => 5,
                'descripcion' => 'Memoria USB - Kingston - 64GB',
                'modelo' => 'DT64GB-KG',
                'categoria_id' => 1,
                'unidades' => 300,
                'precio' => 9.99
            ],
            [
                'id' => 6,
                'descripcion' => 'Portátil - Lenovo - IdeaPad 3',
                'modelo' => 'LenovoIP3-2024',
                'categoria_id' => 2,
                'unidades' => 35,
                'precio' => 429.00
            ],
            [
                'id' => 7,
                'descripcion' => 'Teclado Mecánico - Redragon - K552',
                'modelo' => 'K552-RGB',
                'categoria_id' => 3,
                'unidades' => 75,
                'precio' => 49.90
            ],
            [
                'id' => 8,
                'descripcion' => 'Smartphone - Xiaomi - Redmi Note 12',
                'modelo' => 'RN12-128GB',
                'categoria_id' => 0,
                'unidades' => 60,
                'precio' => 199.00
            ]

        ];
    }

    // funcion para obtener el nombre de la categoría en funcion de su id
    function categoriaNombre($categorias, $categoria_id) {
        foreach ($categorias as $categoria) {
            if ($categoria['id'] == $categoria_id) {
                return $categoria['nombre'];
            }
        }
        return "Categoría desconocida";
    }
?>