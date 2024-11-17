@extends('Layout.layout')

@section('main')
<div class="lg:w-2/3 mx-auto mt-7 mb-11 py-8 px-6 bg-white rounded-xl">
    @foreach ($Profils as $Profil)
        <div class="py-4 border-b border-gray-300 px-3 hover:bg-slate-200">
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full" src="https://cdn-icons-png.flaticon.com/512/9706/9706583.png" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{$Profil->name}}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$Profil->email}}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
            </li>
        </div>
    @endforeach
    <div class="border-t border-gray-400 bg-white px-4 py-3 sm:px-6">
        {{$Profils->links()}}
    </div>
</div>
@endsection
















