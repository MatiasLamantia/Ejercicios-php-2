<?php

function existeProducto($cod,$productos){

    return array_key_exists($cod,$productos);

}

function costLineaPedido($cod,$unidades,$productos){
    if(!existeProducto($cod,$productos)){
        $coste = -1;
    }
    
    $coste = $productos[$cod]["precio_unidad"] * $unidades;

    return $coste;
    
}


$productos=[];

$productos[]['A01']=['descripcion'=>'helado',
                       'precio_unidad'=>'2.99'];

$productos[]['A02']=['descripcion'=>'carne vacuna',
                       'precio_unidad'=>'3.00'];

$productos[]['A03']=['descripcion'=>'fideos',
                       'precio_unidad'=>'2.00']; 

$productos[]['A04']=['descripcion'=>'calcetines',
                       'precio_unidad'=>'.2.50'];

$productos[]['A05']=['descripcion'=>'manzana',
                       'precio_unidad'=>'1.22'];

$productos[]['A06']=['descripcion'=>'pera',
                       'precio_unidad'=>'1.33'];                       

$productos[]['A07']=['descripcion'=>'chicles',
                       'precio_unidad'=>'1.50'];

$productos[]['A08']=['descripcion'=>'sirope',
                       'precio_unidad'=>'seccion1'];

$productos[]['A09']=['descripcion'=>'torititas',
                       'precio_unidad'=>'seccion1']; 