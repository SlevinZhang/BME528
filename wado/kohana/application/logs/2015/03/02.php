<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-03-02 00:11:19 --- ERROR: writing
2015-03-02 00:11:19 --- ERROR: writing
2015-03-02 10:11:54 --- ERROR: writing
2015-03-02 10:11:54 --- ERROR: writing
2015-03-02 20:26:28 --- ERROR: writing
2015-03-02 20:26:28 --- ERROR: writing
2015-03-02 20:26:28 --- ERROR: writing
2015-03-02 20:26:28 --- ERROR: writing
2015-03-02 20:26:28 --- ERROR: writing
2015-03-02 20:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2015-03-02 20:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2015-03-02 20:30:02 --- ERROR: writing
2015-03-02 20:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2015-03-02 20:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}