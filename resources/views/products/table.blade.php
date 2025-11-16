@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Products List</h3>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Name</th>
                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Description</th> --}}
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Category</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Brand</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="align-middle text-center">
                                {{$product->id}}
                            </td>
                            <td class="align-middle text-center">
                                {{$product->name}}
                            </td>
                            {{-- <td class="align-middle text-center">
                                {{$product->description}}
                            </td> --}}
                            <td class="align-middle text-center">
                                {{$product->price}}
                            </td>
                            <td class="align-middle text-center">
                                {{$product->category_id}}
                            </td>
                            <td class="align-middle text-center">
                                {{$product->brand_id}}
                            </td>
                            <td class="align-middle text-center">
                                {{$product->created_at}}
                            </td>
                            <td class="align-middle text-center">
                                {{$product->updated_at}}
                            </td>
                            <td>
                                <a style="color:red" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
