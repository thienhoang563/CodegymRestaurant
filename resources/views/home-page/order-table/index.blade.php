@include('home-page.header')
<br>
<br>
<br>
<br>
<div class="text-center">
    <h3 style="color: firebrick">Thông tin đặt bàn</h3>
    {{'(Vui lòng điền đầy đủ thông tin)'}}
</div>
<div class="container">
    <form method="post" action="{{route('home.confirm-table')}}">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
        @endif
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Tên khách hàng">
                @if($errors->has('name'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                @if($errors->has('phone'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('phone')}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email">
                @if($errors->has('email'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <select class="custom-select my-1 mr-sm-2" name="restaurant_branch">
                    <option selected>Vui lòng chọn một nhà hàng</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                @if($errors->has('restaurant_branch'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('restaurant_branch')}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Order_Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" name="order_date" placeholder="Ngày đặt bàn">
                @if($errors->has('order_date'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('order_date')}}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-2">
                <select type="text" class="form-control" name="order_hour">
                    <option selected>Chọn Giờ</option>
                    <option value="11h">11:00</option>
                    <option value="11h30">11:30</option>
                    <option value="12h">12:00</option>
                    <option value="12h30">12:30</option>
                    <option value="18h">18:00</option>
                    <option value="18h30">18:30</option>
                    <option value="19h">19:00</option>
                    <option value="19h30">19:30</option>
                    <option value="20h">20:00</option>
                    <option value="20h30">20:30</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input class="form-control" name="num_of_customers">
                @if($errors->has('num_of_customers'))
                    <span class="help-block" style="color: red">
                        <strong>{{$errors->first('num_of_customers')}}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="desc" rows="4" placeholder="Mô tả chi tiết bàn ăn "></textarea>
            </div>
        </div>
        <div class="text-center"  >
            <button type="submit" class="btn btn-success" onclick="return confirm('Xin vui lòng kiểm tra lại thông tin đặt bàn!')">Đặt bàn</button>
        </div>

    </form>
</div>
@include('home-page.footer')
