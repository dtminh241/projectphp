@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-heading">
    <form action="{{ route('administrator-product') }}" method="post">
        @csrf
        <input type="search" name="search" id="search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <a href="{{ route('administrator-productadd') }}"><button class="btn btn-success">Add</button></a>
</div>
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->discount }}</td>
                <td>{{ $item->description }}</td>
                <td><img src="{{ $item->thumbnail }}" alt=""></td>
                <td class="update" ><a href="{{ route('administrator-producte',$item->id) }}"><button class="btn btn-primary" ><i class="fa-solid fa-pen"></i></button></a></td>
                <td class="delete" style="padding:8px 30px; width:70px;"><button class="btn btn-danger" onclick="deleteProduct({{ $item->id }})"><i class="fa-solid fa-circle-minus"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
@if (\Session::has('success')) 
    <script>
        alert("Edit product successfully !!! ");
    </script>
    @php
       \Session::forget('success'); 
    @endphp
@endif
@if (\Session::has('successadd')) 
    <script>
        alert("Add product successfully !!! ");
    </script>
    @php
       \Session::forget('successadd'); 
    @endphp
@endif
<script>
    function deleteProduct(id) {
        var option = confirm("bạn có chắc muốn xoá");
        if (!option) return;

        $.post("{{ route('administrator-productdelete') }}",{
            '_token':'{{ csrf_token() }}',
            'id':id
        },function(data){
            location.reload();
        })
    }
</script>
@endsection