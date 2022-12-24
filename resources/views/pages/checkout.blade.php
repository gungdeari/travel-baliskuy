@extends('layouts.checkout')
@section('title', 'Checkout')

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
              <li class="breadcrumb-item">
                Details
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details ml-3">
              <h1>Who is Going</h1>
              <p>
                Trip to Ubud, Bali, Indonesia
              </p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nasionality</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/avatar1-fix.png') }}"
                      </td>
                      <td class="align-middle">
                        Angie Marcheria
                      </td>
                      <td class="align-middle">
                        ID
                      </td>
                      <td class="align-middle">
                        N/A
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href="">
                          <img src="{{ url('frontend/images/TandaX-fix.png') }}" 
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/avatar2-fix.png') }}"
                      </td>
                      <td class="align-middle">
                        Mutia Maharani
                      </td>
                      <td class="align-middle">
                        SG
                      </td>
                      <td class="align-middle">
                        30 Days
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href="">
                          <img src="{{ url('frontend/images/TandaX-fix.png') }}"
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form class="form-inline">
                  <label 
                    for="inputUsername" class="sr-only">Name
                  </label>
                  <input 
                    type="text" 
                    name="inputUsername"
                    class="form-control mb-2 mr-sm-2" 
                    id="inputUsername" 
                    placeholder="Username"
                  />

                  <label 
                    for="inputVisa" class="sr-only">Visa
                  </label>
                  <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                    <option value="VISA" selected>VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>
                  
                  <label for="doePassport" class="sr-only">DOE Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                  </div>

                  <button 
                    type="submit" 
                    class="btn btn-add-now mb-2 px-3"
                    >
                    Add Now
                  </button>
                </form>
                <h3 class="mt-3 mb-0">Note</h3>
                <p class="disclaimer mb-3">
                  You are only able to invite member that has registered in Baliskuyyy
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-details card-right">
                <h2>Checkout Informations</h2>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-right">
                      2 person
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Additional VISA</th>
                    <td width="50%" class="text-right">
                      $190.00
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right">
                      $80.00/person
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">
                      $280.00
                    </td>
                  </tr>
                  <tr>
                    <th width="50%">Total (+Unique)</th>
                    <td width="50%" class="text-right text-total">
                      <span class="text-blue">$279.</span><span class="text-red">33</span>
                    </td>
                  </tr>
                </table>
              <hr>
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue wonderful trip
              </p>
              <div class="bank">
                <div class="bank-item pb-2">
                  <img src="{{ url('frontend/images/bank1.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Menjelajah Bali Santuy</h3>
                    <p>
                      0897 2332 2313
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/bank2.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Menjelajah Bali Santuy</h3>
                    <p>
                      0998 2452 3333
                      <br>
                      Bank Rakyat Indonesia
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-2 my-2">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail') }}" class="text-muted">
              Cancel Booking
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
            uilibrary: 'bootstrap4',
            icons: {
              rightIcon: '<img src="{{ url('frontend/images/date.png') }}" height="30"/>'
            }
          })
        });
  </script>
@endpush