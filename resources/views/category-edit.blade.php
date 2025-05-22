<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-5">
                <h3>Izmeni naziv kategorije</h3><hr><br>
                 @if(in_array(Auth::user()->role->name, ['admin', 'editor']))
                    <form action="{{ route('category-update', $categories->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method("PUT")
                    
                    <div class="form-group">
                        <label for="" class="fw-bold">Trenutni naziv</label>
                        <input type="text" class="form-control" name="naziv" value="{{$categories->naziv}}">   
                    </div>

         
                    <br>
                    <br>

                    <button type="submit" class="btn btn-primary">Izmeni</button>
               </form>
                 @endif
                 
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
