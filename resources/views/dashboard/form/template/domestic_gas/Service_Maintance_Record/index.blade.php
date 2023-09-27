<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<style>
  
            @page{
                header: formHeader;
                footer: formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

</style>
<body style="width: 100%; margin: 0; overflow-y: hidden;">
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
                  Service/Maintenace Record INSTALLATION WORKS CERTIFICATE
              </h2>
               <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                  Issued in accordance with BS 7671: 2018+A2:2022 – Requirements for Gas Installations
              </p>
          </div>
          
       </div>
  </htmlpageheader>
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
                    @php
                    $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
                @endphp
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                              <span style="font-weight: 700;">Gaz Safe Number:</span>
                              <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->gas_register_number }}</span>
                          </td>
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
                    
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>


       <!-- Table 2 -->
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
                              <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                          </tr>
                        
                      </thead>
                      <tbody style="vertical-align: middle;"  >
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                             
                              <span style="font-weight: 700;">Type of work: </span>
                              @if(getvalue('service', $formData['form_part_1']) == "True")<label>  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Service</label> @else <label><input type="checkbox" class="radio" value="{{ getvalue('service', $formData['form_part_1']) }}" name="one" />Service</label>@endif
                              @if(getvalue('maintenance', $formData['form_part_1']) == "True")<label>  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Maintenance</label> @else <label><input type="checkbox" class="radio" value="{{ getvalue('maintenance', $formData['form_part_1']) }}" name="one" />Maintenance</label>@endif
                              @if(getvalue('gas_carried_out', $formData['form_part_1']) == "True")<label>  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Gas Carried Out</label> @else <label><input type="checkbox" class="radio" value="{{ getvalue('gas_carried_out', $formData['form_part_1']) }}" name="one" />Gas Carried Out</label>@endif
                              @if(getvalue('gas_tightness_test', $formData['form_part_1']) == "True")<label>  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Gas Tightness Test</label> @else <label><input type="checkbox" class="radio" value="{{ getvalue('gas_tightness_test', $formData['form_part_1']) }}" name="one" />Gas Tightness Test</label>@endif
                              
                             
                          </td>
                      </tr>
                      <tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                              <div style="width: 100%; display: block;">
                              <div style="width: 23%; display: inline-block;">
                              <span style="font-weight: 700;">Appliance Location</span>
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_location', $formData['form_part_1']) }}</span>
                              </div>
                              <div>

                              </div>
                              <div style="width: 23%; display: inline-block;">
                               <span style="font-weight: 700;">Appliance Type</span>
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_type', $formData['form_part_1']) }}</span>
                              </div>
                              <div>
                                
                              </div>
                              <div style="width: 23%; display: inline-block;">
                               <span style="font-weight: 700;">Appliance Make</span>
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_make', $formData['form_part_1']) }}</span>
                              </div>
                              <div>
                                
                              </div>
                              <div style="width: 23%; display: inline-block;">
                               <span style="font-weight: 700;">Appliance Model</span>
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_model', $formData['form_part_1']) }}</span>
                              </div>
                               <div>
                                
                              </div>
                              </div>
                          </td>
                      </tr>
                      </tr>
                        
                      </tbody>
                  </table>
             </div>
          </div>
      </div>
    </div>
<pagebreak></pagebreak>
      <!-- Table 3 -->
      <div class="table-padding" style="padding: 30px;">
        <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
          <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
              <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
          </div> -->
          <div class="table-content" style="padding: 0px;">
             <div class="pdf-table" style="display: block; vertical-align: middle; ">
                  <table style="width: 100%;">
                      <thead style="vertical-align: middle;">
                          <tr style="background-color: yellow;">
                              <th  style="width: 20%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Checks</th>
                              <th  style="width: 20%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Result</th>
                              <th  style="width: 60%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Remedial Action/Type of Defect</th>
                          </tr>
                        
                      </thead>
                      <tbody style="vertical-align: middle;"  >
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Burner/Injectors</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('burner_injectors', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('burner_injectors', $formData['form_part_2']) }}" name="one" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('burner_injectors_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Heat Exchanger</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('heat_exchanger', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('heat_exchanger', $formData['form_part_2']) }}" name="two" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('heat_exchanger_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Ignition</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('ignition', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('ignition', $formData['form_part_2']) }}" name="three" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('ignition_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Electrics</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('electrics', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('electrics', $formData['form_part_2']) }}" name="four" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('electrics_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Controls</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('controls', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('controls', $formData['form_part_2']) }}" name="five" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('controls_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Gas/Water Leaks</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('gas_water_leaks', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('gas_water_leaks', $formData['form_part_2']) }}" name="six" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('gas_water_leaks_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Seals</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('seals', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('seals', $formData['form_part_2']) }}" name="seven" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('seals_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Gas Pipework</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('gas_pipework', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('gas_pipework', $formData['form_part_2']) }}" name="eight" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('gas_pipework_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Fas (s)</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('fan', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('fan', $formData['form_part_2']) }}" name="two" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('fan_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Fireplace Opening/Void</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('fireplace_opening', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('fireplace_opening', $formData['form_part_2']) }}" name="two" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;">{{ getvalue('fireplace_opening_input', $formData['form_part_2']) }} </span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Closure Plate</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('closure_plate', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('closure_plate', $formData['form_part_2']) }}" name="two" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('closure_plate_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Flame Picture</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('flame_picture', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('flame_picture', $formData['form_part_2']) }}" name="two" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('flame_picture_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Location</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('location', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('location', $formData['form_part_2']) }}" name="two" />@endif </td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('location_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Stability</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('stability', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('stability', $formData['form_part_2']) }}" name="two" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('stability_input', $formData['form_part_2']) }}</span></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Return Air/Plenum</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('return_air_plenum', $formData['form_part_2']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('return_air_plenum', $formData['form_part_2']) }}" name="two" />@endif</td>
                        <td> <span style="border-bottom: 1px dashed #000;">{{ getvalue('return_air_plenum_input', $formData['form_part_2']) }} </span></td>
                      </tr>
                        
                      </tbody>
                  </table>
             </div>
          </div>
      </div>
    </div>
    <pagebreak></pagebreak>
   <!-- Table 4 -->
   <div class="table-padding" style="padding: 10px;">
    <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
    
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; vertical-align: middle; ">
              <table style="width: 100%;">
                  <thead style="vertical-align: middle;">
                      <tr style="background-color: yellow;">
                          <th  style="width: 20%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Safety Checks</th>
                          <th  style="width: 20%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Result</th>
                          <th  style="width: 60%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Remedial Action/Type of Defect</th>
                      </tr>
                    
                  </thead>
                  <tbody style="vertical-align: middle;"  >
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Ventilation</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('ventilation', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('ventilation', $formData['form_part_3']) }}" name="two" />@endif </td>
                    <td> <span style="border-bottom: 1px dashed #000;">{{ getvalue('ventilation_input', $formData['form_part_3']) }}</span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Flu Termination</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('flu_termination', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('flu_termination', $formData['form_part_3']) }}" name="two" />@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;">{{ getvalue('flu_termination_input', $formData['form_part_3']) }} </span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Flu Flow Test</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('flu_flow_test', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('flu_flow_test', $formData['form_part_3']) }}" name="two" />@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;"></span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Spillage Test</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('spillage_test', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('spillage_test', $formData['form_part_3']) }}" name="two" />@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('spillage_test_input', $formData['form_part_3']) }}</span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Operating Pressure (mbar) or heat input (kW)</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">@if(getvalue('operating_pressure', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('operating_pressure', $formData['form_part_3']) }}" name="two" />@endif </td>
                    <td> <span style="border-bottom: 1px dashed #000;"></span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Safety Devices</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('safety_devices', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('safety_devices', $formData['form_part_3']) }}" name="two" />@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;"> {{ getvalue('safety_devices_input', $formData['form_part_3']) }}</span></td>
                  </tr>
                  <tr>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Other</td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"> @if(getvalue('other', $formData['form_part_3']) == "True")<img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" > @else<input type="checkbox" class="radio" value="{{ getvalue('other', $formData['form_part_3']) }}" name="two" />@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;">{{ getvalue('other_input', $formData['form_part_3']) }} </span></td>
                  </tr>
                 
                    
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>
   <!-- Table 5 -->
   <div class="table-padding" style="padding: 10px;">
    <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
    
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; vertical-align: middle; ">
              <table style="width: 100%;">
                  <thead style="vertical-align: middle;">
                      <tr style="background-color: yellow;">
                          <th  style="width: 50%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Findings</th>
                          
                          <th  style="width: 50%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">The Following Remidial Work is Required</th>
                      </tr>
                    
                  </thead>
                  <tbody style="vertical-align: middle;"  >
                  
                 <tr>
                   <td>  @if(getvalue('safe_to_use', $formData['form_part_4']) == "True")<label style="margin-right: 30px;">  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Is the Appliance/installation safe to use?</label> @else <label style="margin-right: 30px;"><input type="checkbox" class="radio" value="{{ getvalue('safe_to_use', $formData['form_part_4']) }}" name="one" />Is the Appliance/installation safe to use?</label>@endif</td>
                    <td> <span style="border-bottom: 1px dashed #000;"> </span></td>
                 </tr>
                 <tr>
                    <td> @if(getvalue('has_warning_notice', $formData['form_part_4']) == "True")<label style="margin-right: 30px;">  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >If NO, has warning notice been issued and warning label attached?</label> @else <label style="margin-right: 30px;"><input type="checkbox" class="radio" value="{{ getvalue('has_warning_notice', $formData['form_part_4']) }}" name="one" />If NO, has warning notice been issued and warning label attached?</label>@endif</td>
                     <td> <span style="border-bottom: 1px dashed #000;"></span></td>
                  </tr>
                  <tr>
                    <td> @if(getvalue('installation_conform', $formData['form_part_4']) == "True")<label style="margin-right: 30px;">  <img id="checkImage" src="{{ asset('certificate/image/check.png') }}"  alt="check-img" style="display:inline; margin: auto;width:14px;" >Does installation conform to requirements of  manufacturers instructions/installation standards?</label> @else <label style="margin-right: 30px;"><input type="checkbox" class="radio" value="{{ getvalue('installation_conform', $formData['form_part_4']) }}" name="one" />Does installation conform to requirements of  manufacturers instructions/installation standards?</label>@endif</td>
                     <td> <span style="border-bottom: 1px dashed #000;"></span></td>
                  </tr>
                  <tr>
                    <td colspan="2"><hr></td>
                  </tr>
                  <tr>
                    <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                        <div style="width: 100%; display: inline-block;">
                        <span style="font-weight: 700;">Report Issued by</span>
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span>
                        </div>
                    </td>
                    <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                        <div style="width: 100%; display: inline-block;">
                        <span style="font-weight: 700;">Trading Title </span>
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                        <div style="width: 100%; display: inline-block;">
                        <span style="font-weight: 700;">Signature</span>
                        @if($data->user->signature)
                        <span style="border-bottom: 1px dashed #000;"><img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt=""></span>
                        @endif
                        </div>
                    </td>
                    <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                        <div style="width: 100%; display: inline-block;">
                        <span style="font-weight: 700;">Trading Address</span>
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_position', $formData['part_declaration']) }}</span>
                        </div>
                    </td>
                  </tr>
                    <tr>
                        <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                            <div style="width: 100%; display: inline-block;">
                            <span style="font-weight: 700;">Date</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_date', $formData['part_declaration']) }}</span>
                            </div>
                        </td>  
                    </tr>
                    <tr>
                        <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                            <div style="width: 100%; display: inline-block;">
                              @php
                            $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
                          @endphp
                            <span style="font-weight: 700;">Gas Safe No</span>
                            @if ($firstCategory)
                            <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->gas_register_number }}</span>
                            @endif
                            </div>
                        </td>  
                    </tr>
                    <tr>
                        <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                            <div style="width: 100%; display: inline-block;">
                            <span style="font-weight: 700;">Report received by</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('customer_name', $formData['part_declaration']) }}</span>
                            </div>
                        </td>  
                    </tr>
                    <tr>
                        <td  style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                            <div style="width: 100%; display: inline-block;">
                            <span style="font-weight: 700;">Signature</span>
                            @if ($data->customerSignature)
                              <span style="border-bottom: 1px dashed #000;"><img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt=""></span>
                             @endif
                            </div>
                        </td>  
                    </tr>
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>
<div>
  
</div>
<htmlpagefooter name="formFooter">
  <table style="width: 100%;">
    <tr>
      <td style="width: 33%;">Produced Using 360 Connect @</td>
      <td style="text-align: center; width: 34%;">Expire At: {{ date('d-m-Y', strtotime($data->expire)) }}</td>
      <td style="text-align: center; width: 33%;">
          Page {PAGENO} of {nbpg}
      </td>
  </tr>
          
  </table>
  
</htmlpagefooter>
</div>
</body>
</html>