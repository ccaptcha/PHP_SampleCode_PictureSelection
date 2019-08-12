<head>
    <meta charset="utf-8" />
    <title>CCAPTCHA Demo in PHP</title>  
    <script src=" https://widget.ccaptcha.com/js/ccaptcha_version2_M9.js"></script>
</head>

<body>

<form method="post">
<div  class="ccaptcha_M9" id="ccaptcha_M9"  name="Ccaptcha_M9" data-ccaptcha_apicode="Type Your API Code Here"></div>
<input type="submit" name="test" id="test" value="Validate" /><br/>

<?php
if(array_key_exists('test',$_POST)){

//Type Your SecretCode Here
$Secret_Code="Your Secret Code";
$url = ' https://api.ccaptcha.com/api/Validate9/ValidationPost;
$myvars = 'Token=' . $_POST['ccaptcha_token_input'] . '&Secret_Code=' . $Secret_Code;
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
    if($response == '"true"')
    {
       //CCAPTCHA SOLVED!
    echo 'true';
    }
    else
    {
     //CCAPTCHA Not Solved!
     echo 'false';
    }

}
?>
</form>

</body>
