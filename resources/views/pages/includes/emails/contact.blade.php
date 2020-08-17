<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        
/* Base */

body,
body *:not(html):not(style):not(br):not(tr):not(code) {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    box-sizing: border-box;
}

body {
    background-color: #f8fafc;
    color: #74787e;
    height: 100%;
    hyphens: auto;
    line-height: 1.4;
    margin: 0;
    -moz-hyphens: auto;
    -ms-word-break: break-all;
    width: 100% !important;
    -webkit-hyphens: auto;
    -webkit-text-size-adjust: none;
    word-break: break-all;
    word-break: break-word;
}

p,
ul,
ol,
blockquote {
    line-height: 1.4;
    text-align: left;
}

a {
    color: #3869d4;
}

a img {
    border: none;
}

/* Typography */

h1 {
    color: #3d4852;
    font-size: 19px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

h2 {
    color: #3d4852;
    font-size: 16px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

h3 {
    color: #3d4852;
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

p {
    color: #3d4852;
    font-size: 16px;
    line-height: 1.5em;
    margin-top: 0;
    text-align: left;
}

p.sub {
    font-size: 12px;
}

img {
    max-width: 100%;
}

/* Layout */

.wrapper {
    background-color: #f8fafc;
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.content {
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

/* Header */

.header {
    padding: 25px 0;
    text-align: center;
    background-color: #ffffff;
}

.header a {
    color: #bbbfc3;
    font-size: 19px;
    font-weight: bold;
    text-decoration: none;
    text-shadow: 0 1px 0 white;
}

/* Body */

.body {
    background-color: #ffffff;
    border-bottom: 1px solid #edeff2;
    border-top: 1px solid #edeff2;
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.inner-body {
    background-color: #ffffff;
    margin: 0 auto;
    padding: 0;
    width: 570px;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 570px;
}

/* Subcopy */

.subcopy {
    border-top: 1px solid #edeff2;
    margin-top: 25px;
    padding-top: 25px;
}

.subcopy p {
    font-size: 12px;
}

/* Footer */

.footer {
    margin: 0 auto;
    padding: 0;
    text-align: center;
    width: 570px;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 570px;
}

.footer p {
    color: #aeaeae;
    font-size: 12px;
    text-align: center;
}

/* Tables */

.table table {
    margin: 30px auto;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.table th {
    border-bottom: 1px solid #edeff2;
    padding-bottom: 8px;
    margin: 0;
}

.table td {
    color: #74787e;
    font-size: 15px;
    line-height: 18px;
    padding: 10px 0;
    margin: 0;
}

.content-cell {
    padding: 35px;
}

    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td class="header">
                            <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="KINGSWEALTH">
                            <a href="{{ route('home') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </td>
                    </tr>


                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ $content }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>  
                                           Mail Sent By:  {{ $lastname }} {{ $firstname }}
				        </p>
				        <p>
				           Mailer Address: {{ $email }}
				        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                               <tr>
                                   <td class="content-cell" align="center">
                                       &copy; {{ config('app.name', 'Laravel') }} <script>document.write(new Date().getFullYear());</script> | All rights reserved
                                   </td>
                               </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
