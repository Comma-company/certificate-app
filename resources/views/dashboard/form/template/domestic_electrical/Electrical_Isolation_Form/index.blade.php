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
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:20px;
                size: landscape;
                margin-footer:5mm ; /* <length>{1,2} | auto | portrait | landscape */
               
            }
            @page {
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:20px;
                size: landscape;
                margin-footer:5mm ; /* <length>{1,2} | auto | portrait | landscape */
               
            }
            .table-container {

text-align: left;
}
.color-border tr td{
border-color: #00935f;
}
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
 <body style="width: 100%; margin: 0; overflow-x: hidden;">

   <div
      class="table-container"
      style="font-family: 'FreeSans';">
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

                @if ($data->user->logo)
                <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
                @endif
            </div>
            <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
                <table style="border: 1px solid #00935f;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #00935f;">
                    <tr style="padding: 10px;">
                        <th style="padding: 10px;">
                            <div style="padding: 0 120px 0 0"><h3>{{$data->num_cert ?? $data->id}}</h3></div>
                        </th>
                        <th bgcolor="#00935f" style="color: #fff; padding: 10px">
                            <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                        </th>
                    </tr>
                </table>
                <h2 style="color: #00935f; padding: 0; margin: 0; font-weight: 900;text-align: right">
                    Electrical Isolation WORKS CERTIFICATE
                </h2>
                <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                    Issued in accordance with BS 7671: 2018 – Requirements for Electrical
                    Installations
                </p>
            </div>
            <div style="clear: both;"></div>
          </div>
    </htmlpageheader>
    
    <div style="clear: both;"></div>
    <!-- Table 1 -->
    <div style="padding:0px 22px 10px 22px; width: 100%; ">
        <div style="width: 100%;border: 1px solid #00935f;">
            <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                 PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
            </h3>
                  <div style="width: 32.3%;float: left;">
                          <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE CONTRACTOR</p>
                          <div style="padding:0 10px;">
                            @if ($data->user->categories->isNotEmpty())
@php
    $firstCategory = $data->user->categories->firstWhere('pivot.category_id', 1);
@endphp
@if ($firstCategory)
    <h6 style="margin: 5px 0px; font-size: 12px; font-weight: 100;">
        Registration No:
        <span style="font-weight: bold; padding: 3px 20px">
                {{ $firstCategory->pivot->license_number }}
        </span>
    </h6>
@endif
@endif
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Company Name:
                                <span style="font-weight: bold;padding:3px 20px">{{ $data->user->company_name }}</span>
                              </h6>
                              <h6 style="margin:5px 0px;font-size: 12px;font-weight: 100;">
                                Address:
                              <span style="font-weight: bold;padding:3px 20px">{{$data->user->number_street_name.', '.$data->user->city}}</span>
                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->postal_code }}</span>
                                <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->phone }}</span></span>
                              </h6>
                          </div>
                  </div>
                  <div style="width: 32.3%; float: left;">
                    <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE CLIENT</p>
                    <div style="padding:0 10px;">
                          {{-- <h6 style="margin:0px ;font-size: 12px;font-weight: 100;">
                            Contractor Reference Number
                            (CRN):
                          </h6> --}}
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->name }}</span>
                          </h6>
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Address:<span style="font-weight: bold;padding:3px 20px">{{$data->customer->street_num.', '.$data->customer->city}}</span>

                          </h6>
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->postal_code }}</span>
                            <span>Tel No:.<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->contacts->first()->phone }}</span>.</span>
                          </h6>
                    </div>

                  </div>
                  <div style="width: 32.3%; float: left; ">
                    <p style="padding:0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE INSTALLATION</p>
                    <div style="padding:0 10px;">
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Tenant Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->siteContact->f_name }}</span>
                          </h6>
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Address:<span style="font-weight: bold;padding:3px 20px">{{$data->site->street_num.', '.$data->site->city}}</span>

                          </h6>
                          <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                            Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->postal_code }}</span>
                            <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->site->siteContact->phone }}</span></span>
                          </h6>
                    </div>
                  </div>
        </div>


      </div>

      <div style="clear: both;"></div>

  
  
  <div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #00935f; ">
          <h3 style="color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: #00935f;">
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
      <!-- <div class="table-heading" style="display: block;  background-color: #00935f; ">
          <h3 style="color: white; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: #00935f;">
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

<pagebreak></pagebreak>
<!-- Table 5 & 6 -->
<div style=" padding: 10px;">
    <div style="display: block; width: 100%; margin: auto;">
      <div style="display: inline-block; width: 100%;">
      <table style="width: 100%; border: 1px solid black; height: 250px;">
      <thead>
          <tr style="background-color: #00935f;">
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
      <div style="display: inline-block; width: 100%;">
        <table style="width: 100%; border: 1px solid black; height: 250px;">
      <thead>
          <tr style="background-color: #00935f;">
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