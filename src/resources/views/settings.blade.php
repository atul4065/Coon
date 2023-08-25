@extends('admin.coon.admin-layout')

@section('hook')
<h3 class="text-2xl font-semibold">Settings</h3>
<div class="p-4 border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-4 text-gray-500 py-2">
    
    <div class="grid sm:grid-cols-2 grid-cols-1 rounded border-2">
        <div>
            <p class="text-2xl py-2 font-semibold text-center md:text-left"><span class="ml-2 text-gray-800">Manage Your Account</span></p>
        </div>
        <div class="text-center sm:text-right sm:mr-2 py-2">
            <a href="{{route('coon-admin-manage', auth()->user()->id)}}" class="text-orange-600 font-semibold italic">Manage</a>
        </div>
    </div>
    
    <div class="grid grid-cols-1 gap-4">
        <div class="border-2 rounded mt-6 py-4 text-xl font-semibold text-center md:text-left">
            <div class="ml-2 text-gray-600 font-bold">UserName</div>
            <div class="ml-2 ">{{auth()->user()->name}}</div>
        </div>
        <div class="border-2 rounded mt-2 py-4 text-xl font-semibold text-center md:text-left">
            <div class="ml-2 text-gray-600 font-bold">Email</div>
            <div class="ml-2 break-all">{{auth()->user()->email}}</div>
        </div>
        <div class="border-2 rounded mt-2 py-4 text-xl font-semibold text-center md:text-left">
            <div class="ml-2 text-gray-600 font-bold">Email Verified</div>
             @if(auth()->user()->email_verified_at == "")
                <div class="alert alert-warning sm:ml-2 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" 
                    fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <span class="text-sm sm:text-xl">Warning: Email not be verified!</span>
                </div>
                @else
                <div>
                    <div class="alert alert-success w-fit sm:ml-2 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-sm sm:text-xl">Your Email is Verified!</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="border-2 rounded mt-2 py-4 text-xl font-semibold text-center md:text-left">
            <div class="ml-2 text-gray-600 font-bold">Phone Number</div>
            @if(auth()->user()->phone_number == "")
                <div class="alert alert-warning sm:ml-2 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" 
                    fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <span class="text-sm sm:text-xl">Warning: Invalid Phone Number!</span>
                </div>
                @else
                <div>{{auth()->user()->phone_number}}</div>
            @endif
        </div>

    </div>
</div> 

@endsection