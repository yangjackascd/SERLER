<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="xhr.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SERLER</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class = "login">
            <div id="logintab"></div>
            <div id="logintable">
                <form accept-charset="utf-8">
                    <table>
                        <tr>
                            <td>Account:<input type="text" name= "account" required> </td>
                            <td>Password: <input type = "password" name="password"  placeholder="**********" required></td>
                        </tr>
                        <tr>
                            <td><a href= "">Forgot Password</a></td>
                            <td><input name="login" type ="button" class ="loginbtn" onClick = "getData('login.php', 'logintable', account.value, password.value)"  value="Login" ></td>  
                        </tr>

                    </table>          
                </form>
            </div>
        </div>
        <div class = "main">
            <div class ="header">  
                <div class= "logo"><a href="index.php"><img src="images/autlogo.png" alt="AUT"/></a></div>
                <div class ="menu">
                    <nav>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="register.php">Become a user</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Wiki</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class = "content">

                <h1>SERLER</h1>
                <form onsubmit = "senddata();" action="searchresult.php">
                    <input type="text" id="searchbar" name= "search" placeholder="Search..">               
                        <input type="submit"class="searchbtn" value="Search">
                            </form>
                            </div>
                            </div> 
                            </body>
                            </html>