<div class="p-3" x-data="{ produtos: [], showInputs: false }">

    <button @click.prevent="produtos.push({nome: '', descricao: '', quantidade: ''}), showInputs = true"
            class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <i class="bi bi-cart-plus"></i> Adicionar Produto
    </button>

    <template x-for="(produto, index) in produtos" :key="index">
        <div class="grid grid-cols-3 gap-6" x-show="showInputs">
            <input :id="'nome-' + index" type="text" x-model="produtos[index].nome"
                   class="mt-1 block w-full text-black" placeholder="Nome"/>

            <input :id="'descricao-' + index" type="text" x-model="produtos[index].descricao"
                   class="mt-1 block w-full text-black" placeholder="Descricao"/>

            <input :id="'quantidade-' + index" type="number" x-model="produtos[index].quantidade"
                   class="mt-1 block w-full text-black" placeholder="Quantidade"/>
        </div>
    </template>

    <input type="hidden" name="produtos" x-bind:value="JSON.stringify(produtos)">

</div>
