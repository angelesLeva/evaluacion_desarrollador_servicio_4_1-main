<?php
/*el archivo json era incorrecto
se asigno respuesta a variable  */
$response = array(
    "codigo_respuesta" => 0,
    "mensaje" => "Ok",
    "listaobjetos" => array(
        [  
            "tipo" => "carro",
            "tamanio"=> "Grande",
            "color"=> "Green"
        ],
       [ 
            "tipo"=> "moto",
            "tamanio"=> "mediana",
            "color"=> "Blue"
        ] ,
       [ 
            "tipo"=> "bicicleta",
            "tamanio"=> "chica",
            "color"=> "Green"
       ],
        [
            "tipo"=> "avion",
            "tamanio"=> "grande",
            "color"=> "yellow"
        ],
        [
            "tipo"=> "lancha",
            "tamanio"=> "grande",
            "color"=> "Red"
        ],
        [
            "tipo"=> "moto",
            "tamanio"=> "mediano",
            "color"=> "Red"
        ]
    )
)
?>