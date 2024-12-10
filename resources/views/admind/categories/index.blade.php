@extends('admind.template')

@section('content')
    <!-- Main Content -->
    <div class="content">

        <!-- Category Table -->
        <div class="table-container">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">Category Items</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                <form onsubmit="return confirm('Are you sure?');"
                                    action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No categories available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="mt-4">
            {{ $categories->links() }}
        </div>

        <div>
            <a href="{{ route('categories.create') }}"
                class="bg-green-400 text-white py-2 px-4 rounded-md hover:bg-green-500">Add Category</a>
        </div>
    </div>

