@props(['produtos'])

<div x-data="{ openModal: false }">
    <!-- Botão de visualização -->
    <button @click="openModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <i class="bi bi-eye"></i>
    </button>

    <!-- Modal de visualização -->
    <!-- Modal de visualização -->
    <div x-show="openModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- Conteúdo do modal -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-black" id="modal-title">
                                Produtos
                            </h3>
                            <div class="mt-2">
                                <ul>
                                    @if($produtos->isEmpty())
                                        <p class="text-black">Sem produtos</p>
                                    @else
                                        <table class="table-auto w-full text-black">
                                            <thead>
                                            <tr>
                                                <th class="px-4 py-2">Nome</th>
                                                <th class="px-4 py-2">Descrição</th>
                                                <th class="px-4 py-2">Quantidade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($produtos as $produto)
                                                <tr>
                                                    <td class="border px-4 py-2">{{ $produto->nome }}</td>
                                                    <td class="border px-4 py-2">{{ $produto->descricao }}</td>
                                                    <td class="border px-4 py-2">{{ $produto->quantidade }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click="openModal = false" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
