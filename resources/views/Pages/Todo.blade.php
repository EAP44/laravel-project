@extends('Layout.layout')

@section('main')
<div class="lg:w-2/4 mx-auto mt-5 py-8 px-6 bg-white rounded-xl">
    <h1 class="font-bold text-5xl text-center mb-8">Todo List</h1>
    <div class="mb-6">
        <form action={{route('Todo.store')}} method="POST" class="flex flex-col space-y-4">
            @csrf
            <input type="text" name="title" placeholder="The Todo title" class="py-3 px-4 bg-gray-100 rounded-md" />
            <textarea name="description" placeholder="The Todo description" rows="5" class="py-3 px-4 bg-gray-100 rounded-md"></textarea>
            <button class="py-3 px-4 bg-gray-600 text-white font-bold rounded-full hover:bg-gray-800 focus:bg-gray-700">Add</button>
        </form>
    </div>
    <hr />
    @if (count($todolist) === 0)
    <div class="text-center mt-4 py-4 px-6 bg-red-50 rounded-xl">
        <h2 class="font-semibold text-gray-600">No data</h2>
    </div>
    @else
    <div class="mt-2">
        @foreach ($todolist as $todo)
        <div @class(["py-4 flex items-center border-b border-gray-300 px-3",$todo->state?'bg-green-200':''])>
            <div class="flex-1 pr-8">
                <h3 class="text-lg font-semibolde">{{$todo->title}}</h3>
                <p class="text-gray-500">{{$todo->description}}</p>
            </div>
            <div class="flex space-x-3">
                <form action={{ route('Todo.update',['todo'=>$todo->id])}} method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="py-2 px-2 bg-green-400 text-white rounded-xl hover:bg-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </button>
                </form>
                <form action={{ route('Todo.delete',['todo'=>$todo->id])}} method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="deleteButton py-2 px-2 bg-red-400 text-white rounded-xl hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </div>
                    <x-alert/>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>  
@endsection