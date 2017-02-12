@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row ">
            <div class="col-md-11">

                <h4 style="display:inline ">

                    @foreach ($singlemovie[0]->genre_array as $gen)
                        @foreach($gen as $gen1)
                            @if(is_string($gen1))
                            {{ $gen1 }} </br>
                            @endif
                        @endforeach
                    @endforeach
                </h4>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">

                <img style="height:400px;width:400px" src="{{$singlemovie[0]->base_url . $singlemovie[0]->image}}" alt="">
            </div>
            <div class="col-md-7 col-md-offset-1">
                <h3>{{$singlemovie[0]->title}}</h3>
                <br>
                <p>{{$singlemovie[0]->overview}}</p>

                <hr>

                <div class="row">
                    <div class="col-md-2">
                        <span class="glyphicon glyphicon-star" style="color:yellow ;  font-size: 45px" ></span>
                    </div>
                    <p> &nbsp;&nbsp;     7.0 / 10 </p>
                    <p> of 380 ratings</p>
                </div>
                <hr>

                <div class="checkbox">
                    <h4>Watched :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value=""></h4>
                </div>
                <br>
                <div class="col-md-2">
                    <div class="dropdown ">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Rate:
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu ">
                            <li><a href="1">1</a></li>
                            <li><a href="2">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-default">Rate this movie!</button>



            </div>




        </div>
    </div>
@endsection