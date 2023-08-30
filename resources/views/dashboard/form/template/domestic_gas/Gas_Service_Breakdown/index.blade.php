<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<style>
     @page :first {
                header: html_formHeader;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: portrait; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                header: html_formHeader;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: portrait; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
        @font-face {
        font-family:fontawesome;
        src: url("{{ asset('admin/fonts/gnu-free-font/fa-solid-900.ttf') }}");
      }

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .table-container {
        padding: 10px;
        text-align: right;
      }
</style>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   

    
<body>
    <div class="table-container" style="font-family: 'FreeSans';">
    <htmlpageheader name="formHeader">
        <div style="margin: 10px 25px;  width: 100%;">
            <div style="float: right; margin-right: 46px; height: 70px;width: 60%;">
                <table style="border: 1px solid #FFF200;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #FFF200;">
                    <tr style="padding: 10px;">
                        <th style="padding: 10px;">
                            <div style="padding: 0 120px 0 0"><h3>{{$data->id ?? 0}}</h3></div>
                        </th>
                        <th bgcolor="#FFF200" style="color:#000 ; padding: 10px">
                            <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                        </th>
                    </tr>
                </table>
                <h2 style="color: #000; padding: 0; margin: 0; font-weight: 700;text-align: right">
                    Breakdown/Service Record INSTALLATION WORKS CERTIFICATE
                </h2>
                {{-- <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                    Issued in accordance with BS 7671: 2018+A2:2022 – Requirements for Gas Installations
                </p> --}}
            </div>
            <div style="clear: both;"></div>
          </div>
    </htmlpageheader>
    
    
    <!-- Table 1 -->
  <div class="table-padding" style="padding:20px;">
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align: middle; ">
                <table style="width: 100%;">
                    <thead style="vertical-align: middle;">
                        <tr style="background-color: #FFF200;">
                            <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</th>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="text-align: left; padding-left: 6px; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CONTRACTOR</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CLIENT</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE INSTALLATION</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align: middle;"  >
                        <tr>
                 @if ($data->user->categories->isNotEmpty())
                            @php
                               $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
                             @endphp
                       @if ($firstCategory)
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Gas Safe Number:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->gas_register_number }}</span>
                            </td>
                            @endif
                 @endif


                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->site->siteContact->f_name }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Tenant Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->customer->name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Company Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->user->company_name }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->user->number_street_name.', '.$data->user->city}} </span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->site->street_num.', '.$data->site->city}} </span>
                            </td>
                        </tr>
                        <tr>
                             <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->customer->street_num.', '.$data->customer->city}}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->user->postal_code }}</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->user->phone }}</span>
                                </div>
                                </div>
                            </td>
                              <td style="padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->site->postal_code }}</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->site->siteContact->phone }}</span>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->customer->postal_code }}</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->customer->contacts->first()->phone }}</span>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                              <!-- <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                               
                                <span style="font-weight: 700;">Description of work: </span>
                                 <label>
                 <input type="checkbox" class="radio" value="1" name="foobye" />Service</label>
                                 <label>
                                      <input type="checkbox" class="radio" value="1" name="fooby" />Breakdown</label>
  <label>
                               
                            </td> -->
                        </tr>
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>

<!-- Table 2 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; ">
                <table style="width: 100%;">
                    <thead>
                        <tr style="background-color: #FFF200;">
                            <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                        </tr>
                      
                    </thead>
                    <tbody  >
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Description of work: </span>
                                @if(getvalue('service', $formData['form_part_1']) == "True")<label>  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Service</label> @else <label><input type="checkbox" class="radio" value="{{ getvalue('service', $formData['form_part_1']) }}" name="one" />Service</label>@endif
                                @if(getvalue('Breakdown', $formData['form_part_1']) == "True")<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display: inline; margin: auto;width:14px;" >Breakdown</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('Breakdown', $formData['form_part_1']) }}" name="two"/>Breakdown</label>@endif
                               
                            
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">CO/CO2 Ratio</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('co_co2_ratio', $formData['form_part_1']) }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                               
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Make:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('boiler_make', $formData['form_part_1']) }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Model:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('boiler_model', $formData['form_part_1']) }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Serial Number:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('boiler_serial_num', $formData['form_part_1']) }}</span>
                            </td>
                        </tr>
                        <tr>
                             <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Make:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliances_make', $formData['form_part_1']) }}</span>
                            </td>
                             <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Model:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliances_model', $formData['form_part_1']) }}</span>
                            </td>
                             <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Serial Number:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliances_serial_num', $formData['form_part_1']) }}</span>
                            </td>
                          
                            
                        </tr>
                      
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>
  
  <!-- Table 3 & 4 -->
  <div style=" padding: 0px;">
  <div style="display: block; width: 100%; margin: auto;">
    <div style="display: inline-block; width: 100%;">
    <table style="width: 100%; border: 1px solid black;">
    <thead>
        <tr style="background-color: #FFF200;">
             <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Notes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 50px; overflow: scroll;">{{ getvalue('additional_notes', $formData['form_part_2']) }}</td>
        </tr>
    </tbody>
    </table>
    </div>
    <div style="display: inline-block; width: 100%;">
      <table style="width: 100%; border: 1px solid black;">
    <thead>
        <tr style="background-color: #FFF200;">
             <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Parts/Spares Required</th>
                 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 50px; overflow: scroll;">{{ getvalue('spares_parts_required', $formData['form_part_3']) }}</td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
</div>
<!-- Table 5 -->
<div class="table-padding" style="padding: 30px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: #FFF200;">
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Installation Satisfactorty?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Service Checks Satisfactory?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                      </tr>
                    
                  </thead>
                  <tbody style="vertical-align: middle;" >
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('water_fuel_satisfactory', $formData['form_part_4']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}" alt="check-img" style="display:inline; margin: auto;width:14px;" >Water/Fuel-Satisfactory</label> @else<label><input type="checkbox" class="radio" id="flue" value="{{ getvalue('water_fuel_satisfactory', $formData['form_part_4']) }}" name="" />Water/Fuel-Satisfactory </label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('heat_exchanger', $formData['form_part_5']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px" >Heat Exchanger</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('heat_exchanger', $formData['form_part_5']) }}" name=""/>Heat Exchanger</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('burn_washer_cleaned', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Burner Washed & Cleaned</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('burn_washer_cleaned', $formData['form_part_6']) }}" name=""/>Burner Washed & Cleaned</label> @endif 
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('ventilation_size', $formData['form_part_4']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Ventilation Size H-L</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('ventilation_size', $formData['form_part_4']) }}" name=""/>Ventilation Size H-L </label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('ignition', $formData['form_part_5']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Ignition</label> @else<label><input type="checkbox" class="radio" value="{{ getvalue('ignition', $formData['form_part_5']) }}" name=""/>Ignition</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('pilot_assembly', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Pilot Assembly Cleaned & Adjusted</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('pilot_assembly', $formData['form_part_6']) }}" name="" />Pilot Assembly Cleaned & Adjusted</label>@endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('electrically_fused', $formData['form_part_4']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Electrically Fused</label> @else<label> <input type="checkbox" class="radio" value="{{ getvalue('electrically_fused', $formData['form_part_4']) }}" name="" />Electrically Fused </label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('gas_valve', $formData['form_part_5']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Gas Value</label> @else<label><input type="checkbox" class="radio" value="{{ getvalue('gas_valve', $formData['form_part_5']) }}" name=""/>Gas Value</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('ignition_system', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px" >lgnition system Cleaned & Adjusted</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('ignition_system', $formData['form_part_6']) }}" name=""  />lgnition system Cleaned & Adjusted</label> @endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('correct_valving', $formData['form_part_4']) == true)<label> <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Correct Valving Arrangements</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('correct_valving', $formData['form_part_4']) }}" name="" />Correct Valving Arrangements </label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('fan', $formData['form_part_5']) == true)<label> <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Fan</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('fan', $formData['form_part_5']) }}" name="" />Fan</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('burner_fas', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Burner Fan & Airways Cleaned</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('burner_fas', $formData['form_part_6']) }}" name=""  />Burner Fan & Airways Cleaned</label> @endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('isolation_available', $formData['form_part_4']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Isolation Available-Electrical/Fuel (within 1mtr)</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('isolation_available', $formData['form_part_4']) }}" name=""/>Isolation Available-Electrical/Fuel (within 1mtr) </label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('safety_device', $formData['form_part_5']) == true)<label> <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Safety Device</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('safety_device', $formData['form_part_5']) }}" name="" />Safety Device</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('service_heat_exchanger', $formData['form_part_6']) == true)<label> <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;">Heat Exchanger/Flueways Clean & Clear</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('service_heat_exchanger', $formData['form_part_6']) }}" name="" />Heat Exchanger/Flueways Clean & Clear</label>@endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            @if(getvalue('boiler_plant_room', $formData['form_part_4']) == true)<label><img id="checkImage"  src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Boiler/Plantroom Cleaner</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('boiler_plant_room', $formData['form_part_4']) }}" name="" />Boiler/Plantroom Cleaner</label>@endif
                       
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('control_box', $formData['form_part_5']) == true)<label><img id="checkImage"  src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Control Box</label>@else<label> <input type="checkbox" class="radio" value="{{ getvalue('control_box', $formData['form_part_5']) }}" name=""/>Control Box</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('fuel_electrical', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;">Fuel & Electrical Supply Connected Correctly</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('fuel_electrical', $formData['form_part_6']) }}" name="" />Fuel & Electrical Supply Connected Correctly</label>@endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('burners_pilot', $formData['form_part_5']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Burners & Pilot</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('burners_pilot', $formData['form_part_5']) }}" name=""/>Burners & Pilot</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('interlocks_noted', $formData['form_part_6']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Interlocks Noted & in Place</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('interlocks_noted', $formData['form_part_6']) }}" name=""/>Interlocks Noted & in Place</label>@endif
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            @if(getvalue('fuel', $formData['form_part_5']) == true)<label><img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Fuel Pressure & Type</label>@else<label><input type="checkbox" class="radio" value="{{ getvalue('fuel', $formData['form_part_5']) }}" name=""/>Fuel Pressure & Type</label>@endif
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                        </td>
                     </tr>
                    
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>
<pagebreak></pagebreak>
<!-- Table 6 -->
<div class="table-padding" style="padding: 30px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th  style="background-color: #FFF200; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; width: 100px;">TIME</th>
                          <th  style=" text-align: left; color: black; font-size: 20px; margin: 0; padding: 10px; ">
                            <span style="font-weight: 700;">Arrival Time:</span>
                            <span style="border-bottom: 1px dashed #000; font-weight: 400;">{{ getvalue('time_of_arrival', $formData['form_part_6']) }}</span>
                        </th>
                          <th  style=" text-align: left; color: black;  font-size: 20px; margin: 0; padding: 10px; ">
                            <span style="font-weight: 700;">Departure Time:</span>
                            <span style="border-bottom: 1px dashed #000; font-weight: 400;">{{ getvalue('time_of_departure', $formData['form_part_6']) }}</span>
                        </th>
                      </tr>
                    
                  </thead>
                 
              </table>
         </div>
      </div>
  </div>
</div>


<!-- Table 7 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th colspan="3"  style="background-color: #FFF200; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px;">Issued By</th>
                         
                      </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Name(CAPITALS)</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Contractor</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Signture</span>
                            @if($data->user->signature)
                            <span style="border-bottom: 1px dashed #000;"> <img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt="">
                            </span>
                            @endif</td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;  line-height: 1.5;">
                            <span style="font-weight: 700;">Address</span>
                            <span style="border-bottom: 1px dashed #000;"></span>{{$data->user->number_street_name.', '.$data->user->city}}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Position</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_position', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Date</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_date', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Gas Safe No</span>
                            @php
                            $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
                          @endphp
                          @if ($firstCategory)
                            <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->gas_register_number }}</span>
                        @endif</td>
                    </tr>
                    <tr>
                        <td  style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; font-weight: 700;">RECIVED BY:</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Name</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('customer_name', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Date</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('customer_date', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Signture</span>
                            @if ($data->customerSignature)
                             <span style="border-bottom: 1px dashed #000;"><img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt=""></span>
                            @endif</td>
                    </tr>
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>


<!-- Table 8 -->

<!-- Table 9 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style=" width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                 
                  <tbody style="vertical-align: middle;">
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 25%; ">
                            @Copyright 360 Connect (2023 August)  
                        </td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%; ">
                          <p> **where relevant and practicable</p> 
                          <p>his certificate is based on the model forms shown in Appendix 6 of BS 7671: 2018+A2:2022</p> 
                          <p>@Copyright 360 Connect (2023 August)</p>
                          </td>
                          <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 25%; ">
                       <p>     Enter a or value in the respective fields, as appropriate</p>
                            <p>here an item is not applicable insert N/A </p>
                          </td>
                    </tr>
                 
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>
    </div>
</body>
</html>