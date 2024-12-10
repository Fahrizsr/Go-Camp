@extends('admind.template')

@section('content')

    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Add New Product</h1>
        </div>

        <!-- Form Add Product -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Product Image -->
                <div class="mb-4">
                    <label for="product_image" class="block text-gray-700 font-bold">Product Image</label>
                    <input type="file" id="product_image" name="product_image"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('product_image') border-red-500 @enderror">
                    @error('product_image')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Product Name -->
                <div class="mb-4">
                    <label for="product_name" class="block text-gray-700 font-bold">Product Name</label>
                    <input type="text" id="product_name" name="product_name"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('product_name') border-red-500 @enderror"
                        placeholder="Enter Product Name" value="{{ old('product_name') }}">
                    @error('product_name')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Product Description -->
                <div class="mb-4">
                    <label for="product_description" class="block text-gray-700 font-bold">Product Description</label>
                    <textarea id="product_description" name="product_description" rows="5"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('product_description') border-red-500 @enderror"
                        placeholder="Enter Product Description">{{ old('product_description') }}</textarea>
                    @error('product_description')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Stock -->
                <div class="mb-4">
                    <label for="stock" class="block text-gray-700 font-bold">Stock</label>
                    <input type="number" id="stock" name="stock"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('stock') border-red-500 @enderror"
                        placeholder="Enter Product Stock" value="{{ old('stock') }}">
                    @error('stock')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label for="id_category" class="block text-gray-700 font-bold">Category</label>
                    <select id="id_category" name="id_category"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('id_category') border-red-500 @enderror">
                        <option value="">Select Category</option>
                        @foreach($categories as $ctgry)
                            <option value="{{ $ctgry->id }}" {{ old('id_category') == $ctgry->id ? 'selected' : '' }}>
                                {{ $ctgry->category_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_category')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Unit Price -->
                <div class="mb-4">
                    <label for="unit_price" class="block text-gray-700 font-bold">Unit Price</label>
                    <input type="number" id="unit_price" name="unit_price"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none @error('unit_price') border-red-500 @enderror"
                        placeholder="Enter Product Price" value="{{ old('unit_price') }}">
                    @error('unit_price')
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

@endsection
