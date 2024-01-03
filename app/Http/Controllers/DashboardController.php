<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        $totalProdutos = $this->buscaTotalProdutos();
        $totalClientes = $this->buscaTotalClientes();
        $totalVendas = $this->buscaTotalVendas();
        $totalUsuario = $this->buscaTotalUsuario();
        return view('pages.dashboard.dashboard', compact('totalProdutos', 'totalClientes', 'totalVendas', 'totalUsuario'));
    }

    public function buscaTotalProdutos() {
        $find = Produto::all()->count();
        return $find;
    }
    public function buscaTotalClientes() {
        $find = Cliente::all()->count();
        return $find;
    }
    public function buscaTotalVendas() {
        $find = Venda::all()->count();
        return $find;
    }
    public function buscaTotalUsuario() {
        $find = User::all()->count();
        return $find;
    }
}
