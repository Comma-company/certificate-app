<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Link</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/style.css') }}"
        media="all" />
    <style>
        body {
            height: 39cm;
            width: 95%;
            background-color: #EAF3FD;
        }

        * {
            box-sizing: border-box !important;
            font-size: 10px;
        }

        td {
            width: calc(100% / 16) !important;
        }

        label {
            font-size: 10px !important;
        }
        .table-border-all, .table-border-all tr,.table-border-all td {
            border: 1px solid #2a98fc;
            border-collapse: collapse;
            height: 100%;
        }
        .table-border-all td {
           padding: 0;
           text-align: center;
           font-size: 12px;
        }
        .table-border-all td.title {
           padding: 0;
           background: rgb(247, 247, 247);
        }
        .table-border-all table {
           margin: 0;
           height: 100%;
        }
        .codes_wiring ,.codes_wiring tr, .codes_wiring td {
            border: 1px solid #2a98fc;
            border-collapse: collapse;
            text-align: center
        }
        .table-text-center td{
            text-align: center;
        }
        .declaration-table td{
            font-size: 12px
        }
        .declaration-table table{
            border-collapse: separate;
            border-spacing: 5px
        }
        .declaration-table .value{
            width: 20% !important;
            background: #fff;
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
    <header>
        <div id="logo">
            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Image 1@2x.png') }}">
            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Image 1.png') }}">
        </div>
        <div id="information">
            <div class="btns">
                <div>
                    <span>DRAFT</span>
                    <span>PRSN20</span>
                </div>
                <p>This report is not valid if the serial Number has been defaced or altered</p>
            </div>
            <p>DOMESTIC ELECTRICAL INSTALLATION CONDITION REPORT FOR THE PRIVATE RENTED SECTOR</p>
            <p>Small installations up to 100 A single phase supply</p>
            <div>Issued in accordance with BS 7671 : 2018 - Requirements for Electrical Installations</div>
        </div>
    </header>
    <main style="padding: 7px;">
        <table style="border-collapse: collapse;
             border-spacing: 0px 5px;">
            <tbody>


                <tr id="part-1" class="part-container" style="font-size: 10px;">
                    <td>
                        <div class="part-main-title">PART 1 : DETAILS OF THE CLIENT OR PERSON ORDERING THE WORK</div>
                    <div class="details">
                        <table>
                            <tr>
                                <td  style="text-align: right; font-size: 12px">
                                    Name:
                                </td>
                                <td style="width:100% !important">
                                    @if ($form_data->customer)
                                    <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px;font-size: 12px">{{ $form_data->customer->name }}</div>
                                    @else
                                    <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px;font-size: 12px">N/A</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td  style="text-align: right; font-size: 12px">
                                    Address:
                                </td>
                                <td style="width:100% !important">
                                    @if ($form_data->customer)
                                    <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px;font-size: 12px">{{ $form_data->customer->address }}</div>
                                    @else
                                    <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px;font-size: 12px">N/A</div>
                                    @endif
                                </td>
                            </tr>
                        </table>

                    </div>
                    </td>
                </tr>
                <tr id="part-2" class="part-container" style="font-size: 10px;">
                    <td>
                        <div class="part-main-title">PART 2 : REASON FOR PRODUCING THIS REPORT</div>

                    <div style="padding: 5px 20px 15px; border:1px solid var(--main-color);">

                        <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px;font-size: 12px;min-height: 40px; margin: 15px 0px 25px">
                             {{ $gaz_safety_data[0]['reason_for_producing_a'] ?? 'N/A' }}
                        </div>

                        <div style="text-align: right">
                            <span  style="text-align: right; font-size: 12px; padding: 10px;font-weight: bold">
                                Date(s) inspection and testing carried out:
                            </span>
                            <span>
                                <span style="border: 1px solid #ddd; flex-grow: 1; padding: 10px 45px;font-size: 12px"> {{ $gaz_safety_data[0]['date_inspection_and_testing_a'] ?? 'N/A' }}</span>
                            </span>
                        </div>
                    </div>
                    </td>
                </tr>

                <tr id="part-3" class="part-container" style="break-inside: avoid;">
                    <td>
                        <div class="part-main-title">
                            PART 3 : Details of the installation which the is subject of this report
                        </div>
                        <div class="details">
                            <div class="part">
                                <p>Occupier</p>
                                <div class="info-container"
                                    style="border: 1px solid #ddd; padding: 5px; min-height: 20px; margin-bottom: 5px;">
                                    {{ $gaz_safety_data[0]['occupier_b'] ?? 'N/A' }}</div>
                                <div class="info-container">
                                    <div style="padding: 5px; width: 33.33333%; border-right: 1px solid #2a98fc;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom: 5px;">Description of premises</p>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Domestic:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (isset($gaz_safety_data[0]['domestic_b']) && $gaz_safety_data[0]['domestic_b'] == "YES")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (isset($gaz_safety_data[0]['domestic_b']) && $gaz_safety_data[0]['domestic_b'] == "NO")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['domestic_b'] ?? 'N/A' }}
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Commercial:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">

                                                            @if (isset($gaz_safety_data[0]['commercial_b']) && $gaz_safety_data[0]['commercial_b'] == "YES")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (isset($gaz_safety_data[0]['commercial_b']) && $gaz_safety_data[0]['commercial_b'] == "NO")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['commercial_b'] ?? 'N/A' }}
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Industrial:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['industrial_b']) && $gaz_safety_data[0]['industrial_b'] == "YES")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['industrial_b']) &&  $gaz_safety_data[0]['industrial_b'] == "NO")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['industrial_b'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 16px;">
                                                <span>Other:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['other_b']) && $gaz_safety_data[0]['other_b'] == "YES")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['other_b']) &&  $gaz_safety_data[0]['other_b'] == "NO")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['other_b'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-container">
                                            <div
                                                style="display: flex; align-items: center; flex-grow: 1; margin: 8px 0px; margin-bottom: 10px; align-items: center;">
                                                <div style="padding-right: 5px;">please specify</div>
                                                <div style="flex-grow: 1; border: 1px solid #ddd; padding: 5px;">
                                                    {{ $gaz_safety_data[0]['if_other_b'] ?? 'N/A' }}</div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="name">Estimated age of the wiring system:</div>
                                            <div class="value" style="border: 1px solid #ddd; padding: 5px;">
                                                {{ $gaz_safety_data[0]['estimated_age_b'] ?? 'N/A' }}
                                            </div>
                                            <span style="margin-left:5px;">years</span>
                                        </div>
                                    </div>

                                    <div style="padding: 5px; width: 33.33333%; border-right: 1px solid #2a98fc;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom:5px;">Evidence of additions or
                                                alterations</p>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Yes:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['evidence_yes_b']) && $gaz_safety_data[0]['evidence_yes_b'] == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['evidence_yes_b']) &&  $gaz_safety_data[0]['evidence_yes_b'] == "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['other_b'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>No:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['evidence_no_b']) && $gaz_safety_data[0]['evidence_no_b'] == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['evidence_no_b']) &&  $gaz_safety_data[0]['evidence_no_b'] == "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['other_b'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Not apparent:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['evidence_not_apparent_b']) && $gaz_safety_data[0]['evidence_not_apparent_b'] == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['evidence_not_apparent_b']) &&  $gaz_safety_data[0]['evidence_no_b'] == "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['other_b'] ?? 'N/A' }}
                                                        @endif
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="name">if yes, estimated age:</div>
                                            <div class="value" style="border: 1px solid #ddd; padding: 5px;">
                                                {{ $gaz_safety_data[0]['if_yes_b'] ?? 'N/A' }}
                                            </div>
                                            <span style="margin-left:5px;">years</span>
                                        </div>
                                    </div>

                                    <div style="padding: 5px; width: 33.33333%;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom:5px;">Installation records
                                                available</p>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Yes:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['installation_available_yes_b']) && $gaz_safety_data[0]['installation_available_yes_b'] == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['installation_available_yes_b']) &&  $gaz_safety_data[0]['installation_available_yes_b'] == "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['installation_available_yes_b'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; align-items: center; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                                <span>No:</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (isset($gaz_safety_data[0]['installation_available_no_b']) && $gaz_safety_data[0]['installation_available_no_b'] == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (isset($gaz_safety_data[0]['installation_available_no_b']) &&  $gaz_safety_data[0]['installation_available_no_b'] == "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['installation_available_no_b'] ?? 'N/A' }}
                                                        @endif
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="name">Date of last inspection:</div>
                                            <div class="value" style="border: 1px solid #ddd; padding: 5px;">
                                                {{ $gaz_safety_data[0]['dateLast_inspection_b'] ?? 'N/A' }}
                                            </div>
                                            <span style="margin-left:5px;">years</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr id="part-4" class="part-container ">
                    <td>
                        <div class="part-main-title d-flex justify-content-between">
                            <p>
                                PART 4 : Extent and limitations of inspection and testing
                            </p>
                            <p>
                                The inspection and testing detailed in this report and accompanying schedules have been
                                carried out in accordance with BS 7671 as amended
                            </p>

                        </div>
                        <div class="details">
                            <div class="part">
                                <div class="info-container">
                                    <div class="info">
                                        <div class="name">Extent of the electrical installation coverd by this report
                                        </div>
                                        <div class="value" style="border: 1px solid #ddd;">
                                            {{ $gaz_safety_data[0]['extent_electrical_c'] ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-container">
                                    <div class="w-100">
                                        <div class="name mb-1">Agreed limitations including the reasons, see
                                            Regulations 653.2</div>
                                        <div class="value" style="border: 1px solid #ddd; height: 50px;">
                                            {{ $gaz_safety_data[0]['agreed_limitations_c'] ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>

                                <div class="info-container">
                                    <div class="info">
                                        <div class="name">Limitations agreed with</div>
                                        <div class="value" style="border: 1px solid #ddd;">
                                            {{ $gaz_safety_data[0]['agreed_limitations_with_c'] ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="name">Position (if applicable):</div>
                                        <div class="value" style="border: 1px solid #ddd;">
                                            {{ $gaz_safety_data[0]['position_c'] ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>

                                <div class="info-container">
                                    <div class="info">
                                        <div class="name">Operational limitations including the reasons</div>
                                        <div class="value" style="border: 1px solid #ddd; height:70px;">
                                            {{ $gaz_safety_data[0]['operational_limitation_c'] ?? 'N/A' }}
                                        </div>
                                    </div>

                                </div>

                                <p>
                                    It should be noted that cables concealed within trunking and conduits,
                                    under floors, in roof spaces, and generally within the fabric of the building or
                                    underground,
                                    have not been inspected unless specificall aareed between the client and inspector
                                    prior to the inspection.
                                    An inspection should be made within accessible roof space housing other
                                    electrical eduioment
                                </p>

                            </div>
                        </div>
                    </td>
                </tr>


                <tr id="part-5" class="part-container" style="break-inside: avoid;">
                    <td>
                        <div
                            style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 7px;">
                            PART 5 :SUMMARYOFTHECONDITIONO FTHEINSTALLATION</div>
                        <div class="details">
                            <div class="part">
                                <div class="info-container">
                                    <div class="w-100" style="font-size: 10px; align-items: center;">
                                        <div class="name">General condition of the installation (in terms of
                                            electrical safety)</div>
                                        <div class="value" style="border: 1px solid #ddd; min-height:70px;">
                                            {{ $gaz_safety_data[0]['general_condition_d'] ?? 'N/A' }}
                                        </div>

                                    </div>
                                </div>
                                <div class="info-container justify-content-center text-center mt-1">
                                    <div class="w-50" style="font-size: 10px; align-items: center;">
                                        <div class="name">Overall assessment of the installation in terms of its
                                            suitability for continued use:</div>
                                        <div style="border: 1px solid #ddd; flex-grow: 1; padding: 5px; min-height:15px;">
                                            {{ $gaz_safety_data[0]['overall_assessment_d'] ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                                <p class="text-danger">
                                    An unsatisfactory assessment indicates that dangerous (code C1) and/or potentially
                                    dangerous (code C2) conditions have been identified
                                </p>
                                <div class="info-container">
                                    <div style="display: flex; align-items: center;">
                                        <div style="display:flex; justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px; margin-right: 5px;">

                                                @if (isset($gaz_safety_data[0]['alternative_source_d']) && $gaz_safety_data[0]['alternative_source_d'] == "True")
                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                @elseif (isset($gaz_safety_data[0]['alternative_source_d']) &&  $gaz_safety_data[0]['alternative_source_d'] == "False")
                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                @else
                                                    {{ $gaz_safety_data[0]['alternative_source_d'] ?? 'N/A' }}
                                                @endif
                                            </div>
                                        </div>
                                        <div style="padding-right: 5px;"> supply of source Alternative ( as described in attached schedule if applicable)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr id="part-6" class="part-container ">
                    <td>
                        <div class="part-main-title">
                            PART 6 : Recommendations
                        </div>
                        <div class="details">
                            <div class="part">
                                <p>
                                    Where overall assessment of the suitability of the installation for continued use on
                                    page 1 is stated as UNSATISFACTORY,
                                    I/we recommend that any observations classified as 'Danger present' (Code C1) or
                                    'Potentially dangerous' (Code C2) are acted upon as a matter of urgent investigation
                                    without delay.
                                    For observations identified as 'Requiring further investigation' or Observations
                                    classified as 'improvement recommended' (Code C3) should be given due consideration.
                                </p>
                                <div class="info-container">
                                    <div class="info">
                                        <div class="name"> Subject to the necessary remedial action being taken, I/we
                                            recommend that the installation is further inspected and tested by</div>
                                        <div class="value" style="border: 1px solid #ddd;width: 200px;">  {{ $gaz_safety_data[0]['recommendations_d'] ?? 'N/A' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr id="part-7" class="part-container ">
                    <td>
                        <div class="part-main-title">
                            PART 7 : DECLARATION
                        </div>
                        <div class="details">
                            <div class="part">
                                <p style="font-size: 12px">
                                    I/We, being the person(s) responsible for the inspection and testing of the electrical installation (as indicated by my/our signature(s) below),
                                    particulars of which are described above, having exercised reasonable skill and care when carrying out the inspection and testing, hereby
                                    declare that the information in this report, including the observations and the attached schedules, provides an accurate assessment of the
                                    condition of the electrical installation taking into account the stated extent and limitations in part 4 of this report.
                                </p>
                                <div class="info-container">
                                    <table class="border declaration-table">
                                        <tr>
                                            <td style="vertical-align: baseline" class="border">

                                                <table>
                                                    <td colspan="4">
                                                        <h4 style="font-weight: bold">INSPECTED AND TESTED BY:</h4>
                                                    </td>
                                                    <tr>
                                                        <td>Name (CAPITALS)</td>
                                                        <td colspan="3" class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['inspected_name'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Signature</td>
                                                        <td colspan="3" class="border value">
                                                            <img src="{{$user->signature ? asset($user->signature->file_url) : " "}}" width="90px" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Position</td>
                                                        <td class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['inspected_position'] ?? 'N/A' }}</td>
                                                        <td>date</td>
                                                        <td class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['inspected_date'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contact</td>
                                                        <td colspan="3" class="border value">
                                                            <div>Tel</div>
                                                            <div>Email</div>
                                                            <div>web</div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style="vertical-align: baseline"  class="border">
                                                <table>
                                                    <tr>
                                                        <td colspan="4">
                                                            <h4 style="font-weight: bold">REPORT AUTHORISED FOR ISSUE BY:</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contractor</td>
                                                        <td colspan="3" class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['report_contractor'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td colspan="3" class="border value">{{'-'}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td colspan="3" class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['report_name'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Signature</td>
                                                        <td colspan="3" class="border value">
                                                            <img src="{{$form_data->customerSignature ? asset("uploads/".$form_data->customerSignature->file_url) : " "}}" width="90px" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            ENROLMENT NO
                                                            <p>(If applicable)</p>
                                                        </td>
                                                        <td class="border value">

                                                        </td>
                                                        <td >Date</td>
                                                        <td class="border value">{{ $gaz_safety_data[0]['eicr_declaration']['report_date'] ?? 'N/A' }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr id="part-8" class="part-container ">
                    <td>
                        <div class="part-main-title">
                            PART 8 : SCHEDULES <span style="padding-left: 25">The attached schedule(s) are part of this document and this report is valid only when they are attached to it</span>
                        </div>
                        <div class="details">
                            <div class="part">

                                <div class="info-container">
                                  <table style="width: 70%; margin: auto">
                                    <tr>
                                        <td style="font-size: 13px; text-align: center;">
                                            <span class="value" style="border: 1px solid #ddd;padding: 10px;">  {{ $gaz_safety_data[0]['recommendations_d'] ?? 'N/A' }}</span>
                                                Schedule(s) of inspection and
                                        </td>
                                        <td style="font-size: 13px; text-align: center;">
                                            <span class="value" style="border: 1px solid #ddd;padding: 10px;">  {{ $gaz_safety_data[0]['recommendations_d'] ?? 'N/A' }}</span>
                                                Schedule(s) of test results attached
                                        </td>

                                    </tr>
                                  </table>


                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr id="part-9" class="part-container" style="break-inside: avoid;">
                    <td>
                        <div class="part-main-title">
                            PART 9 : SUPPLY CHARACTERISTICS AND EARTHING ARRANGEMENTS
                        </div>
                        <div class="details">
                            <div class="part">
                                <div class="info-container">
                                    <div style="padding: 5px; width: 13.33333%; border-right: 1px solid #2a98fc;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom: 5px;"> Earthing Arrangements (s)
                                            </p>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">

                                                        @if (getKeyForm('tn_s_f',$gaz_safety_data[0]) == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (getKeyForm('tn_s_f',$gaz_safety_data[0])== "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['tn_s_f'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <span>TN-S</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">

                                                        @if (getKeyForm('tn_c_a_f',$gaz_safety_data[0]) == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (getKeyForm('tn_c_a_f',$gaz_safety_data[0])== "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['tn_c_a_f'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <span>TN-C-S</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (getKeyForm('tt_f',$gaz_safety_data[0]) == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (getKeyForm('tt_f',$gaz_safety_data[0])== "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['tt_f'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <span>TT</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (getKeyForm('it_f',$gaz_safety_data[0]) == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (getKeyForm('it_f',$gaz_safety_data[0])== "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['it_f'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <span>IT</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        @if (getKeyForm('tn_c_f',$gaz_safety_data[0]) == "True")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                        @elseif (getKeyForm('tn_c_f',$gaz_safety_data[0])== "False")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                        @else
                                                            {{ $gaz_safety_data[0]['tn_c_f'] ?? 'N/A' }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <span>TN-C</span>
                                            </div>

                                        </div>

                                    </div>

                                    <div style="padding: 5px; width: 33.33333%; border-right: 1px solid #2a98fc;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom:5px;">Number and Type Of Live
                                                Conductors</p>

                                            <div class="d-flex justify-content-between">
                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                            display: flex; align-items: center;
                                                            justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('ac_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('ac_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['ac_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>AC</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('dc_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('dc_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['dc_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>DC</span>
                                                </div>

                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('1phase_2wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('1phase_2wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['1phase_2wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>1 phase (2 wire)</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">

                                                            @if (getKeyForm('2wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('2wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['2wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>2 wire</span>
                                                </div>

                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('2phase_3wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('2phase_3wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['2phase_3wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>2 phase (3 wire)</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                            display: flex; align-items: center;
                                                            justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('1phase_3wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('1phase_3wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['1phase_3wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>1 phase (3 wire)</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('3wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('3wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['3wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>3 wire</span>
                                                </div>

                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('3phase_3wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('3phase_3wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['3phase_3wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>3 phase (3 wire)</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('3phase_4wire_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('3phase_4wire_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['3phase_4wire_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>3 phase (4 wire)</span>
                                                </div>

                                                <div
                                                    style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                    <div
                                                        style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                        <div
                                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                            @if (getKeyForm('other_f',$gaz_safety_data[0]) == "True")
                                                            <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                            @elseif (getKeyForm('other_f',$gaz_safety_data[0])== "False")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                            @else
                                                                {{ $gaz_safety_data[0]['other_f'] ?? 'N/A' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span>other</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div style="padding: 5px; width: 18.33333%; border-right: 1px solid #2a98fc;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom: 5px;"> Nature of Supply
                                                Parameters</p>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>nominal voltage U(0)</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['nominal_voltage_f'] ?? '' }}
                                                    </div>
                                                </div>
                                                <span>Volts</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>nominal frequency f(1)</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['nominal_frequency_f'] ?? '' }}
                                                    </div>
                                                </div>
                                                <span>HZ</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>PFC Ipf(1,2)</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['pfc_f'] ?? '' }}
                                                    </div>
                                                </div>
                                                <span>kA</span>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>External loop impedance</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 70px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['earth_fault_loop_impedance_ze_f'] ?? '' }}
                                                    </div>
                                                </div>
                                                <span>Ω</span>
                                            </div>
                                            <div>
                                               <span>Note:</span>
                                                <p>(1) by enquiry</p>
                                                <p>(2) by enquiry or by measurement</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div style="padding: 5px; width: 33.33333%;">
                                        <div>
                                            <p style="font-weight: bold;margin-bottom: 5px; text-align: center">
                                                Characteristics of Primary
                                                Over current Protective Device(s)</p>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>BS (EN)</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 200px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 180px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['bs_f'] ?? '' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Type</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 200px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 180px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['type_f'] ?? '' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Rated current</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 200px;
                                                        display: flex; align-items: center;
                                                        justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 180px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['rated_current_f'] ?? '' }}
                                                    </div>
                                                </div>

                                            </div>

                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Short circuit capacity</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 200px;
                                                        display: flex; align-items: center;
                                                        justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 180px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['short_circuit_capacity_f'] ?? '' }}
                                                    </div>
                                                </div>

                                            </div>

                                            <div
                                                style="display: flex;align-items: center;padding-right: 5px;margin-bottom: 10px;padding-top: 10px;border-top: 1px solid #2a98fc;">
                                                <span>Confirmation of Supply Polarity</span>
                                                <div
                                                    style="display: flex; align-items: center; width: 200px;
                                                    display: flex; align-items: center;
                                                    justify-content: center;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 60px; height: 25px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['confirmation_of_supply_f'] ?? '' }}
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                </div>

                            </div>
                        </div>
                        </div>
                    </td>
                </tr>

                <tr id="part-10" class="part-container" style="break-inside: avoid;">
                    <td style="border-bottom: 1px solid #2a98fc;">
                        <div class="part-main-title">PART 10 : PARTICULARS OF INSTALLATION REFERRED TO IN THIS REPORT
                        </div>
                        <div class="details" style="font-size: 11px;">
                            <div style="display: flex;">
                                <div style="width: 100%; padding: 5px; display: flex; align-items: center;">
                                    <div
                                        style="font-size: 20px; color:#2a98fc; margin-right: 10px; font-weight: bold;">
                                        Means of earthing: </div>

                                    <div style="border-right: 1px solid #2a98fc; padding: 5px 15px">
                                        <div
                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                            <div
                                                style="display: flex; align-items: center; height: 35px; width: 55px;
                                                display: flex; align-items: center;
                                                justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;  height: 35px;  width: 40px; margin-left: 5px;">
                                                    @if (getKeyForm('distributor_facility_g',$gaz_safety_data[0]) == "True")
                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                    @elseif (getKeyForm('distributor_facility_g',$gaz_safety_data[0])== "False")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                    @else
                                                        {{ $gaz_safety_data[0]['distributor_facility_g'] ?? 'N/A' }}
                                                    @endif
                                                </div>
                                            </div>
                                            <span>Distributor's facility</span>
                                        </div>

                                        <div
                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                            <div
                                                style="display: flex; align-items: center; width: 55px;  height: 35px;
                                                display: flex; align-items: center;
                                                justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px;  height: 35px;  margin-left: 5px;">

                                                    @if (getKeyForm('installation_earth_electrode_g',$gaz_safety_data[0]) == "True")
                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                    @elseif (getKeyForm('installation_earth_electrode_g',$gaz_safety_data[0])== "False")
                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                    @else
                                                        {{ $gaz_safety_data[0]['installation_earth_electrode_g'] ?? 'N/A' }}
                                                    @endif
                                                </div>
                                            </div>
                                            <span>Installation earth electrode</span>
                                        </div>
                                    </div>
                                    <div style="padding:5px 15px;">
                                        <div style="display: flex">
                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Type</span>
                                                <div
                                                    style="display: flex; align-items: center; height: 35px; width: 120px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;  height: 35px;  width: 120px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['type_i_g'] ?? '' }}
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                <span>Resistance to earth</span>
                                                <div
                                                    style="display: flex; align-items: center; height: 35px; width: 120px;
                                                    display: flex; align-items: center;
                                                    justify-content: space-between;">
                                                    <div
                                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;  height: 35px;  width: 120px; margin-left: 5px;">
                                                        {{ $gaz_safety_data[0]['electrode_resistance_ra_g'] ?? '' }}
                                                    </div>
                                                </div>
                                                <span style="font-size: 18px; padding: 0 5px"> Ω </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                            <span>Location of the earth electrode
                                                (Where applicable)</span>
                                            <div
                                                style="display: flex; align-items: center; width: 100%;  height: 35px;
                                                display: flex; align-items: center;
                                                justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 100%;  height: 35px;  margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['location_of_the_earth_electrode_g'] ?? '' }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                    </td>
                </tr>

                <tr id="part-11" class="part-container" style="break-inside: avoid;">
                    <td>
                        <div class="d-flex">
                            <div style="
                                border: 1px solid #2a98fc;
                                width: 60%;
                                ">
                                <div class="part-main-title">
                                    PART 11 : MAIN PROTECTIVE CONDUCTORS (to extraneous conductive parts)
                                </div>
                                <div class="details border-0">
                                    <div class="part">
                                        <div class="info-container">
                                            <div
                                                style="padding: 5px; width: 50%; border-right: 1px solid #2a98fc;display:flex">
                                                <div>
                                                    <p style="font-weight: bold;margin-bottom: 5px;"> Earthing
                                                        Conductor</p>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Conductor Material</span>
                                                        <div
                                                            style="display: flex; align-items: center; width: 70px;
                                                          display: flex; align-items: center;
                                                          justify-content: space-between;">
                                                            <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 20px; width: 40px; margin-left: 5px;">
                                                                {{ $gaz_safety_data[0]['conductor_material_h_1'] ?? '' }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Conductor
                                                            Csa mm <sup>2</sup></span>
                                                        <div
                                                             style="display: flex; align-items: center; width: 70px;
                                                            display: flex; align-items: center;
                                                            justify-content: space-between;">
                                                                                    <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 20px; width: 40px; margin-left: 5px;">
                                                                {{ $gaz_safety_data[0]['conductor_csa_h_1'] ?? '' }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Connection/ continuity verified</span>
                                                        <div
                                                            style="display: flex; align-items: center; width: 70px;
                                                              display: flex; align-items: center;
                                                              justify-content: space-between;">
                                                            <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px; margin-left: 5px;">
                                                                    @if (getKeyForm('continuity_check_h_1',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('continuity_check_h_1',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['continuity_check_h_1'] ?? 'N/A' }}
                                                                    @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div>
                                                    <p style="font-weight: bold;margin-bottom: 5px;">Main protective
                                                        bonding conductor</p>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Conductor Material</span>
                                                        <div
                                                            style="display: flex; align-items: center; width: 70px;
                                                            display: flex; align-items: center;
                                                            justify-content: space-between;">
                                                            <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 20px; width: 40px; margin-left: 5px;">
                                                                {{ $gaz_safety_data[0]['conductor_material_h_2'] ?? '' }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Conductor
                                                            Csa mm <sup>2</sup></span>
                                                        <div
                                                            style="display: flex; align-items: center; width: 70px;
                                                              display: flex; align-items: center;
                                                              justify-content: space-between;">
                                                            <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 20px; width: 40px; margin-left: 5px;">
                                                                {{ $gaz_safety_data[0]['conductor_csa_h_2'] ?? '' }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                        <span>Connection/ continuity verified</span>
                                                        <div
                                                            style="display: flex; align-items: center; width: 70px;
                                                                display: flex; align-items: center;
                                                                justify-content: space-between;">
                                                            <div
                                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px; margin-left: 5px;">

                                                                @if (getKeyForm('continuity_check_h_2',$gaz_safety_data[0]) == "True")
                                                                <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                @elseif (getKeyForm('continuity_check_h_2',$gaz_safety_data[0])== "False")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                @else
                                                                    {{ $gaz_safety_data[0]['continuity_check_h_2'] ?? 'N/A' }}
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>

                                            <div
                                                style="padding: 5px; width: 50%;">
                                                <div>
                                                    <p
                                                        style="font-weight: bold;margin-bottom: 5px; text-align: center">
                                                        Main Bonding</p>

                                                    <div class="d-flex justify-content-between">

                                                        <div
                                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                            <div
                                                                style="display: flex; align-items: center; width: 50px;
                                                                 display: flex; align-items: center;">
                                                                <div
                                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px;">

                                                                    @if (getKeyForm('water_installation_pipes_h',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('water_installation_pipes_h',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['water_installation_pipes_h'] ?? 'N/A' }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <span>Water installation pipes</span>
                                                        </div>

                                                        <div
                                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                            <div
                                                                style="display: flex; align-items: center; width: 50px;
                                                                 display: flex; align-items: center;">
                                                                <div
                                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px;">
                                                                    @if (getKeyForm('structural_steel_h',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('structural_steel_h',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['structural_steel_h'] ?? 'N/A' }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <span>Structural Steel</span>
                                                        </div>

                                                    </div>

                                                    <div class="d-flex justify-content-between">

                                                        <div
                                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                            <div
                                                                style="display: flex; align-items: center; width: 50px;
                                                                display: flex; align-items: center;">
                                                                <div
                                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px;">
                                                                    @if (getKeyForm('gas_installation_h',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('gas_installation_h',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['gas_installation_h'] ?? 'N/A' }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <span>Gas installation pipes</span>
                                                        </div>

                                                        <div
                                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                            <div
                                                                style="display: flex; align-items: center; width: 50px;
                                                               display: flex; align-items: center;">
                                                                <div
                                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px;">

                                                                    @if (getKeyForm('other_services_h',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('other_services_h',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['other_services_h'] ?? 'N/A' }}
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <span>Other (specify)</span>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex justify-content-between">

                                                        <div
                                                            style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                            <div
                                                                style="display: flex; align-items: center; width: 50px;
                                                                display: flex; align-items: center;">
                                                                <div
                                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 40px; width: 40px;">

                                                                    @if (getKeyForm('oil_installation_pipes_h',$gaz_safety_data[0]) == "True")
                                                                    <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                                                    @elseif (getKeyForm('oil_installation_pipes_h',$gaz_safety_data[0])== "False")
                                                                        <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}" width="25px">
                                                                    @else
                                                                        {{ $gaz_safety_data[0]['oil_installation_pipes_h'] ?? 'N/A' }}
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <span>Oil installation pipes</span>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div style="
                            border: 1px solid #2a98fc;
                            width: 40%;
                           ">
                              <div class="part-main-title">
                                  PART 12 : MAIN SWITCH/SWITCH-FUSE/CIRCUIT BREAKER/RCD
                              </div>
                              <div class="details border-0">
                                  <div class="part">
                                      <div class="info-container">


                                          <div style="padding: 5px; width:100%;">
                                              <div>
                                                  <div class="d-flex justify-content-between">
                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>Type BS (EN)</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 75px;
                                                                display: flex; align-items: center;
                                                                justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 70px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['type_bs_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                      </div>

                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>Voltage rating</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['voltage_rating_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                          <span>V</span>
                                                      </div>

                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>No of poles</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 75px;
                                                                display: flex; align-items: center;
                                                                justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 70px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['no_of_poles_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                      </div>

                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>Current Rating</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['rated_current_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                          <span>A</span>
                                                      </div>

                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>Supply
                                                            Conductor</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 75px;
                                                                display: flex; align-items: center;
                                                                justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 70px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['supply_conductor_material_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                      </div>

                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span><sup>*</sup>Rated time delay</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['rated_time_delay_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                          <span>ms</span>
                                                      </div>

                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>Conductor csa mm <sup>2</sup></span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 75px;
                                                                display: flex; align-items: center;
                                                                justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 70px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['supply_conductor_csa_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                      </div>

                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span><sup>*</sup>Rated RCD
                                                            Operating current</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 55px;
                                                        display: flex; align-items: center;
                                                        justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['rcd_operation_current_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                          <span>mA</span>
                                                      </div>

                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span>* If RCD main switch</span>

                                                      </div>

                                                      <div
                                                          style="display: flex; align-items: center; padding-right: 5px;margin-bottom: 10px;">
                                                          <span><sup>*</sup>RCD Operating
                                                            time</span>
                                                          <div
                                                              style="display: flex; align-items: center; width: 55px;
                                                                    display: flex; align-items: center;
                                                                    justify-content: space-between;">
                                                              <div
                                                                  style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px;">
                                                                  {{ $gaz_safety_data[0]['rcd_operation_time_i'] ?? '' }}
                                                              </div>
                                                          </div>

                                                          <span>mA</span>
                                                      </div>

                                                  </div>

                                              </div>
                                          </div>

                                      </div>

                                  </div>
                              </div>
                          </div>

                        </div>



                    </td>
                </tr>

                <tr style="border-right:1px solid #2a98fc; border-left: 1px solid #2a98fc; break-inside: avoid;"
                    id="part-10" class="part-container">
                    <td style="border-bottom: 1px solid #2a98fc; padding: 0;">
                        <div class="part-main-title">PART 13 : OBSERVATIONS
                        </div>
                        <div style="font-size: 11px;">
                            <div style="display: flex;">
                                <div
                                    style="border-right: 1px solid #2a98fc;width: 100%; padding: 5px; display: flex; align-items: center;">
                                    <div
                                        style="font-size: 20px; color:#2a98fc; margin-right: 10px; font-weight: bold;">
                                        CODES: </div>
                                    <div>One of the following Codes, as appropriate, has been allocated to each of the
                                        observations made below to indicate to the person(s) responsible for the
                                        electrical installation the degree of urgency for remedial action</div>
                                </div>
                                <div style="text-align: center; padding: 5px; border-right: 1px solid #2a98fc;">CODE <b>C1</b>
                                    - Danger Present. Risk of injury. Immediate remedial action required</div>
                                <div style="text-align: center; padding: 5px; border-right: 1px solid #2a98fc;">CODE <b>C2</b>
                                    - Potentially Dangerous. Urgent remedial action required</div>
                                <div style="text-align: center; padding: 5px; border-right: 1px solid #2a98fc;">CODE <b>C3</b>
                                    - Improvement Recommended </div>
                                <div style="text-align: center; padding: 5px;">CODE <b>F1</b> - Further investigation Required
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>


                <tr
                    style="border-right: 1px solid #2a98fc; border-left: 1px solid #2a98fc; background-color: white; break-inside: avoid;">
                    <td style="padding: 5px">
                        <p style="font-weight: bold;">Referring to the attached schedules of inspection and test results, and subject to the limitations specified at the Extent and Limitations of the
                            inspection and testing section</p>
                        <div class="info-container">
                            <div style="display: flex; align-items: center;">

                                <div style="display:flex; justify-content: space-between;">
                                    <div
                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px; margin-right: 5px; text-align: center; font-size: 16px">
                                        {{-- <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}"  width="25px" alt="" srcset=""> --}}
                                        N/A
                                    </div>
                                </div>
                                <div style="padding-right: 5px;">No remedial action is required</div>


                                <div style="display:flex; justify-content: space-between;">
                                    <div
                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px; margin-right: 5px;">
                                       <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg')}}" width="25px">
                                    </div>
                                </div>
                                <div style="padding-right: 5px;">The following observations are made</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr style="border-right: 1px solid #2a98fc; border-left: 1px solid #2a98fc; background-color: white;">
                    <td>
                        <table>
                            <thead>
                                <th style="width:10%;color: black; font-weight: bold;">Item No</th>
                                <th style="width:70%;color: black; font-weight: bold;">Observation(s)</th>
                                <th style="color: black;">CLASSIFICATION CODE</th>
                               {{--  <th style="color: black; font-weight: bold;">Location Referance</th> --}}
                            </thead>
                            <tbody>
                                @if (isset($gaz_safety_data[0]['all_observation_data']))

                                @foreach ($gaz_safety_data[0]['all_observation_data'] as $key => $observation_data)
                                <tr>
                                    <td style="padding: 7px;">
                                        <div
                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;">
                                            {{ $loop->iteration }}</div>
                                    </td>
                                    <td style="padding: 7px;">
                                        <div
                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;">
                                            {{ $observation_data['observation_details'] ?? '' }}</div>
                                    </td>
                                    <td style="padding: 7px;">
                                        <div
                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px;">
                                            {{ $observation_data['observation_code'] }}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                                <tr>
                                    <td style="padding: 7px;">


                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>
                                    <td style="padding: 7px;">

                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr
                    style="border-right:1px solid #2a98fc; border-left: 1px solid #2a98fc; border-bottom:1px solid #2a98fc; background-color: white;">
                    <td style="padding: 5px">
                        <div class="info-container" style="justify-content: space-around; width:90%">


                                <div style="display:flex; justify-content: space-between; align-items: center ">
                                    <div
                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px; margin-right: 5px; text-align: center; font-size: 16px">
                                        {{-- <img src="{{asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png')}}"  width="25px" alt="" srcset=""> --}}
                                        N/A
                                    </div>
                                    <div style="padding-right: 5px;">Additional observations</div>
                                </div>


                                <div style="display:flex; justify-content: space-between; align-items: center">
                                    <div style="padding-right: 5px;">Additional notes/observations attached or to follow ref:</div>
                                    <div
                                        style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 40px; margin-left: 5px; margin-right: 5px; text-align: center; font-size: 16px">
                                       N/A
                                    </div>
                                </div>


                        </div>
                    </td>
                </tr>


                <tr id="part-14" class="part-container" style="border: 1px solid #2a98fc; break-inside: avoid;">
                    <td>
                        <div
                            style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 7px;">
                            PART 14 : SCHEDULE OF ITEMS INSPECTED</div>
                        <div class="details" style="border: 0;">
                            <div class="part">
                                <div class="sub-part" style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <p style="font-weight: bold;">External condition of intake equipment (visual
                                        inspection only)</p>
                                    <div style="margin-bottom: 20px;">(If inadequacies are identified with the intake
                                        equipment, it is recommended the person ordering the report informs the
                                        appropriate authority)</div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.1 Condition of service cable:</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px; text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='1.1_condition_cable' :data-form="$gaz_safety_data[0]"/>

                                            </div>

                                        </div>
                                    </div>
                                     <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.2 Condition of service head: </span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">
                                            <div
                                              style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px; text-align: center; font-size: 10px">
                                              <x-form-toggle-value key='1.2_condition_head' :data-form="$gaz_safety_data[0]"/>
                                          </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.3 Condition of distributor’s earthing arrangement:</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">
                                             <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px; text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='1.3_arrangement' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.4 Condition of meter tails - Distributor/Consumer:</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px; text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='1.4_consumer' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.5 Condition of metering equipment:</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px; text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='1.5_isolator' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>1.6 Condition of isolator (where present):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='1.6_appropriate' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-part" style="padding: 15px 0; border-bottom: 1px solid #2A98FC;">
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span style="font-weight: bold;">2. PRESENCE OF ADEQUATE ARRANGEMENTS FOR OTHER SOURCES SUCH AS MICROGENERATORS (551.6; 551.7):</span>
                                        <div
                                            style="display: flex;
                                          display: flex;
                                          justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='2.0_generators' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sub-part">
                                    <p style="font-weight: bold;">3. EARTHING AND BONDING ARRANGEMENTS (411.3, Chapter 54)</p>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.1 Presence and condition of distributor’s earthing arrangement (542.1.2.1 ; 542.1.2.2):</span>
                                    <div
                                        style="display: flex;
                                        display: flex;
                                        justify-content: space-between;">
                                        <div
                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                            <x-form-toggle-value key='3.1_presence_arrangement' :data-form="$gaz_safety_data[0]"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.2 Presence and condition of earth electrode connection where applicable (542.1.2.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.2_presence_applicable' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.3 Provision of earthing/bonding labels at all appropriate locations (514.13):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.3_provision_appropriate' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.4 Adequacy of earthing conductor size (542.3, 543.1.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.4_adequacy_size' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.5 Accessibility and condition of earthing conductor at MET (542.3.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.5_accessibility_connections' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.6 Adequacy of main protective bonding conductor sizes (544.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.6_adequacy_sizes' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.7 Condition and accessibility of main protective bonding conductor connections (543.3.2; 544.1.2) :
                                        </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='3.7_adequacy_connections' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>3.8 Accessibility and condition of other protective bonding connections (543.3.2):</span>
                                        <div
                                        style="display: flex;
                                        display: flex;
                                        justify-content: space-between;">
                                        <div
                                            style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                            <x-form-toggle-value key='3.8_accessibility_connections' :data-form="$gaz_safety_data[0]"/>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                            <div class="part">
                                <div class="sub-part">
                                    <p style="font-weight: bold;">4. CONSUMER UNIT OR DISTRIBUTION BOARD </p>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.1 Adequacy of working space / accessibility to
                                            consumer unit / distribution board  (132.12; 513.1)
                                            :</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                           <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.1_adequacy_board' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.2 Security of fixing (124.1.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                           <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.2_security_fixing' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.3 Condition of enclosure(s) in terms of IP rating etc (416.2): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                           <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.3_condition_ip_rating' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.4 Condition of enclosure(s) in terms of fire rating etc (421.1.201; 526.5):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                           <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.4_condition_fire_rating' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.5 Enclosure not damaged or deteriorated so as to impair safety (621.2):</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.5_enclosure_safety' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.6 Presence of linked main switch  (as required by 537.1.4): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.6_presence_switch' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.7 Operation of main switch - functional check (612.13.2): </span>
                                        <div
                                            style="display: flex;
                                                  display: flex;
                                                  justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.7_operation_switch' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.8 Manual operation of circuit breakers and RCDs to prove disconnection (537.2.2.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.8_manual_disconnection' :data-form="$gaz_safety_data[0]"/>
                                            </div>

                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.9 Correct identification of circuit details and protective devices (514.8.1 ; 514.9.1):</span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">
                                             <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">

                                                <x-form-toggle-value key='4.9_correct_device' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.10 Presence of RCD six-monthly test notice at or near consumer unit/distribution board (514.12.2)

                                          :</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.10_presence_required' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>



                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.11 Presence of alternative supply warning notice at or near consumer unit / distribution board (514.15):</span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.11_presence_board' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.12 Presence of other required labelling (please specify) *** (Section 514):</span>
                                        <div
                                            style="display: flex;
                                          display: flex;
                                          justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.12_presence_labelling' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.13 compatibility of protective, bases and other components; correct type and rating (No signs of unacceptable thermal damage, arcing or overheating) ( 411.3.2; 411.4; 411.5; 411.6; Sections 432, 433) :</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">

                                              <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.13_compatibility_of_protective' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.14 Single-pole switching or protective devices in line conductor only (132.14.1; 530.2.2) :</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.14_single_pole_switching' :data-form="$gaz_safety_data[0]"/>
                                            </div>

                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.15 Protection against mechanical damage where cables enter the consumer unit or distribution board (522.8.1 ,
                                          522.8.11) :</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">

                                           <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.15_protection_against_mechanical' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="part">
                                <div class="sub-part" style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.16 Protection against electromagnetic effects where cables enter consumer unit / distribution board /
                                          enclosures 521.5.1: </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.16_protection_against_electromagnetic' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.17 RCDs provided for fault protection - includes RCBOs (411.4.204; 411.5.2; 531.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.17_rcd_provided_for_fault' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.18 RCD(s) provided for additional protection/requirements - includes RCBOs (411.3.3; 415.1):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.18_rcd_provided_for_additional' :data-form="$gaz_safety_data[0]"/>
                                            </div>

                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.19 Confirmation of indication that SPD is functional (651.4):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.19_confirmation_of_indication' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.20 Confirmation that ALL conductor connections, including connections to busbars, are correctly located in
                                          terminals and are tight and secure (526.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.20_confirmation_that_all_conductor' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.21 Adequate arrangements where a generating set operates as a switched alternative to the public supply (551.6):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.21_adequate_arrangements_switched' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>4.22 Adequate arrangements where a generating set operates in parallel with the public supply (551.7):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='4.22_adequate_arrangements_operates' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-part">
                                    <p style="font-weight: bold;">5. Final Circuits</p>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.1 Identification of conductors (514.3.1):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                           <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.1_identification' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.2 Cables correctly supported throughout their run (522.8.5):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                           <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                             <x-form-toggle-value key='5.2_cables_correctly' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.3 Condition of the insulation of live parts (416.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.3_condition_live_parts' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.4 Non-sheathed cables protected by enclosure in conduit, ducting or trunking (521.10.1) To include the
                                          integrity of conduit and trunking systems (metallic and plastic)
                                          : </span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">
                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.4_non_sheathed_cables' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.5 Adequacy of cables for current-carrying capacity with regard for the type and nature of installation (Section 523): </span>
                                        <div
                                            style="display: flex;
                                                  display: flex;
                                                  justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.5_adequacy_of_cables' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.6 Coordination between conductors and overload protective devices (422.1; 5S3.2.1): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.6_coordination' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.7 Adequacy of protective devices: type and rated current for fault protection (411.3): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.7_adequacy_of_protective' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.8 Presence and adequacy of circuit protective conductors (411.3.1.1; 543.1):</span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.8_presence_and_adequacy' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.9 Wiring system(s) appropriate for the type and nature of the installation and external influences (section 522): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                              <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.9_ wiring_systems' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.10 Concealed cables installed in prescribed zones (see Section D. Extent and limitations) (522.6.202):
                                        </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.10_concealed_cables' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.11  Cables Concealed  Under Floors,Above Ceilings Or  ln Walls/Partitions,
                                           Adequately Protected Against Damage (See Section D Extent And Limitations)
                                          (522.6.204)
                                        </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.11_cables_concealed' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span style="font-weight: bold">5.12 Provision of additional requirements for protection by RCD not exceeding 30 mA</span>
                                        <div
                                            style="display: flex;
                                              display: flex;
                                              justify-content: space-between;">

                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span>a) For all socket-outlets of rating 32 A or less, unless an exception is permitted (411.3.3)
                                            </span>
                                            <div
                                                style="display: flex;
                                                  display: flex;
                                                  justify-content: space-between;">
                                                 <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.12_1_for_all_socket_outlets' :data-form="$gaz_safety_data[0]"/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span> b) For the supply of mobile equipment not exceeding 32 A rating for use outdoors (411.3.3) </span>
                                            <div
                                                style="display: flex;
                                                      display: flex;
                                                      justify-content: space-between;">
                                                 <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.12_2_for_the_supply' :data-form="$gaz_safety_data[0]"/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span> c) For cables concealed in walls at a depth of less than 50 mm (522.6.202; 522.6.203)</span>
                                            <div
                                                style="display: flex;
                                                    display: flex;
                                                    justify-content: space-between;">
                                                 <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.12_3_for_cables_concealed_depth_50mm' :data-form="$gaz_safety_data[0]"/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </td>
                </tr>
                 <tr id="part-14" class="part-container" style="break-inside: avoid;">
                    <td>
                        <div
                            style="color: #FFFFFF;
                          background-color: #2a98fc;
                          font-size: 10px;
                          font-weight: bold;
                          padding: 7px;">
                            PART 14 : SCHEDULE OF ITEMS INSPECTED</div>
                        <div class="details">
                            <div class="part">
                                <div class="sub-part"
                                    style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span> d) For cables concealed in walls/partitions containing metal parts regardless of depth (522.6.203)</span>
                                            <div
                                                style="display: flex;
                                                  display: flex;
                                                  justify-content: space-between;">
                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.12_4_for_cables_concealed' :data-form="$gaz_safety_data[0]"/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span>e) Final circuits supplying luminaires within domestic (household) premises (411.3.4)</span>
                                            <div
                                                style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">

                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.12_6_for_circuit_supply' :data-form="$gaz_safety_data[0]"/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 10px;">
                                        Note: Older installations designed prior to BS 7671:2008 may not have provided
                                        with RCDs for additional protection.</div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.13 Provision of fire barriers, sealing arrangements and protection against thermal effects (Section 527): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.1_provision_of_fire_barriers' :data-form="$gaz_safety_data[0]"/>
                                             </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.14 Band if cables segregated / separated from Band I cables (528.1): </span>
                                        <div
                                             style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.1_band_if_cables' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.15 Cables segregated or separated from communications cabling (528.2): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.1_cables_segregated_communications_cabling' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.16 Cables segregated or separated from non-electrical services (528.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.1_cables_segregated_non_electrical_service' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span style="font-weight: bold">5.17 Termination of cables at enclosures — indicate extent of sampling in Section D of the report (Section 526): </span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span>a) Connections soundly made and under no undue strain (526.6)</span>
                                            <div
                                                style="display: flex;
                                                    display: flex;
                                                    justify-content: space-between;">

                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.17_1_connections_soundly' :data-form="$gaz_safety_data[0]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span>b) No basic insulation of a conductor visible outside enclosure (526.8)</span>
                                            <div
                                                style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">

                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.17_2_no_basic_insulation' :data-form="$gaz_safety_data[0]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span>c) Connection of live conductors adequately enclosed (526.5)</span>
                                            <div
                                                style="display: flex;
                                                    display: flex;
                                                    justify-content: space-between;">

                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='5.17_3_connections_of_live' :data-form="$gaz_safety_data[0]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span> d) Adequately connected at the point of entry to enclosure (glands, bushes etc) (522.8.5)
                                            </span>
                                            <div
                                                style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">
                                                <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                        <x-form-toggle-value key='5.17_4_adequately_connected' :data-form="$gaz_safety_data[0]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.18 Condition of accessories including socket-outlets, switches
                                            and joint boxes (651.2(v)):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.18_conditions_of_accessories' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.19 Suitability of accessories for external influences (512.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.19_suitability_of_accessories' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.20 Adequacy of working space/accessibility to equipment (132.12; 513.1):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.20_adequacy_of_working' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>5.21 Single-pole switching or protective devices in line conductors only (132.14.1, 530.3.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='5.21_single_pole_switching' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="part">
                                <div class="sub-part" style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <p style="font-weight: bold;">6. LOCATION(S) CONTAINING A BATH OR SHOWER</p>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.1 Additional protection for all low voltage (LV) circuits by RCD not exceeding 30 mA (701.411.3.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.1_additional_protection' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.2 Where used as a protective measure, requirements for SELV or PELV met (701.414.4.5):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.2_where_used_protective' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.3 Shaver sockets comply with BS EN 61558-2-5 or BS 3535 (701.512.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                              <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.3_shaver_supply_units' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.4 Presence of supplementary bonding conductors, unless not required by BS 7671:2018 (701.415.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">
                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.4_presence_of_supplementary' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.5 Low voltage (e.g. 230 volt) socket-outlets sited at least 3 m from zone 1 (701.512.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                             <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.5_low_voltage' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.6 Suitability of equipment for external influences for installed location in terms of IP rating (701.512.2):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.6_suitability_ip_rating' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.7 Suitability of equipment for installation in a particular zone (701.512.3):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                                 <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                    <x-form-toggle-value key='6.7_suitability_particular_zone' :data-form="$gaz_safety_data[0]"/>
                                                </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>6.8 Suitability of current-using equipment for particular position within the location (701.55):</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='6.8_suitability_particular_within_location' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="sub-part"
                                    style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <p style="font-weight: bold;">7. OTHER PART 7 SPECIAL INSTALLATIONS OR LOCATIONS
                                    </p>
                                    <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>7.1 List all other special installations or locations present, if any (*Record separately the results of particular
                                            inspections applied): </span>
                                        <div
                                            style="display: flex;
                                                display: flex;
                                                justify-content: space-between;">

                                            <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='7.1_list_all_other_special_installation' :data-form="$gaz_safety_data[0]"/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sub-part" style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <p style="font-weight: bold;">8. Presumer's Low Voltage Electrical
                                        Installation (s ) </p>
                                        <div
                                        style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                        <span>8.1. Where The Installation Includes Additional
                                            Requirements and Recommendations Relating
                                            to Chapter 82, Additional Inspection Items
                                            Should be Added to The Checklist:</span>
                                        <div
                                            style="display: flex;
                                            display: flex;
                                            justify-content: space-between;">

                                           <div style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 10px; width: 40px; margin-left: 5px;  text-align: center; font-size: 10px">
                                                <x-form-toggle-value key='8.1_where_installation_includes' :data-form="$gaz_safety_data[0]"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="sub-part"
                                style="padding-bottom: 15px;">

                                <div>
                                    <p style="font-weight: bold;">
                                        *Special installations or present, if any. Details of circuits and/or installed equiprnent vulnerable to damage when testing and/or remarks
                                    </p>

                                    <div>
                                        <div
                                            style="display: flex; justify-content: space-between; padding-right: 5px;margin-bottom: 10px;">
                                            <span
                                                style="flex-grow: 1;border: 1px solid #ddd; padding: 5px;margin-right: 5px; min-height: 80px ">
                                                {!!  nl2br($gaz_safety_data[0]['remarks'] ?? 'N/A') !!}
                                            </span>

                                        </div>


                                    </div>

                                </div>
                                <table>
                                    <tr>
                                        <td class="border">8.2</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.2_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.2_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.3</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.3_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.3_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.4</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.4_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.4_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.5</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.5_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.5_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.6</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.6_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.6_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.7</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.7_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.7_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.8</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.8_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.8_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.9</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.9_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.9_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.10</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.10_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.10_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.11</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.11_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.11_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.12</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.12_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.12_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border">8.13</td>
                                        <td class="border w-100">
                                            {{$gaz_safety_data[0]['8.13_input'] ?? 'N/A'}}
                                        </td>
                                        <td class="border">
                                            <x-form-toggle-value key='8.13_button' :data-form="$gaz_safety_data[0]"/>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            </div>
                            <div class="part">
                                <div class="sub-part"
                                    style="padding-bottom: 15px; border-bottom: 1px solid #2A98FC;">
                                    <div>
                                        <div>
                                            <table>

                                                <tr>
                                                    <td class="border">8.14</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.14_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.14_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.15</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.15_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.15_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.16</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.16_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.16_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.17</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.17_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.17_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.18</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.18_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.18_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.19</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.19_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.19_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.20</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.20_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.20_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.21</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.21_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.21_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.22</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.22_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.22_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.23</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.23_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.23_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.24</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.24_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.24_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.25</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.25_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.25_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.26</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.26_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.26_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.27</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.27_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.27_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.28</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.28_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.28_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.29</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.29_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.29_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.30</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.30_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.30_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.31</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.31_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.31_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.32</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.32_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.32_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border">8.33</td>
                                                    <td class="border w-100">
                                                        {{$gaz_safety_data[0]['8.33_input'] ?? 'N/A'}}
                                                    </td>
                                                    <td class="border">
                                                        <x-form-toggle-value key='8.33_button' :data-form="$gaz_safety_data[0]"/>
                                                    </td>
                                                </tr>
                                            </table>



                                        </div>
                                        <div>Indicate if the relevant requirements of Part 7 are satisfied and append
                                            results of inspection on a separate numbered page.</div>
                                    </div>
                                </div>
                                <div class="sub-part">
                                    <p style="font-weight: bold; color: #2a98fc;">SCHEDULE OF ITEMS INSPECTED BY</p>
                                    <div style="display: flex;">
                                        <div class="info-container" style="flex-grow: 1;">
                                            <div style="display: flex; flex-grow: 1; margin: 8px 0px;">
                                                <div style="padding-right: 5px;">Name (capitals)</div>
                                                <div style="flex-grow: 1; border: 1px solid #ddd; padding: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex;">
                                        <div class="info-container" style="flex-grow: 1;">
                                            <div style="display: flex; flex-grow: 1; margin: 8px 0px;">
                                                <div style="padding-right: 5px;">Signature:</div>
                                                <div style="flex-grow: 1; border: 1px solid #ddd; padding: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-container" style="flex-grow: 1; margin-left: 25px;">
                                            <div style="display: flex; flex-grow: 1; margin: 8px 0px;">
                                                <div style="padding-right: 5px;">Date:</div>
                                                <div style="flex-grow: 1; border: 1px solid #ddd; padding: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr> 

                <tr>
                    <td style="text-align: center; border: 1px solid #2A98FC;">
                        The pages identified are an essential part of this report (see Regulation 653.2)
                    </td>
                </tr>
                <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
                    <td>
                        <div style="display: flex; align-items: center; border: 1px solid #2A98FC;">
                            <div
                                style="color: #FFFFFF;
                                background-color: #2a98fc;
                                font-size: 10px;
                                font-weight: bold;
                                padding: 10px;">
                                PART 15: SCHEDULE OF CIRCUIT DETAILS AND TEST RESULTS
                            </div>
                            <div style=" padding: 3px; font-size: 10px; width: 65%;">
                                <span>
                                    Circuits/equipment vulnerable to damage when testing
                                </span>
                                <input readonly
                                    style="border: 1px solid #ddd; padding: 3px; width:60%; font-size: 10px;"
                                    value="{{ $gaz_safety_data[0]['circuits_equipment_vulnerable'] ?? '' }}">

                            </div>
                        </div>
                        <div
                            style="display: flex; flex-wrap: wrap; background-color: white; align-items: center; justify-content: space-between">
                            <table class="codes_wiring mt-3">
                                <tr>
                                    <td colspan="9"><b> CODES for Type of wiring </b> </td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td>E</td>
                                    <td>F</td>
                                    <td>G</td>
                                    <td>H</td>
                                    <td>O</td>
                                </tr>
                                <tr>
                                    <td>Thermoplastic insulated / sheathed cables</td>
                                    <td>Thermoplastic cables in metallic conduit</td>
                                    <td>Thermoplastic cables in non-metallic conduit</td>
                                    <td>Thermoplastic cables in metallic trunking</td>
                                    <td>Thermoplastic cables in non-metallic trunking</td>
                                    <td>Thermoplastic / SWA cables</td>
                                    <td>Thermoplastic / SWA cables</td>
                                    <td>mineral-insulated cabels</td>
                                    <td>other - state</td>
                                </tr>
                            </table>
                        </div>
                        @php
                             $all_distribution_board_data = [];
                             if(isset($gaz_safety_data[0]['all_distribution_board_data'] )){
                               $all_distribution_board_data = $gaz_safety_data[0]['all_distribution_board_data'] ;
                             }
                        @endphp
                        @forelse  ($all_distribution_board_data as $item)

                             @php
                                 $distribution_board = $item['distribution_board_values']  ;
                                 $circuits_data = $item['list_circuits_data']  ;
                             @endphp

                            <table class="table-border-all" style="border-collapse: collapse;">
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">DB ref:</td>
                                                <td>{{$distribution_board['db_ref'] ?? ''}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Zs at this
                                                    board (Ω):</td>
                                                <td>{{$distribution_board['zs_at_this_board'] ?? ''}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Ipf at this
                                                    board (kA):</td>
                                                <td> {{$distribution_board['ipf_at_this_board'] ?? ''}} </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Main switch
                                                    type BSEN</td>
                                                <td>{{$distribution_board['board_main_switch_type_bs'] ?? ''}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Rating:</td>
                                                <td>{{$distribution_board['board_rating'] ?? ''}}</td>
                                                <td class="title">A</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">SPD <small> Type(s)</small>:</td>
                                                <td>{{$distribution_board['board_spd_details'] ?? ''}}</td>

                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Supply:</td>
                                                <td >{{$distribution_board['board_supply_conductors'] ?? ''}}</td>
                                                <td class="title">mm<sup>2</sup></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Earth:</td>
                                                <td>{{$distribution_board['board_earth'] ?? ''}}</td>
                                                <td class="title">mm<sup>2</sup></td>
                                            </tr>
                                        </table>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table height="100%">
                                            <tr>
                                                <td class="title">Distribution
                                                    board location:</td>
                                                <td>{{$distribution_board['board_location'] ?? ''}}</td>

                                                <td class="title">Phase Sequence
                                                    Confirmed
                                                    (where appropriate)</td>

                                                <td>
                                                    @if (isset($distribution_board['board_location'])&& $distribution_board['board_location'] == 'True')
                                                    <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg') }}"
                                                        width="25px">
                                                    @elseif (isset($distribution_board['board_location'])&& $distribution_board['board_location']  == 'False')
                                                        <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png') }}" width="25px">
                                                    @else
                                                        {{  $distribution_board['board_location'] ?? ' ' }}
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title">Supplied
                                                    from:</td>
                                                <td>{{$distribution_board['board_supplied_from']}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">No. Of
                                                    phases:</td>
                                                <td>{{$distribution_board['board_no_of_phases']  ?? ''}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td  colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title">Supply protective
                                                    device type
                                                    BSEN reference:</td>
                                                <td>{{$distribution_board['board_supply_protective_device_type'] ?? ''}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Rating:</td>
                                                <td>{{$distribution_board['board_rating_2'] ?? ''}}</td>
                                                <td class="title">Amps</td>
                                            </tr>
                                        </table>
                                    </td>




                                </tr>
                            </table>

                            <table class="table-text-center" style="border-collapse: collapse;" id="last-table">
                                <thead>
                                    <tr>
                                        <td style="position: relative; border: 1px solid #2a98fc; text-align: center" colspan="15">CIRCUIT DETAILS</td>
                                        <td style="position: relative; border: 1px solid #2a98fc;  text-align: center" colspan="16">TEST RESULTS</td>
                                    </tr>

                                    <tr>
                                        <td  rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Circuit Reference</td>
                                        <td rowspan="3" style="border: 1px solid #2a98fc;">
                                            <div>Circuit designation</div>
                                            <!-- <div>* Where this consumer unit is remote from the origin of the installation, record details of the circuit supplying this consumer unit on the first line.</div> -->
                                        </td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Type of wiring (see Codes)</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Reference Method  (BS 7671)</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Number of points  served</td>
                                        <td colspan="2" style="border: 1px solid #2a98fc;">Circuit conductor csa</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Max disconnection time (BS 7671)</td>
                                        <td colspan="5" style="border: 1px solid #2a98fc;">Overcurrent Protective device</td>
                                        <td colspan="4" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>RCD</div>

                                        </td>
                                    {{--  <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Maximum
                                                permitted Zs for installed protective device**</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (Ω)</div>
                                        </td> --}}
                                        <td colspan="5" style="border: 1px solid #2a98fc;">Circuit impedances (Ω)
                                        </td>
                                        <td colspan="4" style="border: 1px solid #2a98fc;">Insulation resistance</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Polarity</td>
                                        <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Max. measured
                                                earth <br> fault loop impedance, Zs</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (Ω)</div>
                                        </td>
                                        <td  colspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>RCD</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (ms)</div>
                                        </td>
                                        <td   style="border: 1px solid #2a98fc;">AFDD</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"
                                            style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                Live (mm2)</div>
                                        </td>
                                        <td rowspan="2"
                                            style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                Cpc (mm2)</div>
                                        </td>
                                        <td rowspan="2"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                        Type BS (EN)</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Type</td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Rating</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (A)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Breaking
                                                <br> capacity
                                            </div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (kA)
                                            </div>
                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Max permitted zs (Ω)
                                            </div>

                                        </td>

                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Type BS (EN)
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Type
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                I∆n (mA)
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Rating (mA)
                                            </div>

                                        </td>

                                        <td colspan="3" style="border: 1px solid #2a98fc;">Ring final circuits only
                                            (measured end to end)</td>
                                        <td colspan="2" style="border: 1px solid #2a98fc;">All circuits (complete at
                                            least one column)</td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Live</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Earth</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Neutral</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Test Voltage DC</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Disconnection time (ms)</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Test button/functionality</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Manual test button/functionality</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #2a98fc;">(Line) r1</td>
                                        <td style="border: 1px solid #2a98fc;">(Natural) rn</td>
                                        <td style="border: 1px solid #2a98fc;">(Cps) r2</td>
                                        <td style="width: 0px; border: 1px solid #2a98fc;">(R1 + R2)</td>
                                        <td style="width: 0px; border: 1px solid #2a98fc;">R2</td>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($circuits_data as $circuit_details)
                                    <tr>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['circuit_reference_a'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['circuit_designation_a'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['type_of_wiring_a'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['reference_method_a'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['number_of_point_a'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['live_b'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['cpc_b'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['max_disconnection_time_b'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['type_bs_c'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['type_c'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['rating_c'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['short_circuit_c'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['max_permitted_c'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['type_bs_d'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['type_d'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['rcd_d'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['rating_d'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['r1_e'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['rn_e'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['r2_e'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['r1_r2_f'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['r2_f'] ?? '' }}</td>

                                            <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['live_live_f'] ?? '' }}</td>

                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['live_earth_f'] ?? '' }}
                                        </td>

                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['live_neutral_f'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['ir_test_voltage_f'] ?? '' }}</td>

                                        <td style="border: 1px solid #2a98fc;">

                                            @if (isset($circuit_details['polarity_g'])&& $circuit_details['polarity_g'] == 'PASS')
                                            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg') }}"
                                                width="25px">
                                            @elseif (isset($circuit_details['polarity_g'])&& $circuit_details['polarity_g']  == 'FAILED')
                                                <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png') }}" width="25px">
                                            @else
                                                {{  $circuit_details['polarity_g'] ?? ' ' }}
                                            @endif

                                        </td>

                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['maximum_measured_h'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">
                                            {{ $circuit_details['disconnection_time_i'] ?? '' }}</td>
                                        <td style="border: 1px solid #2a98fc;">

                                            @if (isset($circuit_details['test_button_i'])&& $circuit_details['test_button_i'] == 'PASS')
                                            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg') }}"
                                                width="25px">
                                            @elseif (isset($circuit_details['test_button_i'])&& $circuit_details['test_button_i']  == 'FAILED')
                                                <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png') }}" width="25px">
                                            @else
                                                {{  $circuit_details['test_button_i'] ?? ' ' }}
                                            @endif

                                        </td>
                                        <td style="border: 1px solid #2a98fc;">
                                            @if (isset($circuit_details['testButton_j'])&& $circuit_details['testButton_j'] == 'PASS')
                                            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg') }}"
                                                width="25px">
                                            @elseif (isset($circuit_details['testButton_j'])&& $circuit_details['testButton_j']  == 'FAILED')
                                                <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png') }}" width="25px">
                                            @else
                                                {{  $circuit_details['testButton_j'] ?? ' ' }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
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
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        @empty

                            <table class="table-border-all" style="border-collapse: collapse;">
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">DB ref:</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Zs at this
                                                    board (Ω):</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Ipf at this
                                                    board (kA):</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Main switch
                                                    type BSEN</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Rating:</td>
                                                <td></td>
                                                <td class="title">A</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">SPD <small> Type(s)</small>:</td>
                                                <td></td>

                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Supply:</td>
                                                <td></td>
                                                <td class="title">mm<sup>2</sup></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Earth:</td>
                                                <td></td>
                                                <td class="title">mm<sup>2</sup></td>
                                            </tr>
                                        </table>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table height="100%">
                                            <tr>
                                                <td class="title">Distribution
                                                    board location:</td>
                                                <td></td>

                                                <td class="title">Phase Sequence
                                                    Confirmed
                                                    (where appropriate)</td>

                                                    <td></td>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title">Supplied
                                                    from:</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">No. Of
                                                    phases:</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td  colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title">Supply protective
                                                    device type
                                                    BSEN reference:</td>
                                                    <td></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="title">Rating:</td>
                                                <td></td>
                                                <td class="title">Amps</td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                            </table>

                            <table class="table-text-center" style="border-collapse: collapse;" id="last-table">
                                <thead>
                                    <tr>
                                        <td style="position: relative; border: 1px solid #2a98fc; text-align: center" colspan="15">CIRCUIT DETAILS</td>
                                        <td style="position: relative; border: 1px solid #2a98fc;  text-align: center" colspan="16">TEST RESULTS</td>
                                    </tr>

                                    <tr>
                                        <td  rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Circuit Reference</td>
                                        <td rowspan="3" style="border: 1px solid #2a98fc;">
                                            <div>Circuit designation</div>
                                            <!-- <div>* Where this consumer unit is remote from the origin of the installation, record details of the circuit supplying this consumer unit on the first line.</div> -->
                                        </td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Type of wiring (see Codes)</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Reference Method  (BS 7671)</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Number of points  served</td>
                                        <td colspan="2" style="border: 1px solid #2a98fc;">Circuit conductor csa</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Max disconnection time (BS 7671)</td>
                                        <td colspan="5" style="border: 1px solid #2a98fc;">Overcurrent Protective device</td>
                                        <td colspan="4" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>RCD</div>

                                        </td>
                                    {{--  <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Maximum
                                                permitted Zs for installed protective device**</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (Ω)</div>
                                        </td> --}}
                                        <td colspan="5" style="border: 1px solid #2a98fc;">Circuit impedances (Ω)
                                        </td>
                                        <td colspan="4" style="border: 1px solid #2a98fc;">Insulation resistance</td>
                                        <td rowspan="3"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                            Polarity</td>
                                        <td rowspan="3" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Max. measured
                                                earth <br> fault loop impedance, Zs</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (Ω)</div>
                                        </td>
                                        <td  colspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>RCD</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (ms)</div>
                                        </td>
                                        <td   style="border: 1px solid #2a98fc;">AFDD</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"
                                            style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                Live (mm2)</div>
                                        </td>
                                        <td rowspan="2"
                                            style="position: relative; width: 25px; border: 1px solid #2a98fc;">
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                Cpc (mm2)</div>
                                        </td>
                                        <td rowspan="2"
                                            style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #2a98fc;">
                                        Type BS (EN)</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Type</td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Rating</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (A)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Breaking
                                                <br> capacity
                                            </div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (kA)
                                            </div>
                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Max permitted zs (Ω)
                                            </div>

                                        </td>

                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Type BS (EN)
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Type
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                I∆n (mA)
                                            </div>

                                        </td>
                                        <td rowspan="2" style="position: relative;border: 1px solid #2a98fc;">
                                            <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                                                Rating (mA)
                                            </div>

                                        </td>

                                        <td colspan="3" style="border: 1px solid #2a98fc;">Ring final circuits only
                                            (measured end to end)</td>
                                        <td colspan="2" style="border: 1px solid #2a98fc;">All circuits (complete at
                                            least one column)</td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Live</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Earth</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Live / Neutral</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="position: relative; border: 1px solid #2a98fc;">
                                            <div>Test Voltage DC</div>
                                            <div
                                                style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                                (MΩ)</div>
                                        </td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Disconnection time (ms)</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Test button/functionality</td>
                                        <td rowspan="2" style="border: 1px solid #2a98fc;">Manual test button/functionality</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #2a98fc;">(Line) r1</td>
                                        <td style="border: 1px solid #2a98fc;">(Natural) rn</td>
                                        <td style="border: 1px solid #2a98fc;">(Cps) r2</td>
                                        <td style="width: 0px; border: 1px solid #2a98fc;">(R1 + R2)</td>
                                        <td style="width: 0px; border: 1px solid #2a98fc;">R2</td>

                                    </tr>
                                </thead>

                                <tbody>

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
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                        <td style="border: 1px solid #2a98fc;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforelse


                        <div>
                            <div>
                                <h3>TEST INSTRUMENTS USED</h3>
                                <div
                                    style="display: flex; flex-wrap: wrap; background-color: white; justify-content: space-between; align-items: center;">
                                    <div style="margin-top: 10px;">
                                        <div style=" margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">Earth fault loop impedance:</label>
                                            <div
                                                style="display: flex; align-items: center; width: 105px;
                                                      display: flex; align-items: center;
                                                      justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['earth_fault_loop_j'] ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <div style="margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">Insulation resistance:</label>
                                            <div
                                            style="display: flex; align-items: center; width: 105px;
                                                  display: flex; align-items: center;
                                                  justify-content: space-between;">
                                            <div
                                                style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                {{ $gaz_safety_data[0]['insulation_resistance_j'] ?? 'N/A' }}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <div style="margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">Continuity:</label>
                                            <div
                                                style="display: flex; align-items: center; width: 105px;
                                                      display: flex; align-items: center;
                                                      justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['continuity_j'] ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <div style="margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">RCD</label>
                                            <div
                                                style="display: flex; align-items: center; width: 105px;
                                                      display: flex; align-items: center;
                                                      justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['rcd_j'] ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <div style="margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">MFT:</label>
                                            <div
                                                style="display: flex; align-items: center; width: 105px;
                                                      display: flex; align-items: center;
                                                      justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['mft_j'] ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <div style=" margin-bottom: 10px;">
                                            <label for=""
                                                style="display: block; margin-left: 3px; margin-bottom: 5px;">Other:</label>
                                            <div
                                                style="display: flex; align-items: center; width: 105px;
                                                      display: flex; align-items: center;
                                                      justify-content: space-between;">
                                                <div
                                                    style="position: relative; border: 1px solid #ddd; padding: 5px; min-height: 30px; width: 100px; margin-left: 5px;">
                                                    {{ $gaz_safety_data[0]['other_j'] ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                    </div>
                </tr>
                <tr id="part-3" class="part-container" style="break-inside: avoid;">
                    <td style="padding: 0 0 15px 0;">
                        <div class="details" style="display: block">
                            <div class="part-main-title text-center">EICR IMAGES</div>
                            <div style="
                            min-height: 200px;
                        ">
                                <div style="display: flex;">

                                    <div style="padding: 5px;">
                                        <div>
                                            <h5 style="font-weight: bold;margin-bottom: 25px;">
                                                Engineers optional images of Cl or C2 observations if applicable
                                            </h5>

                                        </div>
                                        <div style="display: flex;">
                                            {{-- ->where('name_file','!=','customer_signature')->all() --}}
                                            @foreach ($form_data->images as $file)

                                                <div class="img-items file me-1" >
                                                    <img src="{{$file->url}}" width="120px">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <div class="footer">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/footer-logo.png') }}"
                style="width: 250px; object-fit: contain;">
            <!-- <div>
            page 1 of <span style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">1</span>
          </div> -->
        </div>
    </div>


    <x-print-modal-layout></x-print-modal-layout>

</body>

</html>
