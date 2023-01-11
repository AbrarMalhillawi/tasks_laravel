@extends('layaout.master')

@foreach ($pp as $array)
<div>
    {{$array['name']}} made in {{$array['origin']}}
</div>
@endforeach
{{-- 

@foreach ($welcom as $arr)
<div>
    {{$arr['name']}} made in {{$arr['origin']}}
</div>
@endforeach  --}}