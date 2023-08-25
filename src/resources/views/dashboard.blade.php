@extends('admin.coon.admin-layout')

@section('hook')
<?php
$features = config('coon.features');
?>
<div class="p-2 border-2 border-gray-100 rounded-lg dark:border-gray-700">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 mb-4">
        @forelse($features as $feature)
        <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
            <div class="p-4 lg:text-center">
                <span class="mb-8 text-xs font-semibold tracking-widest text-blue-600 uppercase"> {{$feature['title']}}</span>
                <h4 class="mt-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">{{$feature['brief_title']}}</h4>
                <p class="mt-3 text-base leading-relaxed text-gray-500">{{$feature['description']}}</p>
                <div class="mt-6 bottom-0">
                    <a href="{{$feature['url']}}" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-orange-600 rounded-xl hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Accept </a>
                </div>
            </div>
        </div>
        @empty 

        @endforelse
       
    </div>

    <div class="grid xl:grid-cols-2 sm:grid-cols-1 lg:grid-cols-1 grid-cols-1 gap-4 mb-4 overflow-x-scroll">
        <div class="border-2 border-gray-100 rounded-lg  overflow-x-auto">
            <div class="text-center mt-2 ">
                <strong class="bg-orange-600 text-gray-100 pl-3 pr-3 rounded-full text-2xl">Courses</strong>
            </div>

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 shadow-xl rounded-xl my-2">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                                Canceled
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="border-2 border-gray-100 rounded-lg overflow-x-auto">
            <div class="text-center mt-2"><strong class="bg-orange-600 text-gray-100 pl-3 pr-3 rounded-full text-2xl">Professors</strong></div>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 shadow-xl rounded-xl my-2">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                                Canceled
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <th class="px-6 py-4 font-medium text-gray-900">Helen Howard</th>
                        <td class="px-6 py-4">Nov.4 2022</td>
                        <td class="px-6 py-4">helen@sailboatui.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium"><a href="">Delete</a><a href="" class="text-primary-700">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
            </svg>
        </p>
    </div>

<!--
    <div class="grid grid-cols-2 gap-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
    </div> -->
</div>
@endsection