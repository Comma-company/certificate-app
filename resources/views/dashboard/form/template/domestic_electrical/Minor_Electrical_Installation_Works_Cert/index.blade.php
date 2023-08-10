<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Minor Work</title>
    <style>
            page :first {
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:0px 20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                 header: html_formHeader;
               footer: html_formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:110px;
                margin-header:20px;
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
      table {
        border-collapse: collapse;
      }
/*       .page {
        width: 97%;
        margin-left: 1.5%;
        margin-top: 40px;
        font-family: "Cairo", sans-serif;
        font-family: "Open Sans", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Tajawal", sans-serif;
      } */
      .header-table {
        width: 100%;
      }
      .number-table tr td {
        width: 50%;
      }
      .number-table {
        border: solid 2px #00935f;
        padding: 0 !important;
        width: 100px;
        height: 40px;
        text-align: center;
        font-size: 18px;
        font-weight: 100;
        margin-left: 85%;
      }
      p,
      h4 {
        margin: 10px;
        padding: 0;
      }
      .green-table-headers {
        background-color: #00935f;
        text-align: left;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        padding: 12px 15px;
      }
      .border-table {
        border: solid 1px #00935f;
      }

      .sub-title-text {
        font-size: 12px;
        color: #00935f;
        text-align: left;
        font-weight: bold;
        padding-bottom: 10px;
      }
      .main-text {
        font-size: 12px;
        font-weight: 100;
        text-align: left;
        padding-bottom: 10px;
      }
      .content-text {
        font-size: 12px;
        text-align: left;
        padding-bottom: 10px;
      }
      .description-table tr th {
        text-align: left;
        padding: 5px;
        font-size: 12px;
      }
      .not-bold {
        font-weight: 100;
      }
      .page-number {
        border: 1px solid #000;
        width: 40px;
        height: 40px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="page">
        <htmlpageheader name="formHeader">

        <div style="margin: 10px 25px;  width: 100%;">
            <div style="float: left;width:40%;">
                {{-- <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px"> --}}
                <img src="{{ asset('certificate/image/niceic-logo.png') }}"  width="160px" height="60px">
                {{-- @if ($data->user->logo)
                <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
                @endif --}}
            </div>
            <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
                <table style="border: 1px solid #00935f;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #00935f;">
                    <tr style="padding: 10px;">
                        <th style="padding: 10px;">
                            <div style="padding: 0 120px 0 0"><h3>{{ 0020 }}</h3></div>
                        </th>
                        <th bgcolor="#00935f" style="color: #fff; padding: 10px">
                            <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                        </th>
                    </tr>
                </table>
                <h2 style="color: #00935f; padding: 0; margin: 0; font-weight: 900;text-align: right">
                    MINOR ELECTRICAL INSTALLATION WORKS CERTIFICATE
                </h2>
                <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                    ssued in accordance with BS 7671: 2018+A2:2022 – Requirements
                    for Electrical Installations
                </p>
            </div>
            <div style="clear: both;"></div>
          </div>
      </htmlpageheader>
        <!--------------------- Part 1 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px; border: solid 1px #00935f;">
        <tr>
          <th class="green-table-headers" colspan="3">
            PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;">
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE CONTRACTOR
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Registration No:

                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Company Name:
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:
                </th>
                <th class="main-text">
                  Tel No:
                </th>
              </tr>
            </table>
          </th>
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px 7px 32px 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE CLIENT
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Name:
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:
                </th>
                <th class="main-text">
                  Tel No:
                </th>
              </tr>
            </table>
          </th>
          <th style="width: 30%;text-align: left;">
            <table style="margin: 7px">
              <tr>
                <th colspan="2" class="sub-title-text">
                  DETAILS OF THE INSTALLATION
                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Tenant Name:

                </th>
              </tr>
              <tr>
                <th colspan="2" class="main-text">
                  Address:
                </th>
              </tr>
              <tr>
                <th class="main-text">
                  Postcode:
                </th>
                <th class="main-text">
                  Tel No:
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 2 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr>
          <th class="green-table-headers" colspan="3">
            PART 2 : DETAILS OF THE MINOR WORKS, SUPPLY CHARACTERISTICS AND
            EARTHING ARRANGEMENTS
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th style="text-align: left">
            <table style="margin: 0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  Description of Minor
                  Works:...
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 40px"
                  class="main-text"
                >
                  Date completed:...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 40px"
                  class="main-text"
                >
                  System type and earthing arrangements (e.g. TN C S / TN S /
                  TT):...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Zs at Distribution Board / Consumer Unit supplying the final
                  circuit:...
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px;">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 15px"
                  class="content-text"
                >
                  Presence of adequate main protective conductors
                </th>
                <th
                  style="padding-top: 5px; padding-right: 15px"
                  class="main-text"
                >
                  Earthing conductor:...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Protective bonding conductor(s) to: Water (...)
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Gas (...)
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Oil (...)
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Other (state)...
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px;text-align: left;">
              <tr>
                <th style="padding-top: 5px;" class="content-text">
                    Comments on existing installation (see Reg. 644.1.2):
                    <span  class="main-text">
                        ...
                    </span>
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  Details of any departures from BS 7671: 2018, as amended
                  to:...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  (date) for the circuit altered or extended (Regulation 120.3,
                  133.1.3 &
                  133.5):....
                </th>
              </tr>
            </table>
            <table style="margin:0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 30px"
                  class="main-text"
                >
                  Details of permitted exceptions (Regulation
                  411.3.3):...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Where applicable, risk assessment attached:
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 3 ----------------------->
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th
            style="border-bottom: 2px solid #00935f"
            class="green-table-headers"
          >
            PART 3 : CIRCUIT DETAILS
          </th>
          <th
            style="padding: 5px 20px; border-bottom: 2px solid #00935f"
            class="main-text"
          >
            DB/Consumer Unit: Ref No:
          </th>
          <th
            style="padding-top: 5px; border-bottom: 2px solid #00935f"
            class="main-text"
          >Location and type
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;text-align: left">
          <th style="text-align: left" colspan="3">
            <table style="margin: 0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  Circuit
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Description and Ref No:
                  ...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  nstallation reference method: ...
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Number of conductors: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  Csa of conductors
                </th>
                <th style="padding-top: 5px" class="main-text">
                  Live: ... mm2
                </th>
                <th style="padding-top: 5px" class="main-text">
                  cpc: ... mm2
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px">
              <tr>
                <th
                  style="padding-top: 5px; padding-right: 200px"
                  class="content-text"
                >
                  Overcurrent protection device
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="content-text"
                >
                  RCD
                </th>
                <th
                  style="padding-top: 5px; padding-right: 150px"
                  class="main-text"
                >
                  BS EN:
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Rating: ...(A)
                </th>
                <th
                  style="padding-top: 5px; padding-right: 20px"
                  class="content-text"
                >
                  AFDD
                </th>
                <th style="padding-top: 5px" class="main-text">
                  BS EN: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Rating: ....(A)
                </th>
              </tr>
            </table>
            <table style="margin: 0px 7px">
              <tr>
                <th style="padding-top: 5px" class="main-text">
                  BS EN: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: ...............
                </th>
                <th
                  style="padding-top: 5px; padding-right: 80px"
                  class="main-text"
                >
                  Rating: ...(A)
                </th>
                <th
                  style="padding-top: 5px; padding-right: 100px"
                  class="main-text"
                >
                  Rated residual operating current (I ∆ n): ... mA
                </th>
                <th
                  style="padding-top: 5px; padding-right: 20px"
                  class="content-text"
                >
                  SPD
                </th>
                <th style="padding-top: 5px" class="main-text">
                  BS EN: ...
                </th>
                <th
                  style="padding-top: 5px; padding-right: 10px"
                  class="main-text"
                >
                  Type: ....
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>
      <!--------------------- Part 4 ----------------------->
      <table style="width: 100%">
        <tr>
          <th style="width: 53%">
            <table
              class="border-table"
              style="width: 100%; margin-bottom: 15px"
            >
              <tr>
                <th class="green-table-headers" colspan="3">
                  PART 4 : TEST RESULTS FOR THE CIRCUIT ALTERED OR EXTENDED**
                </th>
              </tr>
              <tr style=" border: solid 1px #00935f;text-align: left">
                <th style="text-align: left">
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 90px"
                        class="content-text"
                      >
                        Continuity
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 40px"
                        class="main-text"
                      >
                        Protective conductor (R1 + R2): (...)Ω
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="main-text"
                      >
                        or
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        R2: (...)Ω
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="content-text"
                      >
                        Ring final circuit (loop values)
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="main-text"
                      >
                        L/L: (...)Ω
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 30px"
                        class="main-text"
                      >
                        N/N: (...)Ω
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        cpc/cpc: (...)Ω
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="content-text"
                      >
                        Insulation Resistance***
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        L/L: (...)MΩ
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        L/L: (...)MΩ
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Test voltage: (...)V
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        *** Where an agreed limitation is used provide details
                        on a separate page and append to the certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        Polarity
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Satisfactory: (...)
                      </th>
                      <th style="padding-top: 5px" class="content-text">
                        Maximum measured earth fault loop impedance Zs
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        (...)Ω
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        Circuit protective devices functionality checks
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        RCD test button operation satisfactory: (...)
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        AFDD test button operation satisfactory (where
                        provided):(...)
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        RCD disconnection time at I n:(...)ms
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        SPD functionality confirmed (where indicator is
                        provided):(...)
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="content-text"
                      >
                        Test Instrument
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Multifunction:
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Other(s)  (state):...
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 50px"
                        class="content-text"
                      >
                        (insert serial numbers)
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        (...)
                      </th>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        (...)
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        (...)
                      </th>
                    </tr>
                  </table>
                </th>
              </tr>
            </table>
          </th>

           <!--------------------- Part 5 ----------------------->
          <th style="width: 47%">
            <table class="border-table" style="width: 100%; margin-bottom: 15px">
              <tr>
                <th class="green-table-headers" colspan="3">
                  PART 5 : DECLARATION
                </th>
              </tr>
              <tr style=" border: solid 1px #00935f;text-align: left">
                <th style="text-align: left">
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        CERTIFY that the work covered by this certificate does
                        not impair the safety of the existing installation and
                        that the work has been designed,
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        constructed, inspected and tested in accordance with BS
                        7671: 2018, amended to (date) and that to the best of my
                        knowledge and belief, at the time of my inspection,
                        complied with BS 7671: 2018+A2:2022 except as detailed
                        in PART 2 of this certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        Name
                        (capitals):...
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        Signature:....for
                        and on behalf of the Contractor identified in PART 1 of
                        this Certificate
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Position:...
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Date:...
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="content-text">
                        The results of the inspection and testing reviewed by
                        the Qualified Supervisor
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px">
                    <tr>
                      <th style="padding-top: 5px" class="main-text">
                        Name
                        (capitals):...
                      </th>
                    </tr>
                  </table>
                  <table style="margin: 7px 7px 50px 7px">
                    <tr>
                      <th
                        style="padding-top: 5px; padding-right: 20px"
                        class="main-text"
                      >
                        Signature:...
                      </th>
                      <th style="padding-top: 5px" class="main-text">
                        Date:...
                      </th>
                    </tr>
                  </table>
                </th>
              </tr>
            </table>
          </th>
        </tr>
      </table>

      <table>
        <tr>
          <th>
            <table>
              <tr>
                <th class="main-text">**where relevant and practicable</th>
              </tr>
              <tr>
                <th class="main-text">
                  his certificate is based on the model forms shown in Appendix
                  6 of BS 7671: 2018+A2:2022
                </th>
              </tr>
              <tr>
                <th class="main-text">@Copyright 360 Connect (2023 August)</th>
              </tr>
            </table>
          </th>
          <th style="text-align: center; width: 300px; padding-left: 30px;" class="main-text">
            Enter a or value in the respective fields, as appropriate here an
            item is not applicable insert N/A
          </th>
        </tr>
      </table>

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
