<div class="p-3">
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Nome</th>
            <th class="px-4 py-2">Descrição</th>
            <th class="px-4 py-2">quantidade</th>
            <th class="px-4 py-2 w-1/6">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td class="border px-4 py-2">{{ $produto->nome }}</td>
                <td class="border px-4 py-2">{{ $produto->descricao }}</td>
                <td class="border px-4 py-2">{{ $produto->quantidade }}</td>
                <td class="border px-1 py-2">
                    <a href="#"
                       class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                        <i class="bi bi-pencil"></i></a>{{--    editar--}}

                    <a href="{{ route('produto.delete', [$produto->id_produto, $produto->id_lista]) }}"
                       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        <i class="bi bi-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
