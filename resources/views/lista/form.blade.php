<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criando lista') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                </div>
            </div>
        </div>
    </div>
    <form action="{{ @$lista ? route('lista.edit', $lista->id_lista) : route('lista.create')}}" method="POST">
        @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="p-3">
                        <x-input-label for="name" :value="__('Nome')"/>
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                      :value="old('nome', @$lista->nome)" required autofocus autocomplete="nome"/>
                        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                    </div>
                    <div class="p-3">
                        <x-input-label for="name" :value="__('Descricao')"/>
                        <x-textarea id="descricao" name="descricao" type="text" class="mt-1 block w-full"
                                    :value="old('nome', @$lista->descricao)"/>
                        <x-input-error class="mt-2" :messages="$errors->get('descricao')"/>
                    </div>
                    <div class="p-3">
                        <x-primary-button>{{ __('Criar') }}</x-primary-button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</x-app-layout>
