@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-4 ms-4">商品新規登録画面</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="col-auto mb-3 w-25">
                                <label for="product_name" class="col-form-label">商品名<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto mb-3 w-75">    
                                <input id="product_name" type="text" name="product_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto mb-3 w-25">
                                <label for="company_id" class="form-label">メーカー名<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto mb-3 w-75">  
                                <select class="form-select" id="company_id" name="company_id">
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">   
                            <div class="col-auto mb-3 w-25">
                                <label for="price" class="form-label">価格<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto mb-3 w-75">    
                                <input id="price" type="text" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto mb-3 w-25">
                                <label for="stock" class="form-label">在庫数<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto mb-3 w-75">    
                                <input id="stock" type="text" name="stock" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto mb-3 w-25">
                                <label for="comment" class="form-label">コメント</label>
                            </div>
                            <div class="col-auto mb-3 w-75">    
                                <textarea id="comment" name="comment" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto mb-3 w-25">
                                <label for="img_path" class="form-label">商品画像</label>
                            </div>
                            <div class="col-auto mb- w-75">    
                                <input id="img_path" type="file" name="img_path" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-sm mx-1">新規登録</button>
                        <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mx-1">戻る</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


