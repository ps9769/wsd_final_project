<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

 <body style='background-color:lightblue'>

 <br>

     <A1><h1><b> Welcome New User <b></h1><A1>

 <br>

<style>

    A1
    {
        text-align: center;
        color: black;
    }
    dimensions
    {
        width:5em;
        text-align:left;
        margin-right :88.0em;


    }
    div
    {
        border: 20px wheat;
        background-color: whitesmoke;
        border-style: solid;
        padding: 30px 30px 30px 30px;
        height: 650px;
        width: 500px;
        margin-left: 35em;
    }
    bad
    {
        font-size: 15px;
    }


</style>


<div>

    <form action="index.php?page=accounts&action=register" method="post">



    <bad>First Name :</bad>  <dimensions> <input type="text" size="20" name="fname"></dimensions><br><br>

    <bad>Last Name :</bad> <dimensions> <input type="text" size="20" name="lname"></dimensions><br><br>

    <bad>Email :</bad> <dimensions><input type="email" size="20" name="email"></dimensions><br><br>

    <bad>Phone :</bad> <dimensions><input type="number" size="20"  name="phone" maxlength="10"  ></dimensions><br><br>

    <bad>Birthday :</bad> <dimensions><input type="date" size="20"  name="birthday"></dimensions><br><br>

    <bad>Gender :</bad> <dimensions><input type="text" size="20" name="gender"></dimensions><br><br>

    <bad>Password :</bad> <dimensions><input type="password" size="20" name="password"></dimensions><br><br>



      <input type="submit" size="50" value="Submit form">

</form>

</div>

<script src="js/scripts.js"></script>
</body>
</html>
