<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- <a href='{{route('admin.index')}}'>Home</a> --}}
            {{'Dashboard'}}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="context">
                    <h1 style='color:black'> Bonjour, {{ Auth::user()->name }}!</h1>
                </div>



        </div>
    </div>
</x-app-layout>







