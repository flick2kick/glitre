<html>
<head>
<title>Glitre guide</title>
</head>
<body>

<div style="margin-left: 40%; margin-right: 30%;">

<h1>Glitre guide</h1>

<form method="GET" action="index.php">
<table>
<tr><th>Parameter</th><th>Mandatory?</th><th>Value</th></tr>
<tr><td><tt>library</tt></td><td>yes</td><td><select name="library">
<?php

include('../inc.config.php');
$config = get_config();

foreach($config['libraries'] as $key => $value) {
	print '<option>' . $key . '</option>';
}

?>
</select></td></tr>

<tr><td><tt>q</tt></td><td>yes</td><td><input type="text" name="q" /></td>

<tr><td><tt>sort_by</tt></td><td>no</td><td>
<select name="sort_by">
<option></option>
<option>year</option>
<option>title</option>
<option>author</option>
</select>
</td>
</tr>

<tr><td><tt>sort_order</tt></td><td>no</td><td>
<select name="sort_order">
<option></option>
<option>ascending</option>
<option>descending</option>
</select>
</td>
</tr>

<tr><td><tt>format</tt></td><td>no</td><td>
<select name="format">
<option></option>
<option>simple</option>
<option>isbn-plain</option>
</select>
</td>
</tr>

<tr><td><tt>page</tt></td><td>no</td><td><input type="text" name="page" /></td>

<tr><td><tt>loggedin_user</tt></td><td>testing</td><td><input type="checkbox" name="loggedin_user" value="1" /></td>

<tr><td></td><td></td><td><input type="submit" value="Test it!" /></td>

</table>
</form>

<p>Parameters marked with "testing" are not a part of the API, but are provided to mimick functions that should be taken care of by the software that includes Glitre or uses its API.</p>

</div>

</body>
</html>