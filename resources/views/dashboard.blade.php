<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                @section('content')
                    <section class="section">
                        <div class="section-header">
                            <h5 class="page__heading">BIENVENIDOS</h5>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <img src="{{ URL::to('/') }}/img/importaciones.jpg" height="500"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>        
                @endsection
            </div>
        </div>
    </div>
</x-app-layout>
