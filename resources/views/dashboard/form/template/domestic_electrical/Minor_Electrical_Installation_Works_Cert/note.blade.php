<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Minor Work</title>
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
      @foreach($cert_attachments as $one)
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr>
          <th class="green-table-headers" colspan="2">
            {{ $one->note_title ? $one->note_title : ' ' }}
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;">
          <th style="width: 50%; padding: 5px 20px; line-height: 30px; padding-bottom: 5px;" class="main-text">
            {{ $one->note_body ? $one->note_body : ' ' }}
          </th>
          <th style="width: 50%; padding: 20px;">
            <div class="image-container">
              {{ $one->image_id ? $one->image->image : ' ' }}
            </div>
          </th>
        </tr>
      </table>
      @endforeach
      {{-- <p class="main-text">@Copyright 360 Connect (2023 August)</p> --}}
    </div>
  </body>
</html>
