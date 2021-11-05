@extends('layout.main')
@section('title', 'Homepage')
@section('mainContent')
    <div class="container">
        <h3 class="comics__title">Current series</h3>
        <ul class="comics__list">
            @foreach ($comics as $item)
            <li class="list__item">
                <div class="item__img">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                </div>
                <h5 class="item__title">{{$item['title']}}</h5>
            </li>
            @endforeach
        </ul>
        <div class="main__btn">
            <button type="button" class="btn btn--fill btn--padding--lg">load more</button>
        </div>
    </div>
@endsection
