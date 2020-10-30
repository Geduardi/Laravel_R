@extends('layouts.main')

@section('title', 'Категории новостей')

@section('content')
    <div class="row">
    @foreach($categories as $category)

                    <div class="card col-sm-4" style="width: 18rem;">
                        <img src="{{ $category['photo'] }}" class="card-img-top" alt="{{ $category['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                            <p class="card-text">{{ $category['description'] }}</p>
                            <a href="{{ route('category.news', ['categoryId' => $category['id']]) }}" class="btn btn-primary">Читать</a>
                        </div>
                    </div>
    @endforeach
    </div>
@endsection

