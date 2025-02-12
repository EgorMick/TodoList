@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center gap-6">
        <h1 class="text-2xl font-semibold text-teal-700">Новая задача</h1>
        <div class="w-full bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('todos.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf
                <div class="flex flex-col">
                    <label class="text-gray-700 mb-1">Название задачи</label>
                    <input type="text" name="title" value="{{ old('title') }}" required
                           class="border border-gray-300 rounded px-3 py-2 focus:outline-teal-500 focus:ring-1 focus:ring-teal-300 transition" />
                    @error('title')<div class="text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="flex flex-col">
                    <label class="text-gray-700 mb-1">Описание</label>
                    <textarea name="description" rows="4"
                              class="border border-gray-300 rounded px-3 py-2 focus:outline-teal-500 focus:ring-1 focus:ring-teal-300 transition">{{ old('description') }}</textarea>
                </div>

                <div class="flex items-center gap-2">
                    <input id="is_done" type="checkbox" name="is_done" value="1"
                           class="h-5 w-5 text-teal-500 focus:ring-teal-400 border-gray-300 rounded" />
                    <label for="is_done" class="text-gray-700">Отметить как выполненную</label>
                </div>

                <button type="submit" class="self-end bg-teal-500 hover:bg-teal-600 text-white px-6 py-2 rounded-md shadow">Создать</button>
            </form>
        </div>
    </div>
@endsection
