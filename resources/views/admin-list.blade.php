<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prikaz svih proizvoda') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css">
    <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">

<h3>Proizvodi</h3>
<hr><br>
    @if(in_array(Auth::user()->role->name, ['admin', 'editor']))
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-2 bg-light">
            <div class="card-body">
                <h5 class="card-title">{{ $product->naziv }}</h5>
                <p class="card-text">
                    <strong>Opis:</strong> {{ $product->opis, 100 }}<br>
                    <strong>Cena:</strong> {{ $product->cena }} RSD<br>
                    <strong>Kategorija:</strong> {{ $product->category_id }}<br>
                    <strong>Istaknuto:</strong> {{ $product->istaknuto ? 'Da' : 'Ne' }}<br>
                    <strong>Kreirano:</strong> {{ $product->created_at->format('d.m.Y') }}<br>
                    <strong>Izmenjeno:</strong> {{ $product->updated_at->format('d.m.Y') }}
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between bg-transparent border-0">
                @if(Auth::user()->role_id == 1)
                    <a href="{{ route('admin-destroy', $product->id) }}" class="btn btn-danger btn-sm">Obriši</a>
                @endif
                <a href="{{ route('admin-edit', $product->id) }}" class="btn btn-primary btn-sm">Izmeni</a>
            </div>
            </div>
            </div>
            @endforeach
        </div>
    @endif

    <br><br>        
    <h3 class="mb-3">Kategorije</h3><hr>
    <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->naziv }}</h5>
                    <p class="card-text">
                        <strong>ID:</strong> {{ $category->id }} <br>
                        <strong>Kreirano:</strong> {{ $category->created_at }} <br>
                        <strong>Izmenjeno:</strong> {{ $category->updated_at }}
                    </p>
                    <div class="d-flex justify-content-between">
                        @if(Auth::user()->role_id == 1)
                            <a href="{{ route('category-destroy', $category->id) }}" class="btn btn-danger btn-sm">Obriši</a>
                        @endif
                        <a href="{{ route('category-edit', $category->id) }}" class="btn btn-primary btn-sm">Izmeni</a>
                    </div>
                </div>
                </div>
                </div>
            @endforeach
        </div>
        </div>
        </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>


</x-app-layout>
