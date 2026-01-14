<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Repositories\Contracts\AddressRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\BrasilApiService;

class AddressController extends Controller
{

    protected AddressRepositoryInterface $repository;

    /**
     * Display a listing of the resource.
     */

    public function __construct(AddressRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(): JsonResponse
    {
        return response()->json(
            $this->repository->all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request): JsonResponse
    {
        $address = $this->repository->create($request->validated());

        return response()->json($address, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $address = $this->repository->find($id);

        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        return response()->json($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, int $id): JsonResponse
    {
        $address = $this->repository->find($id);

        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        return response()->json(
            $this->repository->update($address, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $address = $this->repository->find($id);

        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        $this->repository->delete($address);

        return response()->json(null, 204);
    }

    public function buscarCep(string $cep, BrasilApiService $brasilApi): JsonResponse
    {
        $dados = $brasilApi->buscarPorCep($cep);

        if (!$dados) {
            return response()->json([
                'message' => 'CEP não encontrado'
            ], 404);
        }

        return response()->json([
            'data' => $dados,
            ]);
    }

}
