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

                    <x-checkout.product-list>
                        <x-checkout.product-item
                            image="https://cdn.awsli.com.br/600x450/761/761012/produto/218353870/editada--5--rcs401z0ta.png"
                            name="iPhone 15 Pro Max"
                            price="8.799,00"
                            :features="['16GB RAM', '256 GB SSD', 'Cam 128 Mp']">
                        </x-checkout.product-item>
                    </x-checkout.product-list>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
