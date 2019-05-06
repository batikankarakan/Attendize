@extends('Shared.Layouts.MasterWithoutMenus')

@section('title')
    @lang("GeoSnapShot")
@stop


@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel">
                <div class="panel-body">
                    <h1 class="text-center"><b>Event</b></h1>
                    <div style="font-family: Roboto; font-size: 18px">
                        <div><b>Name:</b> {{$model->name}}</div>
                        <div><b>E-mail:</b> {{$model->email}}</div>
                        <div><b>Phone Number:</b> {{$model->phoneNumber}}</div>
                        <div><b>Event Name:</b> {{$model->eventName}}</div>
                        <div><b>Event Link:</b>http://GeoSnapShot.com/e/{{$model->eventLink}}</div>
                        <div><b>Location:</b> {{$model->location}}</div>
                        <div><b>Country</b> {{$model->country}}</div>
                        <div><b>Number of participant:</b> {{$model->participant}}</div>
                        <div><b>Request number:</b> {{$model->numberOfPhoto}}</div>
                        <div><b>Type of event:</b> {{$model->typeOfEvent}}</div>
                        <div><b>Note:</b> {{$model->note}}</div>
                        <div><b>Facebook URL:</b> {{$model->facebookURL}}</div>
                        <div><b>Website URL:</b> {{$model->websiteURL}}</div>
                        <div><b>Password:</b> {{$model->password}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
