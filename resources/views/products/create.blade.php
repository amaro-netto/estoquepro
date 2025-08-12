<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto - EstoquePro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Cadastrar Novo Produto</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome do Produto:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descrição:</label>
                <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Preço (R$):</label>
                <input type="number" id="price" name="price" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantidade em Estoque:</label>
                <input type="number" id="quantity" name="quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cadastrar
                </button>
                </div>
        </form>
    </div>

</body>
</html>