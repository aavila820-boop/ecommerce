@extends('layouts.app')
@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-gradient-primary text-white border-0">
                        <h3 class="mb-1 fs-4 fw-bold">Nuevo producto</h3>
                        <p class="mb-0 opacity-85 small">Registra los detalles principales para publicar tu producto.</p>
                    </div>
                    <div class="card-body bg-white">
                        <form action="{{ route('admin.products.store') }}" method="POST" class="row g-4">
                            @csrf

                            <div class="col-12">
                                <label for="productName" class="form-label text-uppercase fs-7 fw-semibold text-muted">Nombre del producto</label>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input id="productName" name="name" type="text" class="form-control form-control-lg" placeholder="Ej: Auriculares Lunaris" value="{{ old('name') }}" required>
                            </div>

                            <div class="col-12">
                                <label for="productDescription" class="form-label text-uppercase fs-7 fw-semibold text-muted">Descripción breve</label>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <textarea id="productDescription" name="description" class="form-control form-control-lg" rows="4" placeholder="Cuenta por qué este producto merece un lugar en el catálogo" required>{{ old('description') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="productPrice" class="form-label text-uppercase fs-7 fw-semibold text-muted">Precio (COP)</label>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input id="productPrice" name="price" type="number" step="0.01" min="0" class="form-control form-control-lg" placeholder="Ej: 250000" value="{{ old('price') }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="productStock" class="form-label text-uppercase fs-7 fw-semibold text-muted">Inventario disponible</label>
                                <input id="productStock" name="stock" type="number" min="0" class="form-control form-control-lg" placeholder="Ej: 12">
                            </div>

                            <div class="col-md-6">
                                <label for="productCategory" class="form-label text-uppercase fs-7 fw-semibold text-muted">Categoría</label>
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <select class="form-control" id="productCategory" name="category">
                                    <option value="">-- Category --</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ old('category') == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="productBrand" class="form-label text-uppercase fs-7 fw-semibold text-muted">Marca</label>
                                @error('brand')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <select class="form-control" id="productBrand" name="brand">
                                    <option value="">-- Brand --</option>
                                    @foreach ($brands as $item)
                                        <option value="{{ $item->id }}" {{ old('brand') == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="productImage" class="form-label text-uppercase fs-7 fw-semibold text-muted">URL de imagen</label>
                                <input id="productImage" type="url" class="form-control form-control-lg" placeholder="https://example.com/producto.jpg">
                            </div>

                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-secondary btn-lg">Limpiar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Guardar producto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
