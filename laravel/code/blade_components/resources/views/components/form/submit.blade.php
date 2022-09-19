<button type="submit" {{$attributes->merge([
    'class'=> $attributes['class'] ?? 'btn btn-primary'
])}}>{{$slot}}</button>
