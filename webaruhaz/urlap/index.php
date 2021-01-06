<html>
<head lang="hu">
	<meta charset="utf-8">
	<title>Bejelentkezés</title>
	<link href="index.css" rel="stylesheet" type="text/css" />
	<link href="favicon.ico" rel="SHORTCUT ICON" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css.css">
  	<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" async="" src="./kreta/recaptcha__hu.js.download"></script>
	
    <script src="./kreta/jquery.min.js.download"></script>
    <script src="./kreta/api.js.download"></script>
    <link href="./kreta/font-awesome.min.css" rel="stylesheet"> 
    <link href="./kreta/css" rel="stylesheet">
	<link href="./kreta/kretaControls" rel="stylesheet">
    <link href="./kreta/kretaCss" rel="stylesheet">
    <script src="./kreta/modernizr"></script>
    <script src="./kreta/kendo"></script>
    <script src="./kreta/js"></script>
    <script src="./kreta/KretaWindowHelper"></script>
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
	

    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: "open sans";
            font-size: 14px;
            font-weight: 400;
            color: #445261;
            background-color: #385765;
        }

        #login {
            position: relative;
            z-index: 200;
        }

            #login input[type="text"]:hover,
            #login input.k-textbox:hover,
            #login input[type="password"]:hover {
                width: 100%;
                height: 36px;
                background-color: #e5e9ec;
                border: 1px solid #30a8cb;
                padding: 0 5px;
                outline: 0;
            }

            #login input[type="text"]:focus,
            #login input[type="password"]:focus,
            #login input[type="text"]:active,
            #login input.k-textbox:active,
            #login input[type="password"]:active {
                width: 100%;
                height: 36px;
                background-color: white;
                border: 1px solid #30a8cb;
                padding: 0 5px;
                outline: 0;
            }

            #login input[type="text"],
            #login input.k-textbox,
            #login input[type="password"],
            #login select {
                width: 100%;
                height: 36px;
                background-color: #e5e9ec;
                border: none;
                margin: 10px 0;
                padding: 0 6px;
                outline: 0;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                font-family: "open sans";
                font-size: 14px;
                font-weight: 400;
            }

            #login .login_ErrorText {
                color: red;
            }

            #login h2 {
                color: white;
                font-weight: 300;
                font-size: 2em;
                margin: 0;
            }

            #login .login_main {
                text-align: center;
                height: auto;
                padding-top: 8%;
            }

            #login .login_logo {
                margin: 0 auto;
                width: 400px;
                display: block;
                background-position: center center;
                height: 100px;
                padding-top: 25px;
            }

            #login .login_main .login_container {
                width: 400px;
                margin: 0 auto;
                display: block;
                background-color: white;
            }

            #login .login_header {
                background-color: #30a8cb;
                padding: 10px 0;
                text-align: center;
            }

            #login .login_content {
                padding: 20px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                overflow-y: auto;
            }

            #login .login_main .login_systemmessage_container {
                width: 600px;
                margin: 0 auto;
                display: block;
                background-color: white;
                border-width: 3px;
                border-color: #30a8cb;
                border-style: solid;
            }

            #login .login_systemmessage_header {
                background-color: #30a8cb;
                padding: 5px 0;
                text-align: center;
                font-size: 14px;
                color: #FFFFFF;
            }

            #login .login_systemmessage_content {
                padding: 10px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                overflow-y: auto;
                font-size: 13px;
            }

            #login .Login_ErrorContainer {
                height: 100%;
            }

            #login .login_button {
                position: relative;
                float: right;
                height: 36px;
                width: auto;
                padding: 5px 10px;
                background-color: #30a8cb;
                color: white;
                text-transform: uppercase;
                border: none;
                cursor: pointer;
            }

                #login .login_button:hover {
                    position: relative;
                    float: right;
                    width: auto;
                    padding: 5px 10px;
                    background-color: #5BB2CB;
                    color: white;
                    text-transform: uppercase;
                }

            #login .login_link {
                float: left;
                -moz-text-decoration: none;
                text-decoration: none;
                color: #445261;
                padding: 5px 0;
            }

                #login .login_link:hover {
                    color: #30a8cb;
                    -moz-text-decoration: underline;
                    text-decoration: underline;
                }

            #login .login_foot {
                padding: 20px 0;
                margin-top: 200px;
                margin: 0 auto;
                width: 400px;
                display: block;
                font-size: 12px;
                color: #bac8d5;
            }

            #login .login_lng input {
                padding: 0 5px;
            }

            #login .passwordButton {
                margin-top: -10px;
            }

            #login .login_animationcontrol {
                cursor: pointer;
                font-weight: 800;
            }

        .Forgot_Password {
            padding-top: 8px;
            padding-left: 10px;
            padding-bottom: 0px;
            color: #bac8d5;
            float: right;
        }

            .Forgot_Password a {
                cursor: pointer;
                color: #5c6a79 !important;
                -moz-text-decoration: none;
                text-decoration: none;
            }

        .GondviseloJelszoIgeny {
            padding-top: 20px;
            padding-left: 5px;
            color: #bac8d5;
            float: left;
        }

        .BejelentkezesDiv {
            float: right;
            padding-top: 10px;
        }

        .GondviseloJelszoIgeny a {
            color: #5c6a79 !important;
            cursor: pointer;
            -moz-text-decoration: none;
            text-decoration: none;
        }

        .ElfelejtettJelszo {
            padding-top: 8px;
            padding-left: 10px;
            color: #bac8d5;
            cursor: pointer;
            float: left;
        }

            .ElfelejtettJelszo a {
                color: #5c6a79 !important;
                -moz-text-decoration: none;
                text-decoration: none;
            }

        .organization_name {
            padding: 5px 15px;
            font-weight: bold;
            color: white;
            line-height: inherit;
            font-size: 16px;
            overflow-wrap: break-word;
            word-wrap: break-word;
            -ms-word-break: break-all;
            word-break: break-all;
            word-break: break-word;
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }

        .organization_code {
            color: white;
        }

        .login_foot .adatvedelmi a:link, a:visited, a:active, a:hover {
            color: white;
            font-size: 14px;
        }

        #idpLogoutIframe {
            width: 0px;
            height: 0px;
            display: none;
        }
    </style>	
	
	
</head>
<body>


<div id="login">
        <div class="login_main">
            <div class="login_logo">
                <img src="niki2.png" alt="login">
            </div>


<form id="form" name="form" method="post" action="hiba.php">
                <div class="login_container">
                    <div class="login_header">
                        <h4 class="organization_name">
                            <span>Várdai Tamás Webáruháza <br> Adminisztráció</span>
                        </h4>
                        <div class="organization_code">
                            vardaitamas1 - 1/13.C 2. csoport
                        </div>
                    </div>
                    <div class="login_content">

                        <div>
                            <input class="k-textbox valid" data-labelmsg="Felhasználónév" id="felhasznalo_neve" name="felhasznalo_neve" placeholder="Felhasználónév" type="text" value="" aria-invalid="false">
                        </div>
                        <div>
                            <input class="k-textbox valid" data-labelmsg="Jelszó" id="jelszo" name="jelszo" placeholder="Jelszó" type="password" aria-invalid="false">
                        </div>                                         

                                <div class="BejelentkezesDiv">

                                    <input role="button" type="submit" id="btnSubmit" value="Bejelentkezés" onclick="LoginHelper.validate();" class="login_button">

                                </div>
                            </div>
                    </div>
                
</form>

<div class="login_foot" style align="center"; text.size="solid">
                
                <div class="login_infoVersion">
                    <span id="lblVersion" class="szovegVersion">Verzió: 1.1 (2020. 12. 05.) <br> Kapcsolat: vardait@kkszki.hu</span>
                </div>
                <div class="login_Infotext">
                    Támogatott böngészõk:
                    <br> Google Chrome, Mozilla Firefox, Microsoft Edge, Opera
                </div>
            </div>

		</div>
</div>
	  
</body>
</html>


