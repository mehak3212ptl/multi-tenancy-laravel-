<x-tenant-app-layout>
    <style>
        [type=checkbox]:checked{
            background-color: #198754;
        }
        [type=checkbox]:checked:hover, [type=checkbox]:checked:focus, [type=radio]:checked:hover, [type=radio]:checked:focus {
            background-color: #198754;
            
        }
        
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 d-flex justify-content-between">
                    {{ __("You're logged in!") }}
                    <x-btn-link href="{{url('tanent/create')}}" >
                        Add Users
                    </x-btn-link>
                </div>
                
            </div>
        </div>
    </div>
</x-tenant-app-layout>