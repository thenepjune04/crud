<h1>Create New Vehicle</h1>

<a href="{{ url('/') }}/vehicle" >Back</a>

<form method="POST" action="{{ url('/vehicle') }}" >
    {{ csrf_field() }}
    {{ method_field('POST') }}

    @include ('vehicle.form')

    <input type="submit" value="Save">
</form>
