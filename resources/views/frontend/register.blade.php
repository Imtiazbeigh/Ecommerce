<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    @include('frontend.partials.header')
    <section class="banner">
        <div class="container-wrap">
            <h1>Register</h1>
        </div>
</section>

    <section class="login register">
        <div class="container-wrap">

            <div class="login-form">
                <form>
                    <div class="input-group">
                        <div class="input-wrap">
                            <label for="Email">Email</label>
                            <input type="text" placeholder="Enter Email">
                        </div>
                        <div class="input-wrap">
                            <label for="Password">Password</label>
                            <input type="text" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-wrap">
                            <label for="Email">Email</label>
                            <input type="text" placeholder="Enter Email">
                        </div>
                        <div class="input-wrap">
                            <label for="Password">Password</label>
                            <input type="text" placeholder="Enter Password">
                        </div>
                    </div>
                    <button class="btns">Register</button>
                    <a class="btn" href="login.html">Login</a>
                </form>
            </div>
        </div>

    </section>
    @include('frontend.partials.footer')
</body>

</html>