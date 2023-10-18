server side scripting vs client side scripting

Server Side Scripting
> run code in a secured way with min cost
> sending only the required code / data to client (=> enhancing security)
> reducing processing & load time on client side
> customization and optimization for client side

----------------------------------------------------------------------------
validation: 
sanitization: 
sanitizing input means removing all illegal characters using deleting, replacing, encoding, or escaping techniques.

superGlobals:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET


$_SERVER["PHP_SELF"] : 
htmlspecialchars() : replace html characters like < and > with &lt; and &gt;
prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

CSRF: cross site request forgery

preg_match(): perform a regular expression match, return true if pattern exists, else false

validating data: determine if the data is in proper form
sanitizing data: remove any illegal character from the data
php filters are used to validate and sanitize external input.

filter_var(): both validate & sanitization (filters are single variable with a special filter,
takes two arguments: the variable you want to check, and the type of check to use)

sanitize a string
validate an integer
sanitize and validate a URL

filter_has_var() : checks if a variable of a specified input type exists
filter_id(): return the ID number of a specified filter
filter_input(): get and filter one input variable with a specified filter
filter_input_array(): get and filter multiple input variables with the specified filter
filter_list(): return a list of all supported filters


max range of int in power of 2 in php: 2^31-1 = 2147483647
max length of string in php: 2GB

