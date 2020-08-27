@extends('layouts.app')

@section('content')
<style>
.profile {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}
</style>

<div class="container">
  <img style=" border-radius: 50%;" class="profile"   src="https://scontent.fktm7-1.fna.fbcdn.net/v/t1.0-0/p640x640/90623363_1893901404080439_5256386950591414272_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=1I9cJ76WUGYAX-SGVQ3&_nc_ht=scontent.fktm7-1.fna&tp=6&oh=e76a22eea5d9dcaa98ed45979e9ce12e&oe=5F6A9C39" width="150" height="150" alt="">
  @if ($id == 1)
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1 mb-1">{{ Auth::user($id1)->name }}</p>
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1 mb-1">{{  Auth::user($id1)->address }} | {{  Auth::user()->phone_number }}</p>
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1">{{ Auth::user($id1)->bio }}</p>
      
  @endif
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1 mb-1">{{ Auth::user($id = 2)->name }}</p>
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1 mb-1">{{  Auth::user($id =2 )->address }} | {{  Auth::user()->phone_number }}</p>
  <p style="text-align: center; font-size:20px; font-family:'Regular 400 italic';" class="ml-1">{{ Auth::user($id = 2)->bio2 }}</p>
</div>2
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand fa fa-pencil" href="/createpost/list">  Create Post</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container mt-3 pad-1">
  <div class="row">
    <div class="Col-4">
      <img style="border-radius: 50%"src="https://scontent.fktm7-1.fna.fbcdn.net/v/t1.0-0/p640x640/90623363_1893901404080439_5256386950591414272_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=1I9cJ76WUGYAX-SGVQ3&_nc_ht=scontent.fktm7-1.fna&tp=6&oh=e76a22eea5d9dcaa98ed45979e9ce12e&oe=5F6A9C39" width="50px" height="50px" alt="">
    </div>
    <div class="Col-8">
      <p mx-2><b>{{ Auth::user()->name }}</b></p><br>
      
    </div>
  </div>
  {{-- <p>{{$tittle}}</p>
  <p>{{$caption}}<p>
  <p>{{$description}}<p><br>
  <img src="{{assets($images)}}" width="150px" height="150px" alt=""> --}}

 

</div>



@endsection

