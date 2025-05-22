<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moje porudžbine') }}
        </h2>
    </x-slot>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
    <div class="row">
        @foreach($orders as $order)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-2 bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Proizvod: {{ $order->naziv }}</h5>
                        <p class="card-text">
                            <strong>Datum naručivanja:</strong> {{ $order->created_at->format('d.m.Y H:i') }}
                        </p>
                        <p class="card-text">
                        <strong>Status:</strong> {{ $order->adminOrder ? $order->adminOrder->status : 'U obradi'}}
                    </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-transparent border-0">
                        <a href="{{ route('user.orders.destroy', $order->id) }}" class="btn btn-danger btn-sm">Otkazi</a>
                        <a href="{{ route('user.edit', $order->id) }}" class="btn btn-primary btn-sm">Izmeni</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
