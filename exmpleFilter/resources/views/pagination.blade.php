<div >
	<div >
	 <h2>Search the Directory</h2>
	 <h6 >To search, you may select one or more of the categories below, and enter as many keywords in the search box. Then, just click the Search Button below. Keywords may include a name of a specific trainer, state or city.</h6>
	 <div >
	   <!-- Default form contact -->
	   <form action="{{ route('home') }}">
		@csrf
		
		
		<!-- State -->
		<h6 ><b >Trainer Location (STATE)</b></h6>
		<select name=state id="state">
		  <option selected disabled>Choose State</option>
		  @foreach ($states as $state)
		  <option value="{{ $state->id }}">{{ $state->name }}</option>
		  @endforeach
		</select>
  
		<h6 ><b >Trainer Location (City)</b></h6>
		<!-- City -->
		<select name=city id="city">
		  <option selected disabled>Choose City</option>
		  @foreach ($cities as $city)
		  <option value="{{ $city->id }}">{{ $city->name }}</option>
		  @endforeach
		</select>
		<!-- Send button -->
		<button type=submit>Search</button>
	   </form>
	 </div>
	</div>
  </div>
  <div >
	<!--about profile-->
	@foreach ($trainers as $trainer)
	<div >
	 <div >
	   <div >
		<img src="{{ asset($trainer->image) }}" alt="thumbnail" >
	   </div>
	   <a  href="{{ route('trainer.show', $trainer) }}">Visit Profile</a>
	 </div>
	 <div >
	   <h3 > {{ $trainer->name }}</h3>
	   <p >{!! str_limit($trainer->about, 200) !!}</p>
	   <h5>
		@foreach ($trainer->expertiseAreas as $area)
		<span >{{ $area->name }}</span>
		@endforeach
	   </h5>
	   <hr >
	 </div>
	</div>
	<!--about profile ends-->
	@endforeach
	{{ $trainers->appends($data)->links() }}
  </div>