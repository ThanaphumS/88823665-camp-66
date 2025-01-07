<h1>My View</h1>
<?php echo $value_id; ?>
{{ $value_id; }}|{{$myinput}}

<form action="{{url('/mycontroller')}}" medthod="post">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">submit</button>
</form>