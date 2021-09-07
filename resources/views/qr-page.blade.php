<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8">
        <base href="{{ url('/') }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Instalează aplicația Picoly</title>
        <meta name="googlebot" content="noindex">
        <style>
            * {
                box-sizing: border-box;
            }
            @font-face {
                font-family: 'raleway_regular';
                src: url('/fonts/OpenSans-Regular.ttf');
                font-weight: normal;
                font-style: normal;
            }
            html, body {
                margin: 0;
                padding: 0;
                font-family: 'raleway_regular', sans-serif;
                font-size: 14px;
                color: #000;
                background: #fff;
            }
            body {
                display: flex;
                flex-direction: column;
                width: 100vw;
                height: 100vh;
            }
            .container {
                flex-shrink: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 100vh;
                width: 100vw;
                max-width: 500px;
                max-height: 700px;
                margin: auto;
                box-shadow: 0 4px 60px rgba(0, 0, 0, 0.2);
            }
            #browser-notice {
                flex-shrink: 0;
                width: 100%;
                padding: 14px 20px;
                font-size: 14px;
                line-height: 1.4em;
                color: #fff;
                background: #FF4343;
            }
            #browser-notice:not(.is-active) {
                display: none;
            }
            .header {
                flex-shrink: 0;
                flex-grow: 1;
                width: 100%;
                position: relative;
                background: #ec2025;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .header span{
                color: #fff;
                font-size: 35px;
                font-family: 'raleway_regular', sans-serif;
            }
            .header-logo-img {
                display: inline-block;
                width: auto;
                height: 80px;
                padding: 16px 0;
                margin: auto;
            }
            .content {
                flex-shrink: 0;
                flex-grow: 1;
                padding: 20px 2em;
                padding-bottom: 80px;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
            }
            .title {
                flex-shrink: 0;
                margin: 20px 0;
                font-size: 18px;
            }
            .store-list {
                flex-shrink: 0;
                display: flex;
                flex-direction: column;
            }
            .store-btn {
                flex-shrink: 0;
                flex-grow: 1;
                display: block;
                width: 100%;
                max-width: 200px;
                margin: 4px auto;
            }
            .store-btn img {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>

       
        <div class="container">
            <div id="browser-notice"></div>
            <div class="header">
                <span>Picoly</span>
            </div>
            <div class="content">
                <div class="title">Instalează aplicația noastră din magazinul de aplicații al telefonului tău.</div>
                <div class="store-list">
                    <a class="store-btn" id="btn-android" href="https://play.google.com/store/apps/details?id=tm.getwaiterapp" target="_blank">
                        <img src="{{ asset('/images/android.svg') }}">
                    </a>
                    <a class="store-btn" id="btn-ios" href="https://apps.apple.com/us/app/picoly/id1499998318?ls=1" target="_blank">
                        <img src="{{ asset('/images/ios.svg') }}">
                    </a>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.3.6/mobile-detect.min.js"></script>
        <script>
            var md = new MobileDetect(window.navigator.userAgent);
            var device = 'unknown';
            var $noticeEl = document.getElementById('browser-notice');
            if (!md.mobile()) {
                $noticeEl.className = 'is-active';
                $noticeEl.innerHTML = 'Deschide pagina asta de pe un telefon cu Android sau iOS.';
            } else {
                var mobileOS = md.os();
                if (mobileOS === 'AndroidOS') device = 'android';
                else if (mobileOS === 'iOS')  device = 'ios';
                else {
                    // unsupported device
                    $noticeEl.className = 'is-active';
                    $noticeEl.innerHTML = 'Deschide pagina asta de pe un telefon cu Android sau iOS.';
                }
                
            }
        </script>
    </body>
</html>