@props([
    'id' => $attributes['id'] ?? 'random_id_' . Str::random(12),
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
<input type="radio" class="btn-check" id="{{$id}}" name="{{$attributes['name']}}" value="{{$attributes['value']}}" @checked($attributes['checked'])>
<label {{$attributes->merge([
    'class' => $attributes['class'] ?? 'btn btn-outline-primary',
    'for' => $id,
])->except(['name', 'checked'])}}>{{$slot}}</label>
