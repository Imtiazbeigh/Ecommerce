<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    @include('frontend.partials.header')
    <section class="banner">
        <div class="container-wrap">
            <h1>Login</h1>
        </div>
</section>
    <section class="login">
        <div class="container-wrap">


            <div class="login-form">
            @if(session('erros'))
                <div class="alert alert-danger" id="status-message">
                    <ul>
                       
                            <li>Fill Correct Username and Password</li>
                        
                    </ul>
                </div>
                @endif
          
                <form>
                    <div class="input-wrap">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="Enter Email">
                    </div>
                    <div class="input-wrap">
                        <label for="Password">Password</label>
                        <input type="text" placeholder="Enter Password">
                    </div>
                    <button class="btns">Login</button>

                    <a class="btn" href="{{route('user.register')}}">Register</a>



                </form>


            </div>
    </section>
   @include('frontend.partials.footer')
</body>

</html>