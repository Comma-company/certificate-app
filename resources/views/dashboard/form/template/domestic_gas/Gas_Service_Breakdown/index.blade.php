<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<body>
    <!-- Heading of PDF -->
    <div class="pdf-headings" style="padding: 10px; text-align: end;">
        <h2 style=" font-size: 24px; font-weight: 700; line-height: 0;">Breakdown/Service Record INSTALLATION WORKS CERTIFICATE</h2>
        <p style="font-size: 16px; color: #000; font-weight: 400;" >ssued in accordance with BS 7671: 2018+A2:2022 – Requirements for Gas Installations</p>
    </div>
    
    <!-- Table 1 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align: middle; ">
                <table style="width: 100%;">
                    <thead style="vertical-align: middle;">
                        <tr style="background-color: yellow;">
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
                                <span style="font-weight: 700;">Gaz Safe Number:</span>
                                <span style="border-bottom: 1px dashed #000;"> {{ $firstCategory->pivot->gas_register_number }}</span>
                            </td>
                            @endif
                        @endif
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;"> Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->customer->name }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Tenant Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->site->siteContact->f_name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Company Name:</span>
                                <span style="border-bottom: 1px dashed #000;">{{ $data->user->company_name }}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->user->number_street_name.', '.$data->user->city}}</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->site->street_num.', '.$data->site->city}}</span>
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
                        
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>

<!-- Table 2 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; ">
                <table style="width: 100%;">
                    <thead>
                        <tr style="background-color: yellow;">
                            <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
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
                        <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                            <span style="font-weight: 700;">Description of work: </span>
                             <label>
                                     <input type="checkbox" class="radio" value="1" name="foobye" />Service</label>
                             <label>
                                  <input type="checkbox" class="radio" value="1" name="fooby" />Breakdown</label>
                            <label>
                        </td>
                      </tr>
                    </tbody> 
                </table>
           </div>
        </div>
    </div>
  </div>
<pagebreak></pagebreak>
  <!-- Table 3 & 4 -->
  <div style=" padding: 10px;">
  <div style="display: block; width: 100%; margin: auto;">
    <div style="display: inline-block; width:100%;">
      <table style="width: 100%; border: 1px solid black;">
    <thead>
        <tr style="background-color: yellow;">
             <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Parts/Spares Required</th>
                 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 150px; overflow: scroll;">{{ getvalue('spares_parts_required', $formData['form_part_3']) }}</td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
</div>
<pagebreak></pagebreak>
<!-- Table 5 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: yellow;">
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Installation Satisfactorty?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Service Checks Satisfactory?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                      </tr>
                    
                  </thead>
                  <tbody style="vertical-align: middle;" >
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('water_fuel_satisfactory', $formData['form_part_4']) }}" name="{{ getvalue('water_fuel_satisfactory', $formData['form_part_4']) }}" {{ getvalue('water_fuel_satisfactory', $formData['form_part_4']) ? 'checked' : '' }}/>Water/Fuel-Satisfactory</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('heat_exchanger', $formData['form_part_5']) }}" name="{{ getvalue('heat_exchanger', $formData['form_part_5']) }}" {{ getvalue('heat_exchanger', $formData['form_part_5'])? 'checked' : '' }}/>Heat Exchanger</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('burn_washer_cleaned', $formData['form_part_6']) }}" name="{{ getvalue('burn_washer_cleaned', $formData['form_part_6']) }}"{{ getvalue('burn_washer_cleaned', $formData['form_part_6']) ? 'checked' : ''}} />Burner Washed & Cleaned</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('ventilation_size', $formData['form_part_4']) }}" name="{{ getvalue('ventilation_size', $formData['form_part_4']) }}" {{ getvalue('ventilation_size', $formData['form_part_4']) ? 'checked' : ''}}/>Ventilation Size H-L </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('ignition', $formData['form_part_5']) }}" name="{{ getvalue('ignition', $formData['form_part_5']) }}" {{ getvalue('ignition', $formData['form_part_5']) ? 'checked' : '' }} />Ignition</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('pilot_assembly', $formData['form_part_6']) }}" name="{{ getvalue('pilot_assembly', $formData['form_part_6']) }}" {{ getvalue('pilot_assembly', $formData['form_part_6']) ? 'checked' : '' }} />Pilot Assembly Cleaned & Adjusted</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('electrically_fused', $formData['form_part_4']) }}" name="{{ getvalue('electrically_fused', $formData['form_part_4']) }}" {{ getvalue('electrically_fused', $formData['form_part_4'])  ? 'checked' : '' }} />Electrically Fused </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('gas_valve', $formData['form_part_5']) }}" name="{{ getvalue('gas_valve', $formData['form_part_5']) }}" {{ getvalue('gas_valve', $formData['form_part_5']) ? 'checked' : ''  }}/>Gas Value</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('ignition_system', $formData['form_part_6']) }}" name="{{ getvalue('ignition_system', $formData['form_part_6']) }}" {{ getvalue('ignition_system', $formData['form_part_6']) ? 'checked' : ''  }} />lgnition system Cleaned & Adjusted</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('correct_valving', $formData['form_part_4']) }}" name="{{ getvalue('correct_valving', $formData['form_part_4']) }}" {{ getvalue('correct_valving', $formData['form_part_4']) ? 'checked' : ''  }} />Correct Valving Arrangements </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('fan', $formData['form_part_5']) }}" name="{{ getvalue('fan', $formData['form_part_5']) }}" {{ getvalue('fan', $formData['form_part_5']) ? 'checked' : ''  }} />Fan</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('burner_fas', $formData['form_part_6']) }}" name="{{ getvalue('burner_fas', $formData['form_part_6']) }}"  {{ getvalue('burner_fas', $formData['form_part_6']) ? 'checked' : '' }}/>Burner Fan & Airways Cleaned</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('isolation_available', $formData['form_part_4']) }}" name="{{ getvalue('isolation_available', $formData['form_part_4']) }}"  {{ getvalue('isolation_available', $formData['form_part_4']) ? 'checked' : ''  }}/>Isolation Available-Electrical/Fuel (within 1mtr) </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('safety_device', $formData['form_part_5']) }}" name="{{ getvalue('safety_device', $formData['form_part_5']) }}"  {{ getvalue('safety_device', $formData['form_part_5'])  ? 'checked' : '' }}/>Safety Device</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('service_heat_exchanger', $formData['form_part_6']) }}" name="{{ getvalue('service_heat_exchanger', $formData['form_part_6']) }}"  {{ getvalue('service_heat_exchanger', $formData['form_part_6'])  ? 'checked' : '' }}/>Heat Exchanger/Flueways Clean & Clear</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                          <label> <input type="checkbox" class="radio" value="{{ getvalue('boiler_plant_room', $formData['form_part_4']) }}" name="{{ getvalue('boiler_plant_room', $formData['form_part_4']) }}"  {{ getvalue('boiler_plant_room', $formData['form_part_4']) ? 'checked' : ''  }}/>Boiler/Plant Room Cleaner</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('control_box', $formData['form_part_5']) }}" name="{{ getvalue('control_box', $formData['form_part_5']) }}"  {{ getvalue('control_box', $formData['form_part_5']) ? 'checked' : ''  }}/>Control Box</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('fuel_electrical', $formData['form_part_6']) }}" name="{{ getvalue('fuel_electrical', $formData['form_part_6']) }}"  {{ getvalue('fuel_electrical', $formData['form_part_6'])  ? 'checked' : ''}}/>Fuel & Electrical Supply Connected Correctly</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('burners_pilot', $formData['form_part_5']) }}" name="{{ getvalue('burners_pilot', $formData['form_part_5']) }}"  {{ getvalue('burners_pilot', $formData['form_part_5'])? 'checked' : '' }}/>Burners & Pilot</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('interlocks_noted', $formData['form_part_6']) }}" name="{{ getvalue('interlocks_noted', $formData['form_part_6']) }}" {{ getvalue('interlocks_noted', $formData['form_part_6']) ? 'checked' : '' }}/>Interlocks Noted & in Place</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <label> <input type="checkbox" class="radio" value="{{ getvalue('fuel', $formData['form_part_5']) }}" name="{{ getvalue('fuel', $formData['form_part_5']) }}"  {{ getvalue('fuel', $formData['form_part_5']) ? 'checked' : '' }}/>Fuel Pressure & Type</label>
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
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th  style="background-color: yellow; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; width: 100px;">TIME</th>
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
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th colspan="3"  style="background-color: yellow; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px;">Issued By</th>
                         
                      </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Name</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Contractor</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Signture</span>
                            @if($data->user->signature)
                            <span style="border-bottom: 1px dashed #000;">
                                <img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt="">
                                </span>
                                @endif</td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;  line-height: 1.5;">
                            <span style="font-weight: 700;">Address</span>
                            <span style="border-bottom: 1px dashed #000;">{{$data->user->number_street_name.', '.$data->user->city}}</span></td>
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
                            @endif
                        </td>
                    </tr>
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>
<pagebreak></pagebreak>
<!-- Table 8 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th colspan="2"  style="background-color: yellow; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px;">Note</th>
                         
                      </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.   
                        </td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%;">
                            <img src="" alt="pdf-img" style="display: block; margin: auto;" >
                    </tr>
                 
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>

<!-- Table 9 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style=" width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
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
</body>
</html>