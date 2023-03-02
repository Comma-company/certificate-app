<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Link</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin/forms/Domestic_Electrical_Installation_Certificate/style.css')}}" media="all" />
     <style>
      body {
            height: 39cm;
            background-color: #EAF3FD;
        }
        * {box-sizing: border-box !important;}
      td {
            /* width: calc(100% / 16) !important; */
        }
        label {
          font-size: 10px !important;
        }
        #last-table td{
          vertical-align: middle;
    text-align: center;
    padding: 10px 4px;
    font-size: 8px;
        }
    </style>
    <style type="text/css" media="print">
      @page {
        size: landscape;
      }

      @media print {
        footer {
          position: fixed;
          bottom: 10px;
          left: 10px;
        }
      }
  </style>
  </head>
  <body>
    <header style="margin-bottom: 0;padding: 0;">
      <div id="logo" style="margin: 0;">
        <img src="{{asset('admin/forms/Domestic_Electrical_Installation_Certificate/main-logo.png')}}" style="width: 150px; object-fit: contain;">
        <img src="{{asset('admin/forms/Domestic_Electrical_Installation_Certificate/Image 1.png')}}">
      </div>
      <div id="information">
        <div class="btns">
          <div>
            <span style="font-weight: bold; text-align: left; direction: ltr;">CERT NO:</span>
            <span style="background-color: white; width: 150px ">{{$gaz_safety_data[0]['certificate_no'] ?? ""}}</span>
          </div>
        </div>
        <p style="margin-top: 15px; font-size: 16px;">DOMESTIC ELECTRICAL INSTALLATION CERTIFICATE</p>
      </div>
    </header>
    <main style="padding: 10px;">
      <table style="border-collapse: separate;
      border-spacing: 0px 5px;">
        <tbody>
          <tr id="part-2" class="">
            <td>
              <div style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 10px;">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</div>
              <div style="font-size: 0; background-color: white; padding: 10px;">
                <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; border-right: 2px solid #2a98fc;">
                  <p style="color: #2a98fc; font-weight: bold;">Business Details</p>
                  <div style="margin-bottom: 5px;">
                      <label style="width: 35%; display: inline-block; ">Register No:</label>
                      <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->registration_number}}</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Operative:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->name}}</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Company:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->company_name}}</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Address:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->number_street_name.', '.$user->city}}</div>
                  </div>
                  <div style="margin-bottom: 5px; font-size: 0;">
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Postcode:</label>
                      <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->postal_code}}</div>
                    </div>
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Tel No:</label>
                      <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->phone}}</div>
                    </div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Email</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->email}}</div>
                </div>
                </div>
                <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; vertical-align: top;  border-right: 2px solid #2a98fc; height: 263px;">
                  <p style="color: #2a98fc; font-weight: bold;">JOB ADDRESS</p>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Name:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site->name ?? ""}}</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Address:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 50px;">{{$job->site ? $job->site->street_num.', '.$job->site->city : ""}}</div>
                  </div>
                  <div style="margin-bottom: 5px; font-size: 0;">
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Postcode:</label>
                      <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->postal_code : ""}}</div>
                    </div>
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Tel No:</label>
                      <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->sitecontact()->first()->phone : ""}}</div>
                    </div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Email:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->sitecontact()->first()->email : ""}}</div>
                </div>
                </div>
                <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; vertical-align: top;">
                  <p style="color: #2a98fc; font-weight: bold;">Client / Landlord</p>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Name:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->name : ""}}</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Company:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">-</div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Address:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 50px;">{{$job->customer ? $job->customer->street_num.', '.$job->customer->city : ""}}</div>
                  </div>
                  <div style="margin-bottom: 5px; font-size: 0;">
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Postcode:</label>
                      <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->postal_code : ""}}</div>
                    </div>
                    <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                      <label style="display: inline-block; ">Tel No:</label>
                      <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->contacts()->first()->phone : ""}}</div>
                    </div>
                  </div>
                  <div style="margin-bottom: 5px;">
                    <label style="width: 35%; display: inline-block; ">Email:</label>
                    <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->contacts()->first()->email : ""}}</div>
                </div>
                </div>
              </div>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 2 : DETAILS AND EXTENT OF THE INSTALLATION</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td colspan="2"  style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="display: flex; align-items: center; margin-bottom: 5px;">
                        <label style="width: 150px" >Extent of the installation covered by this certificate:</label>
                        <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 30px;">{{$gaz_safety_data[0]['extent_of_the_installation_covered_by_this_certificate'] ?? ""}}</div>
                      </div>
                      <div style="margin-bottom: 5px; display: flex; align-items: center;">
                        <label>Let-by test carried out</label>
                        <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">test</div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 3 : Comments</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="padding: 15px; height: 50px;">
                        {{$gaz_safety_data[0]['comments_on_existing_installation'] ?? ""}}
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 4 : NEXT INSPECTION</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td colspan="2"  style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="margin-bottom: 5px; display: flex; align-items: center;">
                        <label>I RECOMMEND that this installation is further inspected and tested after an interval of not more than :</label>
                        <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$gaz_safety_data[0]['i_recommend_this_installation_is_further_inspected'] ?? ""}}
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 5 : TEST INSTRUMENTS</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td colspan="2"  style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="font-weight: bold; padding: 10px 20px 10px 20px;">
                        Details of Tests Instruments used (state serial and/or asset numbers):
                      </div>
                      <div style="display: flex;">
                          <div style="width: 50%; padding: 0 20px;">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                              <label style="width: 100px" >Multi-functional:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 30px;">{{$gaz_safety_data[0]['multi_functional'] ?? ""}}
                            </div>
                            </div>
                            <div style="margin-bottom: 5px; display: flex; align-items: center;">
                              <label style="width: 100px" >Insulation resistance:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$gaz_safety_data[0]['insulation_resistance'] ?? ""}}</div>
                            </div>
                            <div style="margin-bottom: 5px; display: flex; align-items: center;">
                              <label style="width: 100px" >Continuity:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$gaz_safety_data[0]['continuity'] ?? ""}}</div>
                            </div>
                          </div>
                          <div style="width: 50%; padding: 0 20px;">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                              <label style="width: 100px" >Earth electrode resistance:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 30px;">{{$gaz_safety_data[0]['earth_electrode_resistance'] ?? ""}}</div>
                            </div>
                            <div style="margin-bottom: 5px; display: flex; align-items: center;">
                              <label style="width: 100px" >Earth fault loop impedance:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$gaz_safety_data[0]['earth_fault_loop_impedance'] ?? ""}}</div>
                            </div>
                            <div style="margin-bottom: 5px; display: flex; align-items: center;">
                              <label style="width: 100px" >RCD:</label>
                              <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$gaz_safety_data[0]['rcd'] ?? ""}}</div>
                            </div>
                          </div>
                      </div>

                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 6 : DESIGN, CONSTRUCTION, INSPECTION AND TESTING</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td colspan="2"  style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="margin-bottom: 15px; display: flex; align-items: center;">
                        I/We being the person(s) responsible for the design, construction, inspection and testing of the electrical installation (as indicated by my/our signatures below), particulars of which are described above, having exercised reasonable skill and care when carrying out the design, construction, inspection and testing, hereby CERTIFY that the design work for which I/we have been responsible is to the best of my/our knowledge and belief in accordance with BS 7671:2018, except for the departures, if any, detailed as follows.
                      </div>
                      <div style="margin-bottom: 5px;">Details of departures from BS 7671, as amended (Regulations 120.3, 133.5):</div>
                      <div style="padding: 5px; border: 1px solid #ddd; margin-bottom: 15px;">
                        {{$gaz_safety_data[0]['details_of_departures_from_bs7671_as_amended'] ?? ""}}
                      </div>
                      <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>Details of permitted exceptions (Regulations 411.3.3):</div>
                        <div style="display: flex; align-items: center;">
                          <label style="margin-right: 5px;">Risk assessment attached:</label>
                          <div style="padding: 5px; border: 1px solid #ddd; width: 150px;">
                            {{$gaz_safety_data[0]['risk_assessment_attached'] ?? ""}}
                          </div>
                        </div>
                      </div>
                      <div style="padding: 5px; border: 1px solid #ddd; margin-bottom: 15px; margin-top: 3px;">
                        {{$gaz_safety_data[0]['details_of_permitted_exception'] ?? ""}}
                      </div>
                      <div style="display: flex; justify-content: space-between;">
                        <div style="width: 40%;">
                          The extent of liability of the signatory/signatories is limited to the work described above as the subject of this certificate. <br>
                          <span style="font-weight: bold;">
                            For DESIGN, the CONSTRUCTION, and the INSPECTION AND TESTING of the installation:
                          </span>
                        </div>
                        <div style="display: flex; align-items: center;">
                          <label style="margin-right: 5px;">Signature:</label>
                          <div style="padding: 5px; border: 1px solid #ddd; width: 150px; height: 100px; width: 200px;">
                            @if ($user->signature)
                            <img src="{{asset('uploads/'.$user->signature->signature)}}" style="width: 80px; object-fit: contain;">
                            @endif
                          </div>
                        </div>
                        <div style="display: flex; align-items: center;">
                          <label style="margin-right: 5px;">Date:</label>
                          <div style="padding: 5px; border: 1px solid #ddd; width: 150px;">
                            {{$gaz_safety_data[0]['date'] ?? ""}}
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr id="part-2" class="">
            <td>
              <div style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 10px;">PART 7 SUPPLY CHARACTERISTICS AND EARTHING ARRANGEMENTS</div>
              <div style="display: flex; font-size: 0; background-color: white; padding: 10px;">
                <div style="display: inline-block; width: 150px; padding: 0px 15px; font-size: 10px; border-right: 2px solid #2a98fc;">
                  <p style="font-weight: bold;">Earthing Arrangements</p>
                  @if (isset($gaz_safety_data[0]['earthing_arrangement']))
                    @for ($i = 0; $i < count($gaz_safety_data[0]['earthing_arrangement']); $i++)
                        <div style="margin-bottom: 5px;">
                            <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">
                                {{$gaz_safety_data[0]['earthing_arrangement'][$i]}}
                            </div>
                        </div>
                    @endfor
                  @endif
                </div>
                <div style="display: inline-block; width: 28%; padding: 0px 4px; font-size: 10px; vertical-align: top;  border-right: 2px solid #2a98fc;">
                  <p style="font-weight: bold; text-align: center;">Number and Type of Live Conductors</p>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <div style="display: flex;">
                      <label for="">1-Phase (2 Wire):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['phase_2_wire'] ?? ""}}">
                    </div>
                    <div style="display: flex; padding-left: 10px;">
                      <label for="">1-Phase (3 Wire):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['phase_3_wire'] ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <div style="display: flex;">
                      <label for="">3-Phase (3 Wire):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['phase_4_wire'] ?? ""}}">
                    </div>
                    <div style="display: flex; padding-left: 10px;">
                      <label for="">3-Phase (4 Wire):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['phase_5_wire'] ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                      <label for="">Other:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['other']?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; border-top: 1px solid #2a98fc; padding-top: 15px;">
                    <label for="">Confirmation Of Supply Polarity:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['confirmation_of_supply_polarity'] ?? ""}}">
                </div>
                </div>
                <div style="display: inline-block; width: 28%; padding: 0px 4px; font-size: 10px; vertical-align: top;  border-right: 2px solid #2a98fc;">
                  <p style="font-weight: bold; text-align: center;">Nature of Supply Parameters</p>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <span>Nominal Voltage(S):</span>
                    <div style="display: flex; align-items: center;">
                      <label for="">U:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['nominal_voltage_u'] ?? ""}}">
                    </div>
                    <div style="display: flex; padding-left: 10px; align-items: center;">
                      <label for="">Uo:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 80px; font-size: 10px;" value="{{$gaz_safety_data[0]['nominal_voltage_o'] ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                      <label for="" style="width: 100px;">Nominal Frequency, F: Prospective Fault:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['NominalFrequencyF']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Current, Ipf:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['prospective_fault_current_pif']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">External Earth Fault Loop Impedance, Ze:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['external_earth_fault_loop_impedance']  ?? ""}}">
                  </div>
                </div>
                <div style="display: inline-block; width: 28%; padding: 0px 4px; font-size: 10px; vertical-align: top;">
                  <p style="font-weight: bold; text-align: center;">Supply Protective Device</p>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                      <label for="" style="width: 100px;">Bs(En):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['bs']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Type:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['type']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Rated Current:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['rated_current']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Short-Circuit Capacity:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['short_circuit_capacity']  ?? ""}}">
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr id="part-2" style="break-inside: avoid;">
            <td>
              <div style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 10px;
                          flex-wrap: wrap;">PART 8 PARTICULARS OF INSTALLATION REFERRED TO IN THE CERTIFICATE</div>
              <div style="display: flex; font-size: 0; background-color: white; padding: 10px;">
                <div style="display: inline-block; width: 30%; padding: 0px 15px; font-size: 10px; border-right: 2px solid #2a98fc;">
                  <p style="font-weight: bold;">Number and Type of Live Conductors</p>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Distributor’s Facility:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['distributor_facility']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <label for="" style="width: 100px;">Installation Earth Electrode:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; flex-grow: 1; font-size: 10px;" value="{{$gaz_safety_data[0]['installation_earth_electrode']  ?? ""}}">
                  </div>
                </div>
                <div style="display: inline-block; width: 70%; padding: 0px 4px; font-size: 10px; vertical-align: top;">
                  <p style="font-weight: bold; text-align: center;">Details of Installation Earth Electrode (where applicable)</p>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">Type:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['type_2']  ?? ""}}">
                    </div>
                    <div style="display: flex; padding-left: 10px; align-items: center;">
                      <label for="" style="width: 100px;">Location:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['location']  ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">Resistance To Earth:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['resistance_to_earth']  ?? ""}}">
                    </div>
                    <div style="display: flex; padding-left: 10px; align-items: center;">
                      <label for="" style="width: 100px;">Method Of Measurement:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['method_of_measurement']  ?? ""}}">
                    </div>
                  </div>


                </div>
              </div>
              <div style="display: flex; background-color: white; padding: 15px 25px; border-top: 1px solid #2a98fc;">
                <div style="display: flex; align-items: center;">
                  <label for="" style="width: 100px;">Maximum Demand (Load):</label>
                  <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['minimum_demand_load']  ?? ""}}">
                </div>
                <div style="display: flex; padding-left: 10px; align-items: center;">
                  <label for="" style="width: 125px;">Protective Measure(S) Against Electric Shock:</label>
                  <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['protective_measure_against_electric_shock']  ?? ""}}">
                </div>
                <div style="display: flex; padding-left: 10px; align-items: center;">
                  <label for="" style="width: 100px;">Measured Ze:</label>
                  <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['measured_ze']  ?? ""}}">
                </div>
              </div>
              <div style="display: flex; flex-wrap: wrap; background-color: white; padding: 15px 25px; border-top: 1px solid #2a98fc;">
                <div style="width: 100%; font-weight: bold; margin-bottom: 5px;">
                  Main Switch/Switch-Fuse/Circuit-Breaker/RCD
                </div>
                <div style="width: 25%;">
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Type Bs (En):</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['type_bs']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Number Of Poles:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['number_of_poles']  ?? ""}}">
                  </div>
                </div>
                <div style="width: 25%;">
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Current Rating:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['current_rating']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Fuse/Device Rating Or Setting:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['fuse_device_rating_or_setting']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Voltage Rating:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['voltage_rating']  ?? ""}}">
                  </div>
                </div>
                <div style="width: 25%;">
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Supply Conductors Material:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['supply_conductors_materials']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Supply Conductors Csa:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['supply_conductors_cya']  ?? ""}}">
                  </div>
                </div>
                <div style="width: 25%;">
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Rated Residual Operating Current (In):</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['rated_residual_operating_current']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Rated Time Delay:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['rated_time_delay']  ?? ""}}">
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Measured Operating Time (In):</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['measured_operating_time']  ?? ""}}">
                  </div>
                </div>
              </div>
              <div style="display: flex; flex-wrap: wrap; background-color: white; padding: 15px 25px; border-top: 1px solid #2a98fc;">
                <div style="width: 100%; font-weight: bold; margin-bottom: 5px; display: flex; align-items: center; justify-content: space-between;">
                  Earthing and Protective Bonding Conductors
                  <div style="font-weight: bold; margin-bottom: 5px; margin-right: 100px;">
                    Bonding of extraneous-conductive parts
                  </div>
                </div>
                <div style="width: 35%;">
                  <div style="display: flex; align-items: center;  margin-bottom: 10px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">Conductor Material:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['conductor_materials']  ?? ""}}">
                    </div>
                    <div style="display: flex; align-items: center;">
                      <label for="" style="margin-left: 5px;">Csa:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['csa']  ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Number Of Poles:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['number_of_poles']  ?? ""}}">
                  </div>
                </div>
                <div style="width: 30%;">
                  <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <label for="" style="width: 100px;">Connection/Continuity Verified:</label>
                    <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['connection_continuity_verified']  ?? ""}}">
                  </div>
                </div>
                <div style="width: 35%;">
                  <div style="display: flex; align-items: center;  margin-bottom: 10px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">To Water Installation Pipes:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_water_installation_pipes']  ?? ""}}">
                    </div>
                    <div style="display: flex; align-items: center;">
                      <label for="" style="margin-left: 5px;">To Gas Installation Pipes:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_gas_installation_pipes']  ?? ""}}"">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center;  margin-bottom: 10px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">To Oil Installation Pipes:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_oil_installation_pipes']  ?? ""}}">
                    </div>
                    <div style="display: flex; align-items: center;">
                      <label for="" style="margin-left: 5px;">To Lightning Protection:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_lightning_protection']  ?? ""}}">
                    </div>
                  </div>
                  <div style="display: flex; align-items: center;  margin-bottom: 10px;">
                    <div style="display: flex; align-items: center;">
                      <label for="" style="width: 100px;">To Structural Steel:</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_structural_steel']  ?? ""}}">
                    </div>
                    <div style="display: flex; align-items: center;">
                      <label for="" style="margin-left: 5px;">To Other Service(S):</label>
                      <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['to_other_services']  ?? ""}}">
                    </div>
                  </div>
                </div>
              </div>
              </td>
          </tr>
          <tr style="background-color: white; font-size: 10px;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;" colspan="3">PART 9 : SCHEDULE OF ITEMS INSPECTED</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Name</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 80%; font-weight: bold;">Description</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Outcome</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">DISTRIBUTOR’S/SUPPLY INTAKE EQUIPMENT</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of service cable</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_service_cable']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of service head</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_service_head']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of distributor’s earthing arrangement</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_distributor_earthing_arrangement']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of tails - Distributor/Consumer</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_tails_distributor_consumer']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of metering equipment</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_metering_equipment']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">1.6</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Condition of isolator (where present)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['condition_of_isolator_where_present']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">2.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">PARALLEL OR SWITCHED ALTERNATIVE SOURCES OF SUPPLY</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">2.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Adequate arrangements where a generating set operates as a switched alternative to the public supply (551.6)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['adequate_arrangements_where_a_generating_set_operates_as_switched_alternative_to_the_public_supply']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">2.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Adequate arrangements where a generating set operates in parallel with the public supply (551.7)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['adequate_arrangements_where_a_generating_set_Operates_in_parallel_with_the_public_supply']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">AUTOMATIC DISCONNECTION OF SUPPLY</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence and adequacy of earthing and protective bonding arrangements:</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Installation earth electrode (where applicable) (542.1.2.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['installation_earth_electrode_Where_applicable']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Earthing conductor and connections including accessibility (542.3; 542.3.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['Earthing Conductor And Connections Including Accessibility']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Main protective bonding conductors and connections, including accessibility (411.3.1.2; 543.3.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['main_protecting_bonding_conductors_and_connections_including_accessibility']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Provision of safety electrical earthing/bonding labels at all appropriate locations (514.13)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['provision_of_safety_electrical_earthing_Bonding_labels_at_all_appropriate_locations']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">3.1.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">RCD(s) provided for fault protection (411.4.9; 411.5.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['rcd_provided_for_fault_protection']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">4.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">BASIC PROTECTION</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">4.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence and adequacy of measures to provide basic protection (prevention of contract with live parts) within the installation:</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">4.1.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Insulation of live parts e.g. conductors completely covered with durable insulation materials (416.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['insulation_of_live_parts']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">4.1.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Barriers or enclosures e.g. correct IP rating (416.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['barriers_or_enclosure']  ?? ""}}</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;" colspan="3">PART 10 : SCHEDULE OF ITEMS INSPECTED</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Name</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 80%; font-weight: bold;">Description</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Outcome</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">5.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">ADDITIONAL PROTECTION</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">5.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence and effectiveness of additional protection methods:</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">5.1.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">RCD(s) not exceeding 30mA operating current (415.1; Part 7), see Item 8.14 of this schedule</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['rcd_not_exceeding_30ma_operating_current']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">5.1.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Supplementary bonding (415.2; Part 7)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['supplementary_bonding']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">OTHER METHODS OF PROTECTION</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence and effectiveness of methods which give both basic and fault protection:</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.1.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">SELV systems, including the source and associated circuits (Section 414)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['selv_systems_including_the_source_and_associated_circuits']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.1.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">PELV systems, including the source and associated circuits (Section 414)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['pelv_systems_including_the_source_and_associated_circuits']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.1.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Double or reinforced insulation i.e. Class II or equivalent equipment and associated circuits (Section 412)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['double_or_reinforced_insulation']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">6.1.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Electrical separation for one item or equipment e.g. shaver supply unit (Section 413)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['electrical_separation_for_one_item_or_equipment']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">CONSUMER UNIT(S)/DISTRIBUTION BOARD(S)</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Adequacy of access and working space for items of electrical equipment including switchgear (132.12)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['adequacy_of_access_and_working_space']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence of linked main switch(s) (537.1.4; 5.7.1.5; 537.1.6)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['presence_of_linked_main_switch']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Isolators, for every circuit or group of circuits and all items of equipment (537.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['isolators']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Suitability of enclosure(s) for IP and fire ratings (416.2; 421.1.6; 421.1.201)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['suitability_of_enclosure']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Protection against mechnical damage where cables enter equipment (522.8.1; 522.8.11)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['protection_against_mechanical_damage']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.6</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Confirmation that ALL conductor connections are corretly located in terminals and are tight and secure (526.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['confirmation_that_all_conductor_connections']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.7</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Avoidance of heating affects where cables enter ferromagnetic enclosures e.g. steel (521.5)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['avoidance_of_heating_affects']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.8</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Selection of correct type and rating circuit protective devices for overcurrent and fault protection (411.3.2; 411.4, .5, .6; Section 432, 433)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['selection_of_correct_type_and_rating_circuit_protective']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Insulation of live parts e.g. conductors completely covered with durable insulation materials (416.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['insulation_of_live_parts']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Barriers or enclosures e.g. correct IP rating (416.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['barriers_or_enclosure']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Warning notice of method of isolation where live parts not capable of being by a single device (514.11)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['warning_notice_of_method_of_isolation_where_live']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Periodic inspection and testing notice (514.12.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['periodic_inspection_and_testing_notice']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">RCD six-monthly test notice; where required (514.12.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['rcd_six_monthly_test_notice']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.9.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Warning notice of non-standard (mixed) colours of conductors present (514.14)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['warning_notice_of_non_standard']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">7.10</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence of labels to indicate the purpose of switchgear and protective devices (514.1.1; 514.8)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['presence_of_labels_to_indicate_the_purpose_of_switchgear']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">CIRCUITS</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Adequacy of conductors for currents-carrying capacity with regards to type and nature of the installation (Section 523)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['adequacy_of_conductors_for_current_carrying_capacity']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cable installation methods suitable for the location(s) and external influences (Section 522)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cable_installation_methods_suitable']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Segregation/separation of Band I (ELV) and Band II (LV) circuits, and electrical and non-electrical services (528)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['segregation_separation_of_band_i_elv_and_Band_ii_lv_circuits_and_electrical_and_non_electrical_services']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cables correctly erected and supported throughout including escape routes, with protection against abrasion (Sections 521, 522)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cables_correctly_erected_and_supported_throughout']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Provision of fire barriers, sealing arrangements where necessary (527.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['provision_of_fire_barriers_sealing_arrangements_where_necessary']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.6</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Non-sheathed cables enclosed throughout in conduit, ducting or trunking (521.10.1; 526.8)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['non_sheathed_cables_enclosed_throughout_in_conduit_ducting_or_trunking']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.7</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cables concealed under floors, above ceilings or in wall/partitions, adequately protected against damage (522.6.201, .202, .204)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cables_concealed_under_floors_above_ceilings_or_in_wall']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.8</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Conductors correctly identified by colour, lettering or numbering (Section 514)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['conductors_correctly_identified_by_color_lettering_or_numbering']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.9</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence, adequacy and correct termination of protective conductors (411.3.1.1; 542.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['presence_adequacy_and_correct_termination_of_protective_conductors']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.10</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cables and conductors correctly connected, enclosed and with no undue mechanical strain (Section 526)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cables_and_conductors_correctly_connected']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.11</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">No basic insulation of a conductor visible outside enclosure (526.8)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['no_basic_insulation_of_switching_or_protection']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.12</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Single-pole devices for switching or protection in line conductors only (132.14.1; 530.3.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['single_pole_devices_for_switching_or_protection']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.13</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Accessories not damaged, securely fixed, correctly connected, suitable for external influences (134.1.1; 512.2; Section 526)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['accessories_not_damaged']  ?? ""}}</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;" colspan="3">PART 11 : SCHEDULE OF ITEMS INSPECTED</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Name</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 80%; font-weight: bold;">Description</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Outcome</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.14</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">Provision of additional protection by RCD not exceeding 30mA</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.14.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Socket-outlet rated at 20 A or less unless exempt (411.3.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['socket_outlet_rated_at_20_or_less_unless_exempt']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.14.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Mobile equipment with a current rating not exceeding 32 A for use outdoors (411.3.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['mobile_equipment_with_current_rating']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.14.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cables concealed in walls at a depth of less than 50 mm (522.6.202, .203)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cables_concealed_in_walls_at__depth']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.14.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Cables concealed in walls/partitions containing metal parts regardless of depth (522.6.202; 522.6.203)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['cables_concealed_In_walls_partitions_containing_metal_parts']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.15</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">PRESENCE OF APPROPRIATE DEVICES FOR ISOLATION AND SWITCHING CORRECTLY LOCATED INCLUDING</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.15.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Means of switching off for mechanical maintenance (537.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['means_of_switching_off_for_mechanical_maintenance']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.15.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Emergency switches (537.4)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['emergency_switches']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.15.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Functional switches, for control of parts of the installation and current-using equipment (537.5)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['functional_switches']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">8.15.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Firefighter’s switches (537.6)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['firefighter_switches']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">9.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">CURRENT-USING EQUIPMENT (PERMANENTLY CONNECTED)</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">9.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Equipment not damaged, securely fixed and suitable for external influences (134.1.1; 416.2; 512.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['equipment_not_damaged_securely_fixed']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">9.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Provision of overload and/or undervoltage protection e.g. for rotating machines, if required (Sections 445, 552)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['provision_of_overload_or_under_voltage_protection']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">9.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Installed to minimise the build-up of heat and restrict the spread of fire (421.1.4; 559.4.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['installed_to_minimize_the_build_Up_of _heat_and_restrict_spread_of_fire']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">9.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Adequacy of working space. Accessibility to equipment (132.12; 513.1)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['adequacy_of_working_space']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0; font-weight: bold;">LOCATION(S) CONTAINING A BATH OR SHOWER (SECTION 701)</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">30 mA RCD protection for all LV circuits, equipment suitable for the zones, supplementary bonding (where required) etc.</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['30_ma_rcd_protection_all']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Where used as a protective measure, requirement for SELV or PELV met (701.414.4.5)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['where_used_as_protective_measure']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Shaver sockets comply with BS EN 61558-2-5 formerly BS 3535 (701.512.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['shaver_sockets_comply_with_bs']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Presence of supplementary bonding conductors, unless not required by BS 7671:2018 (701.415.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['presence_of_supplementary_bonding_conductors']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Low voltage (e.g. 230 volt) socket-outlets sited at least 3m from Zone 1 (701.512.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['low_voltage']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.6</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Suitability of equipment for external influences for installed location in terms of IP rating (701.512.2)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['suitability_of_equipment_for_external_influences']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.7</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Suitability of accessories and control gear etc. for a particular zone (701.512.3)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['suitability_of_accessories_and_control_gear']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">10.8</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Suitability of current-using equipment for particular position within the location (701.55)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['suitability_of_current_using_equipment']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">11.0</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-right: 0;">
                      <span style="font-weight: bold;">OTHER PART 7 SPECIAL INSTALLATIONS OR LOCATIONS</span><br>
                      List all other special installation or locations present, if any. (Record separately the results of particular inspections applied.)
                    </td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; border-left: 0;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">11.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">11.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;" colspan="3">PART 13 : SCHEDULE OF ITEMS INSPECTED</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Name</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 80%; font-weight: bold;">Description</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333; width: 10%; font-weight: bold;">Outcome</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.1</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">External earth fault loop impedance, Ze</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['external_earth_fault_loop_impedance_question']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.2</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Installation earth electrode resistance, Ra</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['installation_earth_electrode_resistance']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.3</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Continuity of protective conductors</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['continuity_of_protective_conductors']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.4</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Continuity of ring final circuit conductors</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['continuity_of_ring_final_circuit_conductors']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.5</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Insulation resistance between live conductors</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['insulation_resistance_between_live_conductors']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.6</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Insulation resistance between live conductors and earth</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['insulation_resistance_between_live_conductors_and_earth']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.7</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Polarity</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['polarity']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.8</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Earth fault loop impedance, Zs</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['wrath_fault_loop_impedance_zs']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.9</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Verification of phase sequence</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['verification_of_phase_sequence']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.10</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Operation of residual current device(s)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['operation_of_residual_current_device']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.11</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Functional testing of assemblies</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['functional_testing_of_assemblies']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.12</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Verification of voltage drop</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['verification_of_voltage_drop']  ?? ""}}</td>
                  </tr>
                  <tr>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;  width: 600px;">12.13</td>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">Provision of overload and/or undervoltage protection e.g. for rotating machines, if required (Sections 445, 552)</td>
                    <td style="text-align: center; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">{{$gaz_safety_data[0]['provision_of_overload_or_under_voltage_protection']  ?? ""}}</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <div style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 10px;">PART 14 : SCHEDULE OF CIRCUIT DETAILS AND TEST RESULTS</div>
                          <div style="display: flex; flex-wrap: wrap; background-color: white;    align-items: center;">
                            <div style="width: 25%; margin-top: 10px;">
                              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                <label for="" style="width: 100px; margin-left: 3px;">Designation of consumer unit:</label>
                                <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['designation_of_consumer_unit']  ?? ""}}">
                              </div>
                            </div>
                            <div style="width: 25%; margin-top: 10px;">
                              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                <label for="" style="width: 100px; margin-left: 3px;">Location:</label>
                                <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['location_end_form']  ?? ""}}">
                              </div>
                            </div>
                            <div style="width: 25%; margin-top: 10px;">
                              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                <label for="" style="width: 100px; margin-left: 3px;">Prospective fault current:</label>
                                <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['prospective_fault_current']  ?? ""}}">
                              </div>
                            </div>
                            <div style="width: 25%; margin-top: 10px;">
                              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                <label for="" style="width: 100px; margin-left: 3px;">Type of Wiring O-Other:</label>
                                <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['type_of_wiring_other']  ?? ""}}">
                              </div>
                            </div>
                          </div>
              <table style="border-collapse: collapse;" id="last-table">
                <thead>
                    <tr>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Circuit number</td>
                        <td rowspan="3" style="border: 1px solid #2a98fc;">
                            <div>Circuit description</div>
                            <!-- <div>* Where this consumer unit is remote from the origin of the installation, record details of the circuit supplying this consumer unit on the first line.</div> -->
                        </td>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Type of wiring <br> (see Codes)</td>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Reference Method  <br> (BS 7671)</td>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Number of points  <br> served</td>
                        <td colspan="2" style="border: 1px solid #2a98fc;">Circuit conductor csa</td>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Max. disconnection <br> time (BS 7671)</td>
                        <td colspan="4" style="border: 1px solid #2a98fc;">Protective device</td>
                        <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                            <div>RCD</div>
                           {{--  <div style="writing-mode: vertical-rl; transform: rotate(0deg); margin: 10px 0;">Operating <br> current, I∆n</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(mA)</div> --}}
                        </td>
                        <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Maximum permitted Zs for installed protective device**</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(Ω)</div>
                        </td>
                        <td colspan="5" style="border: 1px solid #2a98fc;">Circuit impedances (Ω)</td>
                        <td colspan="2" style="border: 1px solid #2a98fc;">Insulation resistance</td>
                        <td rowspan="3" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">Polarity</td>
                        <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Max. measured earth <br> fault loop impedance, Zs</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(Ω)</div>
                        </td>
                        <td colspan="3" style="border: 1px solid #2a98fc;">RCD</td>

                        <td  colspan="1"  style="border: 1px solid #2a98fc;">AFDD</td>
                    </tr>
                    <tr>
                        <td rowspan="2" style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Live (mm2)</div>
                        </td>
                        <td rowspan="2" style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                            <div  style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Cpc (mm2)</div>
                        </td>
                        <td rowspan="2" style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">BS (EN)</td>
                        <td rowspan="2" style="border: 1px solid #2a98fc;">Type</td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Rating</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(A)</div>
                        </td>
                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Short-circuit <br> capacity</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(kA)</div>
                        </td>
                        <td colspan="3" style="border: 1px solid #2a98fc;">Ring final circuits only (measured end to end)</td>
                        <td colspan="2" style="border: 1px solid #2a98fc;">All circuits (complete at least one column)</td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div>Live / Live</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(MΩ)</div>
                        </td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div>Live / Earth</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(MΩ)</div>
                        </td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Disconnection time at l∆ n</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(Ms)</div>
                        </td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Disconnection time at 5l∆ n</div>
                            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">(Ms)</div>
                        </td>
                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Test button Operation</div>
                        </td>
                        <td rowspan="2"  style="border: 1px solid #2a98fc;">
                          <div style="writing-mode: vertical-rl; transform: rotate(0deg);"> Manual AFDD test button operation</div>
                        </td>
                    </tr>

                    <tr>
                        <td style="border: 1px solid #2a98fc;">(Line) r1</td>
                        <td style="border: 1px solid #2a98fc;">(Natural) rn</td>
                        <td style="border: 1px solid #2a98fc;">(Cps) r2</td>
                        <td style="width: 0px; border: 1px solid #2a98fc;">(R1 + R2)</td>
                        <td style="width: 0px; border: 1px solid #2a98fc;">R2</td>

                    </tr>
                </thead>
                @php
                    $ListCircuitApplianceData = [];
                    if (isset($gaz_safety_data[0]['schedule_of_circuit_details_and_test_results'])) {
                        # code...
                        $ListCircuitApplianceData = $gaz_safety_data[0]['schedule_of_circuit_details_and_test_results'][0]['childListCircuitApplianceData'][0];
                    }
                @endphp
                <tbody>
                   <tr>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['circuit_number']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['circuit_description']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['type_of_wiring']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['reference_method']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['number_of_points_served']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['live']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['cpc']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['max_disconnected_time_permitted']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['bs_3']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['type_no']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['rating']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['capacity']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['operating_current']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['maximum_zs_permitted_by']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['r1']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['rn']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['r2']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['r1_r2']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['r2_2']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['live_live']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['live_earth']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['polarity_question']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['maximum_measured_earth_fault_loop_impedance_zs']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['disconnection_time_at_i_delta']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['disconnection_time_at_5i_delta']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['test_button_operation']  ?? ""}}</td>
                    <td style="border: 1px solid #2a98fc;">{{$ListCircuitApplianceData['arc_fault_detection_device']  ?? ""}}</td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                   <tr>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                    <td style="border: 1px solid #2a98fc;"></td>
                   </tr>
                </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    <!-- <footer>
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <img src="footer-logo.png" style="width: 250px; object-fit: contain;">
        <div>
          page 1 of <span style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">1</span>
        </div>
      </div>
    </footer> -->
    <x-print-modal-layout></x-print-modal-layout>
  </body>
</html>
