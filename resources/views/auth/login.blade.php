<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
                    <input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus placeholder="email">
                    <input id="password" class="block mt-1 w-full" type="text" name="password" required autocomplete="current-password" placeholder="contra">
                    
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-3 btn-danger">
                            {{ __('conectarse') }}
                        </x-primary-button>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
              </div>
        </form>
    </x-auth-card>
</x-guest-layout>
