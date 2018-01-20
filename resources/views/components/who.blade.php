@if(Auth::guard('web')->check())
<p class="text-success">
   You are Logged In as <b>USER</b>
</p>
@else
<p class="text-danger">
   You are Logged Out as <b>USER</b>
</p>
@endif

@if(Auth::guard('admin')->check())
<p class="text-success">
   You are Logged In as <b>ADMIN</b>
</p>
@else
<p class="text-danger">
   You are Logged Out as <b>ADMIN</b>
</p>
@endif
