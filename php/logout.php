<?php

 session_start();
		unset($_SESSION["username"]);
		session_destroy();

printf("<script>location.href='../login.html'</script>");
?>
