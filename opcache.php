<?php
if(function_exists("opcache_get_status")){
    var_dump(opcache_get_status());
}else{
    echo 'OPcache is disabled.';
}
?>