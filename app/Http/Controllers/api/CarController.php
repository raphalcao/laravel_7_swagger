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
     *          summary="Rota GET Carros",
     *          description="Listar todos os carros cadastrados na base de dados",
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
     *          summary="Rota POST carros",
     *          description="Adicione um carro",
     *          path="/cars",
     *          @OA\RequestBody(
     *              description="Atualize os dados seguindo o formato de JSON",
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
     *   summary="Rota GET por ID do carro",
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
     *     @OA\Parameter(
     *          description="Adicione o ID no campo",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *     operationId="update",
     *     summary="Rota UPDATE carro",
     *     description="",        
     *     @OA\RequestBody(
     *         required=true,
     *         description="Atualize os dados seguindo o formato de JSON",
     *         @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="driver_id", type="integer"),
     *                  @OA\Property(property="automakers",  type="string"),
     *                  @OA\Property(property="model",  type="string"),
     *                  @OA\Property(property="year",  type="string"),
     *                  @OA\Property(property="color",  type="string"),
     *           )         
     *         
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="not found",
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     * )
     */

    //Method Delete - Deletar um carro
    /**
     * @OA\Delete(
     *   tags={"/cars"},
     *   path="/cars/{id}",
     *   summary="Rota DELETE carro",
     *   @OA\Parameter(
     *     description="Digite o ID do carro",
     *     in="path",
     *     name="id",
     *     required=true,
     *     @OA\Schema(
     *       type="string"
     *     )
     *   ),
     *   @OA\Response(
     *       response="default",
     *       response="200", description="success"
     *   ),
     *     @OA\Response(
     *         response=404,
     *         description="not found",
     *     ),
     * )
     */
    public function __construct()
    {
        $this->class = Car::class;
    }
}
