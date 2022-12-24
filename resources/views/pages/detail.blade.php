@extends('layouts.app')
@section('title', ' Detail Travel')

@section('content')

    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
        <div class="container">
            <div class="row">
            <div class="col p-0">
                <ol class="breadcrumb ml-3">
                <li class="breadcrumb-item">
                    Paket Travel
                </li>
                <li class="breadcrumb-item active">
                    Details
                </li>
                </ol>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details ml-3">
                <h1>Ubud, Bali</h1>
                <p>
                    Republic of Indonesia Raya
                </p>
                <div class="gallery">
                    <div class="xzoom-container">
                    <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom" id="xzoom-default"
                        xoriginal="frontend/images/details.jpg">
                    </div>
                    <div class="xzoom-thumbs">
                    <a href="{{ url('frontend/images/thumbs1.jpg') }}">
                        <img src="{{ url('frontend/images/thumbs1.jpg') }}" class="xzoom-gallery" width="124.5"
                        xpreview="{{ url('frontend/images/thumbs1.jpg') }}">
                    </a>
                    <a href="{{ url('frontend/images/thumbs2.jpg') }}">
                        <img src="{{ url('frontend/images/thumbs2.jpg') }}" class="xzoom-gallery" width="124.5"
                        xpreview="{{ url('frontend/images/thumbs2.jpg') }}">
                    </a>
                    <a href="{{ url('frontend/images/thumbs3.jpg') }}">
                        <img src="{{ url('frontend/images/thumbs3.jpg') }}" class="xzoom-gallery" width="124.5"
                        xpreview="{{ url('frontend/images/thumbs3.jpg') }}">
                    </a>
                    <a href="{{ url('frontend/images/thumbs4.jpg') }}">
                        <img src="{{ url('frontend/images/thumbs4.jpg') }}" class="xzoom-gallery" width="124.5"
                        xpreview="{{ url('frontend/images/thumbs4.jpg') }}">
                    </a>
                    <a href="{{ url('frontend/images/thumbs5.jpg') }}">
                        <img src="{{ url('frontend/images/thumbs5.jpg') }}" class="xzoom-gallery" width="124.5"
                        xpreview="{{ url('frontend/images/thumbs5.jpg') }}">
                    </a>
                    </div>
                </div>
                <h2>About Destination</h2>
                <p>
                    Ubud is a town on the Indonesian island of Bali in Ubud District, located amongst rice paddies and steep
                    ravines in the central foothills of the Gianyar regency. Promoted as an arts and culture centre, it has
                    developed a large tourism industry. It forms a northern part of the Greater Denpasar metropolitan area
                </p>
                <p>
                    Puri Saren Agung is a large palace located at the intersection of Monkey Forest and Raya Ubud roads. The
                    residence of Tjokorda Gede Agung Sukawati (1910–1978), the last ruling monarch of Ubud, it is still
                    owned by the royal family. Dance performances and ceremonies are held in its courtyard. The palace was
                    also one of Ubud first hotels, opening its doors back in the 1930s.
                </p>
                <div class="features row">
                    <div class="col-md-4">
                    <img src="{{ url('frontend/images/features1.png') }}" alt="" class="features-image">
                    <div class="description">
                        <h3>Featured Event</h3>
                        <p>Balinese Dance</p>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src="{{ url('frontend/images/features2.png') }}" alt="" class="features-image">
                        <div class="description">
                        <h3>Language</h3>
                        <p>Indonesian</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src="{{ url('frontend/images/features3.png') }}" alt="" class="features-image">
                        <div class="description">
                        <h3>Foods</h3>
                        <p>Ayam Betutu</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                    <img 
                    src="{{ url('frontend/images/member1.png') }}" 
                    class="member-image mr-1">
                    <img 
                    src="{{ url('frontend/images/member2.png') }}" 
                    class="member-image mr-1">
                    <img 
                    src="{{ url('frontend/images/member3.png') }}" 
                    class="member-image mr-1">
                    <img 
                    src="{{ url('frontend/images/member4.png') }}" 
                    class="member-image mr-1">
                    <img 
                    src="{{ url('frontend/images/member5.png') }}" 
                    class="member-image mr-1">
                </div>
                <hr>
                <h2>Trip Informations</h2>
                <table class="trip-information">
                    <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">
                        22 Dec, 2022
                    </td>
                    </tr>
                    <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">
                        5D 4N
                    </td>
                    </tr>
                    <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-right">
                        Open Trip
                    </td>
                    </tr>
                    <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">
                        $50,00 / person
                    </td>
                    </tr>
                </table>
                </div>
                <div class="join-container">
                <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 my-2">
                    Join Now
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>

@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/dist/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

    <!--Memanggil Xzoom-->
    <script>
        $(document).ready(function () {
            $('.xzoom, xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffest: 15
            });
        });
    </script>
@endpush