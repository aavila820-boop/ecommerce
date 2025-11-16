@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Categories List</h3>
            <a type="button" class="btn btn-success" href="{{ route('admin.categories.create') }}">Add new category</a>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $category->id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->name }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->created_at }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->updated_at }}
                            </td>
                            <td>
                                <form action="{{ route('admin.categories.delete', $category) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color:red; background:none; border:none; cursor:pointer;">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
