        @extends('layouts.frontLayout')


        @section('TodoName')
                Home page
        @endsection


       @section('secret') 
      
       
                <div class="card col-lg-4 mx-auto mt-5">
                        <div class="card-header"><b>Add Todo</b></div>
                        <div class="card-body">
                                <form action="{{ route('storeTodo')}}" method="POST">
                                        @csrf
                                        <input value="{{ old('titel')}}" name="titel" type="text" class="form-control my-2" placeholder="Titel">


                                        @error('titel')
                                                <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                                
                                       
                                        <textarea name="detail" placeholder="Details" class="form-control my-2">{{ old('detail')}}</textarea>
                                        @error('detail')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input value="{{ old('auth')}}" name="auth" type="text" class="form-control my-4" placeholder="Author">
                                        @error('auth')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button class="btn btn-danger my-6">Submit</button>
                                </form>
                                
                        </div>

                </div>
         @endsection