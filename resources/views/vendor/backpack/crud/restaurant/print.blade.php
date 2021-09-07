<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <base href="{{ url('/') }}/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $restaurant->name }}</title>
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
    </style>
</head>
<body onloads="window.print(); window.close();">
        <!-- <div class="button_pdf_container">
            <a class="button_download_pdf" href="{{action('HomeController@downloadPDF', $restaurant->id)}}">Download PDF</a>
        </div> -->
        <div class="tables_container">
        @foreach($tables->groupBy('category') as $category => $items)
        @foreach ($items as $table)
        <div class="container_table" test="{{json_encode($table)}}">
            <section class="table" style="width:{{Config::get('settings.print_width')}}mm;height:{{Config::get('settings.print_height')}}mm;">
            <img class="table_background" src="{{asset('/images/Eticheta_A8.png')}}">
            <div class="table_qr_container">
              <div class="container-inside-circle">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->margin(1)->generate($restaurant->getRestaurantCode($table->id))) !!} ">
                <h3 class="masa">{{ $table->table_name }} {{ $table->name }}, {{$table->category}}</h3>
              </div>
              
            </div>
              <div class="table-qr-restaurant">
                {{$restaurant->name}}
              </div>
                <!-- <div class="text">
                    <div class="text1">SCANEAZĂ CODUL</div>
                    <div class="text2">și comandă direct</div>
                    <div class="text3">de pe <br> telefonul tău!</div>
                </div>
                <div class="table-inner">
                    <div class="table-inner-abs">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->margin(1)->generate($restaurant->getRestaurantCode($table->id))) !!} ">
                        <h3 class="masa">MASA {{ $table->name }} , {{$table->category}}</h3>
                    </div>
                </div>
                <div class="download">
                    <div class="download-text">DESCARCĂ APLICAȚIA DE PE</div>
                    <div class="download-items">
                        <img src="{{asset('/images/download-group.png')}}">
                    </div>
                </div> -->
            </section>
        </div>
        @endforeach
        @endforeach
        </div>

</body>
</html>