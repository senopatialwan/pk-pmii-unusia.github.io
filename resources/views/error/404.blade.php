<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ url(asset('assets/img/pmii/logo-pmii.png')) }}">
        <style type="text/css">
            body { text-align: center; padding: 10%; font: 20px Helvetica, sans-serif; color: #333; }
            h1 { font-size: 50px; margin: 0; }
            article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
            a { color: #034AA6 ; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
            @media only screen and (max-width : 480px) {
                h1 { font-size: 40px; }
            }
        </style>
    </head>
    <body>
        <article>
            <h1><span style="color:#FA7070">Maaf</span>, halaman yang kamu cari tidak dapat ditemukan.</h1>
            <p></p>
            <p id="signature">&mdash; <a href="/">PMII Unusia</a></p>
        </article>
    </body>
</html>
