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
     *          summary="Rota GET Motorista",
     *          description="Lista todos os motoristas na base de dados.",
     *          path="/drivers",    
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
     *          summary="Rota POST motorista.",
     *          description="Adicione um motorista",
     *          path="/drivers",
     *          @OA\RequestBody(
     *          description="Atualize os dados seguindo o formato de JSON",
     *              required=true,
     *              @OA\JsonContent(
     *                  type="object",                
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
     *   summary="Rota GET por ID do motorista",
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
     *     summary="Rota UPDATE motorista",
     *     description="",        
     *     @OA\RequestBody(
     *         required=true,
     *         description="Atualize os dados seguindo o formato de JSON",
     *         @OA\JsonContent(
     *                  type="object",
     *                  @OA\Property(property="name",  type="string"),     
     *                  @OA\Property(property="age",type="number"),                  
     *           )       
     *         
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     * )
     */

    //Method Delete - Deletar um motorista por id
    /**
     * @OA\Delete(
     *   tags={"/drivers"},
     *   path="/drivers/{id}",
     *   summary="Rota DELETE motorista",
     *   @OA\Parameter(
     *     description="Digite o ID do motorista",
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
        $this->class = Driver::class;
    }
}
