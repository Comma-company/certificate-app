<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
            @page :first {
                /* header: html_formHeader;
                footer: html_formFooter; */
                margin: 15px;
                margin-bottom:20px;
                margin-top:60px;
                margin-header:4mm;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                /* header: html_formHeader;
                footer: html_formFooter2; */
                margin: 15px;
                margin-bottom:20px;
                margin-top:60px;
                margin-header:4mm;
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

    dt{
        background-color: #EAEAEA;
    }
      .table-container {

        text-align: left;
      }
    </style>
  </head>
  <body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="

        font-family:'Arial';
      ">
          <div style="margin: 10px 25px;">
            <div style="float: left;width:15%; padding:0 25px">
                <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px">
            </div>
            <div style="float: left; height: 70px;background-color: #000000;width:80%;">
              <table style="width: 100%;     padding: 12px;">
                <tr style="color: #FFFFFF;">
                    <th></th>
                    <th style="font-size: 15px; color: #D3D2D2;font-weight: 100;">Certificate Reference <span style="color:#FFFFFF">39689968</span> </th>

                </tr>
                <tr style="color: #FFFFFF;">
                    <td style="font-size: 25px;">Portable Appliance Test (PAT) Completion Certificate</td>

                    <td style="font-size: 15px; color: #D3D2D2;font-weight: 100;">Date Completed <span style="color:#FFFFFF">03/04/2023</span></td>

                </tr>

            </table>
        </div>
            <div style="clear: both;"></div>
          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 35%; float: left;border: 1px solid;
            height: 108px;
        ">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;  height: 20px;">DETAILS OF THE CLIENT</h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 70%;">
                        <ul>
                          <dt style="list-style: none; font-size: 13px;">{{ $data->customer->name }}</dt>
                            <br>
                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->address }}</dt>
                        {{--   <br>

                          <dt style="line-height: 2;font-size: 13px;">London</dt> --}}
                          <br>

                        </ul>
                      </td>
                      <td style="background: #EAEAEA;">
                        <ul style="list-style: none;">
                          <dt style="line-height: 2;font-size: 13px;">Postcode:</dt>
                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->postal_code }}</dt>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>



            </div>

            <div style="width: 32%; float: left;border: 1px solid; margin-right: 5px;
            height: 108px;
        ">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 21x;">ADDRESS OF TESTING</h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 70%;">
                        <ul style="list-style: none; margin: 0;">
                          <br>

                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->sites->first()->address }}</dt>
                        {{--   <br>
                          <dt style="line-height: 2;font-size: 13px;">London</dt> --}}
                          <br>

                        </ul>
                        <br>

                      </td>
                      <td style="background: #EAEAEA;">
                        <ul style="list-style: none;">
                          <dt style="line-height: 2;font-size: 13px;">Postcode:</dt>

                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->sites->first()->postal_code }}</dt>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>



            </div>

            <div style="width: 32%; float: left;border: 1px solid; margin-right: 5px;
            height: 108px;
        ">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 22px;">ENGINEER, NAME & SIGNATURE</h5>

                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 50%;">
                        <br>

                        <ul style="list-style: none; margin: 0;">

                          <dt style="line-height: 2;font-size: 13px;color:#000000b3 ;">Signature</dt>
                          <br>
                          <dt style="line-height: 2;font-size: 13px;">
                            @if ($data->user->signature)
                            <img height="30px" src="{{ $data->user->signature->file_url }}" alt="">
                            @endif
                             </dt>
                          <br>

                        </ul>
                        <br>

                      </td>
                      <td style="background: #EAEAEA;">
                        <ul style="list-style: none;">
                          <dt style="line-height: 2;font-size: 13px;"> <span style="color:#000000b3 ;"> Name : </span> {{ $data->user->name }}</dt>

                          <dt style="line-height: 2;font-size: 13px;">  <span style="color:#000000b3 ;">Date :</span> {{ getvalue('date_inspection_by',$formData['part_declaration']) }} </dt>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>



            </div>





          </div>

          <div style="clear: both;"></div>

          <div style="padding:10px 22px 10px 22px; width: 100%; ">
            <div style="width: 370; float: left;border: 1px solid; margin-right: 5px;
            height: 215px;">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;  height: 20px;"><small>ANYON LIMITATIONS AGREED ON TESTING if any reasons and with whom agreed</small>
</h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>

                      <td style="background: #EAEAEA; width: 100%; height: 155px;padding: 5px 5px 3px 10px;">
                        <br>
                        <p>
                            {{ getvalue('limitations_of_testing', $formData['limitations_testing']) }}


                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>

                      </p>
                      </td>
                    </tr>
                  </table>

                </div>



            </div>

            <div style="width: 32%; float: left;border: 1px solid; margin-right: 5px;
            height: 198px;;
        ">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;  height: 33px;"><small> TESTING CARRIED OUT BY </small></h5>
                 <div style="background-color: #eaeaea; padding: 2px 10px 10px 10px;">
                  <table style="width: 100%;border-collapse: collapse; margin-bottom: 3px; ">
                    <tbody>
                      <tr style="border-bottom: 1px #f8f8f8 solid;">
                        <th style="text-align: left">{{ $data->user->name }}</th>
                        <hr>
                        <th></th>

                    </tr>
                    <tr>
                        <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->number_street_name }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->city }}</td>
                        <td style="line-height: 1.5;color: #000000b3;">Email: {{ $data->user->email }}</td>
                    </tr>

                    <tr>
                      <td style="line-height: 1.5;color: #000000b3;"></td>
                      <td style="line-height: 1.5;color: #000000b3;">Web: {{ $data->user->website }}</td>
                    </tr>

                    <tr>
                        <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->postal_code }}</td>
                        <td style="line-height: 1.5;color: #000000b3;">Telephone: {{ $data->user->phone }}</td>

                     </tr>
                    </tbody>


                </table>

                <table style="width: 100%">
                  <tr>
                      <th style="color: #000000b3; text-align: left">Registration No: <span>607485000</span></th>
                      <th></th>

                  </tr>
                  <tr>
                      <td style="color: #000000b3;">(If Applicable)</td>
                      <td></td>

                  </tr>


              </table>
                </div>



            </div>

            <div style="width: 32%; float: left;border: 1px solid; margin-right: 5px;
            height: 215px;">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 33px;"><small>PAT TESTER SERIAL NUMBER</small></h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 100%; height: 155px; text-align: center;">
                        <p style=" text-align: center list-style: none; margin: 0;">
                          KT63
                      </p>
                      <br>

                      </td>
                    </tr>

                  </table>
                </div>
            </div>

          </div>

          <div style="clear: both;"></div>

          <div style="padding:10px 22px 10px 22px; width: 97%; ">
            <div style="width: 100%; border: 1px solid; margin-right: 5px;
            height: 110px;">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">ANYON LIMITATIONS AGREED ON TESTING</h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 100%; height: 105px;padding: 5px 5px 3px 10px;">
                        <p style="list-style: none; margin: 0;">
                            {{ getvalue('any_limitations_agreed_testing', $formData['part_declaration']) }}
                      </p>
                      </td>

                    </tr>
                  </table>
                </div>



            </div>







          </div>

          <div style="padding:0 22px 10px 22px; width: 97%; ">
            <div style="width: 100%; border: 1px solid; margin-right: 5px;
            height: 60px;">

                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 100%; height: 90px;padding: 5px 5px 3px 10px; text-align: center;">
                        <p style="list-style: none; margin: 0; color: red; font-weight: bold;">
                          ANY FAILED APPLIANCES SHOULD BE REMOVED FROM SERVICE UNTIL THE DEFECT HAS BEEN RECTIFIED
                      </p>
                      </td>

                    </tr>
                  </table>
                </div>

            </div>


          </div>

          <div style="padding:0px 22px 10px 22px; width: 97%; ">

            <div style="width: 100%; border: 1px solid; margin-right: 5px;
            height: 150px; ">
                 <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                 font-size: 15px;
                 font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">APPLIANCE SUMMARY FOR<span style="font-size: 12px;"> Mahender Tanwar 16 Palm Court - Alpine Road London NW9 9BQ</span>
                <small style="float: left; text-align: left">Appliances Total : <span style="font-weight: bold; float: right; text-align: right; margin-left: 200px;">{{ getvalue('total_appliance_number', $formData['appliance_summary_data']) }}</span></small>
                </h5>

               <div style="padding: 5px;">
                  <div style="background-color: #eaeaea;height: 117px;">
                    <div style="width: 48%;background-color: #009933; padding: 10px; float: left;">
                      <p style="width: 100%; text-align: center;margin: 0; padding: 5px 0 10px 0; color: #FFFFFF;">Passed Appliances</p>
                      <div style="background-color: #FFFFFF; height: 65px; text-align: center; font-weight: bold;">
                        {{ getvalue('appliance_passed', $formData['appliance_summary_data']) }}
                      </div>
                    </div>
                    <div style="width: 48%;background-color: #E20319; padding: 10px; float: right;">
                      <p style="width: 100%; text-align: center;margin: 0; padding: 5px 0 10px 0;color: #FFFFFF;">Failed Appliances</p>
                      <div style="background-color: #FFFFFF; height: 65px; text-align: center; font-weight: bold;">

                        {{ getvalue('appliance_failed', $formData['appliance_summary_data']) }}
                      </div>
                    </div>
                  </div>
               </div>

            </div>


          </div>

          <div style="clear: both;"></div>

          <div style="padding:0px 22px 10px 22px; width: 97%; ">
            <div style="width: 100%; border: 1px solid; margin-right: 5px;
            height: 110px;">
                <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 60px;">ANYON LIMITATIONS AGREED ON TESTING</h5>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 100%; height: 70px;padding: 5px 5px 3px 10px;">
                        <p style="list-style: none; margin: 0;">
                          This is to certify the electrical appliances details in this certificate and record sheets have been tested for electrical safety in accordance with the IET code of practice for in service and inspection and testing of electrical equipment. It does not guarantee the correct operation of the appliance for any length of time. Users of the appliance should be aware of any fault or defect that may occur with future use. Any doubt regarding the safety or correct operation of the appliance, the device should be removed from service for further inspection by a competent person.
                      </p>
                      </td>

                    </tr>
                  </table>
                </div>

            </div>

          </div>

          <div style="clear: both;"></div>

          <div style="padding:0px 22px 10px 22px; width: 97%;">

            <table style="width: 100%;border-collapse: collapse">
              <tr style="background-color: #E5F5EA;">
                <th style="writing-mode: vertical-lr; font-weight: 500; text-align: center;border: 1px solid;" rowspan="2">Appliance Number</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid;" colspan="2" rowspan="2">Appliance</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Class</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Polarity</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid;" colspan="2" rowspan="2">Location</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid;" colspan="2" rowspan="2">Serial Number/Ld</th>

                <th style="font-weight: 500; text-align: center; border: 1px solid;" rowspan="" colspan="4">Test Results </th>


                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Visual Check</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Fuse Rating (A)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Formal Visual Inspection (Months)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Combined Inspection & Test (Months)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Result</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" rowspan="2">Repair Code</th>
              </tr>
              <tr style="background-color: #E5F5EA;">
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" >Earth Continuity Test(Q)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" >Insulation Resistance M(Q)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" >Load Test (Kva)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid;" >Earth Leakage Test (Ma)</th>
              </tr>
              @foreach ($formData['appliance_data'] as $appliance_data)
              <tr>
                <td style="text-align: center; border: 1px solid;">{{ getvalue('appliance_number', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;" colspan="2"> {{ getvalue('appliance_description', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('appliance_class', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('polarity', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;" colspan="2">{{ getvalue('appliance_location', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;" colspan="2">{{ getvalue('appliance_id', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('earth_continuity_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('insulation_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('LoadTest', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('earth_leakage_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">
                    <p style="height: 9px;  width: 5px; margin-left: 0;border-bottom: 3px solid #080808;border-right: 3px solid #020202;">
                        {{ getvalue('visual_check', $appliance_data) }}
                    </p>
                </td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('fuse_rating', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('formal_visual_inspection', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('combined_inspection_and_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('test_result', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid;">{{ getvalue('repair_code', $appliance_data) }}</td>
              </tr>
              @endforeach



            </table>

          </div>

          <div style="padding:0px 22px 10px 22px; width: 97%;">
            <div style="width: 48%; float: left">
                <table style="width: 100%;">
                    <tr>
                      <th style="text-align: left"> Repair Codes:</th>
                    </tr>

                    <tr>
                      <td>A = Replace Plug</td>
                      <td>D = Fit Rubber Plug</td>
                      <td>G = Replace Lead</td>
                    </tr>
                    <tr>
                      <td>B = Rewire Plug</td>
                      <td>E = Fit Inline Switch</td>
                      <td>H = Other</td>
                    </tr>
                    <tr>
                      <td>C = Fit BS1361 Sleeved Plug</td>
                      <td>H = Other</td>

                    </tr>
                </table>
            </div>

            <div style="float: right">
              <p> Page 1 Of Certificate Ref: <span style="width: 150px; height: 30px; padding: 5px 20px; background-color: #EAEAEA;"> 39689968 </span></p>
              <div style="text-align: right;">
                <strong>Produced Using 360 Connect</strong>
              </div>
            </div>
          </div>



    </div>
  </body>
</html>
