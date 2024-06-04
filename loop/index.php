<?php include_once './pages/header.html';
    /**
     * include_once -> carrega apenas uma vez o arquivo
     * include -> carrega quantas necessarias
     */
    /** Objetivo
     * criar um array com as info do produtos
     * laço que vai passar pelo array e criar os produtos
     */
     // poster, titulo, preço, avaliação

     $produtos = [
        [
            'titulo' => 'Baldurs Gate 3',
            'preco' => '290.00',
            'avaliacao' => 3,
            'poster' => 'baldurs-gate-3.jpg'

        ],
        [
            'titulo' => 'Death Stranding',
            'preco' => '139.00',
            'avaliacao' => 2,
            'poster' => 'death-stranding.png'

        ],
        [
            'titulo' => 'Jedi Survivor',
            'preco' => '139.00',
            'avaliacao' => 5,
            'poster' => 'jedi-survivor.png'

        ],
        [
            'titulo' => 'Mirage',
            'preco' => '150.00',
            'avaliacao' => 4,
            'poster' => 'mirage.png'

        ],
        [
            'titulo' => 'Requiem',
            'preco' => '120.00',
            'avaliacao' => 5,
            'poster' => 'requiem.png'

        ],
        [
            'titulo' => 'Valhalla',
            'preco' => '139.00',
            'avaliacao' => 1,
            'poster' => 'valhalla.jpg'

        ],
        [
            'titulo' => 'Wukong',
            'preco' => '139.00',
            'avaliacao' => 6,
            'poster' => 'wukong.png'

        ],
        [
            'titulo' => 'Devil May Cry 5',
            'preco' => '139.00',
            'avaliacao' => 7,
            'poster' => 'devil-may-cry5.png'

        ],
        
     ];

     // echo '<pre>';
     var_dump($produtos);

     // for ($i = 0; $i < 3; $i++) {
     // echo $produtos[$i] . ' | ';
     // echo $produtos[$i] . '<br>';  
     // }
     /** Acordo de cavalheiros
      * $snake_case -> variáveis
      * $camelCase -> variáveis
      * $kebab-case -> imagens
      * $PascalCase -> funções, classes
      *
      * palavra singular -> variáveis, classes, objetos  
      * palavra plural -> arrays, json,
      */


     include './pages/produto.php';