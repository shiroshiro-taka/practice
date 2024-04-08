@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <h2 class="mb-4 ms-4">商品情報編集画面</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="product_id" class="form-label">ID</label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <input type="number" class="form-control" id="product_id" name="product_id" value="{{ $product->id}}" required>
                                </div>
                            </div>    
                            <div class="row g-3 align-items-center">    
                                <div class="col-auto mb-3 w-25">
                                    <label for="product_name" class="form-label">商品名<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="company_id" class="form-label">メーカー名<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <select class="form-select" id="company_id" name="company_id">
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ $product->company_id == $company->id ? 'selected' : ''}}>{{ $company->company_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="price" class="form-label">価格<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                                </div>
                            </div>    

                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="stock" class="form-label">在庫数<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
                                </div>
                            </div>    

                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="comment" class="form-label">コメント</label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <textarea id="comment" name="comment" class="form-control" rows="3">{{ $product->comment }}</textarea>
                                </div>
                            </div>    

                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3 w-25">
                                    <label for="img_path" class="form-label">商品画像</label>
                                </div>
                                <div class="col-auto mb-3 w-75">    
                                    <input id="img_path" type="file" name="img_path" class="form-control">
                                    <img src="{{ asset($product->img_path) }}" alt="商品画像" class="product-image">
                                </div>
                            </div>    

                            <button type="submit" class="btn btn-warning btn-sm mx-1">更新</button>
                            <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mx-1">戻る</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    