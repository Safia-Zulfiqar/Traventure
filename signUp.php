<?php
$server="localhost";
$username="root";
$password="";
$database="traventure";

$con=mysqli_connect($server,$username,$password,$database);
 if(!$con)
    {
    die("connection to this datbase failed due to". mysqli_connect_error());
    }
// echo("success connecting to the database. <br>");

$name=$_POST['name'];
$email=$_POST['email'];
$pass_word=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

$sql="INSERT INTO `signup` (`name`,`Email`, `password`,`confirm_password`, `Date/Time`) VALUES ('$name','$email', '$pass_word','$confirm_password',current_timestamp())";
// echo $sql."<br>";

if (mysqli_query($con,$sql))
  {
  echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Message Sent</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .popup {
                background: #fff;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                text-align: center;
                animation: fadeIn 0.5s ease-in-out;
            }
            .popup h2 {
                color: #f7931e;
                margin-bottom: 10px;
            }
            .popup p {
                font-size: 16px;
                color: #555;
            }
            .popup a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #f7931e;
                color: #fff;
                text-decoration: none;
                border-radius: 6px;
                transition: background 0.3s;
            }
            .popup a:hover {
                background-color: #f7931e;
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: scale(0.9); }
                to { opacity: 1; transform: scale(1); }
            }
        </style>
    </head>
    <body>
        <div class="popup">
            <h2>Success!</h2>
            <p>"You have signed up successfully"</p>
            <a href="index.html">Next</a>
        </div>
    </body>
    </html>
    ';
  }
else
  { 
    echo "ERROR:".mysqli_error($con);
  }


  mysqli_close($con);

?>