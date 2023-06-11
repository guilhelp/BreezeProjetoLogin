<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- Importando lib para criar as mascaras -->

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Digite seu nome" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Digite seu email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required placeholder="Digite seu endereço"/>
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required placeholder="Digite seu bairro"/>
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- Cep -->
        <div class= "mt-4">
            <x-input-label for="cep" :value="__('Cep')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" placeholder="Digite seu CEP" pattern="\d{5}-\d{3}" title="XXXXX-XXX"/>
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Mascara do cep -->
        <script>
            $(document).ready(function() {
            $('#cep').mask('00000-000');
            });
        </script>
        
        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required placeholder="Digite sua cidade"/>
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">
        <x-input-label for="estado" :value="__('Estado')" />
        <select id="estado" class="block mt-1 w-full" name="estado" required>
            <option value="">Selecione seu estado</option>
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="BA">Bahia</option>
            <option value="PR">Paraná</option>
            <option value="SC">Santa Catarina</option>
        </select>
        <x-input-error :messages="$errors->get('estado')" class="mt-2" />
    </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required placeholder="Digite seu telefone" pattern="\d{4}-\d{4}" title="XXXX-XXXX"/>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Mascara do telefone -->
        <script>
            $(document).ready(function() {
            $('#telefone').mask('0000-0000');
            });
        </script>

        <!-- Celular -->
        <div class="mt-4">
            <x-input-label for="celular" :value="__('Celular')" />
            <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" required placeholder="Digite seu celular" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" title="(XX) XXXXX-XXXX"/>
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>

        <!-- Mascara do celular -->
        <script>
            $(document).ready(function() {
            $('#celular').mask('(00) 0000-0000')
            });
        </script>
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Digite sua senha"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
