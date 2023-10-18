@include('partials/header')
<div id="index-banner" class="parallax-container" style="min-height: 80vh;width:100%">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center green-text text-lighten-2">Enhance your Boating Expeirence with us.</h1>
            <div class="row center">
                <h6 class="header col s12 light">The Boat Co. is a leading provider of high-quality boats and maritime solutions, offering a diverse catalog of watercraft for various needs and interests. Our commitment to innovation and excellence ensures an exceptional boating experience for all enthusiasts.</h6>
            </div>
            <div class="row center">
                <a href="/contact" id="download-button" class="btn-large waves-effect waves-light green lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/heroImage.jpeg') }}" class="thumbImage"  alt="Boat Co."></div>
</div>


<div class="container">
    <h2 class="center">Explore Catalouge</h2>
    <div class="row">
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


@auth
<div class="container">
    <h3>Add a new boat : </h3>

    <table>
        <form action="/createBoat" method="POST">
            @csrf
            <tr>
                <td>Image Link </td>
                <td><input type="text" name="image_url" placeholder="Image Url"/></td>
            </tr>
            <tr>
                <td>Title </td>
                <td><input type="text" name="title" placeholder="Title"/></td>
            </tr>
            <tr>
                <td>Price </td>
                <td><input type="number" name="price" placeholder="price" /></td>
            </tr>
            <tr>
                <td>&nbsp; </td>
                <td><button class="btn blue">Add New Boat</button></td>
            </tr>
        </form>
    </table>
</div>
@else
<!--<div class="max-w-7xl mx-auto p-6 lg:p-8">
    Not loggedin.
    <a href="/login">
        Login
    </a>
</div>    -->
@endauth


@include('partials/footer')