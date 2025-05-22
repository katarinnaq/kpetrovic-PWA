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
                 @if(in_array(Auth::user()->role->name, ['admin', 'editor']))

                 <h3>{{$product->naziv}}</h3> <hr> <br>
                    <form action="{{ route('admin-update', $product->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method("PUT")
                    
                    <div class="form-group">
                        <label for="" class="fw-bold">Naziv</label>
                        <input type="text" class="form-control" name="naziv" value="{{$product->naziv}}">   
                    </div>
                    <br>

                    <div class="form-group">
                        <label for=""  class="fw-bold">Opis</label>
                        <textarea class="form-control" name="opis" cols="30" rows="10">{{$product->opis}}</textarea>

                    </div>
                    <br>

                    <div class="form-group">
                        <label for=""  class="fw-bold">Cena</label>
                        <input type="number" class="form-control" name="cena" value="{{$product->cena}}">   
                    </div>

                        <br>

                    <div class="form-group">
                        <label for=""  class="fw-bold">Istaknuto</label>
                       <select name="istaknuto" class="form-control">
                            <option value="1" {{ $product->istaknuto == 1 ? 'selected' : '' }}>Da</option>
                            <option value="0" {{ $product->istaknuto == 0 ? 'selected' : '' }}>Ne</option>
                        </select>
                    </div>
                    <br>

                <div class="form-group">
                    <label for=""  class="fw-bold">Kategorija</label>


                   <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected($product->category_id == $category->id)>
                            {{ $category->naziv }}
                        </option>
                    @endforeach
                </select>

            </div>

                <br>
                    <div class="form-group">
                        <label for=""  class="fw-bold">Slika</label>
                        <input type="file" class="form-control" name="slika">
                        <input type="hidden" name="stara_slika" value="{{ $product->slika }}">
<br>
                        @if($product->slika)
                            <img src="{{ asset('images/' . $product->slika) }}" alt="Slika" width="150">
                        @endif
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



         <script>
        $(document).ready(function () {
            $('#opis').summernote({
                placeholder: 'Unesi opis',
                tabsize: 2,
                height: 120
            });
        });
    </script>
</x-app-layout>
