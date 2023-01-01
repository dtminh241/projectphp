@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-heading">
    <form action="{{ route('administrator-order') }}" method="post">
        @csrf
        <input type="search" name="search" id="search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>RollNo</th>
                <th>Customer Name</th>
                <th>Total price</th>
                <th>Date</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->id }}
                    <div class="detail">
                        <a href="{{ route('administrator-orderdetail',$item->id) }}">product details</a>
                    </div>
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->updated_at }}</td>
                <td class="update" ><a href="{{ route('administrator-ordere',$item->id) }}"><button class="btn btn-primary" ><i class="fa-solid fa-pen"></i></button></a></td>
                <td class="delete" style="padding:8px 30px; width:70px;"><button class="btn btn-danger" onclick="deleteOrder({{ $item->id }})"><i class="fa-solid fa-circle-minus"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
@if (\Session::has('success')) 
    <script>
        alert("Edit order successfully !!! ");
    </script>
    @php
       \Session::forget('success'); 
    @endphp
@endif
<script>
    function deleteOrder(id) {
        var option = confirm("bạn có chắc muốn xoá");
        if (!option) return;

        $.post("{{ route('administrator-orderdelete') }}",{
            '_token':'{{ csrf_token() }}',
            'id':id
        },function(data){
            location.reload();
        })
    }
</script>
@endsection