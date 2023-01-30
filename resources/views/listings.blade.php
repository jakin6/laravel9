 {{$heading}}
{{-- @if(count($listings)==0)
 <p>No listings found</p>
@endif --}}

@unless(count($listings)==0)
@foreach($listings as $listing)
<h2>
    <a href="/listings/{{$listing['id']}}">
        {{$listing['title']}}
    </a>
    
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach    
@else
<p>No listings found</p> 
{{-- @endif --}}
@endunless

{{-- @foreach($listings as $listing)
   <h2> {{$listing['title'];}}</h2>
    <p>{{$listing['description']}}</p>
@endforeach --}}