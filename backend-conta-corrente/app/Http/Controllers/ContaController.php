<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class ContaController extends Controller
{
    
    # Listar todos os dados. #
    public function index()
    {
        return Conta::all();
    }

    # Inserir um novo usuário. #
    public function store(Request $request, Conta $conta)
    {
        $request->validate([
            'usuario'=>'required|max:255'
        ]);
        
        Conta::create($request->all());

        return response()->json(['Dados salvos com sucesso.'=>true]);
    }

    # Selecionar dados de um usuário pelo id. #
    public function show($id)
    {
        return Conta::findOrFail($id);
    }

    # Atualizar usuário. #
    public function update(Request $request, Conta $conta)
    {
        $request->validate(['usuario'=>'required|max:255']);

        $conta->usuario = $request->input('usuario');

        $conta->save();
        return response()->json(['Dados atualizados com sucesso.'=>true]);
        
    }

    public function sacar(Request $request, Conta $conta)
    {
        $request->validate(['saldo'=>'required|max:8']);
        
        $saldoAnterior = $conta->saldo;
        $valorSaque = $request->input('saldo');

        if ($valorSaque > $saldoAnterior) {
            return response()->json(['Não há dinheiro guardado o suficiente para saque.'=>false]);
        } else {
            $saldoAtual = $saldoAnterior - $valorSaque;
            
            $conta->saldo = $saldoAtual;
            
            $conta->save();
            return response()->json(['Saque realizado com sucesso.'=>true]);
        }

    }

    public function depositar(Request $request, Conta $conta)
    {
        $request->validate(['saldo'=>'required|max:8']);
        
        $saldoAnterior = $conta->saldo;
        $valorDeposito = $request->input('saldo');

        $saldoAtual = $saldoAnterior + $valorDeposito;
        
        $conta->saldo = $saldoAtual;
        
        $conta->save();
        return response()->json(['Depósito realizado com sucesso..'=>true]);

        }

    # Excluir usuário. #
    public function destroy($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->delete();
    }
}
