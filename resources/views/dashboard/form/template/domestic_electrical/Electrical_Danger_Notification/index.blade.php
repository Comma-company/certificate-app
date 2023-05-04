<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>

            @page{
                /* header: html_formHeader; */
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
      style="

        font-family:'Arial';">
          <div style="margin: 10px 25px;width: 93%;">
            <div style="float: left;width:10%">
                 <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px">
            </div>
            <div style="float: right; height: 70px;background-color: #000000;width:  85%;">
              <table style="width: 100%;     padding: 12px;">
                <tr style="color: #FFFFFF;">
                    <th></th>
                </tr>
                <tr style="color: #FFFFFF;">
                    <td style="font-size: 25px;">Domestic Electrical Installation Certificate</td>
                    <td style="font-size: 15px; color: #D3D2D2;font-weight: 100;">CERT NO <span style="color:#FFFFFF">{{ $data->id }}</span></td>
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
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h5>
                      <div style="width: 32.3%;border-right: 1px solid #000000;height: 240px; float: left;">
                              <p style="padding: 10px; margin: 0;font-weight: bold;">BUSINESS DETAILS</p>
                              <div style="padding:0 10px;">
                                <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Register No : {{ $data->user->registration_number }}</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Operative : {{ $data->user->trading_name }}</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Company :{{ $data->user->company_name }} </h6>
                                <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->user->registered_address }}</h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode : {{ $data->user->postal_code }}  <span style="margin-left: 170px;">Tel No : {{ $data->user->phone }}</span></h6>
                                <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email : {{ $data->user->email }}</h6>
                              </div>
                      </div>
                      <div style="width: 32.3%;border-right: 1px solid #000000;height: 240px; float: left;">
                        <p style="padding: 10px; margin: 0;font-weight: bold;">JOB ADDRESS</p>
                        <div style="padding:0 10px;">
                          <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Name : {{ $data->customer->sites ? $data->customer->sites->first()->name : "" }}</h6>

                          <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->customer->sites ? $data->customer->sites->first()->address : "" }}</h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode :  {{ $data->customer->sites->first()->postal_code }}
                                <span style="margin-left: 170px;">Tel No : {{  $data->customer->sites->siteContact ? $data->customer->sites->siteContact->phone : " " }} </span>
                          </h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email : {{ $data->customer->sites->siteContact? $data->customer->sites->siteContact->email : "" }} </h6>
                        </div>

                      </div>
                      <div style="width: 32.3%;height: 240px; float: left; ">
                        <p style="padding: 10px; margin: 0;font-weight: bold;">CLIENT/LANDLORD</p>
                        <div style="padding:0 10px;">
                          <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">Name : {{ $data->customer->name }}</h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Company : </h6>
                          <h6 style="margin:15px 5px 30px 5px;font-size: 12px;font-weight: 100;">Address : {{ $data->customer->address }}</h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Postcode : {{ $data->customer->postal_code }} <span style="margin-left: 170px;">Tel No : {{ $data->customer->contacts()->first()->phone }} </span></h6>
                          <h6 style="margin:15px 5px;font-size: 12px;font-weight: 100;">Email : {{ $data->customer->contacts()->first()->email }}</h6>
                        </div>
                      </div>
            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 310px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 2 : DETAILS OF THE DANGEROUS CONDITION</h5>
                      <div style="width: 98%; padding: 5px;">
                        <p style="font-weight: bold;line-height: 2;">while at the premises/location indicated above, an electrical condition has been observed which, in the opinion of the competent person issuing this notification, constitutes a real and immediate danger to persons, property or livestock. the person(s) having responsibility for the safety of the electrical installation or equipment concerned have a duty to ensure that appropriate action is taken without delay to remove the danger. the competent person issuing this notification will be able to provide further specific advice.</p>
                         <div>
                          <p>Danger Condition : {{ getvalue('dangerous_condition', $formData['form_part_2']) }}</p>
                         </div>

                          <div>
                          <p style="font-weight: bold; margin-top: 20px;">the dangerous condition detailed above may result in risk of injury or loss from :</p>
                         </div>
                         <table style="width: 100%;">
                                <tr>
                                <td>Electric Shock :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) == 'Electrical shock')
                                        <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Burns From Hot Surfaces :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Burns from hot surfaces')
                                        <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Mechanical Movement Of  Electrically-Actuated Equipment :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Mechanical movement of electrical')
                                         <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Arcing or burning, excessive <br> pressure and/or toxic gases :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Arcing or burning')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <td>Fire :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Fire')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Burns From The Passage Of Electric Current :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Burns from the passage of electrical')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Explosion :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Explosion')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Power supply interruptions nd/or safety services :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Power supply interruption')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                              </tr>
                        </table>

                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height:180px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 3 : IMMEDIATE ACTION TAKEN</h5>
                      <div style="width: 98%;">
                            <ul>
                                <li style="list-style-type: disclosure-closed;border-bottom: 1px solid; line-height: 2;">
                                    {{ getvalue('action_taken', $formData['form_part_3']) }}
                                </li>
                            </ul>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>

          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height:180px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 4 : FURTHER URGENT ACTION RECOMMENDED</h5>
                      <div style="width: 98%;">
                            <ul>
                                <li style="list-style-type: disclosure-closed;border-bottom: 1px solid; line-height: 2;">
                                    {{ getvalue('further_action', $formData['form_part_4']) }}
                                </li>
                            </ul>
                      </div>

            </div>


          </div>


          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 170px;">
              <h5 style="background-color: #009933; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">PART 5 : RECEIPT</h5>
                      <div style="width: 98%; padding: 5px;">


                          <div>
                          <p style="font-weight: bold; margin-bottom: 20px;">i acknowledge receipt of this dangerous condition notification .</p>
                         </div>
                         <table style="width: 100%;">
                             <tr>
                                <td style="padding-bottom: 25px;">Name : {{ getvalue('client_name', $formData['part_declaration']) }}</td>
                                <td style="padding-bottom: 25px;">Position :  {{ getvalue('client_position', $formData['part_declaration']) }}</td>
                              </tr>
                              <tr>
                                <td>Signature :
                                    @if ($data->customerSignature)
                                    <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                    @endif
                                </td>
                                <td>Date : {{ getvalue('received_date', $formData['part_declaration']) }}</td>

                              </tr>
                        </table>

                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 12px 10px 12px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;">
              <h5 style="background-color: #009933; padding: 3px; text-align: center; color: #FFFFFF;
              font-size: 14px;
              font-weight: 500; margin-top: 0;margin-bottom: 0;padding: 20px; line-height: 16px;">
              If You Are Not A Person Having Responsibility For The Safety Of The Electrical Installation/Equipment Concerned,
              <br> It Is Important That You Pass The Notification To Such A Person Without Delay
            </h5>
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
