<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <base href="{{ url('/') }}/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $restaurant->name }} </title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }
        @font-face {
            font-family: 'HelveticaNeue';
            src: url('{{ asset('/fonts/OpenSans-Regular.ttf') }}');
        }
        @font-face {
            font-family: 'HelveticaNeue-Light';
            src: url('{{ asset('/fonts/OpenSans-Light.ttf') }}');
        }
        @font-face {
            font-family: 'HelveticaNeue-Bold';
            src: url('{{ asset('/fonts/OpenSans-Bold.ttf') }}');
        }
        @font-face {
            font-family: 'HelveticaNeue-Medium';
            src: url('{{ asset('/fonts/OpenSans-SemiBold.ttf') }}');
        }
        @page {
            size: 210mm 297mm;
            margin-top: 15mm;
            margin-bottom: 15mm;
            margin-left: 4mm;
            margin-right: 4mm;
        }
        .tables_container{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-column-gap: 0mm;
            align-items: center;
            width: 210mm;
        }
        .table {
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            width: 109mm !important;
            height: 70mm !important;
            background:#ec2025;
            -webkit-print-color-adjust: exact;
        }
        .table:not(:last-child) {
            margin-bottom: 0.5cm;
        }
        .table-inner {
            position: relative;
            margin: auto;
            width: 340px;
            height: 340px;
            border: 2px solid #fff;
            display: flex;
            border-radius: 170px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .table-inner img {
            width: 14cm;
        }
        .table-inner-abs {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 150px;
            overflow: hidden;
        }
        .table-inner-abs img {
            width: 70%;
        }
        .table-inner-abs .masa {
            font-family: 'HelveticaNeue-Medium';
            text-align: center;
            width: 60%;
        }
        .table .logo {
            text-align: center;
            padding: 20px 0;
        }
        .table .logo img {
            height: auto;
            width: 210px;
            margin: 
        }
        .table .text {
            color: #fff;
            padding-left: 0px;
            text-align: center;
            margin-top: 40px;
        }
        .table .text .text1 {
            font-family: 'HelveticaNeue';
            font-size: 17px;
        }
        .table .text .text2 {
            font-family: 'HelveticaNeue-Light';
            font-size: 32px;
        }
        .table .text .text3 {
            font-family: 'HelveticaNeue-Bold';
            font-size: 32px;
        }
        .table .download {
            margin-bottom: 35px;
        }
        .table .download .download-text {
            font-family: 'HelveticaNeue-Medium';
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .table .download .download-items {
            display: block;
            width: 100%;
        }
        .table .download .download-items img {
            display: block;
            margin: 0 auto;
        }
        .table .black-bottom {
            font-family: 'HelveticaNeue-Bold';
            background-color: #000;
            color: #fff;
            height: 60px;
            line-height: 60px;
            text-align: center;
            font-size: 19px;
        }
        .button_download_pdf{
            background-color:#f87201;
            font-size:16px;
            padding:10px 30px;
            color:#fff;
            text-decoration:none;
        }
        .button_pdf_container{
            margin-bottom: 30px;
            margin-top: 30px;
            margin-left: 30px;
            font-family: 'HelveticaNeue-Bold';
        }
        .table_background{
            position:absolute;
            top:0;
            left:0;
            width:98%;
            object-fit:cover;
            height:98%;
        }
        .table_qr_container {
            position: absolute;
            right: 5mm;
            top: 1mm;
            z-index: 99;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 43mm;
            height: 43mm;
            border-radius: 25mm;
            overflow: hidden;
            border: 2px solid #ffffff;
        }
        .table_qr_container img{
            width: 26mm;
            height: 26mm;
            object-fit: contain;
        }
        .table_qr_container h3{
          font-size: 11px;
          margin: 0;
          font-family: 'HelveticaNeue-Medium';
          text-align: center;
          width: 100px;
          word-break: break-word;
          line-height: 1;
        }
        .container_table{
            width: 107mm;
            height: 70mm;
            /* border-style: dashed; */
            align-content: center;
            position: relative;
        }
        .table-qr-restaurant {
            width: 200px;
            position: absolute;
            top: 6px;
            color: #ffffff;
            font-size: 15px;
            left: 28px;
            font-family: "HelveticaNeue-Medium";
        }
      .container-inside-circle{
        z-index: 99;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        width: 38mm;
        height: 38mm;
        border-radius: 25mm;
        overflow: hidden;
      }
      
      .container-etichete {
          width: 210mm;
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
      }
      .eticheta-box {
        width: 105mm;
        height: 74.25mm;
        position: relative;
      }
     .container-qr-masa {
          width: 41mm;
          height: 41mm;
          position: absolute;
          z-index: 10;
          border-radius: 50%;
          overflow: hidden;
          border: 2px solid #ffffff;
          right: 5mm;
          top: 5mm;
      }
      .content-qr-masa {
          z-index: 99;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          background-color: #fff;
          width: 36mm;
          height: 36mm;
          border-radius: 25mm;
          overflow: hidden;
          position: absolute;
          top: 7px;
          right: 7px;
      }
     .image-background {
          width: 100%;
          z-index: 1;
          position: absolute;
          top: 0;
          left: 0;
      }
      .img-masa-qr {
          width: 25mm;
          height: 25mm;
          object-fit: contain;
      }
      .img-masa-qr>img{
        width: 100%;
      }
      .masa {
        font-size: 10px;
        margin: 0;
        font-family: 'HelveticaNeue-Medium';
        text-align: center;
        width: 77px;
        word-break: break-word;
        line-height: 1;
      }
      .titlu-restaurant{
        width: 200px;
        position: absolute;
        top: 25px;
        color: #ffffff;
        font-size: 15px;
        left: 32px;
        font-family: "HelveticaNeue-Medium";
        z-index: 99;
      }
    </style>
</head>
<body onloads="window.print(); window.close();">
  
  <div class="container-etichete">
    @foreach($tables->groupBy('category') as $category => $items)
     @foreach ($items as $table)
        <div class="eticheta-box">
          <img class="image-background" src="{{asset('/images/Eticheta_A8.png')}}"/>
          <div class="titlu-restaurant" testare="{{json_encode($restaurant)}}">{{$restaurant->name}}</div>
          <div class="container-qr-masa">
            <div class="content-qr-masa">
              <div class="img-masa-qr">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->margin(1)->generate($restaurant->getRestaurantCode($table->id))) !!} ">
              </div>
              <div class="masa" test="{{json_encode($table)}}">{{ $table->table_name != null ? $table->table_name : 'Masa' }} {{ $table->name }}, {{$table->category}}</div>
            </div>
          </div>
        </div>
      @endforeach
    @endforeach
    
  </div>
  
</body>
</html>