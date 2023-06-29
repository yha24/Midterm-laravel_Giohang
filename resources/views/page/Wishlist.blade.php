@extends('master')
@section('content')
    <div class="wishlist">

        @if (Session::has('Wishlist'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Promotion_price</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_id as $products)
                        <tr>
                            <td>
                                <a class="pull-left" href="/page"><img src="source/image/product/{{ $products['item']['image'] }}" alt="" width="100px" height="100px"></a>
                            </td>
                            <td>{{ $products['item']['name'] }}</td>
                            <td>{{ $products['item']['description'] }}</td>
                            <td>{{ $products['item']['promotion_price'] }}</td>
                            <td>{{ $products['item']['unit'] }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
