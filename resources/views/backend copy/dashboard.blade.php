<!DOCTYPE html>
<html lang="en">

@include('backend.partials.head')

<body>

    <div class="admin">

        @include('backend.partials.sidebar')

        <div class="dashboard-info">
            @include('backend.partials.nav')
            <h3>Dashboard</h3>
            <div class="dashboard-wrap">
                <div class="box-wrap">
                    <div class="game-box">
                        <div class="item">
                            <h4>Total Customers</h4>
                            <span>{{$customers->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">
                        <div class="item">
                            <h4>Total Staffs</h4>
                            <span>{{$staffs->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">


                        <div class="item">
                            <h4>Total Products</h4>
                            <span>{{$products->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">


                        <div class="item">
                            <h4>Total Orders</h4>
                            <span>{{$orders->count()}}</span>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>


</body>

</html>
