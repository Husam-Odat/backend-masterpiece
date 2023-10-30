@extends('Dash.Master')

@section('Title')
    Dashbored
@endsection

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <table class="table">

                    <thead>
                        <tr>
                            <th style="color: rgb(9, 9, 66);">UserName</th>
                            <th style="color: rgb(9, 9, 66);">payments.amount</th>
                            <th style="color: rgb(9, 9, 66);">payments.status</th>
                            <th style="color: rgb(9, 9, 66);">payments.provider</th>
                            <th style="color: rgb(9, 9, 66);">shipments.country</th>
                            <th style="color: rgb(9, 9, 66);">shipments.state</th>
                            <th style="color: rgb(9, 9, 66);">shipments.postalCode</th>
                            <th style="color: rgb(9, 9, 66);">products.name</th>
                            <th style="color: rgb(9, 9, 66);">products.SKU</th>
                            <th style="color: rgb(9, 9, 66);">products.price</th>
                            <th style="color: rgb(9, 9, 66);">products.weight</th>

                            {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->amount }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->provider }}</td>
                                <td>{{ $user->country }}</td>
                                <td>{{ $user->postalCode }}</td>
                                <td>{{ $user->total }}</td>
                                <td>{{ $user->SKU }}</td>
                                <td>{{ $user->price }}</td>
                                <td>{{ $user->weight }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
