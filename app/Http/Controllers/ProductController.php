<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Importamos o nosso Model de Produto

class ProductController extends Controller
{
    /**
     * Exibe o formulário de cadastro de um novo produto.
     */
    public function create()
    {
        // O método view() carrega o arquivo Blade
        // O caminho é 'products.create' porque o arquivo está em resources/views/products/create.blade.php
        return view('products.create');
    }

    /**
     * Armazena um novo produto no banco de dados.
     */
    public function store(Request $request)
    {
        // 1. Validação dos dados do formulário. É uma boa prática de segurança!
        // Se a validação falhar, o Laravel automaticamente redireciona o usuário de volta para a página anterior com os erros.
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        // 2. Cria uma nova instância do Model 'Product'.
        // O Model 'Product' representa a nossa tabela 'products' no banco de dados.
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save(); // Salva o novo produto no banco de dados

        // 3. Redireciona o usuário para o dashboard após o cadastro.
        // A função `with()` armazena uma mensagem na sessão para ser exibida na próxima requisição.
        return redirect()->route('dashboard')->with('success', 'Produto cadastrado com sucesso!');
    }
}