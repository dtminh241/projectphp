@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>RollNo</th>
            <th>Name</th>
            <th>Email</th>
            <th style="width:10%">Permission</th>
            <th>Edit</th>
            <th>Change password</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <form action="{{ route('user-permissionedit') }}" method="POST">
                        @csrf
                        <input type="number" name="id" value="{{ $item->id }}" hidden>
                        <td style="text-align: center;padding-top:15px"><input type="range" name="permission" class="permission" max="2" min="1" value="{{ $item->permission_id }}" style="width:50%"></td>
                        <td style="padding:5px 30px; width:70px;"><button class="btn btn-success" ><i class="fa-solid fa-pen"></i></button></td>
                    </form>
                    <form action="{{ route('user-changepass') }}" method="post">
                        @csrf
                        <input type="number" name="id" value="{{ $item->id }}" hidden>
                        <td style="padding:5px 30px; width:70px;"><button class="btn btn-primary" ><i class="fa-solid fa-pen"></i></button></td>
                    </form>
                    <td style="padding:5px 30px; width:70px;"><button class="btn btn-danger" onclick="deleteUser({{ $item->id }})"><i class="fa-solid fa-circle-minus"></i></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
@if (\Session::has('error')) 
    <script>
        alert("ERROR!!! Old password ");
    </script>
    @php
       \Session::forget('error'); 
    @endphp
@endif
@if (\Session::has('success')) 
    <script>
        alert("Change password successfully !!! ");
    </script>
    @php
       \Session::forget('success'); 
    @endphp
@endif
    <script>
        function deleteUser(id) {
            var option = confirm("bạn có chắc muốn xoá");
            if (!option) return;

            $.post("{{ route('user-delete') }}",{
                '_token':'{{ csrf_token() }}',
                'id':id
            },function(data){
                location.reload();
            })
        }
    </script>
@endsection