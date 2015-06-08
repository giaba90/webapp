<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>

        #title{
            text-align: center;
            margin-bottom: 20px;
        }

        #primobox{
            margin-left: 100px;
        }

        #secondobox{
            margin-left: 50px;
        }

        #primobox > a,   #secondobox > a{
            margin-left: 80px;
        }

        #primobox > h2, #secondobox > h2{
            margin-left: 50px;
        }
        #primobox li, #secondobox li{
            list-style: none;
            line-height: 2.5;
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <script type="text/javascript">
        function toggler(divId) {
            $("#" + divId).toggle();
        };

        function load_winner_ajax(type){
            toggler('mostraVincitori'+type);
            $.ajax({
                'url' : 'estrai/'+type,
                'type' : 'GET', //the way you want to send data to your URL
                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    var container = $('#mostraVincitori'+type); //jquery selector (get element by id)
                    if(data){
                        container.html(data);
                    }
                }
            });
        };


        function load_user_ajax(type){
            toggler('showUser'+type);
            $.ajax({
                'url' : 'get_users/'+type,
                'type' : 'GET', //the way you want to send data to your URL
                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    var container = $('#showUser'+type); //jquery selector (get element by id)
                    if(data){
                        container.html(data);
                    }
                }
            });
        };

    </script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->