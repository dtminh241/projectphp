@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('orderdetail-edit',$id) }}" method="post">
        @csrf
        <input type="number" name="idedit" value="{{ $idedit }}" hidden>
        <div class="mb-3">
            <label for="" class="form-label">Product</label>
            <select name="ticket" class="form-select">
                @foreach ($dataTicket as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input class="form-control" type="number" name="quantity" value="{{ $dataOrderdetail->quantity }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Date ordered</label>
            <input class="form-control" type="datetime" name="date" value="{{ $dataOrderdetail->updated_at }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Edit</button>
        </div>
    </form>
    <a href="{{ route('administrator-orderdetail',$idedit)}}" style="color: blue">Back orderdetail</a>
</div>
@endsection

@section('js')
    
@endsection