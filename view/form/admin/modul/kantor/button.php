<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>DevExtreme Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/19.2.3/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/19.2.3/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/19.2.3/js/dx.all.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="index.js"></script>
    <script type="text/javascript">
          $(function() {
        $("#normal-contained").dxButton({
            stylingMode: "contained",
            text: "Contained",
            type: "normal",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Contained button was clicked");
            }
        });

        $("#normal-outlined").dxButton({
            stylingMode: "outlined",
            text: "Outlined",
            type: "normal",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Outlined button was clicked");
            }
        });

        $("#normal-text").dxButton({
            stylingMode: "text",
            text: "Text",
            type: "normal",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Text button was clicked");
            }
        });


        $("#success-contained").dxButton({
            stylingMode: "contained",
            text: "Contained",
            type: "success",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Contained button was clicked");
            }
        });

        $("#success-outlined").dxButton({
            stylingMode: "outlined",
            text: "Outlined",
            type: "success",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Outlined button was clicked");
            }
        });

        $("#success-text").dxButton({
            stylingMode: "text",
            text: "Text",
            type: "success",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Text button was clicked");
            }
        });


        $("#default-contained").dxButton({ // akan menjalankan dxButton dengan id default-contained
            stylingMode: "contained",
            text: "Contained",
            type: "default",
            width: 120, // dengan panjang / lebar
            onClick: function() {
                DevExpress.ui.notify("The Contained button was clicked");
            }
        });

        $("#default-outlined").dxButton({
            stylingMode: "outlined",
            text: "Outlined",
            type: "default",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Outlined button was clicked");
            }
        });

        $("#default-text").dxButton({
            stylingMode: "text",
            text: "Text",
            type: "default",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Text button was clicked");
            }
        });


        $("#danger-contained").dxButton({
            stylingMode: "contained",
            text: "Contained",
            type: "danger",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Contained button was clicked");
            }
        });

        $("#danger-outlined").dxButton({
            stylingMode: "outlined",
            text: "Outlined",
            type: "danger",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Outlined button was clicked");
            }
        });

        $("#danger-text").dxButton({
            stylingMode: "text",
            text: "Text",
            type: "danger",
            width: 120,
            onClick: function() {
                DevExpress.ui.notify("The Text button was clicked");
            }
        });
      });
    </script>
    <style>
    .demo-container {
        display: flex;
        justify-content: center;
        height: 450px;
    }

    .buttons-demo {
        width: 600px;
        align-self: center;
    }

    .buttons-column > .column-header {
        flex-grow: 0;
        width: 150px;
        height: 35px;
        font-size: 130%;
        opacity: 0.6;
        text-align: left;
        padding-left: 15px;
    }

    .buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .buttons > div {
        width: 300px;
        flex-wrap: nowrap;
        display: flex;
    }

    .buttons-column > div {
        width: 150px;
        height: 50px;
        text-align: center;
    }

    .buttons-column {
        width: 150px;
        justify-content: center;
    }
    </style>
</head>
<body class="dx-viewport">
    <div class="demo-container">
        <div class="buttons-demo">
            <div class="buttons">
                <div>
                    <div class="buttons-column">
                        <div class="column-header">
                            Normal
                        </div>
                        <div>
                            <div id="normal-contained"></div>
                        </div>
                        <div>
                            <div id="normal-outlined"></div>
                        </div>
                        <div>
                            <div id="normal-text"></div>
                        </div>
                    </div>
                    <div class="buttons-column">
                        <div class="column-header">
                            Success
                        </div>
                        <div>
                            <div id="success-contained"></div>
                        </div>
                        <div>
                            <div id="success-outlined"></div>
                        </div>
                        <div>
                            <div id="success-text"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="buttons-column">
                        <div class="column-header">
                            Default
                        </div>
                        <div>
                            <div id="default-contained"></div>
                        </div>
                        <div>
                            <div id="default-outlined"></div>
                        </div>
                        <div>
                            <div id="default-text"></div>
                        </div>
                    </div>
                    <div class="buttons-column">
                        <div class="column-header">
                            Danger
                        </div>
                        <div>
                            <div id="danger-contained"></div>
                        </div>
                        <div>
                            <div id="danger-outlined"></div>
                        </div>
                        <div>
                            <div id="danger-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
