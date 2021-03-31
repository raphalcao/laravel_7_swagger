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