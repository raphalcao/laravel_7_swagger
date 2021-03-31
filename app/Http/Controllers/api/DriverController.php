<?php

namespace App\Http\Controllers\api;

use App\Driver;
use App\Http\Controllers\api\AbstractController;

class DriverController extends AbstractController
{
    // Method GET - Listar todos os motoristas
    /**
     * @OA\Get(
     *          tags={"/drivers"},
     *          summary="Display listing of the resource",
     *          description="get all tasks on database and paginate then",
     *          path="/drivers",
     *          security={{"bearerAuth": {}}},
     *          @OA\Response(
     *              response="200", description="List of tasks"
     *          )
     *      )
     * 
     * @return DriverCollection
     */

    // Method POST - Adicionar um motorista
    /**
     * @OA\Post(
     *          tags={"/drivers"},
     *          summary="Store a newly created resource in storage.",
     *          description="store a new task on database",
     *          path="/drivers",
     *          security={{"bearerAuth":{}}},
     *          @OA\RequestBody(
     *              required=true,
     *              @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="id", type="integer"),
     *                  @OA\Property(property="name",  type="string"),     
     *                  @OA\Property(property="age",type="number"),                  
     *           )
     *        ),
     *        @OA\Response(
     *          response="201", description="New driver created" 
     *        )
     * )
     * 
     */
    
    // Method GET - Localizar Motorista por ID
    /**
     * @OA\Get(
     *   tags={"/drivers"},
     *   path="/drivers/{id}",
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

    // Method PUT - Atualizar um motorista
     /**
     * @OA\Put(
     *     tags={"/drivers"},
     *     path="/drivers/{id}",
     *     summary="Update de motorista",
     *     @OA\Parameter(
     *         description="Esta rota atualiza o motorista através da localização por ID.",
     *         in="path",
     *         name="id",
     *         required=true,
     *        @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="id",type="integer"),
     *                  @OA\Property(property="name",type="string"),
     *                  @OA\Property(property="age",type="number"), 
     *              )
     *          ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    
     //Method Delete - Deletar um motorista por id
    /**
     * @OA\Delete(
     *   tags={"/drivers"},
     *   path="/drivers/{id}",
     *   @OA\Parameter(
     *     description="Digite o ID do motorista no campo",
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
        $this->class = Driver::class;
    }
}
