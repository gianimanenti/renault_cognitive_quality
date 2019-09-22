<?php
 
//set random name for the image, used time() for uniqueness
 
$filename =  time() . '.jpeg';
$filepath = '/customers/5/8/4/artificialx.com.br//httpd.www/projetos/alliance/images/';
move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

$jpg = $filepath.$filename;
$param = '/customers/5/8/4/artificialx.com.br//httpd.www/projetos/alliance/par.json';

	$services_json = json_decode(getenv('VCAP_SERVICES'), true);
	$watsonPi = $services_json["<servicename>"][0]["credentials"];

						// Extract the VCAP_SERVICES variables for Watson PI connection.
					  // i.e. username, password and url
	$url = 'https://gateway-a.watsonplatform.net/visual-recognition/api/v3/classify?api_key=544f8cc7816a714aef3d2ecc23e5e8e0cca8b6db&version=2018-03-19';
	$header_args = array();
    $header_args[] = 'Accept-Language: en';
   $data = array("images_file" => new CURLFile($jpg,mime_content_type($jpg),basename($jpg)),"parameters" => new CURLFile($param,mime_content_type($param),basename($param)));
                        
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);


	$result = curl_exec($curl);
    if ($result=== FALSE) {
    die('Send Error: ' . curl_error($curl));
                                                   }
    curl_close($curl);
    
    
    
    //echo var_dump($post_args);
    
    echo $result;


// echo "<script>alert('Suas respostas foram enviadas com sucesso! Já pode fechar a janela :D'); window.close();</script>";

//echo $filepath.$filename;


?>