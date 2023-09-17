<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <!--Summary-->
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
                            :features="['16GB RAM', '256 GB SSD', 'Cam 128 Mp']"/>
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal"
                                                 value="19.723,77"
                                                 item-value-class="text-quaternary-200"/>
                        <x-checkout.summary-item title="Frete"
                                                 value="120,00"
                                                 item-value-class="text-quaternary-200"/>

                        <x-checkout.summary-item title="Total" value="19.843,77" :is-last-div="true"/>
                    </dl>
                </div>
            </section>
            <!--Formulary-->
            <section
                aria-labelledby="payment-and-shipping-heading"
                class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">

                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informações de Contato"/>
                            <!--Email-->
                            <div class="mt-6">
                                <x-input-label for="email-address" value="E-mail"/>
                                <x-text-input
                                    type="email"
                                    id="email-address"
                                    name="email"
                                    autocomplete="email"
                                    placeholder="Digite o seu e-mail."
                                    class="mt-2"/>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
