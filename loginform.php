<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<script type = "text/javascript">
function check(value){
xmlHttp = GetXmlHttpObject()
var url = "Checker.php";
url = url +"?Email="+value;
xmlHttp.onreadystatechange = stateChanged
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged(){
if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
var showdata = xmlHttp.responseText;
document.getElementById("mydiv").innerHTML = showdata;
}
}

function GetXmlHttpObject(){
var xmlHttp= null;
try{
  xmlHttp = new XMLHtttpRequest();
}
catch(e){
try{
xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e)
{
  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP")
}
}
return xmlHttp;
}
</script>
<body>

<h2>Student Signup Form</h2>

<form action="add_info.php"  method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Roll no.</b></label>
    <input type="text" placeholder="Enter Roll_Number" name="Rollnum" id="rollnum" required></br></br>
	
	<label><b>Department</b></label>
	  <select name ="Department" id="department">
	  <option value="Chemistry">Chemistry</option>
	  <option value="Physics">Physics</option>
	  <option value="Botany">Botany</option>
	  <option value="History">History</option>
	  <option value="Computer Application">Computer Application</option>
	  <option value="Management">Managment</option>
	  <option value="Nepali">Nepali</option>
	  <option value="Hindi">Hindi</option>
	  <option value="English">English</option>
	  <option value="Mathematics">Mathematics</option>
	  <option value="Commerce">Commerce</option>
	  <option value="Sociology">Socioilogy</option>
	  <option value="Peace and Conflict">Peace and Conflict</option>
	  <option value="Economics">Economics</option>
          <option value="Lepcha">Lepcha</option>
	  <option value="Bhutia">Bhutia</option>
	  <option value="Law">Law</option>
          <option value="Political Science">Political Science</option> 
          <option value="Horticultre">Horticultre</option>
	   </select> </br></br></br>

    <label><b>Email</b></label>
    <input type="text" placeholder="Student email" name="Email" id="email" required></br></br>
 <input type = "hidden"><font color ="red"><div id = mydiv"></div></font>

   
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" id="name"required>
	<div class="clearfix">
      <button type="button" class="cancelbtn" onclick="document.getElementById('email').value= '',document.getElementById('name').value= '',document.getElementById('rollnum').value= '',document.getElementById('department').value= ''">Clear</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
