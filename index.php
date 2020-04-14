<?php
	setcookie('my_name', 'is Martins', time() + 259200);

	function php_cookies() {
		$cookies = '';
		
		foreach ($_COOKIE as $key => $value) {
			$cookies .= $key . "=" . urlencode($value) . "; ";
		}

		echo rtrim($cookies, '; ');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Cookies</title>
	</head>

	<body>
	    <div><b>Server</b> received these cookies from client:</div>
		<pre><?= php_cookies() ?></pre>

	    <div style="margin-top: 40px;"><b>Client</b> sees these cookies:</div>
		<pre class="cookies"><img src="loading.gif" style="width: 20px"></pre>

		<button>Set cookie using Javascript!</button>

		<script>
			document.querySelector('button').addEventListener('click', (event) => {
				document.cookie = "username=John Doesss";
				document.querySelector('.cookies').innerHTML = document.cookie
			})

			setTimeout(() => {
				document.querySelector('.cookies').innerHTML = document.cookie
			}, 1500)
		</script>
	</body>
</html>