@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Buyer</td>
                                <td>Car Type</td>
                                <td>Car Model</td>
                                <td>Amount Purchased</td>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($purchases as $purchase)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
