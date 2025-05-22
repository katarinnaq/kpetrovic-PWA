<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moje ocene') }}
        </h2>
    </x-slot>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                 <a href="{{ route('user.create-comment') }}" class="btn btn-success mb-3">Dodaj novi komentar</a>
                    <div class="space-y-6">
    @foreach($comments as $comment)
        <div class="bg-white p-6 rounded-lg shadow-md border">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg font-semibold text-gray-800">Datum: <span class="text-sm text-gray-500">{{ $comment->created_at->format('d.m.Y. H:i') }} | Izmenjeno: {{ $comment->updated_at->format('d.m.Y. H:i') }} </span> </h3>
            </div>
            <p class="text-gray-700 mb-4">{{ $comment->tekst }}</p>
            <div class="flex space-x-2">
                <a href="{{ route('user.comments.edit', $comment->id) }}" class="btn btn-primary me-2">
                    Izmeni
                </a>
                <a href="{{ route('user.comments.destroy', $comment->id) }}" class="btn btn-danger me-2">
                    Obriši
                </a>
            </div>
        </div>
    @endforeach
</div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
