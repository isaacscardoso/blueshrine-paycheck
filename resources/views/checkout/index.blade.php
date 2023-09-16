<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section
                aria-labelledby="summary-heading"
                class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">

                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>
                </div>

                <ul role="list" class="divide-y divide-white divide-opacity-10 text-sm font-medium">
                    <li class="flex items-start space-x-4 py-6">
                        <img class="h-20 w-20 flex-none rounded-md object-cover object-center"
                             src="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                             alt="Imagem do <nome_do_produto>"/>
                        <div class="flex-auto space-y-1">
                            <h3 class="text-white">Nome do Produto</h3>
                            <p class="text-primary-200">Feature 1 do Produto</p>
                            <p class="text-primary-200">Feature 2 do Produto</p>
                        </div>
                        <p class="flex-none text-base font-medium text-secondary-300">R$ 210,00</p>
                    </li>
                </ul>

            </section>
        </div>
    </div>
</x-app-layout>
