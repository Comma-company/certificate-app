<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
            @page :first {
                /* header: html_formHeader; */
                /* footer: html_formFooter; */
                margin: 15px;
                margin-bottom:20px;
                margin-top:60px;
                margin-header:4mm;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                /* header: html_formHeader; */
                /* footer: html_formFooter2; */
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
      style="

        font-family:'Arial';
      ">

          <div style="width: 100%;height: 80px;padding: 22px;">
            <div style="border: 1px solid ;width: 97%;">
              <div style=" float: left;text-align: right;width: 10%">
                <img  src="{{ asset('certificate/image/gasSafe_logo.png') }}" style="width: 90px;
                height: 100px;margin-left: 20px;margin-top: 15px;">
               </div>

               <div style="float: left;width: 59.9%">
                    <h4 style="color: #333;
                    font-size: 15px;
                    font-weight: bold;
                    margin-top: 85px;
                    margin-left: 15px;">WARNING NOTICE</h4>
                </div>


               <div style="float:right;width: 30%">
                    <div style="background-color: #FFF200;
                    width: 250px;
                    height: 103px;
                    margin-top: 10px;
                    margin-right: 20px;">
                    <h5 style="    margin: 0;
                    padding-top: 20px;
                    padding-bottom: 12px;
                    font-size: 15px;text-align: center;    font-weight: 300;">Form number</h5>
                    <div style="background-color: #fff; height: 30px;margin-left: 44px;
                    width: 170px;">{{ $data->id ?? 00 }}</div>
                    </div>
               </div>

               <div style="clear: both;"></div>
            </div>

          </div>



          <div style="clear: both;"></div>


          <div style="padding:10px 22px 10px 22px; width: 100%; text-align: center;">
                <div style="width: 97%;border: 1px solid; ">
                    <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
                    font-size: 13px;">DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
                    </h5>

                    <div style="width: 33%;float:left ">

                      <div style="border-right: 1px solid;">
                        <h6 style="margin: 0;
                        text-align: left;
                        font-size: 12px;
                        font-weight: bold;
                        border-bottom: 1px solid;
                        width: 127px;
                        line-height: 2;margin: 10px 0px 0 5px;">COMPANY/ENGINEER</h6>
                        <ul style="list-style: none;padding: 0;">
                          <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                            <p style="padding: 10px 5px;margin: 0;">Company Name :  {{ $data->user->name }}</p></li>
                            <li style="text-align: left;padding: 0;">
                              <p style="padding: 10px 5px; margin: 0;">Gas Safe Register No: </p></li>
                              <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                                <p style="padding: 10px 5px;margin: 0;">Gas Safe Register Licence No:
                                </p></li>
                                <li style="text-align: left;padding: 0;">
                                  <p style="padding: 10px 5px; margin: 0;">Address: {{  $data->user->registered_address  }}</p></li>
                                  <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                                    <p style="padding: 10px 5px;margin: 0;">Postcode: {{ $data->user->postal_code }}  <span style="    margin-left: 135px;">Tel No:
                                    </span></p></li>
                                    <li style="text-align: left;padding: 0;">
                                      <p style="padding: 10px 5px 0 5px; margin: 0;">EMAIL: </p></li>

                        </ul>
                      </div>

                    </div>

                    <div style="width: 33%;float:left ">

                      <div style="border-right: 1px solid;">
                        <h6 style="margin: 0;
                        text-align: left;
                        font-size: 12px;
                        font-weight: bold;
                        border-bottom: 1px solid;
                        width: 127px;
                        line-height: 2;margin: 10px 0px 0 5px;">JOB ADDRESS</h6>
                        <ul style="list-style: none;padding: 0;">
                          <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                            <p style="padding: 10px 5px;margin: 0;height: 80px;">Address :{{ $data->customer->sites->first()->address }} </p></li>

                                <li style="text-align: left;padding: 0;">
                                  <p style="padding: 10px 5px; margin: 0;">Name: {{ $data->customer->sites->first()->name }}</p></li>
                                  <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                                    <p style="padding: 10px 5px;margin: 0;">Postcode:{{ $data->customer->sites->first()->postal_code }}  <span style="    margin-left: 135px;">Tel No:
                                    </span></p></li>
                                    <li style="text-align: left;padding: 0;">
                                      <p style="padding: 10px 5px 0 5px; margin: 0;">EMAIL: </p></li>

                        </ul>
                      </div>

                    </div>

                    <div style="width: 33%;float:left ">

                      <div style="border-right: 0;">
                        <h6 style="margin: 0;
                        text-align: left;
                        font-size: 12px;
                        font-weight: bold;
                        border-bottom: 1px solid;
                        width: 320px;
                        line-height: 0.5;margin: 10px 0px 0 5px;">CUSTOMER/LANDLORD <small>(OR AGENT WHERE APPROPRIATE)</small></h6>
                        <ul style="list-style: none;padding: 0;">
                          <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                            <p style="padding: 10px 5px;margin: 0;">Name : {{ $data->customer->name }} </p></li>
                            <li style="text-align: left;padding: 0;">
                              <p style="padding: 10px 5px; margin: 0;">Company Name:  {{ $data->customer->name }} </p></li>
                              <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                                <p style="padding: 10px 5px;margin: 0;">Address: {{ $data->customer->address }}
                                </p></li>
                                <li style="text-align: left;padding: 0;">
                                  <p style="padding: 10px 5px; margin: 0;">Address:  {{ $data->customer->address }}</p></li>
                                  <li style="text-align: left;padding: 0;    background-color: #f6f6f6">
                                    <p style="padding: 10px 5px;margin: 0;">Postcode:  {{ $data->customer->postal_code }} <span style="    margin-left: 135px;">Tel No:
                                    </span></p></li>
                                    <li style="text-align: left;padding: 0;">
                                      <p style="padding: 10px 5px 0 5px; margin: 0;">EMAIL: </p></li>

                        </ul>
                      </div>

                    </div>

                    <div style="clear: both;"></div>
                </div>


          </div>


          <div style="clear: both;"></div>


          <div style="padding:0 22px 10px 22px; width: 100%; text-align: center;  ">


              <div style="width: 30%; float: left;">
                <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
                font-size: 13px;">
                </h5>
                <table style="width: 100%; border-collapse: collapse;">
                  <tr style="background-color:#FFF200;">
                    <th colspan="">#</th>
                    <th colspan="">APPLIANCE TYPE</th>
                    <th colspan="">LOCATION</th>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;"> {{ getvalue('important_safety_type',$formData['form_part_1']) }}</td>
                    <td style="border: 1px solid #cbcbcb;"> {{ getvalue('important_safety_location',$formData['form_part_1']) }}</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                  </tr>

                </table>





                  <div style="clear: both;"></div>
              </div>

              <div style="width: 67%; float: left; ">
                <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: center; padding: 10px 0 5px 5px;
                font-size: 13px;">DEFECTS IDENTIFIED ON GAS EQUIPMENT

                </h5>
                <table style="width: 100%; border-collapse: collapse;">
                  <tr style="background-color:#FFf;">
                    <th colspan="">Gas Escape</th>
                    <th colspan="">Meter Issue</th>
                    <th colspan="">Pipework Issue</th>
                    <th colspan="">Chimney/ Flue</th>
                    <th colspan="">Ventilation</th>
                    <th colspan="">Other (Specify Below)</th></tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('gas_escape',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('meter_issue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('pipework_issue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('chimney_flue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('ventilation',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('other',$formData['form_part_2']) }}</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>



                </table>





                  <div style="clear: both;"></div>

              <div style="clear: both;"></div>
            </div>



          </div>

          <div style="clear: both;"></div>

          <div style="padding:10px 22px 10px 22px; width: 100%; ">
            <strong style="font-weight: 100;">**Where an appliance/installation has been identified as ‘Immediately Dangerous’ or ‘At Risk’, it should not be used until the situation has been resolved</strong>
            <p>However, in a limited number of situations, turning off the gas installation will not remove or reduce the risk. In such circumstances the engineer will explain the
              situation and advise on the necessary course of action to take</p>
          </div>

          <div style="clear: both;"></div>


          <div style="padding:0 22px 10px 22px; width: 97%; text-align: center; ">
                <div style="width: 49%; float: left;">
                  <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
                  font-size: 13px;">
                  RIDDOR* REPORTING
                  </h5>
                  <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color:#FFF200;">
                      <th colspan=""></th>
                      <th colspan=""></th>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;width: 40%;padding: 5px; text-align: left;">Reported to HSE under RIDDOR
                        11(1) (Gas Incident)</td>
                      <td style="border: 1px solid #cbcbcb; "> {{ getvalue('riddor_reporting_1', $formData['form_part_3']) }}</td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 40%;     padding: 5px;text-align: left;">Reported to HSE under RIDDOR 11(2)
                        (Dangerous Gas Fitting)</td>
                      <td style="border: 1px solid #cbcbcb; ">{{ getvalue('riddor_reporting_2', $formData['form_part_3']) }}</td>

                    </tr>


                  </table>





                    <div style="clear: both;"></div>
                </div>

                <div style="width: 49%; float: right;">
                  <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
                  font-size: 13px;">
                  RIDDOR* REPORTING
                  </h5>
                  <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color:#FFF200;">
                      <th colspan=""></th>
                      <th colspan=""></th>
                      <th colspan=""></th>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb; width: 60%; padding: 5px; text-align: left;">The appliance/installation has been classified as ‘Immediately Dangerous’,
                        disconnected from the gas suppy and labelled “Danger Do Not Use”.</td>
                      <td style="border: 1px solid #cbcbcb; text-align: center">{{ getvalue('riddor_reporting_3',$formData['form_part_3']) }}</td>
                      <td style="border: 1px solid #cbcbcb;"></td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 60%;     padding: 5px;text-align: left;">The appliance/installation has been classified as ‘At Risk’, turned off to
                        made safe and labelled ‘Danger Do not Use’.</td>
                      <td style="border: 1px solid #cbcbcb;text-align: center">{{ getvalue('riddor_reporting_4',$formData['form_part_3']) }}</td>
                      <td style="border: 1px solid #cbcbcb; text-align: center"></td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 60%;     padding: 5px;text-align: left;">The appliance/installation has been classified as ‘At Risk’, but turning off will
                        not remove or reduce the risk and hence must be referred to the
                        appropriate organisation as advised for further assessment.</td>
                      <td style="border: 1px solid #cbcbcb; text-align: center">{{ getvalue('riddor_reporting_5',$formData['form_part_3']) }}</td>
                      <td style="border: 1px solid #cbcbcb;"></td>

                    </tr>


                  </table>

                <div style="clear: both;"></div>
                </div>


          </div>


          <div style="clear: both;"></div>

          <div style="padding:10px 22px 10px 22px; width: 100%; text-align: center;">
            <div style="width: 97%; ">
                <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
                font-size: 13px;">DESCRIBE FAULT(S) ON GAS EQUIPMENT
                </h5>

                <div style="width: 100% ">

                  <ul style="list-style: decimal;    margin: 0;">
                    <li style="    border-bottom: 1px solid;
                    padding: 10px; text-align:left">{{ getvalue('describe_fault_1',$formData['form_part_4']) }}</li>
                      <li style="    border-bottom: 1px solid;
                      padding: 10px; text-align:left">{{ getvalue('describe_fault_2',$formData['form_part_4']) }}</li>
                       <li style="    border-bottom: 1px solid;
                       padding: 10px; text-align:left">{{ getvalue('describe_fault_3',$formData['form_part_4']) }}</li>
                          <li style="    border-bottom: 1px solid;
                          padding: 10px; text-align:left">{{ getvalue('describe_fault_4',$formData['form_part_4']) }}</li>
                  </ul>

                </div>



                <div style="clear: both;"></div>
            </div>


         </div>

         <div style="clear: both;"></div>

         <div style="padding:10px 22px 10px 22px; width: 100%; text-align: center;">
           <div style="width: 97%; height: 200px; ">
               <h5 style="height: 20px; background-color:#FFF200;margin: 0;text-align: left; padding: 10px 0 5px 5px;
               font-size: 13px;">DETAIL WHAT IS REQUIRED TO RECTIFY THE UNSAFE SITUATION
               </h5>

               <div style="width: 100% ">

                 <ul style="list-style: decimal;    margin: 0;">
                   <li style="border-bottom: 1px solid;
                   padding: 10px; text-align:left">{{ getvalue('describe_watt_1',$formData['form_part_5']) }}</li>
                     <li style="    border-bottom: 1px solid;
                     padding: 10px; text-align:left">{{ getvalue('describe_watt_2',$formData['form_part_5']) }}</li>
                      <li style="    border-bottom: 1px solid;
                      padding: 10px; text-align:left">{{ getvalue('describe_watt_3',$formData['form_part_5']) }}</li>
                         <li style="    border-bottom: 1px solid;
                         padding: 10px; text-align:left">{{ getvalue('describe_watt_4',$formData['form_part_5']) }}</li>
                 </ul>

               </div>



               <div style="clear: both;"></div>
           </div>


        </div>

        <div style="clear: both;"></div>

        <div style="width: 100%;padding:10px 22px 10px 22px; margin-bottom: 5px;">
            <div style="float: left; width: 60%;height: 150px; border: 1px solid; padding: 5px; ">
              <p style="font-size: 13px;">I confirm that as the responsible person for the gas installation at the address detailed above I
                have been served this Warning/Advisory Record. As a gas appliance/installation has been classified
                as either ‘Immediately Dangerous’ or ‘At Risk’, as detailed above, continued use of the appliance/
                installation, after being advised not to do so, may be in breach of the Gas Safety Installation and confirm that as </p>
                <div style="float:right;margin-top: 15px; margin-bottom: 20px;">
                  <h6 style="    float: left;
                  font-size: 13px;
                  font-weight: 100;
                  margin: 0;

                  padding-right: 10px;font-weight: bold;">
                        Responsible person signature :
                        @if ($data->customerSignature)
                              <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                           @endif
                       </h6>

                  <span style="background-color: #f6f6f6; width: 225px; height: 30px; display: block; float: left;">{{ getvalue('customer_name',$formData['part_declaration']) }}</span>
                </div>
                <div style="clear: both;"></div>
                <div style="float:right">
                  <h6 style="    float: left;
                  font-size: 13px;
                  font-weight: 100;
                  padding-right: 10px;font-weight: bold;margin: 0;margin-top:6px">Data : </h6>
                  <span style="background-color: #f6f6f6; width: 310px; height: 30px; display: block; float: left;">{{ getvalue('customer_date',$formData['part_declaration']) }}</span>
                </div>
            </div>

            <div style="float: left; height: 207px; width: 36%;padding: 5px;background-color: #FFF200;">
              <p style="padding: 15px;">I confirm that the situations recorded above, have been
                identified and brought to the attention of the Responsible
                Person in accordance with the Gas Safety (Installation and
                Use) Regulations and Gas Industry Unsafe Situation
                Procedure

              </p>

              <div style="padding: 15px;">
                <h6 style="    float: left;
                font-size: 13px;
                font-weight: 100;
                padding-right: 10px;font-weight: bold;margin: 0;margin-top:6px">
                Gas Engineer’s signature :
                @if ($data->user->signature)
                <img width="120px" src="{{ $data->user->signature->file_url }}" alt="">
                @endif
                </h6>
                <span style="background-color: #f6f6f6; width: 250px; height: 30px; display: block; float: left;">{{ getvalue('engineer_name',$formData['part_declaration']) }}</span>
              </div>




            </div>
        </div>




    </div>
  </body>
</html>
