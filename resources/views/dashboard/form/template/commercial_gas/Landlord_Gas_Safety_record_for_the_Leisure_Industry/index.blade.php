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
    @php
        $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 2);
    @endphp
    <div class="pdf-headings" style="padding: 10px; text-align: end;">
        <div class="pdf-headings" style="padding: 10px 0; justify-content: end; display: flex;align-items: baseline;">
            <p style=" font-size: 16px;margin: 0; color: #000;font-weight: 400;padding: 12px 8px; line-height: 0;background-color: white; border: 3px solid yellow;">{{$data->num_cert ?? $data->id}}</h2>
            <p style="font-size: 16px;margin: 0; color: #000; font-weight: 400;padding: 5px; background-color: yellow; border: 1px solid yellow;" >NO</p>
        </div>
        <h2 style=" font-size: 24px; font-weight: 700; line-height: 0;">Leisure Industry Gas Safety Record INSTALLATION WORKS CERTIFICATE</h2>
        <p style="font-size: 16px; color: #000; font-weight: 400;" >ssued in accordance with BS 7671: 2018+A2:2022 – Requirements for Electrical Installations</p>
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
                        @if ($firstCategory)
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                              <span style="font-weight: 700;">Gaz Safe Number:</span>
                              <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->gas_register_number }}</span>
                          </td>
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
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Pipework Inspection Details</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Defects Identified</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Warning Notice Issued?</th>
                              <th  style="width: 25%; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">ANy Remedial Action Taken</th>
                          </tr>
                        
                      </thead>
                      <tbody style="vertical-align: middle;"  >
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Gas Pipework vishual inspection :</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                          <span style="font-weight: 700;">Appliance 1</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_1', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_1', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Numbers should correspond to defects</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Outcome of gas supply pipework visual inspection :</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                          <span style="font-weight: 700;">Appliance 2</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_2', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_2', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"></td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Is the emergency control valve acess satisfactory :</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                          <span style="font-weight: 700;">Appliance 3</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_3', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                       
                        <span style="border-bottom: 1px dashed #000;"></span>
                    </td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">{{ getvalue('warning_notice_3', $formData['form_part_2']) }}</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Outcome of gas tightness test? :</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                          <span style="font-weight: 700;">Appliance 4</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_4', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_4', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">{{ getvalue('record_remedial_action', $formData['form_part_3']) }}</td>
                      </tr>
                      <tr>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Is protective equipotential bonding satisfactory? :</td>
                        <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                          <span style="font-weight: 700;">Appliance 5</span>
                          <span style="border-bottom: 1px dashed #000;">{{ getvalue('defects_identified_5', $formData['form_part_2']) }}</span>
                      </td>
                      <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                       
                        <span style="border-bottom: 1px dashed #000;">{{ getvalue('warning_notice_5', $formData['form_part_2']) }}</span>
                    </td>
                    <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"></td>
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
        <div style="display: inline-block; width: 49.8%;">
        <table style="width: 100%; border: 1px solid black;">
        <thead>
          <tr style="background-color: yellow;">
            <th  style="width: 24%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">Audible CO ALARM</th>
            <th  style="width: 24%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">Approved CO alarm fitted</th>
            <th  style="width: 24%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">Is CO alarm in date</th>
            <th  style="width: 24%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">CO alarm tetsing satisfactory</th>
        </tr>
        </thead>
        <tbody>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="font-weight: 700;">Appliance 1:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved1', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co1', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co1', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="font-weight: 700;">Appliance 2:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved2', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co2', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co2', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="font-weight: 700;">Appliance 3:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved3', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co3', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co3', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="font-weight: 700;">Appliance 4:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved4', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co4', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co4', $formData['form_part_5']) }}</span></td>
            </tr>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="font-weight: 700;">Appliance 5:</span>
                
            </td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved5', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co5', $formData['form_part_5']) }}</span></td>
            <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_test_co5', $formData['form_part_5']) }}</span></td>
            </tr>
        </tbody>
        </table>
        </div>
        <div style="display: inline-block; width: 49.8%;">
          <table style="width: 100%; border: 1px solid black;">
          <thead>
           
          </thead>
          <tbody>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">Cylinder/final connection hoses to LAV/boat satisfactory (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('cylinder', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">Gas installation pipework (visual inspection) satisfactory (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_installation_pipework', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">Gas tightness test satisfactory (Yes/No/NA)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('gas_tightness_satisfactory', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">Emergency Control Valve (ECV) accessible and operable (Yes/No)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('emergency_control', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">LPG regulator operating pressure (mbar)</span></td>
              <td><span style="border-bottom: 1px dashed #000;">{{ getvalue('lpg_operating', $formData['form_part_5']) }}</span></td>
              </tr>
              <tr>
                <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;"><span style="font-weight: 700;">LPG regulator lock-up pressure (mbar)</span></td>
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
        <div style="display: inline-block; width: 79.8%;">
        <table style="width: 100%; border: 1px solid black; min-height: 130px;">
        <thead>
          <tr style="background-color: yellow;">
            <th  style="width: 48%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">Record issued by:</th>
            <th  style="width: 48%; text-align: left; color: black; font-weight: 700; font-size: 15px; margin: 0; padding: 10px; ">Record recived by: (tennant/landlord/homeowner/agent)</th>
             </tr>
        </thead>
        <tbody>
            <tr>
              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; ">
               
               
            </td>
           
          
            </tr>
            
        </tbody>
        </table>
        </div>
        <div style="display: inline-block; width: 19.8%;">
          <table style="width: 100%; border: 1px solid black;">
          <thead>
           
          </thead>
          <tbody>
             
              <tr style="text-align: center;">
                  <td><h3 style="margin-top: 10px; margin-bottom: 0px;">Attention</h3><p style="margin-bottom: 0px;">Next Safety Check Due Within</p><p style="color: red;">12 Months</p></td>
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
                              <th colspan="16"  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                              </tr>
                              <tr style="">
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
                      <tbody style="vertical-align: middle;"  >
                   <tr>
                    <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                      <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_number', $formData['appliance_data']) }}</span>
                  </td>
                  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_designation', $formData['appliance_data']) }}</span>
                </td>
                <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_type', $formData['appliance_data']) }}</span>
              </td>
              <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_model', $formData['appliance_data']) }}</span>
            </td>
            <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
              <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_make', $formData['appliance_data']) }}</span>
          </td>
          <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
            <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_owned_by', $formData['appliance_data']) }}</span>
        </td>
        <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
          <span style="border-bottom: 1px dashed #000;">{{ getvalue('inspected_make', $formData['appliance_data']) }}</span>
      </td>
      <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
        <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_flue_type', $formData['appliance_data']) }}</span>
    </td>
    <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
      <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_operating_pressure', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_operating_of_safety', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_ventilation_satisfactory', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_visual_condition', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_flue_operation', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_combustion_analyses', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_serviced', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_safe_to_use', $formData['appliance_data']) }}</span>
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
                    <tbody style="vertical-align: middle;"  >
                 <tr>
               
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    {{ getvalue('id', $formData['appliance_data']) }}
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
    <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_approved_co', $formData['appliance_data']) }}</span>
    </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_is_co_alarm', $formData['appliance_data']) }}</span>
  </td>
  <td style=" border: 1px solid black; padding-left: 6px; padding-top:6px; padding-bottom:6px;">
  <span style="border-bottom: 1px dashed #000;">{{ getvalue('appliance_co_alarm_test', $formData['appliance_data']) }}</span>
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
                           <p>Expire At: {{ date('d-m-Y', strtotime($data->expire)) }} </p>
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