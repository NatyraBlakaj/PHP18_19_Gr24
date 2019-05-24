<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/portfolio.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.main {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* The popup (background) */
.popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* popup Content */
.popupContent {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
thead {
    font-weight: bold;
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}

.popup-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.popup-body {padding: 2px 16px;}

.popup-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
    </style>

<body>

        
        <?php
		include "header.php";
		?>
		
        <div class="container">
                <table id="projectsTable">
                        <thead>
                            <td>Emri</td>
                            <td>webpage</td>
                            <td>Koha</td>
                            <td>Nr puntoreve</td>
                            <td>vleresimi (1-5)</td>
                          
                        </thead>
                      </table>
                <input type="button" id="addProjectBtn" value="ADD PROJECT">
                <!-- The popup -->
<div id="popup" class="popup">

        <!-- popup content -->
        <div class="popupContent">
         <div class="main">
            <span class="close">&times;</span>
                <form >
                    Name    <input type="text"      id="name"       > <br />
                    Website <input type="text"      id="webpage"    > <br />
                    Time    <input type="number"    id="time"       > <br />
                    Employes<input type="number"    id="employes"   > <br />
                    Rate    <input type="number"    id="rate" min="1"  max="5" >
                            <input type="submit"    onclick="myFunction()" value="ADD PROJECT">
                </form>
              </form>
      </div>
        </div>
      
      </div>
        </div>


        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

    <script src="../js/responsive.js"></script>
    <script>
        
            var popup = document.getElementById('popup');
            var btn = document.getElementById("addProjectBtn");
            var span = document.getElementsByClassName("close")[0];

            //When user click button add project then open popup
            btn.onclick = function() {
            popup.style.display = "block";
            }

            function myFunction() {
            alert("Projekti eshte shtuar");
            var name = document.getElementById("name").value;
            var webpage = document.getElementById("webpage").value;
            var time = document.getElementById("time").value;
            var emp = document.getElementById("employes").value;
            var rate = document.getElementById("rate").value;
            var table = document.getElementById("projectsTable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            cell1.innerHTML = name;
            cell2.innerHTML = webpage;
            cell3.innerHTML = time;
            cell4.innerHTML = emp;
            cell5.innerHTML = rate;
            popup.style.display ="None"
            }

            //If user click X then close popup
            span.onclick = function() {
            popup.style.display = "none";
            }

            //If user click outside popup close it
            window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
            }
    </script>
</body>
</html>