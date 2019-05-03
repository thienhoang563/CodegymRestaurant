@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Danh Sách Đặt Bàn</h1>
        <div>
            <div>
                @if(Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('success')}}
                    </p>
                @endif
                @if(Session::has('error'))
                    <p class="text-dark">
                        <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('error')}}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nhà Hàng</th>
                    <th scope="col">Ngày đặt bàn</th>
                    <th scope="col">Giờ đặt</th>
                    <th scope="col">Số lượng khách</th>
                    <th scope="col">Mô tả bàn ăn</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                @forelse($tables as $table)
                    <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td>{{ $table->name }}</td>
                        <td>{{$table->phone}}</td>
                        <td>{{$table->email}}</td>
                        <td>{{ $table->restaurant_branch}}
                        <td>{{$table->order_date}}</td>
                        <td>{{$table->hour}}</td>
                        <td>{{$table->num_of_customers}}</td>
                        <td>{{$table->desc}}</td>
                        <td><a href="{{route('admin.order-table.destroy',$table->id)}}" class="btn btn-danger"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa bàn này?')"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @empty
                    <tr>
                        <td>{{'No data!'}}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

