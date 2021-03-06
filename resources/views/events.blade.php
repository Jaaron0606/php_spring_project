@extends('layouts.page')

@section('title', 'Events')

@section('content')
	<h1>Events</h1>
	<h3>Choose a month to filter</h3>
	
	<form>
    <select class="form-control" name="month">
	    @foreach( $months as $month )
	      <option value="<?= $month ?>">
	      	<?= $month ?>
	      </option>
	    @endforeach
    </select>
    
    <button class="btn btn-primary btn-round" type="submit">Submit</button>
  	<a href="<?= explode('?', $_SERVER['REQUEST_URI'])[0] ?>" class="btn btn-primary btn-round btn-simple" role="button">
    		Clear filter
    </a>
  </form>
	
	<br>
	
	<ul>
		@foreach( $events as $event )
			<li>
			  <strong>
			    {{ $event->event_name }} hosted by {{ $event->group_name }}
		    </strong>
		    
		    <a href="{{ build_cal_url( $event ) }}" target="_blank">
  				<ul>
  					<li><strong>Time: </strong>{{ printTime( $event->time ) }}</li>
  				</ul>
				</a>
			</li>
		@endforeach
	</ul>
@endsection

