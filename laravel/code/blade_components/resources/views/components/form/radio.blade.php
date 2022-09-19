@props([
    'id' => $attributes['id'] ?? 'random_id_' . Str::random(12),
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
<input type="radio" class="btn-check-input" id="{{$id}}" name="{{$attributes['name']}}" value="{{$attributes['value']}}" @checked($attributes['checked'])>
@isset($attributes['label'])
    <label class="form-check-label" for="flexRadioDefault1">{{$attributes['label']}}</label>
@endisset
