@extends('admind.template')

@section('content')
    <!-- Main Content -->
    <div class="content">

        <!-- Product Table -->
        <div class="table-container">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">Data Products</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Stock</th>
                        <th>Category Name</th>
                        <th>Unit Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('/storage/products/' . $product->product_image) }}" class="rounded"
                                    style="width: 80px; height: auto;">
                            </td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->Category->category_name }}</td>
                            <td>{{ 'Rp ' . number_format($product->unit_price, 2, ',', '.') }}</td>
                            <td class="flex space-x-2">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
                                <form onsubmit="return confirm('Are you sure?');"
                                    action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No products available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $products->links() }}
        </div>

        <!-- Add Product Button -->
        <div class="mt-4">
            <a href="{{ route('products.create') }}"
                class="bg-green-400 text-white py-2 px-4 rounded-md hover:bg-green-500">Add Product</a>
        </div>

    </div>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // SweetAlert messages
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection
