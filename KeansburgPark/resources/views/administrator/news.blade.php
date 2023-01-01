@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-heading">
    <form action="{{ route('administrator-news') }}" method="post">
        @csrf
        <input type="search" name="search" id="search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <a href="{{ route('administrator-newsadd') }}"><button class="btn btn-success">Add</button></a>
</div>
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Date posted</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->note }}</td>
                <td>{{ $item->description }}</td>
                <td><img src="{{ $item->thumbnail }}" alt=""></td>
                <td class="update" ><a href="{{ route('administrator-newse',$item->id) }}"><button class="btn btn-primary" ><i class="fa-solid fa-pen"></i></button></a></td>
                <td class="delete" style="padding:8px 30px; width:70px;"><button class="btn btn-danger" onclick="deleteNews({{ $item->id }})"><i class="fa-solid fa-circle-minus"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
@if (\Session::has('success')) 
    <script>
        alert("Edit news successfully !!! ");
    </script>
    @php
       \Session::forget('success'); 
    @endphp
@endif
@if (\Session::has('successadd')) 
    <script>
        alert("Add news successfully !!! ");
    </script>
    @php
       \Session::forget('successadd'); 
    @endphp
@endif
<script>
    function deleteNews(id) {
        var option = confirm("bạn có chắc muốn xoá");
        if (!option) return;

        $.post("{{ route('administrator-newsdelete') }}",{
            '_token':'{{ csrf_token() }}',
            'id':id
        },function(data){
            location.reload();
        })
    }
</script>
@endsection