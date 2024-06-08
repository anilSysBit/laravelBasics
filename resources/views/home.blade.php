@extends('layouts.main')
@push('title')
<title>Home Page</title>
@endpush

@section('main-section')


    <h1 class="text-3xl text-white">Hello World</h1>
    <br> 

    <main class="flex">
        <table class="border-collapse w-1/2">
            <caption class="text-slate-500">This is the caption for table</caption>
            <thead class="bg-slate-700">
                <tr>
                    <th class="p-2 text-slate-500">Name</th>
                    <th class="p-2 text-slate-500">Country</th>
                </tr>
            </thead>
            <tbody>
               @for($i = 1; $i < 20; $i++)
               <tr>
                <td class="border border-slate-700 p-2 text-slate-500 text-center">Anil</td>
                <td class="border border-slate-700 p-2 text-slate-500 text-center">Nepal</td>
               </tr>
               @endfor
            </tbody>
        </table>
    </main>

    @endsection