@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Author
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a>
				
			</div>
		</div>

		<div class="panel-body">

				<div class="form-group">
					<label class="control-lable">Nama </label>
					<input type="text" name="a" value="{{$auth->name}}" class="form-control" readonly="">
				</div>
				
				
				</div>
			</form>
		</div>
		
	</div>
</div>
@endsection