<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-15 08:50:12 --- ERROR: writing
2014-05-15 08:50:12 --- ERROR: writing
2014-05-15 08:50:12 --- ERROR: writing
2014-05-15 08:50:12 --- ERROR: writing
2014-05-15 08:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-05-15 08:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-05-15 12:51:51 --- ERROR: writing
2014-05-15 12:51:51 --- ERROR: writing
2014-05-15 12:51:52 --- ERROR: writing