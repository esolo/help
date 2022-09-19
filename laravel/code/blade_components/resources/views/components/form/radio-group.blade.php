@props([
    'radioname' => $attributes['name'] ?? 'defaultName_' . Str::random(9),
    'options' => [],
    'value' => null,
])
@php
  $value = key_exists($attributes['name'], old()) ? old($attributes['name']) : $value;
@endphp
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
@unless(count($options))
    <b class="text-danger">Enter ":options" Attribute</b>
@endunless
@isset($slot)
    <label>{{$slot}}</label><br>
@endisset
@foreach($options as $key => $item)
    <div>
        <x-form.radio {{$attributes->merge([
            'name'=>$radioname,
            'checked'=>($key==$value),
            'value'=>$key,
        ])}}>{{$item}}</x-form.radio>
        <label class="form-check-label" for="flexRadioDefault1">
            {{$item}}
        </label>
    </div>
@endforeach
