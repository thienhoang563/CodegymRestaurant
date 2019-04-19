@section('content')
    <div class="title m-b-md">
        Danh sách đồ ăn:
    </div>
    <div class="col-6">

        <form class="navbar-form navbar-left" method="GET" action="">

            @csrf

            <div class="row">

                <div class="col-8">

                    <div class="form-group">

                        <label>
                            <input type="text" class="form-control" placeholder="Search" name="keyword">
                        </label>

                    </div>

                </div>

                <div class="col-4">

                    <button type="submit" class="btn btn-default">Tìm kiếm</button>

                </div>

            </div>

        </form>

    </div>

    <div class="row">

        @if(!isset($food) || count($food) === 0)
            <p class="text-danger">Không có món nào.</p>
        @else

            @foreach($food as $key => $mon_an)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mon_an->name }}</h5>
                            <p class="card-text">{{ $mon_an->food_description }}</p>
                            <p class="card-text text-dark">${{ $mon_an->food_type }}</p>
                            <p class="card-text text-danger">{{ $mon_an->food_cook }}</p>
                            <p class="card-text">{{ $mon_an->food_picture }}</p>
                            <p class="card-text">{{ $mon_an->food_price }}</p>
                            <p class="card-text">{{ $mon_an->food_rating }}</p>
                            <p class="card-text">{{ $mon_an->food_status }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
    {{ $food->appends(request()->query()) }}
    <a href="{{ route('welcome') }}" class="btn btn-danger">< Home </a>
@endsection
