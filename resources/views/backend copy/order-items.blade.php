<!DOCTYPE html>
<html lang="en">

@include('backend.partials.head')

<body>

    <div class="admin">

        @include('backend.partials.sidebar')

        <div class="dashboard-info">
            @include('backend.partials.nav')
            <div class="wrap">
                <div class="title">
                    <h3>Order Details Lists</h3></div>
                <table>
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @php
                           $id = 1;
                       @endphp
                          @foreach ($order_items as $orderItem)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{ 'ORD_000'.$orderItem->order_id }}</td>
                            <td>{{ $orderItem->product->product_name}}</td>
                            <td>${{ $orderItem->product->base_price }}</td>
                            <td>{{ $orderItem->quantity }}</td>
                            <td>${{ $orderItem->total_amount }}</td>
                            <td>
                                <a href="# " class="edit ">Comfirmed</a>
                                <a href="# " class="del ">Cancelled</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>

        </div>

    </div>

    
</body>

</html>