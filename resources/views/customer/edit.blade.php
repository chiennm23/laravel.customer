@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa thông tin khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customer.update', $customer->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" value="{{$customer->name}}" name="name"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" value="{{$customer->email}}" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" value="{{$customer->dob}}" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa Chỉ</label>
                        <input type="text" class="form-control" value="{{$customer->address}}" name="address" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
