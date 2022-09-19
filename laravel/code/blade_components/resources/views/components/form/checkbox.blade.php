@props([
    'id' => trim($attributes['name']) . '_' . Str::random(12),
    'on' => count(old()) ? !!old($attributes['name'], false) : !!$attributes['checked']
])
@unless($attributes['name'])
    <b class="text-danger">Enter "name" Attribute</b>
@endunless
<input type="checkbox" {{$attributes->merge([
    'class'=>'form-check-input',
])->filter(fn($value, $key)=>$key!='checked')}} id="{{$id}}" {{$on?'checked':''}}>
@isset($attributes['label'])
    <label class="form-check-label" for="{{$id}}">{{$attributes['label']}}</label>
@endisset
