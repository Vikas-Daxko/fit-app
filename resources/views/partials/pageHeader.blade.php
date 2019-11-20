<div class="page-header">
<div class="row">
<div class="col-sm-11">
<h1>{{ $name }}</h1>
</div>
@if($isAdd)
<div class="col-sm-1">
<a href="{{ route($link) }}"  class="" style="cursor:pointer;">{{ $linkName }}</a>
</div>
@endif
</div>
</div>
@if($showHr)
<hr>
@endif