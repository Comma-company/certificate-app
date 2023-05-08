<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
            @page :first {
                /* header: html_formHeader;*/
                footer: html_formFooter; 
                margin: 15px;
                margin-bottom:20px;
                margin-top:60px;
                margin-header:4mm;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
               /*  header: html_formHeader; */
                footer: html_formFooter;
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


      }
      .table-container {

        text-align: left;
      }
    </style>
  </head>
  <body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="font-family:'Arial';">
          <div style="margin: 10px 25px;  width: 97%;">
            <div style="float: left;width:25%">
                <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px">
            </div>
            <div style="float: left; margin-right: 46px; height: 70px;background-color: #000000;width: 70%;">
              <table style="width: 100%;     padding: 12px;">
                    <tr style="color: #FFFFFF;">
                        <th></th>
                    </tr>
                    <tr style="color: #FFFFFF;">
                        <td style="font-size: 25px;">Domestic Electrical Installation Certificate</td>

                        <td style="font-size: 15px; color: #D3D2D2;font-weight: 100;">CERT NO <span style="color:#FFFFFF">03/04/2023</span></td>

                    </tr>

                </table>
            </div>
            <div style="clear: both;"></div>
          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 265px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h5>
                      <div style="width: 32.3%;border-right: 1px solid #000000;height: 240px; float: left;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;">BUSINESS DETAILS</p>
                              <div style="padding:0 10px;">
                                <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Register No : {{ $data->user->trading_name }}  </h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Operative :</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Company : </h6>
                                <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->user->registered_address }}</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode :  {{ $data->user->postal_code }} <span style="margin-left: 170px;">Tel No :</span></h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email :</h6>
                              </div>
                      </div>
                      <div style="width: 32.3%;border-right: 1px solid #000000;height: 240px; float: left;">
                        <p style="padding: 10px; margin: 0;font-weight: bold;">JOB ADDRESS</p>
                        <div style="padding:0 10px;">
                          <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Name : {{ $data->customer->sites->first()->name }} </h6>

                          <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->customer->sites->first()->address }}</h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode : {{ $data->customer->sites->first()->postal_code }} <span style="margin-left: 170px;">Tel No :</span></h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email : </h6>
                        </div>

                      </div>
                      <div style="width: 32.3%;height: 240px; float: left; ">
                        <p style="padding: 10px; margin: 0;font-weight: bold;">CLIENT/LANDLORD</p>
                        <div style="padding:0 10px;">
                          <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Name : {{ $data->customer->name }} </h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Company :  </h6>
                          <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->customer->address }}</h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode : {{ $data->customer->postal_code }}  <span style="margin-left: 170px;">Tel No :</span></h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email :</h6>
                        </div>
                      </div>
            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 150px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 2 : DETAILS AND EXTENT OF THE INSTALLATION</h5>
                      <div style="width: 100%;border-right: 1px solid #000000; float: left;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                              <div style="padding:0 10px;">
                                <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Extent Of The Installation : {{ getvalue('extends_of_the_installation', $formData['form_part_1']) }} </h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Covered By This Certificate :</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">The Installation Is: : </h6>

                              </div>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height:300px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 3 : COMMENTS ON EXISTING INSTALLATION</h5>
                      <div style="width: 100%;border-right: 1px solid #000000; float: left; padding:10px;">
                        {{ getvalue('comments_on_installation', $formData['form_part_4']) }}
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 100px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 4 : NEXT INSPECTION</h5>
                      <div style="width: 100%;border-right: 1px solid #000000; float: left;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                              <div style="padding:0 10px;">
                                <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">I RECOMWND That This Instanation Is Further Inspected And Tested After An Interval Ot Not Rnore Than : {{ getvalue('next_inspection', $formData['form_part_3']) }} </h6>


                              </div>
                      </div>

            </div>


          </div>


          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 170px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 5 : TEST INSTRUMENTS</h5>
                      <div style="width: 49%; float: left;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;">Details Of Tests Instruments Used (State Serial And/Or Asset Numbers): {{ getvalue('mft',$formData['form_part_10']) }}</p>
                              <div style="width: 100%;">
                                <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                                <div style="padding:0 10px;">
                                  <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Mufti-Functionat  :  {{ getvalue('earth_fault_loop',$formData['form_part_10']) }} </h6>
                                  <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Insulation Resistance : {{ getvalue('Insulation_resistance',$formData['form_part_10']) }}</h6>
                                  <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Continuity : {{ getvalue('continuity',$formData['form_part_10']) }} </h6>

                                </div>
                        </div>
                      </div>

                      <div style="width: 49%; float: right;">
                        <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                        <div style="width: 100%;border-right: 1px solid #000000; float: left;">
                          <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                          <div style="padding:0 10px;">
                            <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Earth Electrode Resistance  : </h6>
                            <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Earth Fault Bop Impedance : {{ getvalue('earth_fault_loop',$formData['form_part_10']) }} </h6>
                            <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">RCD :  {{ getvalue('rcd',$formData['form_part_10']) }} </h6>

                          </div>
                  </div>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; margin-top: 100px; ">
            <div style="width: 97%;border: 1px solid;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom:0;height: 20px;">PART 6 : DESIGN, CONSTRUCTION, INSPECTION AND TESTING</h5>
                      <div style="width: 100%;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;font-size: 13px;">l /we being the person(s) responsible for the design, construction, inspection and testing of the electrical installation (as indicated by my/our signatures below), particulars of which are described above, having exercised reasonable skill and care when carrying out the design, construction, inspection and testing, hereby certify that the design work for which l/we have been responsible is to the best of my/our knowledge and belief in accordance with bs 7671:2018, except for the departures, if any, detailed as follows.</p>
                              <div style="width: 100%;">
                                <p style="padding: 10px; margin: 0;font-weight: bold;"></p>
                                <div style="padding:0 10px;">
                                  <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">I RECOMWND That This Instanation Is Further Inspected And Tested After An Interval Ot Not Rnore Than : {{ getvalue('amended_to', $formData['form_part_2']) }}v </h6>
                                  <br>
                                <hr>
                                  <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100; float: right;clear: both; margin-right: 300px;">Risk Assessment Attached :</h6>
                                  <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;clear: both;"> Details Of Permitted Exceptions (Regulations 411.3.3): {{ getvalue('as_amended', $formData['form_part_2']) }} </h6>
                                  <br>
                                  <hr>
                                  <small>the extent of liability of the signatory/signatories is limited to the work described above as the subject of this certificate.</small>
                                  <h6 style="font-size: 13px;">for design, the construction, and the inspection and testing of the installation:</h6>

                                  <h6 style="font-size: 12px; font-weight: 100;">Signature:   
                                    @if ($data->customerSignature)
                                    <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                    @endif
                                    <span style="float: right;font-size: 12px; margin-right: 300px;">Date: {{ getvalue('date_reviewed_by', $formData['part_declaration']) }}</span>
                                </h6>
                                </div>
                        </div>
                      </div>



            </div>


          </div>

          <div style="clear: both;"></div>

          <htmlpagefooter name="formFooter">
            <table style="width: 100%; margin-left: 24px;">
            <tr>
                <td style="float: left; width:80%;">
                  <p>Produced Using 360 Connect @</p>
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
