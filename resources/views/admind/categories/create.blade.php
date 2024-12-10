@extends('admind.template')

@section('content')

    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Add New Category</h1>
        </div>

        <!-- Form Add Category -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Category Name -->
                <div class="mb-4">
                    <label for="category_name" class="block text-gray-700 font-bold">Category Name</label>
                    <input type="text" id="category_name" name="category_name"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('category_name') border-red-500 @enderror"
                        placeholder="Enter category name" value="{{ old('category_name') }}">
                    @error('category_name')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4">
                    <button type="submit"
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Save</button>
                    <button type="reset"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Reset</button>
                </div>
            </form>
        </div>
    </div>

