
@extends('layouts.contactus')

@section('content')
    <div class="well">

    <p>
    <ul>
        @foreach( $errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
    </p>


        </div>
    <h2>Create Contact Us</h2>

    {!! Form::model(new App\Contact, ['route' => ['contacts.store']]) !!}
        @include('contacts/partials/_form', ['submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection
{{--

<p>
<ul>
 @foreach( $errors->all() as $error )
<li>{{$error}}</li>
@endforeach
</ul>
</p>--}}
