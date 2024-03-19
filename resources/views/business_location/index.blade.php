@extends('layouts.app')
@section('title', __('business.business_locations'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang( 'business.business_locations' )
        <small>@lang( 'business.manage_your_business_locations' )</small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
    @component('components.widget', ['class' => 'box-primary', 'title' => __( 'business.all_your_business_locations' )])
    @slot('tool')
    <div class="box-tools">
        <button type="button" class="btn btn-block btn-primary btn-modal" data-href="{{action([\App\Http\Controllers\BusinessLocationController::class, 'create'])}}" data-container=".location_add_modal">
            <i class="fa fa-plus"></i> @lang( 'messages.add' )</button>
            
            
    </div>
    @endslot
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="business_location_table">
            <thead>
                <tr>
                    <th>@lang( 'invoice.name' )</th>
                    <th>@lang( 'lang_v1.location_id' )</th>
                    <th>@lang( 'business.landmark' )</th>
                    <th>@lang( 'business.city' )</th>
                    <th>@lang( 'business.zip_code' )</th>
                    <th>@lang( 'business.state' )</th>
                    <th>@lang( 'business.country' )</th>
                    <th>@lang( 'lang_v1.price_group' )</th>
                    <th>@lang( 'invoice.invoice_scheme' )</th>
                    <th>@lang('lang_v1.invoice_layout_for_pos')</th>
                    <th>@lang('lang_v1.invoice_layout_for_sale')</th>
                    <th>@lang( 'messages.action' )</th>
                </tr>
            </thead>
        </table>
    </div>
    @endcomponent

    <div class="modal fade location_add_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
    <div class="modal fade location_edit_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->

@endsection

@section('javascript')
<!-- <script>
    $(document).keypress(
        function(event) {
            if (event.which == '13') {
                event.preventDefault();
            }
        });

    function initMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(p) {
                var lat = Number($('#lat').val())
                var lng = Number($('#lng').val())
                const myLatlng = {
                    lat: lat,
                    lng: lng
                };


                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10,
                    center: myLatlng,
                    mapTypeControl: false,
                    streetViewControl: false,

                });

                // var input = document.getElementById('searchTextField');
                // var autocomplete = new google.maps.places.Autocomplete(input);
                // const geocoder = new google.maps.Geocoder();

                // document.getElementById("searchTextField").addEventListener("keyup", () => {
                //     geocodeAddress(geocoder, map);
                // });

                // document.getElementById("searchTextField").addEventListener("change", () => {
                //     geocodeAddress(geocoder, map);
                // });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lng),
                    map: map,
                    title: 'Set lat/lon values for this property',
                    draggable: true,
                    streetViewControl: false,

                });

                google.maps.event.addListener(marker, 'dragend', function(event) {
                    document.getElementById("lat").value = this.getPosition().lat();
                    document.getElementById("lng").value = this.getPosition().lng();
                    GetAddress(new google.maps.LatLng(marker.getPosition().lat(), marker.getPosition().lng()))
                });

                google.maps.event.addListener(map, 'click', function(event) {
                    $('#lat').val(event.latLng.lat())
                    $('#lng').val(event.latLng.lng())
                    marker.setPosition(event.latLng);
                    map.setCenter(event.latLng);
                    map.setZoom(10);
                    GetAddress(new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()))
                });
            });
        }
    }

    function GetAddress(latlng) {
        var geocoder = geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'latLng': latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                    $("textarea#text").value = results[1].formatted_address;
                    document.getElementById("address").value = results[1].formatted_address;
                    document.getElementById("searchTextField").value = results[1].formatted_address;
                }
            }
        });
    }

    function geocodeAddress(geocoder, resultsMap) {
        const address = document.getElementById("searchTextField").value;
        geocoder.geocode({
            address: address
        }, (results, status) => {
            if (status === "OK") {

                $('#lat').val(results[0].geometry.location.lat())
                $('#lng').val(results[0].geometry.location.lng())

                resultsMap.setCenter(results[0].geometry.location);


                const myLatlng = {
                    lat: results[0].geometry.location.lat(),
                    lng: results[0].geometry.location.lng()
                };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10,
                    center: myLatlng,
                    mapTypeControl: false,
                    streetViewControl: false,

                });
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
                    map: map,
                    title: 'Set lat/lon values for this property',
                    draggable: true,
                    streetViewControl: false,
                });

                google.maps.event.addListener(marker, 'dragend', function(event) {
                    document.getElementById("latitude").value = this.getPosition().lat();
                    document.getElementById("longitude").value = this.getPosition().lng();
                });

                google.maps.event.addListener(map, 'click', function(event) {
                    $('#lat').val(event.latLng.lat())
                    $('#lng').val(event.latLng.lng())
                    marker.setPosition(event.latLng);
                    map.setCenter(event.latLng);
                    map.setZoom(18);
                });
            } else {
                // alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYugMkEQTvSJa9xsKlA2ixqZD7UFCeOtU&callback=initMap" type="text/javascript"></script> -->
@endsection