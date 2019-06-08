<html>

<h3>Search Exam results</h3>
<form method="post" action="controller/sql-inject-controller.php">
	<input type="hidden" name="action" value="exam_search">
	<label>Examination: </label>
	<input type="text" name="exam_num">
	<input type="submit" value="Search">
</form>

<hr>

<h3>Update Password</h3>
<form method="post" action="controller/sql-inject-controller.php">
	<input type="hidden" name="action" value="update_pwd">
	<label>Username: </label>
	<input type="text" name="username">
	<label>Previous password: </label>
	<input type="password" name="pre_pwd">
	<label>New Password: </label>
	<input type="password" name="new_pwd">
	<input type="submit" value="Update">
</form>

</html>