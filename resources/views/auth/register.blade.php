@include('../partials/header')
<div class="container">
    <div class="row center">

        <h2>Register here !</h2>
        <form action="/regUser" method="post" style="padding:10px;padding-top:100px;">
            @csrf
            <input type="text" name="name" placeholder="Name" /> <br />
            <input type="email" name="email" placeholder="Email" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <br />
            <button class="btn green">Register</button>
            <hr style="max-width: 200px;"/>
            <a href="/login">Login</a> instead 
        </form>
    </div>
</div>
@include('../partials/footer')