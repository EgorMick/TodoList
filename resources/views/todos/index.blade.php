@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center gap-6">
        <div class="text-center">
            <h1 class="text-4xl font-semibold text-teal-700">Мои задачи</h1>
            <p class="text-base text-gray-600">Организуйте дела легко и просто</p>
        </div>
        <a href="{{ route('todos.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-medium px-6 py-2 rounded-md shadow transition">Добавить задачу</a>

        <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden mt-4">
            <table class="w-full table-auto">
                <thead class="bg-teal-500">
                <tr>
                    <th class="px-4 py-2 text-left text-white">#</th>
                    <th class="px-4 py-2 text-left text-white">Задача</th>
                    <th class="px-4 py-2 text-left text-white">Статус</th>
                    <th class="px-4 py-2 text-right text-white">Действие</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach($todos as $todo)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-gray-700">{{ $todo->id }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $todo->title }}</td>
                        <td class="px-4 py-3">
                            @if($todo->is_done)
                                <span class="inline-block bg-green-100 text-green-800 px-2 py-1 rounded">Выполнено</span>
                            @else
                                <span class="inline-block bg-yellow-100 text-yellow-800 px-2 py-1 rounded">В работе</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right flex justify-end gap-4">
                            <a href="{{ route('todos.edit', $todo) }}" class="text-teal-600 hover:text-teal-800">✏️</a>
                            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-700">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $todos->links() }}
        </div>
    </div>
@endsection
