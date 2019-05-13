@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center card-header">※お探しのページは見つかりませんでした。</div>
                <div class="card-body row justify-content-center">
                <a href="/customer/index" class="btn btn-secondary col-8 mb-1" >常連様リスト</a>
                <a href="/memo/index" class="btn btn-secondary col-8" >タイムライン</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection