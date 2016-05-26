<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
	
	<div style="width: 100%; height: 100px; background: #333;"></div>
	
	@yield('body')
	
	<div style="width: 100%; height: 50px; background: #333;"></div>
	
	<form>
		{{ method_field('delete')}}
		{{csrf_field() }}
	</form>
	
	
    </body>
</html>