@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block mb-1 text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" required `value="{{ old('title', $task->title) }}" `class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="description" class="block mb-1 text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" required rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
        </div>

        <div>
            <label for="long_description" class="block mb-1 text-sm font-medium text-gray-700">Long Description</label>
            <textarea name="long_description" id="long_description" required rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('long_description', $task->long_description) }}</textarea>
        </div>

        <div>
            <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded-md hover:bg-green-700 transition">Update Task</button>
        </div>
    </form>
</div>
@endsection
