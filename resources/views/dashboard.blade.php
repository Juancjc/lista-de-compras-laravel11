<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('lista.create') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="bi bi-bag-plus"></i> Criar Lista</a>
                <div class="pt-8">
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Descrição</th>
                            <th class="px-4 py-2 w-1/6">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listas as $lista)
                            <tr>
                                <td class="border px-4 py-2">{{ $lista->nome }}</td>
                                <td class="border px-4 py-2">{{ $lista->descricao }}</td>
                                <td class="border px-1 py-2">
                                    <a href="{{ route('lista.edit', $lista->id_lista) }}"
                                       class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                     <i class="bi bi-pencil"></i></a>{{--    editar--}}

                                    <a href="{{ route('lista.delete', $lista->id_lista) }}"
                                       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="bi bi-trash"></i></a>

{{--                                    <div x-data="{ openModal: false }">--}}
{{--                                        <!-- Botão de visualização -->--}}
{{--                                        <a href="#" @click="openModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                                            <i class="bi bi-eye"></i>--}}
{{--                                        </a>--}}

{{--                                        <!-- Modal de visualização -->--}}
{{--                                        <div x-show="openModal" x-cloak>--}}
{{--                                            <!-- Fundo escuro para cobrir a página -->--}}
{{--                                            <div class="fixed inset-0 bg-black opacity-50 z-40"></div>--}}

{{--                                            <!-- Conteúdo do modal -->--}}
{{--                                            <div class="fixed inset-0 z-50 flex items-center justify-center">--}}
{{--                                                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">--}}
{{--                                                    <!-- Aqui você pode exibir os produtos da lista -->--}}
{{--                                                    <!-- Por exemplo, uma lista de produtos -->--}}
{{--                                                    <ul>--}}
{{--                                                        @if(@$lista->produtos->isEmpty())--}}
{{--                                                            <p>Sem produtos</p>--}}
{{--                                                        @else--}}
{{--                                                            @foreach ($lista->produtos as $produto)--}}
{{--                                                                <li><b>Nome: </b>{{ $produto->nome }}, <b>Descrição: </b> {{ $produto->descricao }}, <b>Quantidade: {{ $produto->quantidade }}</b> </li>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}

{{--                                                    </ul>--}}

{{--                                                    <!-- Botão para fechar o modal -->--}}
{{--                                                    <button @click="openModal = false" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mt-4">--}}
{{--                                                        Fechar--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
