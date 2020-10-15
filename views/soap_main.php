<?php

    require 'lib/nusoap.php';

    function soap($name)
    {
        $details = array(
            'abc'=>100,
            'xyz'=>200
        );

        foreach ($details as $n=>$p)
        {
            if($name == $n)
            {
                $price = $p;
            }
        }

        return $price;
    }

    $server = new nusoap_server();
    $server->configureWSDL("Soap","urn:demo");
    $server->register(
        "soap",                         //function name
        array("name"=>'xsd:string'),    //inputs
        array("return"=>"xsd:inter")   //outputs
    );

    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);

?>
