@include('partials/header')
@include('partials/headerPages')
<div class="container">
    <div class="row">
        <div class="col m6 s12">
            google maps or image.
            <div style="height:400px;background-color: #eee;padding:100px;">
            </div>
        </div>
        <div class="col m6 s12">
            Form for email .
            <h3>Get inTouch</h3>
            <form>
                <input type="text" placeholder="Name"/>
                <input type="text" placeholder="Email"/>
                <textarea id="textarea1" style="height:100px;" placeholder="Message" class="materialize-textarea"></textarea>
                <button class="btn green">Send</button>

            </form>
        </div>
    </div>
</div>
@include('partials/footer')