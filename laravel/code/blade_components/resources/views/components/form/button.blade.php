<button type="button" {{$attributes->merge([
    'class'=> $attributes['class'] ?? 'btn btn-primary'
])}}>{{$slot}}</button>
