@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Brands List</h3>
            <a type="button" class="btn btn-success" href="{{ route('admin.brands.create') }}">Add new Brand</a>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"></th>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $brand->id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->name }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->created_at }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->updated_at }}
                            </td>
                            <td>
                                <form action="{{ route('admin.brands.delete', $brand) }}" method="POST" style="display:inline;">
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
            {{ $brands->links() }}
        </div>
    </div>
@endsection
