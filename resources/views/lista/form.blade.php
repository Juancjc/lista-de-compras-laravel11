<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ @$lista ? __('Editar lista') : __('Criar lista') }}
        </h2>
    </x-slot>

    <div class="pt-9">
        <form action="{{ @$lista ? route('lista.edit', $lista->id_lista) : route('lista.create')}}" method="POST">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <div class="p-3">
                            <x-input-label for="name" :value="__('Nome')"/>
                            <x-text-input id="name" name="nome" type="text" class="mt-1 block w-full"
                                          :value="old('nome', @$lista->nome)" required autofocus autocomplete="nome"/>
                            <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                        </div>
                        <div class="p-3">
                            <x-input-label for="name" :value="__('Descricao')"/>
                            <x-textarea id="descricao" name="descricao" type="text" class="mt-1 block w-full"
                                        :value="old('descricao', @$lista->descricao)"/>
                            <x-input-error class="mt-2" :messages="$errors->get('descricao')"/>
                        </div>
{{--                        produtos que já existem--}}
                        @if(@$produtos)
                            <x-listar-produtos :produtos="$produtos" />
                        @endif
                        {{--                    PRODUTOS--}}
                        <x-adicionar-produtos />


                        <div class="p-3">
                            <x-primary-button>{{ @$lista ? __('Editar') : __('Criar') }}</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
