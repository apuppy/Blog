<?php
//创建inotify句柄
$fd = inotify_init();

//监听一个文件的修改事件
$file = 'inotify_test_file';
$wathcer = inotify_add_watch($fd,$file,IN_MODIFY);

while(true){
	$events = inotify_read($fd);
	if($events){
		foreach($events as $event){
			echo 'inotify event : '.var_export($event,true)." \n";
		}
	}
}

//释放inotify句柄
inotify_rm_watch($fd,$watcher);
fclose($fd);
