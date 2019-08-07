@extends('layouts.app')

@section('title', 'Hata! Bir şeyler ters gitti.')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Hata! Bir şeyler ters gitti.</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="font-size:24px;margin:0;padding:0;line-height:normal;text-align:center;">Üzgünüz Böyle Bir Sayfa Yok !</p>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
