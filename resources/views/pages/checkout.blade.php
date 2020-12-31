@extends('layouts.checkout')
@section('title', 'Checkout')

@section('content')
<main>
   <section class="section-details-header"></section>
   <section class="section-details-content">
      <div class="container">
            <div class="row">
               <div class="col p-0">
                  <nav>
                        <ol class="breadcrumb">
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
                  </nav>
               </div>
            </div>
            <!-- Akhir Breadcrumb -->
            <!-- Awal Tabel -->
            <div class="row">
               <div class="col-lg-8 pl-lg-0">
                        <div class="card card-detail">
                           <h1>Who is Going?
                           <p class="mt-2">
                              Trip to Ubud. Bali, Indonesia
                           </p>     
                           <div class="attendee">
                              <table class="table table-responsive-sm text-center mt-4">
                              <thead>
                                    <tr>
                                       <td>Picture</td>
                                       <td>Name</td>
                                       <td>Nationality</td>
                                       <td>Visa</td>
                                       <td>Password</td>
                                       <td></td>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                       <td>
                                          <img src="/frontend/images/angga.png" height="60">
                                       </td>
                                       <td class="align-middle">
                                          Muhammad Angga
                                       </td>
                                       <td class="align-middle">
                                          CN
                                       </td>
                                       <td class="align-middle">
                                          N/A
                                       </td>
                                       <td class="align-middle">
                                       Active
                                       </td>
                                       <td class="align-middle">
                                          <a href="#">
                                                <img src="/frontend/images/ic_remove.png">
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="/frontend/images/jenny.jpg" height="60">
                                       </td>
                                       <td class="align-middle">
                                          Jenny
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
                                          <a href="#">
                                                <img src="/frontend/images/ic_remove.png">
                                          </a>
                                       </td>
                                    </tr>
                              </tbody>
                              </table>
                           </div>
                           <div class="member mt-3">
                              <h2>Add Member</h2>
                              <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="InputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                       <option value="VISA" selected>VISA</option>
                                       <option value="30 Days">30 Days</option>
                                       <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                       <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                       Add Now
                                    </button>
                              </form>
                              <h3 class="mt-2 mb-0 mt-3">
                                    Note
                              </h3>
                              <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Nomads.
                              </p>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4">
                        <div class="card card-detail card-right">
                           <h2>Checkout Informations</h2>
                           <table class="trip-informations">
                              <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                       2 Person
                                    </td>
                              </tr>
                              <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">
                                       $ 190,00
                                    </td>
                              </tr>
                              <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                       $ 100,00 / Person
                                    </td>
                              </tr>
                              <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                       $ 300,00
                                    </td>
                              </tr>
                              <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td width="50%" class="text-right text-total">
                                       <span class="text-blue">$ 279,</span>
                                       <span class="text-orange">99</span>
                                    </td>
                              </tr>
                           </table>
                        <hr/>
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                           Please complete your payment before to continue the wonderfull trip
                        </p>
                        <div class="bank">
                           <div class="bank-item pb-3">
                                 <img src="/frontend/images/ic_bank.png" alt="" class="bank-image">
                                 <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                       085716325140
                                       <br>
                                       Bank Central Asia
                                    </p>
                                 </div>
                                 <div class="clearfix"></div>
                           </div>
                              <div class="bank-item pb-3">
                                 <img src="/frontend/images/ic_bank.png" alt="" class="bank-image">
                                 <div class="description">
                                       <h3>PT Nomads ID</h3>
                                       <p>
                                          085817077541
                                          <br>
                                          Bank Mandiri Syariah
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                        </div>
                        </div>
                        <div class="join-container">
                           <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                           I Have Made Payment
                           </a>
                        </div>
                        <div class="text-center mt-3">
                           <a href="{{ route('detail') }}" class="text-muted">
                              Cancel Booking
                           </a>
                        </div>
                  </div>
               </div>
            </div>
      </section>
   </div>
</main>
@endsection

@push('prepend-style')
   <link rel="stylesheet" href="/frontend/libraries/combined/css/gijgo.min.css">
@endpush

@push('addon-script')
<script src="/frontend/libraries/combined/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            })
        });
    </script>
@endpush