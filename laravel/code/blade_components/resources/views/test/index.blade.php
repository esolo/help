@extends('layout.main')
@section('content')
<div>
    <form method="POST" action="{{route('tests.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <x-form.input name="name" label="Name" />
        </div>

        <div>
            <x-form.password name="password" label="Password" />
        </div>

        <div>
            <x-form.email name="email" label="Email" placeholder="example@gmail.com" />
        </div>

        <div>
            <x-form.textarea name="text" label="Text area"></x-form.textarea>
        </div>

        <br>
        <div>
            <x-form.checkbox name="remember" label="Remember me" />
        </div>

        <br>
        <div>
            <x-form.select name="select" label="Select" value="2" :options="[null=>'please select option', 1=>'one', 2=>'two', 3=>'three']" />
        </div>

        <div class="mb-3">
            <x-form.file name="filename" label="Select file" multiple />
        </div>

        <div>
            <x-form.radio-group name="radiogroup" value="2" :options="[1=>'radio 1', 2=>'radio 2', 3=>'radio 3']">Radio group</x-form.radio-group>
        </div>

        <br>
        <div>
            <x-form.radio-button-group name="buttongroup" value="2" :options="[1=>'radio 1', 2=>'radio 2', 3=>'radio 3']">Radio group</x-form.radio-button-group>
        </div>

        <br>
        <div>
            <x-form.button class="btn btn-outline-primary">Button</x-form.button>
        </div>

        <br>
        <div>
            <x-form.switch name="switch1" label="Default switch checkbox input" />
            <x-form.switch name="switch2" label="Checked switch checkbox input" checked />
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <x-form.submit class="btn btn-warning">Send</x-form.submit>
        </div>
    </form>

</div>
@endsection
