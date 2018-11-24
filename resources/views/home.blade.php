@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('purchases.create') }}" class="btn btn-dark">Create Purchase</a>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Buyer</td>
                                <td>Car Name</td>
                                <td>Car Model</td>
                                <td>Amount Purchased</td>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($purchases as $purchase)
                            <tr>
                                <td>{{ $purchase->buyer }}</td>
                                <td>{{ $purchase->car->name }}</td>
                                <td>{{ $purchase->car->model }}</td>
                                <td>{{ $purchase->amount }}</td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
