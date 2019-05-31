@extends("master")

@section("judul","Tutorial pemrograman laravel")

@section("konten")
        <div class="card-columns">
            @foreach($blog as $a)  
            <div class="card">
                <img class="card-img-top img-thumbnail" src="https://cdn-images-1.medium.com/max/1200/0*udqKV8dsTEnBeKRm.png" alt="">
                <div class="card-body">
                <span class="badge badge-primary mb-3">Node js</span>
                    <div class="card-title"><h3>{{$a->judul}}</h3></div>
                    <div class="card-text">{{str_limit($a->isi,"50")}}</div>
                    <a href="blog/{{$a->slug}}" class="btn btn-danger btn-sm mt-4">Readmore.</a>
                </div>
            </div>
            @endforeach
        </div>
@endsection

