@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Travel Package {{ $items->title }}</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>  
            </div>
        @endif
        
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('transaction.update', $items->id) }}" method="post">
                @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="transaction_status">Status</label>
                        <select name="transaction_status" required class="form-control">
                            <option value="{{ $items->transaction_status }}">Dont change ({{ $items->transaction_status }}) </option>
                            <option value="IN_CART">In cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Save Change
                    </button>
                </form>
            </div>
        </div>
        

    </div>
@stop


