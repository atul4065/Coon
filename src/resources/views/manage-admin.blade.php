@extends('admin.coon.admin-layout')
@push('admin-short-css')
<style>
    .alert{
        padding:5px; 
    }
</style>
@endpush
@section('hook')
<h3 class="text-2xl font-semibold">Modify</h3>
<div class="p-4 border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-4 text-gray-500 py-2">
    
        <form action="{{route('coon-admin-modify', $user->id)}}" class="border rounded border-2 m-2 sm:w-2/8 lg:w-1/2 sm:mx-auto" method="post">
            <br>
            @csrf
            <div class="grid grid-cols-1 gap-2 sm:ml-4 m-2">
                <p class="text-2xl font-light hover:font-semibold text-orange-600">Modify Admin Details, Make sure all fields are mandatory.</p>
                <hr>
                <div>
                    <label for="name" class="text-xl block hover:text-2xl">Name</label>
                    <input type="text" name="name" placeholder="Type here" id="name" value="{{$user->name}}" class="input input-bordered w-full max-w-lg" />
                    @error('name')
                    <div class="alert alert-warning w-fit text-small sm:text-xl mt-1">{{$errors->first('name')}}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="text-xl block hover:text-2xl">Email</label>
                    <input type="email" name="email" placeholder="Type here" id="email" value="{{$user->email}}" class="input input-bordered w-full max-w-lg" />
                    @error('email')
                    <div class="alert alert-warning w-fit text-small sm:text-xl mt-1">{{$errors->first('email')}}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="text-xl block hover:text-2xl">Old Password</label>
                    <input type="password" name="password" placeholder="Type here" id="password" value="" class="input input-bordered w-full max-w-lg" />
                    @error('password')
                    <div class="alert alert-warning w-fit text-small sm:text-xl mt-1">{{$errors->first('password')}}</div>
                    @enderror
                </div>
                <div>
                    <label for="new_password" class="text-xl block hover:text-2xl">New Password</label>
                    <input type="password" name="new_password" placeholder="Type here" value="{{old('new_password')}}" id="new_password" value="" class="input input-bordered w-full max-w-lg" />
                    @error('new_password')
                    <div class="alert alert-warning w-fit text-small sm:text-xl mt-1">{{$errors->first('new_password')}}</div>
                    @enderror
                </div>
                <div>
                    <label for="confirm_password" class="text-xl block hover:text-2xl">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Type here" value="{{old('confirm_password')}}" id="confirm_password" value="" class="input input-bordered w-full max-w-lg" />
                    @error('confirm_password')
                    <div class="alert alert-warning w-fit text-small sm:text-xl mt-1">{{$errors->first('confirm_password')}}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn bg-orange-500 hover:bg-orange-400">Update</button>
                </div>
                @if(session()->has('success'))
                <div class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{session()->get('success')}}</span>
                </div>
                @endif
            </div>
        </form>

</div> 

@endsection