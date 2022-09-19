@props([
    'id' => trim($attributes['name']) . '_' . Str::random(12),
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
@php
    if($attributes->get('multiple') && !strpos($attributes['name'], ']')){
        $attributes['name'] .= '[]';
    }
@endphp
@isset($attributes['label'])
    <label for="{{$id}}">{{$attributes['label']}}</label>
@endisset
<input type="file" id="{{$id}}" {{$attributes->merge([
    'class'=>'form-control',
])
}}>
