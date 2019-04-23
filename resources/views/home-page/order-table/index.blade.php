@include('home-page.header')
<br>
<br>
<br>
<br>
<div class="container">
    <form method="post" action="{{route('home.confirm-table')}}">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
        @endif
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" placeholder="Phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Vui long chon mot nha hang</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Order_Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" placeholder="Ngay dat ban">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>So luong khach</option>
                    <option value="1">1 khach</option>
                    <option value="2">2 khach</option>
                    <option value="3">3 khach</option>
                    <option value="4">4 khach</option>
                    <option value="5">5 khach</option>
                    <option value="6">6 khach</option>
                    <option value="7">7 khach</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="desc" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-success">Order</button>
        </div>
    </form>
</div>
@include('home-page.footer')
