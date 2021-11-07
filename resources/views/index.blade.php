@extends('layout.main')
@section('title', 'Homepage')
@section('mainContent')
    <div class="comics">      
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
    </div>
    <div class="shop">
        <div class="container">
            <ul class="shop__list">
                <li class="list__item">
                    <a href="#">
                        <div class="item__img">
                            <img src="{{asset("images/buy-comics-digital-comics.png")}}" alt="digital-comics">
                        </div>
                        <p>digital comics</p>
                    </a>
                </li>
                <li class="list__item">
                    <a href="#">                            
                        <div class="item__img">
                            <img src="{{asset("images/buy-comics-merchandise.png")}}" alt="comics-merchandise">
                        </div>
                        <p>ddc merchandise</p>
                    </a>
                </li>
                <li class="list__item">
                    <a href="#">                        
                        <div class="item__img">
                            <img src="{{asset("images/buy-comics-subscriptions.png")}}" alt="comics-subscriptions">
                        </div>
                        <p>subscription</p>
                    </a>
                </li>
                <li class="list__item">
                    <a href="#">
                        <div class="item__img">
                            <img src="{{asset("images/buy-comics-shop-locator.png")}}" alt="comics-shop-locator">
                        </div>
                        <p>comic shop lcoator</p>
                    </a>
                </li>
                <li class="list__item">
                    <a href="#">
                        
                        <div class="item__img">
                            <img src="{{asset("images/buy-dc-power-visa.svg")}}" alt="dc-power-visa">
                        </div>
                        <p>dc power visa</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
