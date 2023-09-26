<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>pdf</title>
</head>
<style>
   @page :first {
                header: html_formHeader;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: portrait; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                header: html_formHeader;
                margin: 15px;
                margin-bottom:20px;
                margin-top:80px;
                margin-header:4mm;
                size: portrait; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
        @font-face {
        font-family:fontawesome;
        src: url("{{ asset('admin/fonts/gnu-free-font/fa-solid-900.ttf') }}");
      }
      

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 12px;
        
    }
    .table-container {
        padding: 10px;
        text-align: right;
      }
      .checkImage {
      width: 14px;
      display: none;
      margin: auto;
    }
      
      

</style>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
       {{-- <script>
    $(document).ready(function() {
      $('input[type="checkbox"]').on('click', function() {
        formatUI($(this));
      });

      function formatUI(checkbox) {
        var checkImage = checkbox.data('check-image');
        var imgElement = $('#' + checkImage);
        if (checkbox.prop('checked')) {
          imgElement.css('display', 'inline');
          checkbox.prop('disabled', true);
          
          
        } else {
          imgElement.css('display', 'none');
          checkbox.prop('disabled', false);
          
          
        }
      }

      
      $('input[type="checkbox"]').each(function() {
        formatUI($(this));
      });
    });
     
        </script> --}}
    
<body>
    <div class="table-container" style="font-family: 'FreeSans';">
    <htmlpageheader name="formHeader">
        <div style="margin: 10px 25px;  width: 100%;">
            <div style="float: right; margin-right: 46px; height: 70px;width: 60%;">
                <table style="border: 1px solid #fff200;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #FFF200;">
                    <tr style="padding: 10px;">
                        <th style="padding: 10px;">
                            <div style="padding: 0 120px 0 0"><h3>{{$data->id ?? 0}}</h3></div>
                        </th>
                        <th bgcolor="#FFF200" style="color: #000; padding: 10px">
                            <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                        </th>
                    </tr>
                </table>
                <h2 style="color: #000; padding: 0; margin: 0; font-weight: 900;text-align: right">
                    Breakdown/Service Record INSTALLATION WORKS CERTIFICATE
                </h2>
                <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                    Issued in accordance with BS 7671: 2018+A2:2022 – Requirements for Gas Installations
                </p>
            </div>
            <div style="clear: both;"></div>
          </div>
    </htmlpageheader>
    <!-- Table 1 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-1" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; vertical-align: middle; ">
                <table style="width: 100%;">
                    <thead style="vertical-align: middle;">
                        <tr style="background-color: #FFF200;">
                            <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</th>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="text-align: left; padding-left: 6px; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CONTRACTOR</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE CLIENT</th>
                            <td style="text-align: left; padding-top: 15px; padding-bottom:15px; font-weight: 700;">DETAILS OF THE INSTALLATION</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align: middle;"  >
                        <tr>
                            
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Gas Safe Number:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Name:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Tenant Name:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Company Name:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445kAMSfk!2445k </span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445kAMSfk!2445k </span>
                            </td>
                        </tr>
                        <tr>
                             <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px; line-height: 1.5;">
                                <span style="font-weight: 700;">Address:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445kAMSfk!2445k </span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                                </div>
                                </div>
                            </td>
                              <td style="padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                              <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <div style="width: 100%; display: block;">
                                <div style="width: 48%; display: inline-block;">
                                <span style="font-weight: 700;">Postcode:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                                </div>
                                <div style="width: 48%; display: inline-block;">
                                 <span style="font-weight: 700;">TEL No:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
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

<!-- Table 2 -->
  <div class="table-padding" style="padding: 10px;">
      <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
        <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
            <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
        </div> -->
        <div class="table-content" style="padding: 0px;">
           <div class="pdf-table" style="display: block; ">
                <table style="width: 100%;">
                    <thead>
                        <tr style="background-color: #FFF200;">
                            <th colspan="3" style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                        </tr>
                      
                    </thead>
                    <tbody  >
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Description of work: </span>
                               @if($data->id !=Null) <img id="checkImage1" class="checkImage" src="check.png" style="display:inline"  alt="check-img">@else<label> <input type="checkbox" class="radio" value="1" name=""/>Service</label>@endif
                                <img id="checkImage2" class="checkImage"src="check.png"  style="display:inline" alt="check-img"><label> <input type="checkbox" class="radio" value="1" name=""data-check-image="checkImage2"  />Breakdown</label>
                               
                            
                               
                            </td>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">CO/CO2 Ratio</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                               
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Make:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Model:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                            <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Boiler Serial Number:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                        </tr>
                        <tr>
                             <td style=" padding-left: 6px; padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Make:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                             <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Model:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                             <td style="padding-top:6px; padding-bottom:6px;">
                                <span style="font-weight: 700;">Appliance Serial Number:</span>
                                <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span>
                            </td>
                          
                            
                        </tr>
                      
                    </tbody>
                </table>
           </div>
        </div>
    </div>
  </div>

  <!-- Table 3 & 4 -->
  <div class="table-padding" style=" padding: 10px;">
  <div style="display: block; width: 100%; margin: auto;">
    <div style="display: inline-block; width: 100%;">
    <table style="width: 100%; border: 1px solid black;">
    <thead>
        <tr style="background-color: #FFF200;">
             <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Notes</th>
                 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 50px; overflow: scroll;"></td>
        </tr>
    </tbody>
    </table>
    </div>
    <div style="display: inline-block; width: 100%;">
      <table style="width: 100%; border: 1px solid black;">
    <thead>
        <tr style="background-color: #FFF200;">
             <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Parts/Spares Required</th>
                 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 50px; overflow: scroll;"></td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
</div>

<!-- Table 5 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr style="background-color: #FFF200;">
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Installation Satisfactorty?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Service Checks Satisfactory?</th>
                          <th  style=" text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">Appliance Details</th>
                      </tr>
                    
                  </thead>
                  <tbody style="vertical-align: middle;" >
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                           <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" id="flue" value="" name="" /> Flue: Atmopheric/Fan assisted/Fan dilution</label>


                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="display: inline;width:14px;" alt="check-img" style="display: block; margin: auto;" >  <label> <input type="checkbox" class="radio" value="" name="" />Heat Exchanger</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="" name="" />Burner Washed & Cleaned</label>

                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                           <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" > <label> <input type="checkbox" class="radio" value="1" name="" />Ventilation Size H-L </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Ignition</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Pilot Assembly Cleaned & Adjusted</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Electrically Fused </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Gas Value</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                             <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;" ><label> <input type="checkbox" class="radio" value="1" name="" />lgnition system Cleaned & Adjusted</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Correct Valving Arrangements </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Fan</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Burner Fan & Airways Cleaned</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Isolation Available-Electrical/Fuel (within 1mtr) </label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                             <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;" ><label> <input type="checkbox" class="radio" value="1" name="" />Safety Device</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;" ><label> <input type="checkbox" class="radio" value="1" name="" />Heat Exchanger/Flueways Clean & Clear</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Boiler/Plantroom Cleaner</label>
                       
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Control Box</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Fuel & Electrical Supply Connected Correctly</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                           <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" > <label> <input type="checkbox" class="radio" value="1" name="" />Burners & Pilot</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Interlocks Noted & in Place</label>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 6px; padding-bottom: 6px; padding-left: 6px;">
                            
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                            <img src="check.png" style="width:14px;display: inline;" alt="check-img" style="display: block; margin: auto;width:14px;" ><label> <input type="checkbox" class="radio" value="1" name="" />Fuel Pressure & Type</label>
                        </td>
                        <td style="padding-top: 6px; padding-bottom: 6px;">
                          
                        </td>
                     </tr>
                    
                  </tbody>
              </table>
         </div>
      </div>
  </div>
</div>
<pagebreak></pagebreak>
<!-- Table 6 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th  style="background-color: #FFF200; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; width: 100px;">TIME</th>
                          <th  style=" text-align: left; color: black; font-size: 20px; margin: 0; padding: 10px; ">
                            <span style="font-weight: 700;">Arrival Time:</span>
                            <span style="border-bottom: 1px dashed #000; font-weight: 400;">AMSfk!2445k</span>
                        </th>
                          <th  style=" text-align: left; color: black;  font-size: 20px; margin: 0; padding: 10px; ">
                            <span style="font-weight: 700;">Departure Time:</span>
                            <span style="border-bottom: 1px dashed #000; font-weight: 400;">AMSfk!2445k</span>
                        </th>
                      </tr>
                    
                  </thead>
                 
              </table>
         </div>
      </div>
  </div>
</div>


<!-- Table 7 -->
<div class="table-padding" style="padding: 10px;"></div>
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th colspan="3"  style="background-color: #FFF200; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px;">Issued By</th>
                         
                      </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Name(CAPITALS)</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Contractor</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Signture</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;  line-height: 1.5;">
                            <span style="font-weight: 700;">Address</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k AMSfk!2445k</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Position</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Date</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Gas Safe No</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                    </tr>
                    <tr>
                        <td  style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; font-weight: 700;">RECIVED BY:</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Name</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Date</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px;">
                            <span style="font-weight: 700;">Signture</span>
                            <span style="border-bottom: 1px dashed #000;">AMSfk!2445k</span></td>
                    </tr>
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>

<!-- Table 8 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style="border:1px solid #000; width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                  <thead>
                      <tr >
                          <th colspan="2"  style="background-color: #FFF200; text-align: left; color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px;">Note</th>
                         
                      </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.   
                        </td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%;">
                            <img src="" alt="pdf-img" style="display: block; margin: auto;" >
                    </tr>
                 
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>

<!-- Table 9 -->
<div class="table-padding" style="padding: 10px;">
    <div class="table table-2" style=" width: 100%; display: block; margin: auto; ">
      <!-- <div class="table-heading" style="display: block;  background-color: #FFF200; ">
          <h3 style="color: black; font-weight: 700; font-size: 20px; margin: 0; padding: 10px; ">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</h3>
      </div> -->
      <div class="table-content" style="padding: 0px;">
         <div class="pdf-table" style="display: block; ">
              <table style="width: 100%;">
                 
                  <tbody style="vertical-align: middle;">
                    <tr>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 25%; ">
                            @Copyright 360 Connect (2023 August)  
                        </td>
                        <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 50%; ">
                          <p> **where relevant and practicable</p> 
                          <p>his certificate is based on the model forms shown in Appendix 6 of BS 7671: 2018+A2:2022</p> 
                          <p>@Copyright 360 Connect (2023 August)</p>
                          </td>
                          <td style="padding-left: 6px; padding-top: 6px; padding-bottom: 6px; width: 25%; ">
                       <p>     Enter a or value in the respective fields, as appropriate</p>
                            <p>here an item is not applicable insert N/A </p>
                          </td>
                    </tr>
                 
                  </tbody>
                 
              </table>
         </div>
      </div>
  </div>
</div>
</div>
</body>
</html>