<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
   
    width: 600px;
    text-align: left;
}
caption{
    text-align: left;
    
    font-size: 30px;
}
#holder{
    font-weight: 600;
}
input[type="submit"]{
    background-color: rgb(55, 109, 209);
    color: white;
}
input[type="email"] , input[type="text"]{
    width: 350px;
    height: 25px;
}
input[type="submit"] , input[type="button"]{
    width: 60px;
    height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 5px;
    
}
input[type="submit"] , input[type="button"]{
    cursor: pointer;
}
    </style>
</head>
<body>
 <form method="POST" action="2.php">
    <table  >
        <caption>User Regstraion Form</caption>
        <tr><td><hr></td></tr>
        <td><p>please fill this form and submit to add user record to the database .</p></td>
        <tr><td id="holder">Name</td></tr>
        <tr><td><input type="text" name="name"></td></tr>
        <tr><td id="holder">Email</td></tr>
        <tr><td><input type="email" name="email"></td></tr>
        <tr><td id="holder">Gender</td></tr>
        <tr><td><input type="radio" name="gender" value="female" >Female</td></tr>
        <tr><td><input type="radio" name="gender" value="male" >Male</td></tr>
        <tr><td><input type="checkbox" name="checkbox" value="checked" >Recieve E-Mails from us.</td></tr>
        <tr><td><a href="./2.php"><input type="submit" value="submit"></a>&nbsp;<input type="button" value="cancel"></td></tr>
    </table>
 </form>
</body>
</html>