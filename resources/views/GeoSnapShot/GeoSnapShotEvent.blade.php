@extends('Shared.Layouts.MasterWithoutMenus')

@section('title')
    @lang("Organiser.create_organiser")
@stop

@section('head')
    <style>
        .modal-header {
            background-color: transparent !important;
            color: #666 !important;
            text-shadow: none !important;;
        }
    </style>
    <script>
        @include('ManageOrganiser.Partials.OrganiserCreateAndEditJS')
    </script>

@stop

@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel">
                <div class="panel-body">
                    <h1 class="text-center"><b>Event</b></h1>

                    <h3 style="font-family: Roboto"><b>Name:</b> {{$model->name}}</h3>
                    <h3 style="font-family: Roboto"><b>E-mail:</b> {{$model->email}}</h3>
                    <h3 style="font-family: Roboto"><b>Phone Number:</b> {{$model->phoneNumber}}</h3>
                    <h3 style="font-family: Roboto"><b>Event Name:</b> {{$model->eventName}}</h3>
                    <h3 style="font-family: Roboto"><b>Event Link:</b> http://GeoSnapShot.com/e/{{$model->eventLink}}</h3>
                    <h3 style="font-family: Roboto"><b>Location:</b> {{$model->location}}</h3>
                    <h3 style="font-family: Roboto"><b>Country</b> {{$model->country}}</h3>
                    <h3 style="font-family: Roboto"><b>Number of participant:</b> {{$model->participant}}</h3>
                    <h3 style="font-family: Roboto"><b>Request number:</b> {{$model->numberOfPhoto}}</h3>
                    <h3 style="font-family: Roboto"><b>Type of event:</b> {{$model->typeOfEvent}}</h3>
                    <h3 style="font-family: Roboto"><b>Note:</b> {{$model->note}}</h3>
                    <h3 style="font-family: Roboto"><b>Facebook URL:</b> {{$model->facebookURL}}</h3>
                    <h3 style="font-family: Roboto"><b>Website URL:</b> {{$model->websiteURL}}</h3>
                    <h3 style="font-family: Roboto"><b>Password:</b> {{$model->password}}</h3>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
