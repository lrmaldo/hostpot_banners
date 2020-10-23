@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
        <strong>{{ $message }}</strong>
</div>
<script>
  $(function() {
var alert = $('div.alert[auto-close]');
alert.each(function() {
  var that = $(this);
  var time_period = that.attr('auto-close');
  setTimeout(function() {
    that.alert('close');
  }, time_period);
});
});
</script>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible" role="alert" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
        <strong>{{ $message }}</strong>
</div>
<script>
  $(function() {
var alert = $('div.alert[auto-close]');
alert.each(function() {
  var that = $(this);
  var time_period = that.attr('auto-close');
  setTimeout(function() {
    that.alert('close');
  }, time_period);
});
});
</script>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible" role="alert" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
	<strong>{{ $message }}</strong>
</div>
<script>
  $(function() {
var alert = $('div.alert[auto-close]');
alert.each(function() {
  var that = $(this);
  var time_period = that.attr('auto-close');
  setTimeout(function() {
    that.alert('close');
  }, time_period);
});
});
</script>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible" role="alert" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
	<strong>{{ $message }}</strong>
</div>
<script>
  $(function() {
var alert = $('div.alert[auto-close]');
alert.each(function() {
  var that = $(this);
  var time_period = that.attr('auto-close');
  setTimeout(function() {
    that.alert('close');
  }, time_period);
});
});
</script>
@endif


@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
	Error
</div>

<script>
  $(function() {
var alert = $('div.alert[auto-close]');
alert.each(function() {
  var that = $(this);
  var time_period = that.attr('auto-close');
  setTimeout(function() {
    that.alert('close');
  }, time_period);
});
});
</script>

@endif