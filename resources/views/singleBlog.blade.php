@extends("master")
@section("konten")

@foreach($data as $s)
	<div class="col-md-12">
		@section("judul",$s->judul)
		<span class="badge badge-primary mb-3">Node js</span>
    	<img class="img-thumbnail" src="https://cdn-images-1.medium.com/max/1200/0*udqKV8dsTEnBeKRm.png">
	</div>
    <div class="col-md-12 text-justify">{{$s->isi}}</div>	
	<div class="col-md-12 col-sm-12 col-xs-12 mb-5">
		<hr class="mt-3 mb-3">
		<h2>Komentar</h2>
		<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			var disqus_config = function () {
			this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = '{{$s->slug}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://bloglaravel-7.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			                            
		</div>
@endforeach
@endsection

