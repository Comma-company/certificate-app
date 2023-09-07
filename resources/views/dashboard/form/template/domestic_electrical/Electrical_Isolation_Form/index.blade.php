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
        <div class="pdf-headings" style="padding: 10px 0; justify-content: end; display: flex;align-items: baseline;">
            <p style=" font-size: 16px;margin: 0; color: #000;font-weight: 400;padding: 12px 8px; line-height: 0;background-color: white; border: 3px solid green;">{{ $data->id }}</h2>
            <p style="font-size: 16px;margin: 0; color: #000; font-weight: 400;padding: 5px; background-color: green; border: 1px solid green;" >NO</p>
        </div>
        <h2 style=" font-size: 24px; font-weight: 700; line-height: 0;">Electrical Isolation WORKS CERTIFICATE</h2>
        <p style="font-size: 16px; color: #000; font-weight: 400;" >ssued in accordance with BS 7671: 2018+A2:2022 – Requirements for Electrical Installations</p>
    </div>
    
    <!-- Table 1 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: green; ">
            <h3 style="color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align: middle; ">
                <table style="width: 100%;">
                    <thead style="vertical-align: middle;">
                        <tr style="background-color: green;">
                            <th colspan="3" style=" text-align: left; color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</th>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="text-align: left; padding-left: 6px; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CONTRACTOR</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CLIENT</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE INSTALLATION</th>
                        </tr>
                    </thead>
                    @php
                    $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 1);
                @endphp
                    <tbody style="vertical-align: middle;"  >
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                    <div style="width: 48%; display: inline-block;">
                                    <span style="font-weight: 700;">Registration No:</span>
                                    <span style="border-bottom: 1px dashed #000;">{{ $firstCategory->pivot->license_number }}</span>
                                    </div>
                                    </div>
                            </td>
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
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">{{$data->site->street_num.', '.$data->site->city}}</span>
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
                            <td></td>
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
                       
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>

  
  
  <div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: green; ">
          <h3 style="color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: green;">
                          <th colspan="3" style="text-transform: uppercase; text-align: left; color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Equipment Details</th>
                      </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                        <td style="padding-top:6px; padding-bottom:6px;">
                            <div style="width: 100%; display: block;">
                            <div style="width: 68%; display: inline-block;">
                            <span style="font-weight: 700;">Time of isolation</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('time_isolation', $formData['form_part_1']) }}</span>
                            </div>
                            <div style="width: 28%; display: inline-block;">
                             <span style="font-weight: 700;">Fuses removed</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('fuses', $formData['form_part_1']) }}</span>
                            </div>
                            </div>
                        </td>
                         
                          
                      </tr>
                      <tr>
                        <td style="padding-top:6px; padding-bottom:6px;">
                            <div style="width: 100%; display: block;">
                            <div style="width: 68%; display: inline-block;">
                            <span style="font-weight: 700;">Location</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('isolation_location', $formData['form_part_1']) }}</span>
                            </div>
                            <div style="width: 28%; display: inline-block;">
                             <span style="font-weight: 700;">Isolater in OFF postion</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('isolation_off', $formData['form_part_1']) }}</span>
                            </div>
                            </div>
                        </td>
                         
                          
                      </tr>
                      <tr>
                        <td style="padding-top:6px; padding-bottom:6px;">
                            <div style="width: 100%; display: block;">
                            <div style="width: 68%; display: inline-block;">
                            <span style="font-weight: 700;">Equipment/Circuit to be isolated</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('equipment', $formData['form_part_1']) }}</span>
                            </div>
                            <div style="width: 28%; display: inline-block;">
                             <span style="font-weight: 700;">MCB in OFF postion</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('mcb_off', $formData['form_part_1']) }}</span>
                            </div>
                            </div>
                        </td>
                         
                          
                      </tr>
                      <tr>
                        <td style="padding-top:6px; padding-bottom:6px;">
                            <div style="width: 100%; display: block;">
                            <div style="width: 68%; display: inline-block;">
                            <span style="font-weight: 700;">SAFETY LOCKS have been fitted at</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('fitted', $formData['form_part_1']) }}</span>
                            </div>
                            <div style="width: 28%; display: inline-block;">
                             <span style="font-weight: 700;">Saftey Locks fitted</span>
                            <span style="border-bottom: 1px dashed #000;"></span>{{ getvalue('safty', $formData['form_part_1']) }}
                            </div>
                            </div>
                        </td>
                         
                          
                      </tr>
                      <tr>
                        <td style="padding-top:6px; padding-bottom:6px;">
                            <div style="width: 100%; display: block;">
                            <div style="width: 68%; display: inline-block;">
                            <span style="font-weight: 700;">CAUTION NOTICES posted at:</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('caution', $formData['form_part_1']) }}</span>
                            </div>
                            <div style="width: 28%; display: inline-block;">
                             <span style="font-weight: 700;">Tags fitted</span>
                            <span style="border-bottom: 1px dashed #000;">{{ getvalue('tags_fitted', $formData['form_part_1']) }}</span>
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

<!-- Table 4 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: green; ">
          <h3 style="color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: green;">
                          <th colspan="3" style="text-transform: uppercase; text-align: left; color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Notes</th>
                      </tr>
                    
                  </thead>
                  <tbody  >
                      <tr>
                         
                          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                              <span style="border-bottom: 1px dashed #000;">{{ getvalue('isolation_note', $formData['form_part_1']) }}</span>
                       
                          </td>
                          
                      </tr>
                   
                   
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>


<!-- Table 5 & 6 -->
<div style=" padding: 10px;">
    <div style="display: block; width: 100%; margin: auto;">
      <div style="display: inline-block; width: 49.8%;">
      <table style="width: 100%; border: 1px solid black; height: 250px;">
      <thead>
          <tr style="background-color: green;">
               <th  style=" text-align: left; color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Notes</th>
                   
          </tr>
      </thead>
      <tbody>
          <tr>
              <td  style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Isolated and verification of no voltage present:</td>
          </tr>
          <tr><td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Name (competant person)</td></tr>
          <tr>
                         
            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                <span style="border-bottom: 1px dashed #000;">{{ getvalue('customer_name', $formData['part_declaration']) }}</span>
         
            </td>
            
        </tr>
     
        <tr><td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">Signature</td></tr>
        <tr>
                       
          <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
            @if ($data->customerSignature)
              <span style="border-bottom: 1px dashed #000;"><img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt=""></span>
             @endif
          </td>
          
      </tr>
      </tbody>
      </table>
      </div>
      <div style="display: inline-block; width: 49.9%;">
        <table style="width: 100%; border: 1px solid black; height: 250px;">
      <thead>
          <tr style="background-color: green;">
               <th  style=" text-align: left; color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Clearance For Service</th>
                   
          </tr>
      </thead>
      <tbody>
        <tr>
            <td  style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">The work for which this certificate was issued is now complete. Locks, Isolation and warning notices have been removed. Equipment  
                subject to this certificate is energised</td>
        </tr>
        <tr>
            <td style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                <div style="width: 100%; display: block;">
                <div style="width: 48%; display: inline-block;">
                <span style=" width: 100%; display: block;">Name (competant person)</span>
                <span style="border-bottom: 1px dashed #000; width: 100%;">{{ getvalue('engineer_name', $formData['part_declaration']) }}</span>
                </div>
                <div style="width: 48%; display: inline-block;">
                 <span style=" display: block;">Date</span>
                <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_date', $formData['part_declaration']) }}</span>
                </div>
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding-top:6px; padding-left: 6px; padding-bottom:6px;">
                <div style="width: 100%; display: block;">
                <div style="width: 48%; display: inline-block;">
                <span style=" width: 100%; display: block;">Signature</span>
                @if($data->user->signature)
                <span style="border-bottom: 1px dashed #000; width: 100%;"><img width="120px" src="{{ asset('uploads/'.$data->user->signature->signature) }}" alt=""></span>
                @endif
                </div>
                <div style="width: 48%; display: inline-block;">
                 <span style=" display: block;">Date</span>
                <span style="border-bottom: 1px dashed #000;">{{ getvalue('engineer_date', $formData['part_declaration']) }} </span>
                </div>
                </div>
            </td>
        </tr>
      </tbody>
      </table>
      </div>
  </div>
  </div>
</body>
</html>