@props([
    'id' => $attributes['id'] ?? 'random_id_' . Str::random(12),
    'value' => '',
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
@isset($attributes['label'])
    <label for="{{$id}}">{{$attributes['label']}}</label>
@endisset
<input type="text" {{$attributes->merge([
    'class'=>'form-control',
    'id' => $id,
    'value'=>key_exists($attributes['name'], old()) ? old($attributes['name']) : $value,
])}}>
