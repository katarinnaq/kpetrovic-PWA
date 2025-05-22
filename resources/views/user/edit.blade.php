<x-app-layout>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Izmeni porudzbinu
        </h2>
    </x-slot>

    <div class="mt-6">
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <form method="POST" action="{{ route('user.update', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="mt-4">
            <label for="product_id">Izaberi drugi proizvod:</label>

            <select name="product_id" id="product_id">
                @foreach($products as $product)
                    <option value="{{ $product->id }}"
                    {{ $product->naziv == $order->naziv}}>
                    {{ $product->naziv }}
                    </option>
                @endforeach
            </select>
            <br><br>
        </div>

        <button type="submit" class="btn btn-success">
            Potvrdi
        </button>
    </form>
</div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
