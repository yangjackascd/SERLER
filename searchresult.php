<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="xhr.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />

        <title>SERLER</title>

    </head>

    <body>
        <div class = "main" >

            <div id="searchnewpage">

                <form>
                    <a href="index.php"><img src="images/autlogo.png" alt="AUT" height="40px" style="vertical-align:bottom;"/></a> <input type="text" id="searchbar" name= "search" placeholder="Search..">
                        <input type="button" name= "searching" class="searchbtn" onClick = "searchData('search.php', 'searchresult', search.value)" value="Search">
                            </form>
                            <div id="searchresult">
                                <script type="text/javascript">
                                    onrunsearch('search.php', 'searchresult');
                                </script>
                            </div>
                            </div>
                            </div>
                            </body>
                            </html>