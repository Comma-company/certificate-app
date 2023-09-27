<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<style>
    @page{
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer: 5mm ;
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



      }
      .table-container {

        text-align: left;
      }
</style>
<body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="

        font-family:'FreeSans';
      ">

<htmlpageheader name="formHeader">
    <div style="margin: 10px 25px;  width: 100%;">
        <div style="float: left;width:40%;">
            <img src="{{ asset('certificate/image/gas_safe_logo.png') }}"  height="80px">
            @if ($data->user->logo)
            <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
            @endif
        </div>
        <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
            <table style="border: 1px solid #FFF200;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #FFF200;">
                <tr style="padding: 10px;">
                    <th style="padding: 10px;">
                        <div style="padding: 0 120px 0 0"><h3>{{$data->id ?? 0}}</h3></div>
                    </th>
                    <th bgcolor="#FFF200" style="color: #000000; padding: 10px">
                        <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                    </th>
                </tr>
            </table>
            <h2 style="color: #000; padding: 0; margin: 0; font-weight: 900;text-align: right">
                Gas Test & Purge INSTALLATION WORKS CERTIFICATE
            </h2>
            {{-- <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                Issued in accordance with BS 7671: 2018 – Requirements for Electrical
                Installations
            </p> --}}
        </div>
        <div style="clear: both;"></div>
      </div>
</htmlpageheader>
<div style="clear: both;"></div>
    
    
    <!-- Table 1 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align:middle;">
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
                                <span style="border-bottom: 1px dashed #000;">{{$data->site->street_num.', '.$data->site->city}}</span>
                            </td>
                        </tr>
                        <tr>
                             <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->customer->street_num.', '.$data->customer->city}} </span>
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
<pagebreak></pagebreak>
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
                            <th colspan="3" style="text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Strength test details</th>
                        </tr>
                      
                    </thead>
                    <tbody  >
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">State test method pneumatic (P) or Hydrostatic (H) </span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('State_test', $formData['form_part_1']) }}</span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Installation - New (N) - New extension (NE) - Existing (E) </span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('installation', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                      
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Have components not suitable for strength testing been removed or isolated from installation as necessary Yes/NA </span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('have_components', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Calculated strength test pressure (STP) (mbar/bar)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('calculated_strength', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Test medium - air, nitrogen, water etc.</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('test_medium', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Stabilisation period (minutes)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('stabilization_period', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Strength test duration (STD) (minutes)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('strength_test_duration', $formData['form_part_1']) }}</span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Permitted pressure drop (%STP)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('permitted_presume_drop', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Calculated pressure drop (mbar/bar)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('calculated_presume', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 900; font-size: 22px; text-decoration: underline; ">Findings</span>
                               
                            </td>
                          
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Actual Pressure drop (mbar/bar)</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('actual_presume', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="font-weight: 700; ">Strength test Pass or Fail</span>
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                                <span style="border-bottom: 1px dashed #000;">{{ getvalue('strength_test', $formData['form_part_1']) }} </span>
                         
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>
  <pagebrak></pagebrak>
  
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
                          <th colspan="3" style="text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Tightness test details</th>
                      </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Gas type - Natural Gas (NG), Liquefied Petroleum Gas (LPG) </span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_type', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Installation - New (N) - New extension (NE) - Existing (E) </span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('installation', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                    
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Could weather/changes in temperature affect test Yes*/No</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('weather_or_changes', $formData['form_part_2']) }} </span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Meter type (Diaphragm, Rotary etc.)</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('meter_type_diaphragm', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Meter designation (u16, u40, P7 etc.)</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('meter_type', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Meter bypass installed (Yes/No)</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('meter_bypass', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                    
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 900; font-size: 22px; text-decoration: underline; ">Installation volume (IV) </span>
                             
                          </td>
                        
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Gas Meter (m2)</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_meter', $formData['form_part_2']) }} </span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Installation pipework & fittings (m2)</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('installation_pipework', $formData['form_part_2']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 900; font-size: 22px; text-decoration: underline; ">Total IV (m2) </span>
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                     
                        </td>
                      
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Test medium -fuel gas, air</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('test_medium_fuel', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Tightness test pressure (TTP) mbar/bar</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('tightness_test', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Pressure gauge type (water, high SG, electronic etc.)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('pressure_gauge', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">MPLR+ m3/hr (IGE/uP/1) or MAPD++ mbar IGE/uP/1A</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('mplr', $formData['form_part_2']) }}</span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Let-by test period existing installation (minutes)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('test_period', $formData['form_part_2']) }}</span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Stabilisation period (minutes)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('stabilization_period', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Tightness test duration (TTD) (minutes)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('tightness_test_duration', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Any inadequately ventilated areas to check? Yes/No</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('inadequately_ventilated', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Is barometric pressure correction necessary? Yes/No</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('barometric_pressure', $formData['form_part_2']) }}</span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; font-size: 22px; text-decoration: underline; ">Findings</span>
                           
                        </td>
                       
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Actual pressure drop (if any) mbar</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('actual_pressure_drop', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Actual leak rate m3/hr**</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('actual_leak_rate', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Have inadequately ventilated areas been checked Yes/NA</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('inadequately_ventilated_areas', $formData['form_part_2']) }}</span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Tightness test Pass or Fail</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('tightness_test_pass_fail', $formData['form_part_2']) }} </span>
                     
                        </td>
                        
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
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: yellow;">
                          <th colspan="3" style="text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Purging procedure details</th>
                      </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Has a risk assessment been carried out? Yes/No</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('risk_assessment', $formData['form_part_3']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Has a written procedure for the purge been prepared? Yes/No/NA </span>
                            
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('written_procedure', $formData['form_part_3']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Have “NO SMOKING” signs etc been displayed as necessary? </span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;"> {{ getvalue('no_smoking', $formData['form_part_3']) }}</span>
                     
                        </td>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Have persons in the vicinity of the purge been advised accordingly?</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;"> {{ getvalue('vicinity_of_purge', $formData['form_part_3']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Have all appropriate valves to and from the section of pipe been labelled?</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appropriate_valves', $formData['form_part_3']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Where nitrogen gas is being used for an indirect purge have the gas cylinders been checked/verified for their correct content?</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('nitrogen_gas', $formData['form_part_3']) }}</span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Are suitable fire extinguishers available in case of an incident?</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('suitable_fire', $formData['form_part_3']) }} </span>
                       
                          </td>
                          
                      </tr>
                    
                     
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Are two way radios (intrinsically safe) available in case of an incident? Yes/NA</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('way_radios', $formData['form_part_3']) }} </span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Are all electrical bonds fitted as necessary?</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('electrical_bonds', $formData['form_part_3']) }} </span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 900; font-size: 22px; text-decoration: underline; ">Calculate purge volume</span>
                           
                        </td>
                      
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Gas meter (m2)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_meter', $formData['form_part_3']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Installation pipework & fittings (m2)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('installation_pipework', $formData['form_part_3']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 900; font-size: 22px; text-decoration: underline; ">Total purge volume (m3)</span>
                            
                        </td>
                       
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Is gas detector/oxygen measuring device as appropriate, intrinsically safe?</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_detector', $formData['form_part_3']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 900; font-size: 22px;  text-decoration: underline;">Findings</span>
                           
                        </td>
                       
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Carry out purge noting final test criteria reading (02% or LFL%)</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('carry_out_purge', $formData['form_part_3']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Purge pass or Fail</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('purge_pass_or_fail', $formData['form_part_3']) }} </span>
                     
                        </td>
                        
                    </tr>
                    
                   
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>
<pagebreak></pagebreak>
<!-- table 5 -->
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
                          <th colspan="3" style="text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Indicate work undertaken</th>
                      </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="font-weight: 700; ">Strength test</span>
                             
                          </td>
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('strength_test_gas', $formData['form_part_4']) }} </span>
                       
                          </td>
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Tightness test</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('tightness_test_gas', $formData['form_part_4']) }} </span>
                     
                        </td>
                        
                    </tr>
                    <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; ">Purge</span>
                           
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('purge_gas', $formData['form_part_4']) }} </span>
                     
                        </td>
                        
                    </tr>
                    
                    
                   
                
                    
                   
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>

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
                      <tr style="background-color: yellow;">
                          <th  style=" width: 50%; text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Declaration of Gas Safety</th>
                          <th  style=" width: 50%; text-transform: uppercase; text-align: right; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">DATE :{{ getvalue('engineer_date', $formData['part_declaration']) }}</th>
                  
                        </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                          <td colspan="2" style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; ">
                              <span style="font-weight: 400; ">I confirm that all above work described on this from has been satisfactorily completed in accordance with the current Gas Safety (installation and Use) Regulations, industry standards and produres.</span>
                             
                          </td>
                         
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Gas Operative’s signature:</span>
                            @if ($data->customerSignature)
                            <span style="border-bottom: 1px dashed #000; "><img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt=""></span>
                            @endif
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Responsible person’s signature</span>
                            @if($data->user->signature)
                            <span style="border-bottom: 1px dashed #000; "> <img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt=""></span>
                           @endif
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" style=" padding-left: 6px; padding-top:15px; padding-bottom:15px; ">
                            <span style="font-weight: 400; ">Attention: Where additional safety checks have been necessary to ensure the gas system is safe, the responsible person has been informed and has accepted the results. The installation been left operational.</span>
                           
                        </td>
                       
                        
                    </tr>
                  </tbody>
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
                      <tr style="background-color: yellow;">
                          <th  style=" width: 50%; text-transform: uppercase; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Notification of unsafe gas installation</th>
                          <th  style=" width: 50%; text-transform: uppercase; text-align: right; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">DATE :{{ getvalue('engineer_date', $formData['part_declaration']) }} </th>
                  
                        </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                          <td colspan="2" style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; ">
                              <span style="font-weight: 400; ">I confirm that all of the above work descibed on this form has been satisfactorily, completed in accordace with the current Gas Safety (Installation and Use) Regulations, industry standards and procedures. However, an unsafe gas  installation has been identified, details of which are listed on a separate Warning/Advice Notice</span>
                             
                          </td>
                         
                          
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Gas Operative’s signature:</span>
                            @if ($data->customerSignature)
                            <span style="border-bottom: 1px dashed #000; "><img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt=""> </span>
                            @endif
                        </td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; width: 50%;">
                            <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Responsible person’s signature</span>
                            @if($data->user->signature)
                            <span style="border-bottom: 1px dashed #000; "> <img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt=""></span>
                            @endif
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" style=" padding-left: 6px; padding-top:15px; padding-bottom:5px; ">
                        
                        </td>
                       
                        
                    </tr>
                  </tbody>
              </table>
              
         </div>
      </div>

  </div>
  
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
    <div style="clear: both;"></div>
</htmlpagefooter>
</div>

</body>
</html>