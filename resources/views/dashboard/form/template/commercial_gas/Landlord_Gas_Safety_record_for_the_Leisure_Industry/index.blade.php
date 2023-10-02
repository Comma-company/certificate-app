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
        font-size: 12px;
        font-family: 'FreeSans';
    }
    @page{
                header: formHeader;
                footer: formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:2mm ;
            }
            @font-face {
        font-family:fontawesome;
        src: url("{{ asset('admin/fonts/gnu-free-font/fa-solid-900.ttf') }}");
      }
      .table-container {
        padding: 10px;
        text-align: right;
      }
</style>
<body style="width: 100%; margin: 0; overflow-y: hidden;">
  <div class="table-container" style="font-family: 'FreeSans';">
    @php
        $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
    @endphp
   <htmlpageheader name="formHeader">
    <div style="margin: 10px 25px;  width: 100%;">
        <div style="float: right; margin-right: 46px; height: 70px;width: 60%;">
            <table style="border: 1px solid #FFF200;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #FFF200;">
                <tr style="padding: 10px;">
                    <th style="padding: 10px;">
                        <div style="padding: 0 120px 0 0"><h3>{{$data->num_cert ?? $data->id}}</h3></div>
                    </th>
                    <th bgcolor="#FFF200" style="color:#000 ; padding: 10px">
                        <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                    </th>
                </tr>
            </table>
            <h2 style="color: #000; padding: 0; margin: 0; font-weight: 700;text-align: right">
                Lisure Industry Record INSTALLATION WORKS CERTIFICATE
            </h2>
             <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                Issued in accordance with BS 7671: {{ getvalue('date_inspection_by', $formData['part_declaration']) }} – Requirements for Gas Installations
            </p>
        </div>
        
     </div>
   </htmlpageheader>
    
       <!-- Table 1 -->
       <table
       width="100%"
       style="border: 1px solid black; padding: 0; border-collapse: collapse; margin-bottom: 10px;"
     >
       <tr>
         <th bgcolor="yellow" style="padding-top: 5px; padding-bottom: 5px;text-align:left" colspan="3">
           <div style="text-align: left; padding: 0 5px;">
             <h3
               style="color: black; font-weight: bold; padding-top: 5px; padding-bottom: 5px; margin: 0;"
             >
             PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
             </h3>
           </div>
         </th>
       </tr>
       <tr>
         <td style="vertical-align: top;">
           <div style="text-align: left; padding: 0 5px">
             <h5 style="color: black;font-weight: bold;padding: 0 5px;margin: 0;">
               DETAILS OF THE CONTRACTOR
             </h5>
             @if ($data->user->categories->isNotEmpty())
    @php
       $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 1);
   @endphp
   @if ($firstCategory)
   <p style="margin: 15px">
           Registration No:
           <span style="font-weight: bold; padding: 3px 20px">
                   {{ $firstCategory->pivot->license_number }}
           </span>
         </p>
   @endif
   @endif

             <p style="margin: 15px">
               Company Name:
               <span style="font-weight: bold;padding:3px 20px">{{ $data->user->company_name }}</span>
             </p>
             <p style="margin: 15px">
               Address:
             <span style="font-weight: bold;padding:3px 20px">{{$data->user->number_street_name.', '.$data->user->city}}</span>
             </p>
             <p style="margin: 15px">
               Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->postal_code }}</span>
               <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->phone }}</span></span>
             </p>
           </div>
         </td>
         <td style="vertical-align: top;">
           <div style="text-align: left">
             <h5
               style="
                 color: black;
                 font-weight: bold;
                 padding: 0 5px;
                 margin: 0;
               "
             >
               DETAILS OF THE CLIENT
             </h5>
             {{-- <p style="margin: 10px">
               Contractor Reference Number
               (CRN):
             </p> --}}
             <p style="margin: 10px">
               Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->name }}</span>
             </p>
             <p style="margin: 10px">
               Address:<span style="font-weight: bold;padding:3px 20px">{{$data->customer->street_num.', '.$data->customer->city}}</span>

             </p>
             <p style="margin: 10px">
               Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->postal_code }}</span>
               <span>Tel No:.<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->contacts->first()->phone }}</span>.</span>
             </p>
           </div>
         </td>
         <td style="vertical-align: top;">
           <div style="text-align: left">
             <h5
               style="
                 color: black;
                 font-weight: bold;
                 padding: 0 5px;
                 margin: 0;
               "
             >
             DETAILS OF THE INSTALLATION
             </h5>
             <p style="margin: 15px">
               Tenant Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->siteContact->f_name }}</span>
             </p>
             <p style="margin: 15px">
               Address:<span style="font-weight: bold;padding:3px 20px">{{$data->site->street_num.', '.$data->site->city}}</span>

             </p>
             <p style="margin: 15px">
               Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->postal_code }}</span>
               <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->siteContact->phone }}</span></span>
             </p>
           </div>
         </td>
       </tr>
     </table>
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
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 10px; margin: 0; padding: 5px; ">Pipework Inspection Details</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 10px; margin: 0; padding: 5px; ">Defects Identified</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 10px; margin: 0; padding: 5px; ">Warning Notice Issued?</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 10px; margin: 0; padding: 5px; ">ANy Remedial Action Taken</th>
                          </tr>
                        
                      </thead>
                      <tbody style="vertical-align: middle;"  >
                      <tr>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Gas Pipework vishual inspection :{{ getvalue('pipework_visual_p2', $formData['form_part_1']) }}</td>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                          <span style="font-weight: 700;">Appliance 1</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_1', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_1', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Numbers should correspond to defects</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Outcome of gas supply pipework visual inspection : {{ getvalue('pipework_outcome_supply_p2', $formData['form_part_1']) }}</td>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                          <span style="font-weight: 700;">Appliance 2</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_2', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_2', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Is the emergency control valve acess satisfactory :{{ getvalue('pipework_emergency_p2', $formData['form_part_1']) }}</td>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                          <span style="font-weight: 700;">Appliance 3</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_3', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                       
                        <span style="border-bottom: 1px dashed #000;"></span>
                    </td>
                    <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">{{ getvalue('warning_notice_3', $formData['form_part_2']) }}</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Outcome of gas tightness test? : {{ getvalue('pipework_outcome_tightness_p2', $formData['form_part_1']) }}</td>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                          <span style="font-weight: 700;">Appliance 4</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_4', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_4', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">{{ getvalue('record_remedial_action', $formData['form_part_3']) }}</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">Is protective equipotential bonding satisfactory? : {{ getvalue('pipework_protective_p2', $formData['form_part_1']) }}</td>
                        <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                          <span style="font-weight: 700;">Appliance 5</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_5', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_5', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"></td>
                      </tr>
                     
                        
                      </tbody>
                  </table>
             </div>
          </div>
      </div>
    </div>
  
    <!-- Table 3 & 4 -->
    <div style=" padding: 10px;">
      <div style="display: block; width: 100%; margin: auto;">
        <div style="display: inline-block; width: 100%;">
        <table style="width: 100%; border: 1px solid black;">
        <thead>
          <tr style="background-color: yellow;">
            <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Audible CO ALARM</th>
            <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Approved CO alarm fitted</th>
            <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Is CO alarm in date</th>
            <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">CO alarm tetsing satisfactory</th>
        </tr>
        </thead>
        <tbody>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                <span style="font-weight: 700;">Appliance 1:</span>
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved1', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co1', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co1', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                <span style="font-weight: 700;">Appliance 2:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved2', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co2', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co2', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                <span style="font-weight: 700;">Appliance 3:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved3', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co3', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co3', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                <span style="font-weight: 700;">Appliance 4:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved4', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co4', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co4', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;">
                <span style="font-weight: 700;">Appliance 5:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved5', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co5', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co5', $formData['form_part_5']) }}</span></td>
            </tr>
        </tbody>
        </table>
        </div>
        <div style="display: inline-block; width: 100%;">
          <table style="width: 100%; border: 1px solid black;">
          <thead>
           
          </thead>
          <tbody>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">Cylinder/final connection hoses to LAV/boat satisfactory (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('cylinder', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">Gas installation pipework (visual inspection) satisfactory (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_installation_pipework', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">Gas tightness test satisfactory (Yes/No/NA)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_tightness_satisfactory', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">Emergency Control Valve (ECV) accessible and operable (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('emergency_control', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">LPG regulator operating pressure (mbar)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('lpg_operating', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px;"><span style="font-weight: 700;">LPG regulator lock-up pressure (mbar)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('lpg_lockup', $formData['form_part_5']) }}</span></td>
              </tr>
              
          </tbody>
          </table>
          </div>
    </div>
    </div>

     <!-- Table 5 & 6 -->
     <div style=" padding: 10px;">
      <div style="display: block; width: 100%; margin: auto;">
        <div style="display: inline-block; width: 100%;">
        <table style="width: 100%; border: 1px solid black; min-height: 130px;">
        <thead>
          <tr style="background-color: yellow;">
            <th  style="width: 50%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Record issued by: {{ getvalue('record_issue_by', $formData['part_declaration']) }}</th>
            <th  style="width: 50%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Record recived by:{{ getvalue('received_by', $formData['part_declaration']) }}</th>
             </tr>
        </thead>
        <tbody>
            <tr>
              <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; ">
               
               
            </td>
           
          
            </tr>
            
        </tbody>
        </table>
        </div>
        <div style="display: inline-block; width: 100%;">
          <table style="width: 50%; border: 1px solid black;">
          <thead>
           
          </thead>
          <tbody>
             
              <tr style="text-align: center;">
                  <td><h3 style="margin-top: 10px; margin-bottom: 0px;">Attention</h3><p style="margin-bottom: 0px;">Next Safety Check Due Within</p><p style="color: red;"> {{ getvalue('next_safety_check_by', $formData['form_part_4']) }}</p></td>
              </tr>
              
          </tbody>
          </table>
          </div>
    </div>
    </div>

       <!-- Table 7 -->
       <div class="table-padding" style="padding: 10px;">
        <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
          <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
              <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
          </div> -->
          <div class="table-content" style="padding: 0px;">
             <div class="pdf-table" style="display: block; vertical-align: middle; ">
                  <table style="width: 100%; border-collapse: collapse;">
                      <thead style="vertical-align: middle;">
                          <tr style="background-color: yellow;">
                              <th colspan="16"  style="text-align: left; color: black; font-weight: bold; font-size: 20px; margin: 0px; padding-top:10px; padding-bottom:5px; padding-left:10px">
                                Appliance Details
                              </th>
                              </tr>
                              <tr>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Appliance Number</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Location</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Type</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Manufacturer</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Model</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Owned by Landlord/homeowner?</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Inspected Yes/No?</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Type of Flue</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Operating Pressure in mbar &/or heat input kW/h or Btu/h</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Operation of  safety  device(s)  Pass/Fail or  N/A</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Ventilation  Satisfactory  Yes/No</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Visual  condition of   flue &  termination  Pass/Fail N/A</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Flue  operation  checks Pass/  Fail/N/A</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Combustion  analyser  (if  applicable)</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Serviced  Yes/No?</th>
                                <th  style="font-size: 13px; border: 1px solid black; text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Safe to use Yes/No?</th>
                                </tr>
                        
                      </thead>
                      <tbody style="vertical-align: middle;">
                   <tr>
                    <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                      
                      <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_number', $formData['appliance_data'][0]) }}</span>
                  </td>
                  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_designation', $formData['appliance_data'][0]) }}</span>
                </td>
                <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_type', $formData['appliance_data'][0]) }}</span>
              </td>
              <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_model', $formData['appliance_data'][0]) }}</span>
            </td>
            <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_make', $formData['appliance_data'][0]) }}</span>
          </td>
          <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
            <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_owned_by', $formData['appliance_data'][0]) }}</span>
        </td>
        <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
          <span style="border-bottom: 1px dashed #000;">{{ getvalue('inspected_make', $formData['appliance_data'][0]) }}</span>
      </td>
      <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
        <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_flue_type', $formData['appliance_data'][0]) }}</span>
    </td>
    <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
      <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_operating_pressure', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_operating_of_safety', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_ventilation_satisfactory', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_visual_condition', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_flue_operation', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_combustion_analyses', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_serviced', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_safe_to_use', $formData['appliance_data'][0]) }}</span>
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
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: yellow; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align: middle; ">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead style="vertical-align: middle;">
                        <tr style="background-color: yellow;">
                            <th colspan="4"  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Audible Co Alarm</th>
                            </tr>
                            <tr style="">
                              <th  style="font-size: 13px; border: 1px solid black;  text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Number</th>
                              <th  style="font-size: 13px; border: 1px solid black;  text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Approved CO alarm fitted?</th>
                              <th  style="font-size: 13px; border: 1px solid black;  text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">Is CO alarm In Date?</th>
                              <th  style="font-size: 13px; border: 1px solid black;  text-align: left; color: black; font-weight: 700;  margin: 0; padding: 10px; ">CO alarm test  satisfactory?</th>
                               </tr>
                      
                    </thead>
                    <tbody style="vertical-align: middle;">
                 <tr>
               
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    {{ getvalue('id', $formData['appliance_data'][0]) }}
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved_co', $formData['appliance_data'][0]) }}</span>
    </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co_alarm', $formData['appliance_data'][0]) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_co_alarm_test', $formData['appliance_data'][0]) }}</span>
  </td>
                 </tr>
                      
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>

  <div style=" padding: 10px;">
    <div style="display: block; width: 100%; margin: auto;">
      <div style="display: inline-block; width: 100%;">
        <table style="width: 100%; border: 1px solid black;">
        <thead>
          <tr style="background-color: yellow;">
            <th   style="width: 100%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Audible CO ALARM</th>
           </tr>
        </thead>
        <tbody>
            <tr>
              <td  style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; ">
                <span style="font-weight: 400; ">I confirm that all above work described on this from has been satisfactorily completed in accordance with the current Gas Safety (installation and Use) Regulations, industry standards and produres.</span>
               
            </td>
            
           <tr>
            <td  style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; padding-top: 4px; ">
              <span style="font-weight: 400; ">I confirm that all above work described on this from has been satisfactorily completed in accordance with the current Gas Safety (installation and Use) Regulations, industry standards and produres.</span>
             
          </td>
           </tr>
           <tr>
            <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; width: 50%;">
                <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Gas Operative’s signature:</span>
                <span style="border-bottom: 1px dashed #000; "> @if ($data->customerSignature)
                  <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                  @endif </span>
               
            </td>
           
            
        </tr>
         
        </tbody>
        </table>
        </div>
      <div style="display: inline-block; width: 100%;">
        <table style="width: 100%; border: 1px solid black;">
        <thead>
          <tr style="background-color: yellow;">
            <th   style="width: 100%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 5px; ">Audible CO ALARM</th>
           </tr>
        </thead>
        <tbody>
            <tr>
              <td  style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; ">
                <span style="font-weight: 400; ">I confirm that all above work described on this from has been satisfactorily completed in accordance with the current Gas Safety (installation and Use) Regulations, industry standards and produres.</span>
               
            </td>
            
           <tr>
            <td  style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; padding-top: 4px; ">
              <span style="font-weight: 400; ">I confirm that all above work described on this from has been satisfactorily completed in accordance with the current Gas Safety (installation and Use) Regulations, industry standards and produres.</span>
             
          </td>
           </tr>
           <tr>
            <td style=" padding-left: 2px; padding-top:2px; padding-bottom:2px; width: 50%;">
                <span style="font-weight: 700; display: block; margin-bottom: 50px; ">Gas Operative’s signature:</span>
                <span style="border-bottom: 1px dashed #000; "> @if ($data->user->signature)
                  <img width="120px" src="{{ $data->user->signature->file_url }}" alt="">
                  @endif </span>
               
            </td>
           
            
        </tr>
         
        </tbody>
        </table>
        </div>
  </div>
  </div>
  <!-- Table 7 -->
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
                            <p>His certificate is based on the model forms shown in Appendix 6 of BS 7671: 2018+A2:2022</p> 
                            </td>
                            <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 25%; ">
                         <p> Enter a or value in the respective fields, as appropriate</p>
                              <p>here an item is not applicable insert N/A </p>
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
    
  </htmlpagefooter>
</div>
</body>
</html>