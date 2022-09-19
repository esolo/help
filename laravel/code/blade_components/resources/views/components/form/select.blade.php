@props([
    'id' => trim($attributes['name']) . '_' . Str::random(12),
    'options' => [],
    'value' => null,
])
@php
    $value = old($attributes['name'], $value);
@endphp
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
@isset($attributes['label'])
    <label for="{{$id}}">{{$attributes['label']}}</label>
@endisset
<select {{$attributes->merge([
    'class'=>'form-select',
    'id'=>$id
])}}>
    @foreach($options as $key => $option)
        <option value="{{$key}}" @selected($key==$value)>{{$option}}</option>
    @endforeach
</select>
