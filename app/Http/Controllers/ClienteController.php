<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

/**
 * @group Clientes
 */
class ClienteController extends Controller
{
    /**
     * Listar
     *
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Consultar
     * 
     * @urlParam id required ID do Cliente. Example: 1
     *
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $result = [
                'success' => false,
                'message' => 'Cliente não encontrado'
            ];
            return response()->json($result, 404);
        }

        return $cliente;
    }    

    /**
     * Salvar
     * 
     * @bodyParam id           integer  optional  ID do Cliente. Example: 1
     * @bodyParam nome         string   required  Nome. Example: Maria da Silva
     * @bodyParam cpf          string   required  CPF. Example: 999.999.999-99
     * @bodyParam rg           string   optional  RG. Example: 1234567-8
     * @bodyParam email        string   required  Email. Example: joao@email.com
     * @bodyParam fone1        string   optional  Fone1. Example: (92) 9999-9999
     * @bodyParam fone2        string   optional  Fone2. Example: (92) 8888-8888
     * @bodyParam nascimento   date     optional  Nascimento. Example: 01/01/2020
     * @bodyParam sexo         string   optional  Sexo. Example: M
     * @bodyParam cep          string   required  CEP. Example: 01001000
     * @bodyParam rua          string   optional  Rua. Example: Praça da Sé
     * @bodyParam numero       string   optional  Numero. Example: 15-A
     * @bodyParam complemento  string   optional  Complemento. Example: lado ímpar
     * @bodyParam bairro       string   optional  Bairro. Example: Sé
     * @bodyParam cidade       string   optional  Cidade. Example: São Paulo
     * @bodyParam uf           string   optional  AM. Example: SP
     *
     */
    public function store(Request $request)
    {
        // Validação Request
        // ------------------------------------------------
        request()->validate([
            'nome'         => 'required|string|max:255',
            'cpf'          => 'required|string|max:14',
            'rg'           => 'nullable|string|max:15',
            'email'        => 'required|string|max:150',
            'fone1'        => 'nullable|string|max:15',
            'fone2'        => 'nullable|string|max:15',
            'nascimento'   => 'nullable|date',
            'sexo'         => 'nullable|string|max:1',
            'cep'          => 'required|string|max:10',
            'rua'          => 'nullable|string|max:200',
            'complemento'  => 'nullable|string|max:100',
            'bairro'       => 'nullable|string|max:100',
            'cidade'       => 'nullable|string|max:120',
            'uf'           => 'nullable|string|max:2',
            'ddd'          => 'nullable|string|max:2',
        ]);        

        // Dados da Requisição
        // ------------------------------------------------
        $dados = $request->json()->all();

        // Salvando o Cliente
        // ------------------------------------------------
        $cliente = Cliente::create($dados);
        if (!$cliente) {
            $result = [
                'success' => false,
                'message' => 'Falha ao Salvar o Cliente'
            ];
            return response()->json($result, 422);
        }

        // Retorno da API
        // ------------------------------------------------
        $result = [
            'success' => true,
            'message' => 'Cliente salvo com sucesso',
        	'data'    => $cliente
        ];
        return response()->json($result, 201);
        
    }

    /**
     * Atualizar
     * 
     * @urlParam id required ID do Cliente. Example: 1
     * 
     * @bodyParam id           integer  optional  ID do Cliente. Example: 1
     * @bodyParam nome         string   required  Nome. Example: Maria da Silva
     * @bodyParam cpf          string   required  CPF. Example: 999.999.999-99
     * @bodyParam rg           string   optional  RG. Example: 1234567-8
     * @bodyParam email        string   required  Email. Example: joao@email.com
     * @bodyParam fone1        string   optional  Fone1. Example: (92) 9999-9999
     * @bodyParam fone2        string   optional  Fone2. Example: (92) 8888-8888
     * @bodyParam nascimento   date     optional  Nascimento. Example: 01/01/2020
     * @bodyParam sexo         string   optional  Sexo. Example: M
     * @bodyParam cep          string   required  CEP. Example: 01001000
     * @bodyParam rua          string   optional  Rua. Example: Praça da Sé
     * @bodyParam numero       string   optional  Numero. Example: 15-A
     * @bodyParam complemento  string   optional  Complemento. Example: lado ímpar
     * @bodyParam bairro       string   optional  Bairro. Example: Sé
     * @bodyParam cidade       string   optional  Cidade. Example: São Paulo
     * @bodyParam uf           string   optional  AM. Example: SP
     *
     */
    public function update(Request $request, $id)
    {
        // Validação Request
        // ------------------------------------------------
        request()->validate([
            'nome'         => 'required|string|max:255',
            'cpf'          => 'required|string|max:14',
            'rg'           => 'nullable|string|max:15',
            'email'        => 'required|string|max:150',
            'fone1'        => 'nullable|string|max:15',
            'fone2'        => 'nullable|string|max:15',
            'nascimento'   => 'nullable|date',
            'sexo'         => 'nullable|string|max:1',
            'cep'          => 'required|string|max:10',
            'rua'          => 'nullable|string|max:200',
            'numero'       => 'nullable|string|max:15',
            'complemento'  => 'nullable|string|max:100',
            'bairro'       => 'nullable|string|max:100',
            'cidade'       => 'nullable|string|max:120',
            'uf'           => 'nullable|string|max:2',
        ]);

        // Validação do Cliente
        // ------------------------------------------------
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $result = [
                'success' => false,
                'message' => 'Cliente não encontrado'
            ];
            return response()->json($result, 404);
        }

        // Dados da Requisição
        // ------------------------------------------------
        $dados = $request->json()->all();

        // Salvando o Cliente
        // ------------------------------------------------
        $cliente->update($dados);
        $result = [
            'success' => true,
            'message' => 'Cliente atualizado com sucesso',
        	'data'    => $cliente
        ];
        return response()->json($result, 201);        
    }

    /**
     * Deletar
     *
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $result = [
                'success' => false,
                'message' => 'Cliente não encontrado'
            ];
            return response()->json($result, 404);
        }

        $cliente->delete();
        $result = [
            'success' => true,
            'message' => 'Cliente deletado com sucesso'
        ];
        return response()->json($result, 200);
    }

}
