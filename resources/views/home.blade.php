@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-center">
        <div class="col-3 pt-5">
            <img class="img-fluid rounded-circle" style="height: 150px" src="https://instagram.fhan1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83208229_610461463127738_5831234148106240_n.jpg?_nc_ht=instagram.fhan1-1.fna.fbcdn.net&_nc_ohc=O68xLuCEpI4AX8L9dTZ&oh=67e4bd1c45bc84e49e951c6ec25ae0df&oe=5F6AB46B" alt="">
        </div>
        <div class="col-9 pt-5">
            <div ><h1> {{  $user->username}} </h1></div>
            <div class="d-flex">
                <div class=""><strong>117</strong>Posts</div>
                <div class="pl-5"><strong>582a3</strong>followers</div>  
                <div  class="pl-5"><strong>921</strong>following</div>      
            </div>    
            <div>
           
                <strong>. lannhi .</strong>
            </div>
            <div><small>Followed by LONG</small></div>
        </div>    
    </div>
</div>
@endsection
