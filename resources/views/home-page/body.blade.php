<link href="{{ asset('css/body.css') }}" rel="stylesheet">
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://nhahangvip.com/public/images/tin-tuc/nha-hang-hop-thuy-mai-chau-hoa-binh/nh%C3%A0%20h%C3%A0ng%20h%E1%BB%A3p%20th%E1%BB%A7y.gif" class="img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:red">NỘI THẤT SANG TRỌNG</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.hoteljob.vn/files/h%E1%BA%A3i%20y%E1%BA%BFn/th%C3%A1ng%207/nghiep-vu-nha-hang.jpg" class="img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: red;">PHỤC VỤ TẬN TÌNH</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://1.bp.blogspot.com/-8lwYHyHe5Qw/Ww-yyKWXljI/AAAAAAAAGCw/cDw955K9MZ4a1kO6ntPtZThGnvezowdjACLcBGAs/s1600/nha-hang-am-thuc-viet-ngon-mon-viet-hap-dan-tai-hcm-9.jpg" class="img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:red">MÓN ĂN HẤP DẪN</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fruid" style="padding: 30px;">
    <div class="row">
        <div class="col-md-8">
            <img src=http://asyvina.net/wp-content/uploads/2013/05/thiet-ke-noi-that-nha-hang-dep2.jpg" alt="" style="width: 100%; height: 550px">
        </div>
        <div class="col-md-4">
            <div class="container">
            <b>Nội thất cao cấp: <br/></b>
            Được thiết kế bởi chuyên gia với nguyên liệu gỗ chất lượng. Chúng tôi xin cam kết đảm bảo trải nghiệm tốt nhất cho thực khách tại nhà hàng.
            <br/>
            <a class="btn btn-lg btn-success" href="#"> XEM THÊM</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fruid" style="padding: 30px">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
            <b>Phục vụ tận tình: <br/></b>
            Đội ngũ nhân viên lịch sự, chuyên nghiệp, được đào tạo bài bản. Chúng tôi luôn đặt khách hàng vào vị trí cao nhất
            để phục vụ thật chu đáo và đem lại sự hài lòng cho những ai tới đây.
            <br/>
            <a class="btn btn-lg btn-success" href="#"> XEM THÊM</a>
            </div>
        </div>
        <div class="col-md-8">
            <img src="https://hotelcareers.vn/Uploads/images/kien-thuc-nganh-khach-san/mot-so-phuong-phap-dao-tao-nhan-vien-nha-hang-1.jpg" alt="" style="width: 100%; height: 550px">
        </div>
    </div>
</div>
<div class="container-fruid" style="padding: 30px">
    <div class="row">
        <div class="col-md-8">
            <img src="https://scratchtapas.com/wp-content/uploads/2018/09/Tong-hop-cac-mon-an-ngon-tu-thit-heo-dinh-nhat-800x416.jpg" alt="" style="width: 100%; height: 550px">
        </div>
        <div class="col-md-4">
            <div class="container">
            <b>Thực đơn phong phú: <br/></b>
            Nhà hàng có thực đơn lên đến 96 món ăn của đủ các vùng miền từ bắc vào nam và
            liên tục cập nhật, sẵn sàng mang đến cho khách hàng những món ăn ngon, lạ miệng, khó quên.
            <br/>
            <a class="btn btn-lg btn-success" href="{{ url('/food-page') }}">XEM DANH SÁCH</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fruid" style="padding: 30px">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
            <b>Đặt bàn Online: <br/></b>
            Nhà hàng đã phát triển chức năng đặt bàn Online. Quý khách hoàn toàn có thể đặt trước chỗ ngồi, món ăn và thời
            gian trước khi tới ăn. Việc đặt bàn hoàn toàn đơn giản, nhanh chóng và tiện lợi.
            <br/>
            <a class="btn btn-lg btn-success" href="{{route('home.order-table') }}">ĐẶT BÀN LUÔN</a>
            </div>
        </div>
        <div class="col-md-8">
            <img src="{{asset('image/dat_ban_online.jpg')}}" alt="" style="width: 100%; height: 550px">
        </div>
    </div>
</div>

