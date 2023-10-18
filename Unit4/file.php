<!-- 
$_FILES
is a two dimensional associative global array of items which are being uploaded via HTTP POST method and contains the following information:
name
- the original name of the file on the client machine
type
- the mime type of the file, if the browser provided this information. An example would be "image/gif"
size
- the size, in bytes, of the uploaded file
tmp_name
- the temporary filename of the file in which the uploaded file was stored on the server
error
- the error code associated with this file upload

How does the array look like:
$_FILES[input-field-name][name]
$_FILES[input-field-name][type]
$_FILES[input-field-name][size]
$_FILES[input-field-name][tmp_name]
$_FILES[input-field-name][error]

 -->


<form action="fileUpload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"> <br><br>
    <input type="submit" name="submit" value="Upload">
</form>