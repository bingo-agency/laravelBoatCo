@include('partials/header')
@include('partials/headerPages')
<div class="container">
    <div class="row">
        <h2 class="center">Explore Catalouge</h2>

        @php
        $boats = collect($boats)->sortBy('price')->values()->all();
        @endphp
        @foreach ($boats as $boat)
        <div class="col s12 m4">    
            <div class="card" >
                <div class="card-image">
                    <img src="{{$boat['image_url']}}">
                    <span class="card-title">{{$boat['title']}}</span>
                </div>
                <div class="card-content">
                    <p>{{$boat['price']}}</p>
                </div>
                <div class="card-action">
                    <a href="/details/{{$boat->id}}">Details</a>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('partials/footer')