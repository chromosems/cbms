@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="text-center">New Car Purchase</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ route('purchases.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Buyer Name</label>
                        <input type="text" class="form-control" placeholder="Buyer Name" name="buyer">
                    </div>
                    <div class="form-group">
                        <label for="">Car</label>
                        <select name="car" id="">
                            @foreach($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Purchase Amount</label>
                        <input type="text" class="form-control" placeholder="Purchase Amount" name="amount">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
@endsection

