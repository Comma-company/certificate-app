<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Portable Appliance Test (PAT)</title>
    <style>
      .page {
      page-break-after: always; /* Add a page break after each attachment */
    }

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
    @foreach($cert_attachments as $attachment)
    <div class="page">
      <table class="border-table" style="width: 100%; margin-bottom: 15px">
        <tr>
          <th class="green-table-headers" colspan="2">
            {{ $attachment->note_title ? $attachment->note_title : ' ' }}
          </th>
        </tr>
        <tr style=" border: solid 1px #00935f;">
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
      {{-- <p class="main-text">@Copyright 360 Connect (2023 August)</p> --}}
    </div>
    @endforeach
  </body>
</html>
