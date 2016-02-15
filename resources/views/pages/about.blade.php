@extends('main')

@section('title','| About')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>About Me</h1>
    <p>Hi my name is {{ $data['fullname'] }}, you can contact me on my email: <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur quas quibusdam veniam sunt animi, est quos optio explicabo deleniti inventore unde minus, tempore enim ratione praesentium, cumque, dolores nesciunt?</p>
  </div>
</div>

@endsection

    