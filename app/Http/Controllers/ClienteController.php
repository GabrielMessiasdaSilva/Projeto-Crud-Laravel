<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('welcome')->with('cliente', $clientes);
    }
    

    public function adicionar(Request $req){
        $cliente = new Cliente;
        $cliente->nome = $req->nome;
        $cliente->telefone = $req->telefone;
        $cliente->email = $req->email;
        $cliente->save();
        return redirect()->back();
    }


    public function editar(Request $req){
        $cliente = Cliente::find($req->id);
        return view('editar')->with("cliente", $cliente);
    }
    




    public function atualizar(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->update(
            [
                "Nome" => $req->nome,
                "Telefone" => $req->telefone,
                "Email" => $req->email
            ]
        );
 // Redirecionamento para a página welcome
 return redirect('/');
        }


       
    
    public function excluir(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->delete();
        return redirect()->back();
    }
}

