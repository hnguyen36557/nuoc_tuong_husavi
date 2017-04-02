<!--<?php //if(isset($message) && $message):?>
<div class="nNote nInformation hideit">
            <p><strong>Thông Báo:  </strong><?php //echo $message?></p>
</div>
<?php //endif;?>-->

<style type="text/css">
	.alert{
		width:100%;
	float:left;
	height:32px;
	background-color:#CEF6CE;
	color:#0B610B;
	padding-left: 40px;
	padding-top: 10px;
	}
</style>
<div id="dataTables-example">
	@if(Session::has('flash_message'))
        <div class="alert alert-{!! Session::get('flash_level') !!}" >
          {!! Session::get('flash_message') !!}
        </div>
      @endif
</div>