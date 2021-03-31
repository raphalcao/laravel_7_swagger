<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

abstract class AbstractController
{
    protected $class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->class::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()
            ->json($this->class::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = $this->class::find($id);

        if (is_null($resource)) {
            return response()->json('Nao encontrado', 204);
        }
        return response()->json($resource);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resource = $this->class::find($id);
        
        if (is_null($resource)) {
            return response()->json(
                [
                    'erro' => 'Nao encontrado'
                ],
                201
            );
        }
        
        $resource->fill($request->all());
        $resource->save();

        return $resource;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resourceRemove = $this->class::destroy($id);
        if ($resourceRemove === 0) {
            return response()->json(
                [
                    'erro' => 'Nao encontrado'
                ],
                404
            );
        }

        return response()->json('', 204);
    }
}
