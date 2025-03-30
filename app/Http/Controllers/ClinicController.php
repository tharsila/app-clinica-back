<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClinicController extends Controller
{
   /**
     * Lista todas as clínicas com filtros e paginação
     */
    public function index(Request $request)
    {
        
        $query = Clinic::with(['regional', 'specialties']);

        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('trade_name', 'LIKE', "%{$search}%");
            });
        }

        $clinics = $query->paginate($request->input('per_page', 2));

        return response()->json($clinics);
    }

    /**
     * Exibe os detalhes da clínica.
     */
    public function show($id)
    {
        $clinics = Clinic::with(['regional', 'specialties'])->find($id);

        if (!$clinics) {
            return response()->json(['message' => 'Clínica não encontrada'], 404);
        }

        return response()->json($clinics);
    }


    /**
     * Cadastra nova clínica.
     */
    public function store(StoreClinicRequest $request)
    {
        $clinics = Clinic::create($request->except('specialties'));

        if ($request->has('specialties')) {
            $clinics->specialties()->sync($request->specialties);
        }

        return response()->json(['message' => 'Clínica criada com sucesso', 'data' => $clinics], 201);

    }

    /**
     * Atualiza clínica existente
     */
    public function update(UpdateClinicRequest $request, $id)
    {
        $clinics = Clinic::find($id);

        if (!$clinics) {
            return response()->json(['message' => 'Clínica não encontrada'], 404);
        }

        $clinics->update($request->except('specialties'));

        if ($request->has('specialties')) {
            $clinics->specialties()->sync($request->specialties);
        }

        return response()->json(['message' => 'Clínica atualizada com sucesso', 'data' => $clinics], 201);

    }

    /**
     * Exclui clínica.
     */
    public function destroy($id)
    {
        $clinics = Clinic::find($id);

        if (!$clinics) {
            return response()->json(['message' => 'Clínica não encontrada'], 404);
        }

        $clinics->delete();

        return response()->json(['message' => 'Clínica excluída com sucesso'], 200);

    }
}
