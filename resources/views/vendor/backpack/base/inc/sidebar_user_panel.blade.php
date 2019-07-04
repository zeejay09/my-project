<div class="user-panel">
	<div class="image">
	  	<a class="image" href="{{ route('backpack.account.info') }}">
	    	<img src="{{ asset('img/profile.jpg') }}" class="img-circle" alt="User Image">
	  	</a>
  	</div>
  	<div class="pull-left info">
    	<p><a href="{{ route('backpack.account.info') }}">{{ backpack_auth()->user()->name }}</a></p>
  	</div>
  	<div class="pull-left smallinfo">
  		<small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
  	</div>
</div>