<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Gas Testing Purging </title>
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
  border: solid 2px yellow;
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
  background-color: yellow;
  text-align: left;
  color: #fff;
  font-weight: bold;
  font-size: 14px;
  padding: 12px 15px;
}
.border-table {
  border: solid 1px yellow;
}

.sub-title-text {
  font-size: 12px;
  color:#e6ff07;
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
    <style>

      .image-container{
        width: 100%;
       /*  height: 350px; */
        background-color: gray;
        text-align: center;
        padding-top: 48%;
      }
    </style>
  </head>

  <body>
    <div class="page">
      @foreach($cert_attachments as $attachment)
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr>
          <th class="green-table-headers" colspan="2">
            {{ $attachment->note_title ? $attachment->note_title : ' ' }}
          </th>
        </tr>
        <tr style=" border: solid 1px yellow;">
          <th style="width: 50%; padding: 5px 20px; line-height: 30px; padding-bottom: 5px;" class="main-text">
            {{ $attachment->note_body ? $attachment->note_body : ' ' }}
          </th>
          <th style="width: 50%; padding: 20px;">
            @if ($attachment->image_id)
                <div class="image-container">
                    <img src="{{ $attachment->image_id ? asset('storage/'.$attachment->image->image) : ' ' }}" alt="">
                </div>
            @endif
          </th>
        </tr>
      </table>
      @endforeach
      {{-- <p class="main-text">@Copyright 360 Connect (2023 August)</p> --}}
    </div>
  </body>
</html>
