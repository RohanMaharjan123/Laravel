<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('mobile.store') }}">
            @csrf
            <div>
                <div class ="mt-4">
                    <label for = "name">Name</label>
            <input type="text" name = "name">
            <x-text-input id ="name" class ="block mt-1 w-full" type ="name" name= "name" require autocomplete/>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <div class ="mt-4">
            <label for = "name">Model</label>
            <input type="text" name = "model">
            <x-text-input id ="name" class ="block mt-1 w-full" type ="name" name= "name" require autocomplete/>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>


            <div class ="mt-4">
            <label for = "name">Price</label>
            <input type="text" name = "price">
            <x-text-input id ="name" class ="block mt-1 w-full" type ="name" name= "name" require autocomplete/>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>
            
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Add Mobile') }}</x-primary-button>
        </div>
        </form>
        </div>
</x-app-layout>