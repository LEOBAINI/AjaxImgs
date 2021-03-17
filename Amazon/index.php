<?php

$urlArchivoOriginal;
$urlmasnombreFinalArchivo;
if (isset($argc)) {
	/*for ($i = 0; $i < $argc; $i++) {
		echo "Argument #" . $i . " - " . $argv[$i] . "\n";
	}*/
	$urlmasnombreFinalArchivo=$argv[1];
	$urlArchivoOriginal=$argv[2];
}
else {
	echo "argc and argv disabled\n";
}


  $contextoEnvoltura=array(
      "ssl"=>array(
          "verify_peer"=>false,
          "verify_peer_name"=>false,
      ),
  );

  copy
  (
     // 'https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_9a8ae986-8335-452c-bbed-5257d1b35bfb_00002489ff640012_01.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155800Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604791&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=791a61fb8e76aebebf9458a0382c278b0b5f5c54db255e91dbe30257c2d29389'
      $urlArchivoOriginal,$urlmasnombreFinalArchivo,stream_context_create($contextoEnvoltura)

  );

  /*https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_9a8ae986-8335-452c-bbed-5257d1b35bfb_00002489ff640012_01.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155800Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604791&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=791a61fb8e76aebebf9458a0382c278b0b5f5c54db255e91dbe30257c2d29389,https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_5a8333b8-ba82-466a-993e-08f8dd94f7fc_00002589ff640012_02.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155804Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604787&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=f1e454e67e2ce7872cec7c1dc9ca648abbd06c52a98a959b0f057f62d7bee1b0,https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_4b4d823e-1521-4ef0-90e6-074e545d81f2_00002689ff640012_03.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155810Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604781&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=2a93e6113f6f99d5e012dab404f2c156372fddf23c5f1a1b9918062f18c68479,https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_bc53d542-f28c-44c8-ae94-6a4e95b2513f_00002789ff640012_04.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155817Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604774&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=82999eff5021307ed44d8484893454727f337449ac9b90914639ccfc30ca7306,https://hubs-uploaded-resources.s3.eu-west-1.amazonaws.com/000D6A06_1615823872607_400f40c8-fd64-4d58-b144-3f785c9c795d_00002889ff640012_05.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210315T155819Z&X-Amz-SignedHeaders=host&X-Amz-Expires=604772&X-Amz-Credential=AKIAJDTUC7NW72SU5MRQ%2F20210315%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=1f2db3d1b67f7a4ae9cfac69c84dc6b4bc9403cedbc6f7cab07bf591c0c59b68*/

  print $urlmasnombreFinalArchivo;
  print $urlArchivoOriginal;
  ?>