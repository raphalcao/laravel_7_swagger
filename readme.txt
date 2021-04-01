V1

Projeto de API utilizando o Swagger para documentação e consumo.

Para acessar através do Swagger: /api/doc -> Ex: http://localhost:8000/api/doc

A url pode ser trocada no arquivo l5-swagger.php no menu de routes

Caso tenha problemas em acessar o arquivo, devido erro de porta, alterar o código abaixo que está localizado no arquivo Controller.php

/**
 * @OA\Server(url="http://localhost:8000/api"),
 * @OA\Info(title="Laravel Road", version="0.0.1")
 */

 As tags do swagger estão definidas dentro dos arquivos CarController e DriverController.

 V2 - Correção da rota PUT

 Instalação: 

 Execute em ordem os comandos no terminal: 
 
 - composer require "darkaonline/l5-swagger"
 - php artisan vendor:publish  -> Opção 8


 Ir no diretório config/l5-swagger.php e verificar a linha de código: 

  'routes' => [
                /*
                 * Route for accessing api documentation interface
                */
                'api' => 'api/doc',
            ],
Esta rota define o seu acesso para utilizar o swagger. Ex: http://localhost:8000/api/doc (Ambiente local)

No mesmo arquivo, a linha de comando: 'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', false), Alterar para true ou adicionar no arquivo
.env o seguinte código: L5_SWAGGER_GENERATE_ALWAYS=true

Após feito essa configuração, verificar nos arquivos de controller as linhas comentadas que são os métodos do swagger.

Para maiores esclarecimentos, acessar o manual no link: https://github.com/zircote/swagger-php
