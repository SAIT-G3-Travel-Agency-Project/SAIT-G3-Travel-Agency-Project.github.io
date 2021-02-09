<HTML>
<HEAD>
<TITLE>Travel Experts Form Values</TITLE>
</HEAD>
<BODY>
<?PHP

function confirm()
   {
   var agree=confirm("Are you sure you wish to continue?");
   if (agree)
    return true ;
   else
    return false ;
   }

   /* This page prints the form field names and values
   that were received
    */
   print("<h1>Travel Expert form send the following values:</h1>");
   print("<table border='1'><tr><th>FIELDNAME</th><th>VALUE</th></tr>");

   //if ($_GET)
   if ($_SERVER["REQUEST_METHOD"] == "GET")
   {
      foreach (array_keys($_GET) as $name)
      {
         print("<tr><td>First Name</td><td>$_GET[$firstname]</td></tr>");
      }
   }
   else if (isset($_POST))
   {
      foreach (array_keys($_POST) as $name)
      {
         print("<tr><td>Last Name</td><td>$_POST[$name]</td></tr>");
      }
   }
   print("<tr><th>Phone Number</th><th>Request VALUE</th></tr>");
      foreach (array_keys($_REQUEST) as $name)
      {
         print("<tr><td>$name</td><td>$_REQUEST[$name]</td></tr>");
      }
   print("</table>");
?>
</BODY>
</HTML>
