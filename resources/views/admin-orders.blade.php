<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Porudzbine korisnika') }}
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


<h3>Lista porudzbina</h3> <hr><br>

<table class="table">
<thead>
<tr>
    <th>Naziv porudzbine</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
    @foreach($adminOrders as $adminOrder)
    <tr>
        <td>{{ $adminOrder->order->naziv }}</td>
        <td>
            <form action="{{ route('admin.orders.updateStatus', $adminOrder->id) }}" method="POST" class="d-flex align-items-center gap-2">
                @csrf
                <select name="status" class="form-select form-select-sm" style="width: auto;">
                    <option value="Na čekanju" {{ $adminOrder->status == 'Na cekanju' ? 'selected' : '' }}>Na cekanju</option>
                    <option value="Odobreno" {{ $adminOrder->status == 'Odobreno' ? 'selected' : '' }}>Odobreno</option>
                    <option value="Odbijeno" {{ $adminOrder->status == 'Odbijeno' ? 'selected' : '' }}>Odbijeno</option>
                </select>
                <button type="submit" class="btn btn-sm btn-success">Promeni status</button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>

</div>
</div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


</x-app-layout>
