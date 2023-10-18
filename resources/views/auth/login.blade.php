@include('../partials/header')
<div class="container">
    <div class="row center">
        <h2>Login</h2>
        @if ($errors->has('loginError'))
        <div class="alert alert-danger">
            {{ $errors->first('loginError') }}
        </div>
        @endif
        <form action="logUser" method="POST" style="padding:10px;padding-top:100px;">
            @csrf
            <input type="email" name="emailLogin" placeholder="Email" /><br />
            <input type="password" name="passwordLogin" placeholder="Password" /><br />
            <br />
            <button class="btn green">Login.</button><br />
            <hr  style="max-width:200px;"/>
            Register instead ? <a href="/register">Register</a>

        </form>
    </div>
</div>
@include('../partials/footer')