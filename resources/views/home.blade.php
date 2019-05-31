@extends("master")

@section("judul","Tutorial pemrograman laravel")
<div class="row">
@section("konten")
            @foreach($blog as $a)  
            <div class="col-md-4">
            <div class="card mb-3">
                <img class="card-img-top" src="https://cdn-images-1.medium.com/max/1200/0*udqKV8dsTEnBeKRm.png" alt="">
                <hr>
                <div class="card-body pb-5">
                <span class="badge badge-primary mb-3">Node js</span>
                    <div class="card-title"><h5><a href="blog/{{$a->slug}}" class="text-dark">{{$a->judul}}</a></h5></div>
                    <div class="card-text">{{str_limit($a->isi,"50")}}</div>
                </div>
            </div>
            </div>
            @endforeach
@endsection
</div>