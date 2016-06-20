@include('includes.html_head')
@include('includes.header')
<!--Materi website-->
<div class="container bg-putih">
	<div class="col-lg-8">
		<div class="wrapper">
		<script>
		    $(document).ready(function () {
		        $(".@yield('menu')").addClass("active");
		        console.log('test');
		    });
		</script>
			@yield('content')
		</div>
	</div>
	@include('includes.widget')
</div>
@include('includes.footer')
@include('includes.html_foot')