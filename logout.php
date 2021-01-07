<?php

    setcookie("id", "", time() - 1);
    
    echo "<script>alert('注销成功！');window.location.href='index.php';</script>";

?>