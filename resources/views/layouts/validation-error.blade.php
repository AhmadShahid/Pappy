@if (count($errors) > 0)
    <div class="row">
    	<div class="col col_12_of_12">
		    <div class="alert callout">
		        <ul class="alert alert-danger">
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</div>
	</div>
@endif
