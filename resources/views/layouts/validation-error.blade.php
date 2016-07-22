@if($errors->any())
	<div class="row">
        <div class="flash-notice flash-notice--error u-display-n" data-behavior="flash_notice" >
            <div class="flash-notice" data-behavior="flash_notice">
                <div class="flash-notice__content">
                	@foreach ($errors->all() as $error)
                		<span class="flash-notice__icon"></span> 
	                	{{ $error }} <br>
	            	@endforeach
                </div>

            </div>
        </div>
    </div>
@endif
