<?php

namespace App\Http\Controllers\api;

use App\Car;
use App\Http\Controllers\api\AbstractController;

class CarController extends AbstractController
{

    // Method GET - Listar Carros
    /**
     * @OA\Get(
     *          tags={"/cars"},
     *          summary="Listar todos os carros",
     *          description="Rota GET para exibir todos os carros em JSON.",
     *          path="/cars",
     *          @OA\Response(
     *              response="200", description="List of tasks"
     *          )
     *      )
     * 
     * @return CarCollection
     */

    //Mehod POST Adicionar Carro

    /**
     * @OA\Post(
     *          tags={"/cars"},
     *          summary="Rota específica para adicionar carro na API.",
     *          description="Adicione o um carro seguindo as instruções do JSON.",
     *          path="/cars",
     *          @OA\RequestBody(
     *              required=true,
     *              @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="driver_id", type="integer"),
     *                  @OA\Property(property="automakers",  type="string"),
     *                  @OA\Property(property="model",  type="string"),
     *                  @OA\Property(property="year",  type="string"),
     *                  @OA\Property(property="color",  type="string"),
     *           )
     *        ),
     *        @OA\Response(
     *          response="201", description="created" 
     *        )
     * )
     * 
     */

    // Method GET - Localizar carro por ID

    /**
     * @OA\Get(
     *   tags={"/cars"},
     *   path="/cars/{id}",
     *   @OA\Parameter(
     *     description="Adicione o ID no campo",
     *     in="path",
     *     name="id",
     *     required=true,
     *     @OA\Schema(
     *       type="string"
     *     )
     *   ),
     *   @OA\Response(
     *       response="default",
     *       description="successful operation",
     *   )
     * )
     */

    // Method PUT - Atualizar um carro
    /**
     * @OA\Put(
     *     tags={"/cars"},
     *     path="/cars/{id}",
     *     summary="Update de carro",
     *     @OA\Parameter(
     *          description="Adicione o ID no campo",
     *          in="path",
     *          name="id",
     *          required=true,
     *                         
     *        @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="id",type="integer"),
     *                  @OA\Property(property="driver_id",type="integer"),
     *                  @OA\Property(property="automakers",type="string"),
     *                  @OA\Property(property="model",type="string"),
     *                  @OA\Property(property="year",type="string"),
     *                  @OA\Property(property="color",type="string"),
     *              )
     *          ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */

    //Method Delete - Deletar um carro
    /**
     * @OA\Delete(
     *   tags={"/cars"},
     *   path="/cars/{id}",
     *   @OA\Parameter(
     *     description="Delete por ID",
     *     in="path",
     *     name="id",
     *     required=true,
     *     @OA\Schema(
     *       type="string"
     *     )
     *   ),
     *   @OA\Response(
     *       response="default",
     *       response="200", description="Sucesso"
     *   )
     * )
     */
    public function __construct()
    {
        $this->class = Car::class;
    }
}
