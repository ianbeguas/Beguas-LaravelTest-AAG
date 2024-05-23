<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
{{-- this is the add product page --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h1 class="mb-0">Add Product</h1>
                  <hr>

                  <p><a href="{{ route('admin/products') }}" class="btn btn-warning">Back</a></p>

                    <form action="{{ route('admin/products/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                            {{-- if form is empty call message text-ganger --}}
                            @error('title')
                                <span class="text-danger">{{$message}}</span>                                
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="category" class="form-control" placeholder="Category">
                            {{-- if form is empty call message text-ganger --}}
                            @error('category')
                                <span class="text-danger">{{$message}}</span>                                
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                            {{-- if form is empty call message text-ganger --}}
                            @error('price')
                                <span class="text-danger">{{$message}}</span>                                
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
