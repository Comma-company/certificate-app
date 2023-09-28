<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Minor Work</title>
    <style>
            page :first {
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:0px 20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                 header: html_formHeader;
               footer: html_formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }

            @font-face {
            font-family:Arial;
            src:'./Ayar/Arial.ttf';
          }

      body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 12px;
        /* background-color: #EAEAEA; */
      }
      table {
        border-collapse: collapse;
      }
/*       .page {
        width: 97%;
        margin-left: 1.5%;
        margin-top: 40px;
        font-family: "Cairo", sans-serif;
        font-family: "Open Sans", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Tajawal", sans-serif;
      } */
      .header-table {
        width: 100%;
      }
      .number-table tr td {
        width: 50%;
      }
      .number-table {
        border: solid 2px #00935f;
        padding: 0 !important;
        width: 100px;
        height: 40px;
        text-align: center;
        font-size: 18px;
        font-weight: 100;
        margin-left: 85%;
      }
      p,
      h4 {
        margin: 10px;
        padding: 0;
      }
      .green-table-headers {
        background-color: #00935f;
        text-align: left;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        padding: 12px 15px;
      }
      .border-table {
        border: solid 1px #00935f;
      }

      .sub-title-text {
        font-size: 12px;
        color: #00935f;
        text-align: left;
        font-weight: bold;
        padding-bottom: 10px;
      }
      .main-text {
        font-size: 12px;
        font-weight: 100;
        text-align: left;
        padding-bottom: 10px;
      }
      .content-text {
        font-size: 12px;
        text-align: left;
        padding-bottom: 10px;
      }
      .description-table tr th {
        text-align: left;
        padding: 5px;
        font-size: 12px;
      }
      .not-bold {
        font-weight: 100;
      }
      .page-number {
        border: 1px solid #000;
        width: 40px;
        height: 40px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="page">
        <htmlpageheader name="formHeader">

        <div style="margin: 10px 25px;  width: 100%;">
            <div style="float: left;width:40%;">
              @php
              $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 1);
              $electricBoardId = $firstCategory->pivot->electric_board_id;
              $item =  App\Models\ElectricBoard::where('id',$electricBoardId)->first();
          @endphp
          @if($item)
          <img src="{{ asset('uploads/images/electric/'.$item->image) }}" width="160px" height="60px">
          @endif
              {{-- @if(in_array("1", $electricBoardIds))
              <img src="{{ asset('uploads/images/electric/ELESSA.jpg') }}" width="160px" height="60px">
               @elseif(in_array("2", $electricBoardIds))
               <img src="{{ asset('uploads/images/electric/Stroma.png') }}" width="160px" height="60px">
               @elseif(in_array("3", $electricBoardIds))
               <img src="{{ asset('uploads/images/electric/Stroma.jpg') }}" width="160px" height="60px">
               @elseif(in_array("4", $electricBoardIds))
               <img src="{{ asset('uploads/images/electric/Stroma.jpg') }}" width="160px" height="60px">
               @elseif(in_array("5", $electricBoardIds))
               <img src="{{ asset('uploads/images/electric/Select.jpg') }}" width="160px" height="60px">
               @elseif(in_array("6", $electricBoardIds))
               <img src="{{ asset('uploads/images/electric/Napit.jpg') }}" width="160px" height="60px">
               @else
               <img src="{{ asset('uploads/images/electric/niceic-logo.jpg') }}" width="160px" height="60px">
                @endif --}}
            </div>
            <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
                <table style="border: 1px solid #00935f;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #00935f;">
                    <tr style="padding: 10px;">
                        <th style="padding: 10px;">
                            <div style="padding: 0 120px 0 0"><h3>{{$data->num_cert}}</h3></div>
                        </th>
                        <th bgcolor="#00935f" style="color: #fff; padding: 10px">
                            <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                        </th>
                    </tr>
                </table>
                <h2 style="color: #00935f; padding: 0; margin: 0; font-weight: 900;text-align: right">
                    MINOR ELECTRICAL INSTALLATION WORKS CERTIFICATE
                </h2>
                <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                    ssued in accordance with BS 7671: 2018+A2:2022 – Requirements
                    for Electrical Installations
                </p>
            </div>
            <div style="clear: both;"></div>
          </div>
      </htmlpageheader>
        <!--------------------- Part 1 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px; border: solid 1px #00935f;">
        <tr>
          <th class="green-table-headers" colspan="3">
            PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
            @php
        $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 1);
    @endphp
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;">
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE CONTRACTOR
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Registration No:{{ $firstCategory->pivot->license_number }}
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Company Name:{{ $data->user->company_name }}
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:{{$data->user->number_street_name.', '.$data->user->city}}
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:{{ $data->user->postal_code }}
                </th>
                <th class="main-text">
                  Tel No:{{ $data->user->phone }}
                </th>
              </tr>
            </table>
          </th>
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px 7px 32px 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE CLIENT
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Name:{{ $data->customer->name }}
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:{{$data->customer->street_num.', '.$data->customer->city}}
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:{{ $data->customer->postal_code }}
                </th>
                <th class="main-text">
                  Tel No:{{ $data->customer->contacts->first()->phone }}
                </th>
              </tr>
            </table>
          </th>
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE INSTALLATION
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Tenant Name:{{ $data->site->siteContact->f_name }}
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:{{$data->site->street_num.', '.$data->site->city}}
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:{{ $data->site->postal_code }}
                </th>
                <th class="main-text">
                  Tel No:{{ $data->site->siteContact->phone }}
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 2 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr>
          <th class="green-table-headers" colspan="3">
            PART 2 : DETAILS OF THE MINOR WORKS, SUPPLY CHARACTERISTICS AND
            EARTHING ARRANGEMENTS
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th style="text-align: left">
            <table style="margin: 0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  Description of Minor
                  Works: @if(isset($formData['description_minor_works']))
                  {{ getvalue('description_minor_works',$formData)}}
                  @endif
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 40px"
                  class="main-text"
                >
                  Date completed:@if(isset($formData['date_completed']))
                                 {{ getvalue('date_completed',$formData)}}
                                 @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 40px"
                  class="main-text"
                >
                  System type and earthing arrangements (e.g. TN C S / TN S /
                  TT): @if(isset($formData['system_type_and_earthing_arrangements']))
                      {{ getvalue('system_type_and_earthing_arrangements',$formData)}}
                   @endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Zs at Distribution Board / Consumer Unit supplying the final
                  circuit:@if(isset($formData['zs_distribution_board']))
                  {{ getvalue('zs_distribution_board',$formData)  }}
                  @endif
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px;">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 15px"
                  class="content-text"
                >
                  Presence of adequate main protective conductors
                </th>
                <th
                  style="padding-top: 5px; padding-right: 15px"
                  class="main-text"
                >
                  Earthing conductor:@if(isset($formData['earthing_conductor']))
                  {{ getvalue('earthing_conductor',$formData)}}
                  @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Protective bonding conductor(s) to: Water @if(isset($formData['water'])) {{ getvalue('water',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Gas @if(isset($formData['gas'])) {{ getvalue('gas',$formData)}} @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Oil {{ getvalue('oil',$formData)}}
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Other (state) @if(isset($formData['rotective_other'])){{ getvalue('rotective_other',$formData)}} @endif
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px;text-align: left;">
              <tr>
                <th style="padding-top: 5px;" class="content-text">
                    Comments on existing installation (see Reg. 644.1.2):
                    <span  class="main-text">
                      @if(isset($formData['comments_on_existing_installation'])){{ getvalue('comments_on_existing_installation',$formData)}} @endif
                    </span>
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  Details of any departures from BS 7671: 2018, as amended
                  to: @if(isset($formData['details_departures'])){{ getvalue('details_departures',$formData)}} @endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  (date) for the circuit altered or extended (Regulation 120.3,
                  133.1.3 &
                  133.5):@if(isset($formData['date_circuit_altered_or_extended'])){{ getvalue('date_circuit_altered_or_extended',$formData)}} @endif
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 30px"
                  class="main-text"
                >
                  Details of permitted exceptions (Regulation
                  411.3.3): @if(isset($formData['Details_of_permitted_exceptions'])) {{ getvalue('Details_of_permitted_exceptions',$formData)}} @endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Where applicable, risk assessment attached: @if(isset($formData['risk_assessment_attached_minor'])){{ getvalue('risk_assessment_attached_minor',$formData)}} @endif
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 3 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th
            style="border-bottom: 2px solid #00935f"
            class="green-table-headers"
          >
            PART 3 : CIRCUIT DETAILS
          </th>
          <th
            style="padding: 5px 20px; border-bottom: 2px solid #00935f"
            class="main-text"
          >
            DB/Consumer Unit: Ref No: @if(isset($formData['db_consumer_unit'])){{ getvalue('db_consumer_unit',$formData)}}@endif
          </th>
          <th
            style="padding-top: 5px; border-bottom: 2px solid #00935f"
            class="main-text"
          >Location and type :@if(isset($formData['location_and_type'])) {{ getvalue('location_and_type',$formData)}} @endif
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th style="text-align: left" colspan="3">
            <table style="margin: 0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  Circuit: @if(isset($formData['circuit_number'])){{ getvalue('circuit_number',$formData)}} @endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Description and Ref No: @if(isset($formData['circuit_description'])){{ getvalue('circuit_description',$formData)}} @endif
                  ...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  installation reference method: @if(isset($formData['installation_reference_method'])){{ getvalue('installation_reference_method',$formData)}}@endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Number of conductors: @if(isset($formData['Number_size_of_conductors'])) {{ getvalue('Number_size_of_conductors',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  Csa of conductors
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Live: @if(isset($formData['live'])) {{ getvalue('live',$formData)}} mm2 @endif
                </th>
                <th style="padding-top: 5px" class="main-text">
                  cpc: @if(isset($formData['cpc'])) {{ getvalue('cpc',$formData)}} mm2 @endif
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 200px"
                  class="content-text"
                >
                  Overcurrent protection device
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  RCD:  @if(isset($formData['rcd_bs_en'])){{ getvalue('rcd_bs_en',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 150px"
                  class="main-text"
                >
                  BS EN: @if(isset($formData['enovercurrent_bs_en'])) {{ getvalue('enovercurrent_bs_en',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: @if(isset($formData['overcurrent_type'])) {{ getvalue('overcurrent_type',$formData)}} @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Rating: @if(isset($formData['overcurrent_rating'])) {{ getvalue('overcurrent_rating',$formData)}}(A)@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 20px"
                  class="content-text"
                >
                  AFDD
                </th>
                <th style="padding-top: 5px" class="main-text">
                  BS EN:  @if(isset($formData['afdd_bs_en'])){{ getvalue('afdd_bs_en',$formData)}} @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: @if(isset($formData['afdd_type'])){{ getvalue('afdd_type',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Rating: @if(isset($formData['afdd_rating'])) {{ getvalue('afdd_rating',$formData)}}(A)@endif
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  BS EN: @if(isset($formData['spd_bs_en'])){{ getvalue('spd_bs_en',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: @if(isset($formData['spd_type'])){{ getvalue('spd_type',$formData)}}@endif
                </th>
                
                <th
                  style="padding-top: 5px; padding-right: 100px"
                  class="main-text"
                >
                  Rated residual operating current (I ∆ n): @if(isset($formData['spd_type'])){{ getvalue('spd_type',$formData)}} mA @endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 20px"
                  class="content-text"
                >
                  SPD
                </th>
                <th style="padding-top: 5px" class="main-text">
                  BS EN: @if(isset($formData['spd_bs_en'])){{ getvalue('spd_bs_en',$formData)}}@endif
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: @if(isset($formData['spd_type'])){{ getvalue('spd_type',$formData)}}@endif
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 4 ----------------------->
      <table style="width: 100%">
        <tr>
          <th style="width: 53%">
            <table
              class="border-table"
              style="width: 100%; margin-bottom: 15px"
            >
              <tr>
                <th class="green-table-headers" colspan="3">
                  PART 4 : TEST RESULTS FOR THE CIRCUIT ALTERED OR EXTENDED**
                </th>
              </tr>
              <tr style=" border: solid 1px #00935f;text-align: left">
                <th style="text-align: left">
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 90px"
                        class="content-text"
                      >
                        Continuity: @if(isset($formData['continuity'])){{ getvalue('continuity',$formData)}}@endif
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 40px"
                        class="main-text"
                      >
                        Protective conductor (R1 + R2): @if(isset($formData['protective_conductor_input'])){{ getvalue('protective_conductor_input',$formData)}}Ω @endif
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="main-text"
                      >
                        or
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        R2: @if(isset($formData['protective_conductor_r'])){{ getvalue('protective_conductor_r',$formData)}}Ω @endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="content-text"
                      >
                        Ring final circuit (loop values)
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="main-text"
                      >
                        L/L: @if(isset($formData['ring_ll'])){{ getvalue('ring_ll',$formData)}}Ω @endif
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="main-text"
                      >
                        N/N: @if(isset($formData['ring_nn'])){{ getvalue('ring_nn',$formData)}}Ω @endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        cpc/cpc: @if(isset($formData['ring_cpc'])) {{ getvalue('ring_cpc',$formData)}}Ω @endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="content-text"
                      >
                        Insulation Resistance***
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        L/L: @if(isset($formData['insulation_ring_ll'])){{ getvalue('insulation_ring_ll',$formData)}}MΩ @endif
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        L/E:@if(isset($formData['insulation_ring_le'])) {{ getvalue('insulation_ring_le',$formData)}}MΩ @endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Test voltage:  @if(isset($formData['insulation_test_voltage'])) {{ getvalue('insulation_test_voltage',$formData)}}V @endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        *** Where an agreed limitation is used provide details
                        on a separate page and append to the certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        Polarity
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Satisfactory: @if(isset($formData['polarity_satisfactory'])){{ getvalue('polarity_satisfactory',$formData)}} @endif
                      </th>
                      <th style="padding-top: 5px" class="content-text">
                        Maximum measured earth fault loop impedance Zs
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        @if(isset($formData['earth_fault_loop_impedance_zs'])) {{ getvalue('earth_fault_loop_impedance_zs',$formData)}}Ω @endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        Circuit protective devices functionality checks
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        RCD test button operation satisfactory:  @if(isset($formData['rcd_test'])) {{ getvalue('rcd_test',$formData)}} @endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        AFDD test button operation satisfactory (where
                        provided): @if(isset($formData['afdd_test'])) {{ getvalue('afdd_test',$formData)}}@endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        RCD disconnection time at I n: @if(isset($formData['rcd_disconnection_time'])) {{ getvalue('rcd_disconnection_time',$formData)}} ms @endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        SPD functionality confirmed (where indicator is
                        provided): @if(isset($formData['spd_functionality'])) {{ getvalue('spd_functionality',$formData)}}@endif
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="content-text"
                      >
                        Test Instrument: @if(isset($formData['test_instrumentother'])) {{ getvalue('test_instrumentother',$formData)}}@endif
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Multifunction: @if(isset($formData['multifunction'])){{ getvalue('multifunction',$formData)}}@endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Other(s)  (state):
                      </th>
                    </tr>
                  </table>
                 
                </th>
              </tr>
            </table>
          </th>

           <!--------------------- Part 5 ----------------------->
          <th style="width: 47%">
            <table class="border-table" style="width: 100%; margin-bottom: 15px">
              <tr>
                <th class="green-table-headers" colspan="3">
                  PART 5 : DECLARATION
                </th>
              </tr>
              <tr style=" border: solid 1px #00935f;text-align: left">
                <th style="text-align: left">
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        CERTIFY that the work covered by this certificate does
                        not impair the safety of the existing installation and
                        that the work has been designed,
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        constructed, inspected and tested in accordance with BS
                        7671: 2018, amended to (date) and that to the best of my
                        knowledge and belief, at the time of my inspection,
                        complied with BS 7671: 2018+A2:2022 except as detailed
                        in PART 2 of this certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                       Name :{{ getvalue('engineer_name',$formData['part_declaration'])}}
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        
                        Signature:
                        @if($data->user->signature)
                        <img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt="">
                        @endif
                        .for
                        and on behalf of the Contractor identified in PART 1 of
                        this Certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Position:{{ getvalue('engineer_position',$formData['part_declaration'])}}
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Date:{{ getvalue('engineer_date',$formData['part_declaration'])}}
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        The results of the inspection and testing reviewed by
                        the Qualified Supervisor
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        Name
                       {{ getvalue('customer_name', $formData['part_declaration']) }}
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px 7px 50px 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Signature:
                        @if ($data->customerSignature)
                        <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                        @endif
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Date:{{ getvalue('customer_date',$formData['part_declaration'])}}
                      </th>
                    </tr>
                  </table>
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>

      {{-- <table>
        <tr>
          <th>
            <table>
              <tr>
                <th class="main-text">**where relevant and practicable</th>
              </tr>
              <tr>
                <th class="main-text">
                  his certificate is based on the model forms shown in Appendix
                  6 of BS 7671: 2018+A2:2022
                </th>
              </tr>
              <tr>
                <th class="main-text">@Copyright 360 Connect (2023 August)</th>
              </tr>
            </table>
          </th>
          <th style="text-align: center; width: 300px; padding-left: 30px;" class="main-text">
            Enter a or value in the respective fields, as appropriate here an
            item is not applicable insert N/A
          </th>
        </tr>
      </table> --}}

      <htmlpagefooter name="formFooter">
        <table style="width: 100%; margin-left: 24px;">
        <tr>
            <td style="float: left; width:34%;">
              <p>Produced Using 360 Connect @</p>
            </td>
            <td style="float: left; width:34%;">
              <p>Expire At:{{ date('d-m-Y', strtotime($data->expire)) }}</p>
            </td>

            <td style="width: 25px; height: 25px; border: 1px solid; float: left; margin-left: 10px;margin-right:10px; text-align: center; padding-top: 5px;">
                {PAGENO}
            </td>

            <td style="float:left; margin-top: 10px; width:70px;margin-left:10px;">
              Page  Of {nbpg}
            </td>
        </tr>
        </table>
    </htmlpagefooter>
    </div>
  </body>
</html>
