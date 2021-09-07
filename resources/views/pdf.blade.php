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
        @page {
            margin: 0mm;
            size: A4 portrait;
        }
        .container_table{
            height:100%;
            width:100%;
        }
        .table {
            padding: 0;
            margin: 0;
            position: relative;
            overflow: hidden;
            width: 155mm;
            height: 200mm;
            background-color:#f87201;
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
            border-radius: 170px;
            margin-top: 20px;
        }
        .table-inner img {
            width: 14cm;
        }
        .table-inner-abs {
            align-items: center;
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 150px;
            overflow: hidden;
            margin-top: 20px;
            margin-left: 20px;
        }
        .table-inner-abs img {
            width: 200px;
            height: 200px;
            object-fit: contain;
            margin-top: 30px;
            margin-left: 50px;
        }
        .table-inner-abs .masa {
            text-align: center;
            width: 100%;
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
            margin-top: 0px;
        }
        .table .text .text1 {
            font-size: 17px;
            margin-top:40px;
        }
        .table .text .text2 {
            font-size: 32px;
        }
        .table .text .text3 {
            font-size: 32px;
            margin-bottom:20px;
        }
        .table .download {
           
        }
        .table .download .download-text {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            margin-top:50px;
            font-size: 20px;
        }
        .table .download .download-items {
            display: block;
            width: 100%;
        }
        .table .download .download-items img {
            width: 60%;
    margin-left: 20%;
        }
        .table .black-bottom {
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
        }
        .table_background{
         
            width:100%;
            height:100%;
            object-fit:cover;
            z-index:-1;
        }
        .table_content{
            width: 155mm;
            height: 200mm;
        }
    </style>
</head>
<body>
        @foreach($tables->groupBy('category') as $category => $items)
        @foreach ($items as $table)
        <div class="container_table testare"> 
            <div class="table">
               <img class="table_background" src="/images/print-background.jpg" />
                <div class="table_content">
                <div class="text">
                    <div class="text1">SCANEAZA CODUL</div>
                    <div class="text2">si comanda direct</div>
                    <div class="text3">de pe <br> telefonul tau!</div>
                </div>
                <div class="table-inner">
                    <div class="table-inner-abs">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->margin(1)->generate($restaurant->getRestaurantCode($table->id))) !!} ">
                        <h3 class="masa">MASA {{ $table->name }} , {{$table->category}}</h3>
                    </div>
                </div>
                <div class="download">
                    <div class="download-text">DESCARCA APLICATIA DE PE</div>
                    <div class="download-items">
                        <img src="{{asset('/images/download-group.png')}}">
                    </div>
                </div>
                </div>
            </div>
    </div>
        @endforeach
        @endforeach

</body>
</html>