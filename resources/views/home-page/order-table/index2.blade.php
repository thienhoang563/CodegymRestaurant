<body style="background-image: url('https://watermark.lovepik.com/photo/00014/1597.jpg_wh1200.jpg')">
<link rel="stylesheet" href="{{asset('css/order-j-form.css')}}">
<link rel="stylesheet" href="{{asset('css/order-style.css')}}">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbee415a59dcb24"></script>
<link href="{{asset('css/order-style.css')}}" rel='stylesheet' type='text/css' media="all"/>
<h2 ><a style="color: #ff7d28" href="{{route('welcome')}}">Back</a></h2>
<h1 class="header-w3ls">Thông tin đặt bàn</h1>
<div class="content-w3ls">
    <div class="form-w3ls">
        <form action="{{route('home.confirm-table')}}" method="post" >
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
            @endif
            @csrf
            <div class="content-wthree1">
                <div class="form-control">
                    <div class="main-row">
                        <label class="header">Chọn cơ sở: <span>*</span></label>
                        <select name="restaurant_branch">
                            <option value="1">Lẩu Phan Moncity</option>
                            <option value="2">Lẩu Phan 2</option>
                            <option value="3">Lẩu Phan 3</option>
                            <option value="4">Lẩu Phan 4</option>
                            <option value="5">Lẩu Phan 5</option>
                            <option value="6">Lẩu Phan 6</option>
                        </select>
                        <i></i>
                        @if($errors->has('restaurant_branch'))
                            <span class="help-block" style="color: red">
                        <strong>{{$errors->first('restaurant_branch')}}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="grid-agileits1">
                    <div class="form-control">
                        <label class="header">Name <span>*</span></label>
                        <input type="text" id="name" name="name" placeholder="Tên khách hàng"
                               title="Please enter your Full Name" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <span class="help-block" style="color: red">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-control">
                        <label class="header">Phone :</label>
                        <input type="text" id="name" name="phone" placeholder="Phone" title="Please enter your Phone No"
                               value="{{old('phone')}}">
                        @if($errors->has('phone'))
                            <span class="help-block" style="color: red">
                        <strong>{{$errors->first('phone')}}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-control">
                        <label class="header">Email :</label>
                        <input type="email" id="name" name="email" placeholder="Mail@example.com"
                               title="Please enter a Valid Email Address" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <span class="help-block" style="color: red">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-control">
                        <label class="header">Order_Date: </label>
                        <input type="date" id="name" name="order_date" placeholder="Ngày đặt bàn"
                               title="Ngày đặt bàn">
                        @if($errors->has('order_date'))
                            <span class="help-block" style="color: red">
                        <strong>{{$errors->first('order_date')}}</strong>
                    </span>
                        @endif
                    </div>
                    <div class="form-control">
                        <div class="main-row">
                            <label class="header">Chọn giờ: <span>*</span></label>
                            <select name="order_hour">
                                <option selected>Chọn Giờ</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                            </select>
                            <i></i>

                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <label class="header">Quantity :</label>
                    <input type="text" id="name" name="num_of_customers" placeholder="Nhập số lượng khách"
                           title="Mời nhập số lượng khách" value="{{old('num_of_customers')}}">
                    @if($errors->has('num_of_customers'))
                        <span class="help-block" style="color: red">
                        <strong>{{$errors->first('num_of_customers')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-control">
                    <label class="header">Description:</label>
                    <textarea type="input" rows="4" id="name" name="desc" placeholder="Mô tả về bàn ăn"
                              title="Yêu cầu thêm về bàn ăn" style="margin: 0 0 16px; height: 142px; width: 518px;">

                    </textarea>
                </div>
            </div>
            <div class="w3ls-btn">
                <div class="wthreesubmitaits">
                    <input type="submit" value="Đặt bàn" onclick="return confirm('Bạn có chắc chắn về thông tin đặt bàn không?')">
                </div>
            </div>
        </form>
    </div>
</div>
@include('home-page.fb-chat')
</body>

