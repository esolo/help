@props([
    'id' => trim($attributes['name']) . '_' . Str::random(12),
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
@isset($attributes['label'])
<label for="{{$id}}">{{$attributes['label']}}</label>
@endisset
<textarea {{$attributes->merge([
    'class'=>'form-control',
    'id'=>$id
])}}>@if(key_exists($attributes['name'], old())){{old($attributes['name'])}}@else{{$slot}}@endif</textarea>
