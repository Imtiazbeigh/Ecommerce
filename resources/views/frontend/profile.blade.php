@php
    $total=0;
    $shipping_charge=25;
@endphp

<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    @include('frontend.partials.header')
    <section class="banner">
        <div class="container-wrap">
            <h1>User Profile</h1>
        </div>
</section>


    <section class="checkout">
        <div class="container-wrap" >
            <div class="row-wrap" id="user-info">
                <div class="checkout-form">
                    <div class="user-information">
                    <div class="user-profile">
                        <div class="user-img">
                            <img src="{{ asset('frontend_assets/images/vintage5.jpg') }}" alt="{{$customer->firstname}}">
                            <strong>James Carl</strong>
                        </div>
                        <div class="user-details">
                            <ul>
                                
                                <li><strong>Email: </strong> <span>James@email.com</span></li>
                                <li><strong>Phone: </strong> <span>+44 12344678</span></li>
                                <li><strong>Address: </strong> <span>London, UK</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="loyal-points">
                        <ul>
                            <li><strong>Loyalty Points: </strong><span>125</span></li>
                            <li><strong> Earned Points:</strong><span>200</span></li>
                            <li><strong> Referals: </strong><span>10</span></li>
                        </ul>
                    </div>
                    </div>
</div>
                    <div class="user-update">
                        <div class="login" id="update">
                    <div class="login-form">
                    <form>
                    <div class="input-wrap">
                        <label for="Email">Upload Image</label>
                        <input type="file" placeholder="upload Image">
                    </div>
                    <div class="input-wrap">
                        <label for="dob">Date Of Birth</label>
                        <input type="text" placeholder="D O B">
                    </div>
                    <div class="input-wrap">
                        <label for="dob">Address</label>
                        <input type="text" placeholder="address">
                    </div>
                    <button class="btns">Update</button>

                </form>
</div>
                    </div>
                    </div>



                </div>

            </div>
        </div>
    </section>
    @include('frontend.partials.footer')
</body>

</html>