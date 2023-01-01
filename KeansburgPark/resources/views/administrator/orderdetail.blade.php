@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>RollNo</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Date_order</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->order_id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->time_order_tiket }}</td>
                <td class="update" ><a href="{{ route('administrator-orderdetaile',[$item->order_id,$item->id]) }}"><i class="fa-solid fa-pen"></i></a></td>
                <td class="delete"><a href="{{ route('administrator-orderdetaildelete',[$item->order_id,$item->id]) }}"><i class="fa-solid fa-circle-minus"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('administrator-order') }}" style="color: blue">Back order</a>
</div>
@endsection

@section('js')
    <script>
        
    </script>
    
@endsection