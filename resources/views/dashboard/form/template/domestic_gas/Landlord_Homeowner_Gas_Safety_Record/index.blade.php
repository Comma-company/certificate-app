<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LANDLORD/HOMEOWNER GAS SAFETY RECORD</title>
    <style>
        @page {
            /* header: html_formHeader;*/
            footer: html_formFooter;
            margin: 0px;
            margin-bottom: 20px;
            margin-top: 0px;
            margin-header: 10mm 0mm 0mm;
            margin-footer: 5mm 5mm 2mm;
            padding: 0px;
        }

        /* @page{
                header: html_formHeader;
                footer: html_formFooter2;
                margin: 15px;
                margin-bottom:20px;
                margin-top:60px;
                margin-header:4mm;
                size: landscape;
                margin-footer:5mm ;
            } */

        @font-face {
            font-family: Arial;
            src: './Ayar/Arial.ttf';
        }

        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-size: 12px;

        }

        .table-border {
            width: 100%;
            border-collapse: collapse;
        }

        .table-border tr td {
            border-left: 1px solid;
            padding: 3px;
        }

        .table-border tr td {
            border-bottom: 1px solid;
            border-collapse: collapse;
        }

        .table-container {

            text-align: left;
        }
    </style>
</head>

<body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div class="table-container" style="font-family:'Arial';">

        <div style="width: 100%;background-color: #191919;padding: 15px;">
            <div style="width:11%; float: left;text-align: right ; ">
                <img src="{{ asset('certificate/image/gas_safe_logo.png') }}" style="width: 130px;height: 140px;">
            </div>

            <div style="width:45%; float: left;">
                <h4
                    style="color:#fff; font-size: 18px;font-weight: bold; margin-bottom: 20px;font-weight: 100;    margin-top: 35px;margin-left:10px;">
                    Landlord Safety Certificate</h4>
                <h4 style="color:#fff; font-size: 13px;font-weight: 500; margin-top: 10px;margin-left:10px;">
                    LANDLORD/HOMEOWNER GAS SAFETY RECORD</h4>
            </div>


            <div style="width:40%; float:right;background: #FFF200;">
                <div style="background-color: #FFF200; width: 415px;  padding: 15px;">
                    <table bgcolor="#FFF200" style="width: 100%;padding:5px 0px">
                        <tr>
                            <td style="width:100px; border-bottom: 1px dashed; font-size: 10px;">Date: 20/4/2023</td>
                            <td></td>
                            <td style="width:130px; border-bottom: 1px dashed;font-size: 10px;">
                                <div>Gas Safe Register</div>
                                Licence Number : <span
                                    style="background-color: #fff; padding: 0 2px;font-size: 9px;">5281131</span>
                            </td>
                        </tr>

                        <tr style="padding-top: 20px; display: table;">
                            <td style=" border-bottom: 1px dashed ; font-size: 10px;margin-top:25px">
                                <div>Gas Safe</div>
                                Register No : <span style=" background-color: #fff; padding: 0 2px;">579115</span>
                            </td>
                            <td></td>
                            <td
                                style="margin-left: 50px; font-weight: 200; border-bottom: 1px dashed ; font-size: 10px;">
                                Serial No : <span style=" ">98164132 NW8 9RF</span>
                            </td>
                        </tr>


                    </table>

                </div>
            </div>

        </div>

        <div style="clear: both;"></div>


        <div style="padding:10px 22px 10px 22px; width: 100%; ">
            <div style="width: 32%; float: left;border: 1px solid; margin-right: 15px; height: 160px;">
                <h5
                    style="background-color: #333333; padding: 10px; text-align: center; color: #FFFFFF;
                font-size: 12px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 35px;">
                    DETAILS OF LANDLORD/HOMEOWNER (OR AGENT WHERE APPROPRIATE)</h5>
                <div style="padding: 10px;min-height: 107px;">
                    <p style="font-size: 10px;">{{ $data->customer->name }}</p>
                    <p style="font-size: 10px;">{{ $data->customer->address }}</p>
                   {{--  <p style="font-size: 10px;">Hall Road St. John's Wood London</p> --}}
                </div>
                <div style="text-align: right">
                    <span
                        style="padding: 10px;
                    background-color: rgb(234, 234, 234);
                    float: right;
                    clear: both;
                   margin-right: 10px;
                    width: 98px;    height: 10px;">{{ $data->customer->postal_code }}</span>
                </div>

            </div>

            <div style="width: 32%; float: left;border: 1px solid; margin-right: 5px; height: 160px;">
                <h5
                    style="background-color: #333333; padding: 10px; text-align: center; color: #FFFFFF;font-size: 12px;font-weight: 100; margin-top: 0;margin-bottom: 0; height: 35px;">
                    ADDRESS OF THE INSTALLTION</h5>

                <div style="padding: 10px;min-height: 107px;">
                    <p style="font-size: 10px;">{{ $data->customer->sites->first()->name }}</p>
                    <p style="font-size: 10px;">{{ $data->customer->sites->first()->address }}</p>
                    {{-- <p style="font-size: 10px;">&nbsp;</p> --}}
                </div>

                <div style="text-align: right">
                    <span
                        style="padding: 10px;
                    background-color: rgb(234, 234, 234);
                    float: right;
                    clear: both;
                   margin-right: 10px;
                    width: 98px;    height: 10px;">{{ $data->customer->sites->first()->postal_code }}</span>
                </div>
            </div>

            <div style="width: 32%; float: left;border: 1px solid;height: 160px;">
                <h5
                    style="background-color: #333333; padding: 10px; text-align: center; color: #FFFFFF;
            font-size: 12px;
            font-weight: 100; margin-top: 0;margin-bottom: 0;height: 35px;">
                    DETAILS Of Registred Business</h5>
                <div style="padding: 10px;min-height: 107px;">
                    <p style="font-size: 10px;">{{ $data->user->trading_name }}</p>
                    <p style="font-size: 10px;">{{  $data->user->registered_address  }}</p>
                    {{-- <p style="font-size: 10px;">Hall Road St. John's Wood London</p> --}}


                </div>
                <div style="text-align: right">
                    <span
                        style="padding: 10px;
                background-color: rgb(234, 234, 234);
                margin-right: 10px;
                width: 98px;    height: 10px;">
                    </span>
                    <span
                        style="padding: 10px;
                 background-color: rgb(234, 234, 234);
                 float: right;
                 clear: both;
                margin-right: 10px;
                 width: 98px;    height: 10px;">{{ $data->user->postal_code }}</span>
                </div>


            </div>

        </div>

        <div style="clear: both;"></div>

        <!-------------- Part 1 ------------>
        <div style="padding:5px 22px;">
            <div style="border: 1px solid;min-height: 220px;">
                <h5
                    style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF;font-size: 12px;font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">
                    DETAILS OF WORK CARRIED OUT
                </h5>

                <div style="padding: 5px;">
                    <div
                        style="padding: 10px;width: 68%;background-color: rgba(51, 51, 51, 0.1) ; float: left;min-height: 150px; ">
                       @if (isset($formData['form_part_1']))
                         {{ getvalue('name_p1',$formData['form_part_1']) }}
                       @endif

                    </div>
                    <div
                        style="padding: 10px;width: 26%;background-color: rgba(51, 51, 51, 0.1) ;float: right;min-height: 150px; ">
                        &nbsp;
                    </div>
                </div>

            </div>

        </div>


        <div style="clear: both;"></div>
        <!-------------- Part 2 => 3 in mobile ------------>
        <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 70%; float: left;border: 1px solid; margin-right: 5px;min-height: 150px;">

                <h5  style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF;
                font-size: 12px;
                font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">
                    DEFECTS IDENTIFIED</h5>
                <div style="padding: 10px;">
                    <div style="width: 100%;background-color: rgba(51, 51, 51, 0.1);min-height: 135px; ">

                        <table class="table-border">
                            <tr>
                                <td>1</td>
                                <td>{{ getvalue('defects_identified_1',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>{{ getvalue('defects_identified_2',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>{{ getvalue('defects_identified_3',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>{{ getvalue('defects_identified_4',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>{{ getvalue('defects_identified_5',$formData['form_part_3']) }}</td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div>

            <div
                style="width: 29%; float: left;border: 1px solid; margin-right: 5px;
                 min-height: 150px; ">
                <h5 style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF; font-size: 12px;
              font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">
                    Warning Notice Lssued?</h5>
                <div style="padding: 10px;">
                    <div style="width: 100%;background-color: rgba(51, 51, 51, 0.1) ;min-height: 135px; ">
                        <table class="table-border">
                            <tr>
                                <td>{{ getvalue('warning_notice_1',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_2',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_3',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_4',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_5',$formData['form_part_3']) }}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>
          <!-------------- Part 3 => 2 in mobile ------------>
        <div style="padding:10px 22px;">
            <div style="border: 1px solid;min-height: 220px;">
                <h5 style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF; font-size: 12px;font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">
                    GAS INSTALLATION PIPEWORK
                </h5>

                <div style="">
                    <div style="width: 20%; float: left;min-height: 181px;border-right: 1px solid; ">

                        <div style="padding: 0px 10px;">
                            <p style="height:55px; font-size: 10px;">PIPEWORK VISUAL INSPECTION</p>

                            <span
                                style="background-color:rgb(234, 234, 234) ; padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_visual_p2',$formData['form_part_2']) }}</span>
                        </div>

                    </div>

                    <div style="width: 20%; float: left;min-height: 181px;border-right: 1px solid; ">
                        <div style="padding: 0px 10px;">
                            <p style="height:55px; font-size: 10px;">OUTCOME OF GAS SUPPLY PIPEWORK VISUAL INSPECTION
                            </p>

                            <span
                                style="background-color:rgb(234, 234, 234) ; padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_outcome_supply_p2',$formData['form_part_2']) }}</span>
                        </div>

                    </div>

                    <div style="width: 20%; float: left;min-height: 181px;border-right: 1px solid; ">
                        <div style="padding: 0px 10px;">
                            <p style="height:55px; font-size: 10px;">IS THE EMERGENCY CONTROL VALVE ACCESS SATISFACTORY
                            </p>

                            <span
                                style="background-color:rgb(234, 234, 234) ; padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_emergency_p2',$formData['form_part_2']) }}</span>
                        </div>

                    </div>

                    <div style="width: 20%; float: left;min-height: 181px;border-right: 1px solid; ">
                        <div style="padding: 0px 10px;">
                            <p style="height:55px; font-size: 10px;">OUTCOME OF GAS TIGHTNESS TEST?</p>

                            <span
                                style="background-color:rgb(234, 234, 234) ; padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_outcome_tightness_p2',$formData['form_part_2']) }}</span>
                        </div>

                    </div>
                    <div style="width: 19%; float: left;min-height: 181px; ">
                        <div style="padding: 0px 10px;">
                            <p style="height:55px; font-size: 10px;">IS PROTECTIVE EQUIPOTENTIAL BONDING SATISFACTORY
                            </p>

                            <span style="background-color:rgb(234, 234 ,234) ; padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_protective_p2',$formData['form_part_2']) }}</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div style="clear: both;"></div>
  <!-------------- Part 4  ------------>
        <div style="padding:0 22px 10px 22px; ">
            <div style="border: 1px solid;min-height: 220px;">
                <h5 style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF; font-size: 15px; font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">
                    ANY REMEDIAL ACTION TAKEN OR NOTES <span style="font-size: 13px; margin-left: 10px;">Number
                        Should Correspond To Defects Above</span></h5>

                <div style="padding: 5px;width: 99%;">
                    <div
                        style="padding: 10px;width: 99%;background-color: rgba(51, 51, 51, 0.1) ; float: left;min-height: 150px; ">
                    @if (isset($formData['form_part_4']))
                        {{ getvalue('record_remedial_action',$formData['form_part_4']) }}
                    @endif
                    </div>

                </div>


            </div>



        </div>

        <div style="clear: both;"></div>

        <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 80%; float: left;border: 1px solid; margin-right: 5px;">
                <h5
                    style="background-color: #333333; padding: 10px; text-align: left; color: #FFFFFF;
                font-size: 15px;
                font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">
                    Record Issued By:</h5>
                <div style="padding:5px;">
                    <div style="width: 100%;min-height: 100px; ">
                        <div style="width: 59%; float: left;">
                            <table>
                                <tr>
                                    <td>Signature :</td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if ($data->user->signature)
                                        <img width="120px" src="{{ $data->user->signature->file_url }}" alt="">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                         Record Received By : (Tennant/Landlord/Homeowner/Agent)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Signature :</td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if ($data->customerSignature)
                                        <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                        @endif
                                    </td>
                                </tr>
                            </table>


                        </div>

                        <div style="width: 40%; float: left;">

                            <table>
                                <tr>
                                    <td>Name (Capitals) :</td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if($data->user)
                                            {{$data->user->name}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Name (Capitals) :</td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        {{ getvalue('record_issue_by',$formData['part_declaration']) }}
                                    </td>
                                </tr>
                            </table>

                        </div>


                    </div>

                </div>

            </div>

            <div
                style="width: 16.5%; float: left;border: 1px solid; margin-right: 5px;height: 90px;background-color: #333333;">
                <h5
                    style=" padding:3px; text-align: center; color: #FFFFFF; font-size: 15px;
                      font-weight: 110; margin-top: 0;margin-bottom: 0; height: 20px;">
                    ATTENTION
                </h5>
                <div style="padding: 10px;">
                    <div
                        style="width: 100%;    width: 100%;
                        height: 60px;
                        background-color: #eaeaea;
                        text-align: center;
                        padding: 10px 0 0 0; ">
                        <span style="font-size: 13px; line-height: 1.5;">
                            Next Safety Check
                            <br>
                            Due By: {{ getvalue('next_safety_check_by',$formData['form_part_5']) }}
                        </span>

                    </div>

                </div>


            </div>

            <div style="clear: both;"></div>

            <div
                style="background-color: #FFF200;
                width: 95%;
                padding: 5px 15px;
                line-height: 1.4;
                font-size: 10px;
                border: 1px solid;
                margin: 10px 0;">
                <p>This Record Can Be Used To Document The Outcomes Of The Checks And Tests Required By The Gas Safety
                    (Installation And Use) Regulations. Some Of The Outcomes Are As A Result Of Visual Inspection Only
                    And Are Recorded As Appropriate. Unless Specifically Recorded No Detailed Inspection Of The Flue
                    Lining, Construction Or Integrity Has Been Performed</p>
            </div>


            <htmlpagefooter name="formFooter">
                <table style="width: 100%;">
                    <tr>
                        <td style="width:85%;">Produced Using 360 Connect @</td>
                        <td>  Page 1 Of</td>
                        <td style="width: 25px;
                        height: 25px;
                        border: 1px solid;"> 2 </td>
                    </tr>
                        {{--
                         <div style=" width: 25px; height: 25px;  border: 1px solid; margin-left: 10px; text-align: center; padding-top: 5px;">
                            2
                        </div>
                        <div style="margin-top: 10px;width80px">
                            Page 1 Of
                        </div>
                    --}}

                </table>
                <div style="clear: both;"></div>
            </htmlpagefooter>


        </div>

    </div>
</body>

</html>
