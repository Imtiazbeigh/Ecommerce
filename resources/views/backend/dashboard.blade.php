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
                            <div class="gb-icons">
                            <i class="fa-solid fa-user"></i>
                            <h4>Total Customers</h4>
                            </div>
                       
                            <span>{{$customers->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">
                        <div class="item">
                        <div class="gb-icons">
                        <i class="fa-solid fa-users"></i>
                            <h4>Total Staffs</h4>
</div>
                            <span>{{$staffs->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">


                        <div class="item">
                        <div class="gb-icons">
                        <i class="fa-solid fa-sitemap"></i>
                            <h4>Total Products</h4>
</div>
                            <span>{{$products->count()}}</span>
                        </div>

                    </div>
                    <div class="game-box">


                        <div class="item">
                        <div class="gb-icons">
                        <i class="fa-solid fa-layer-group"></i>
                            <h4>Total Orders</h4>
</div>
                            <span>{{$orders->count()}}</span>
                        </div>

                    </div>
                </div>
            </div>


        <table>
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Total Products</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
            </tr>
        </tbody>

    </table>
        </div>

    </div>


</body>

</html>
