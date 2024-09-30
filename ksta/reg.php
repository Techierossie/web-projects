<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
        <div class="container">
<div>
    <body background= "ksta.jpeg">;
</div>

<div class="ksta" style= border-radius:20px >

        <h2>TRAVEL REGISTRATION</h2>
        <p>Please fill in the form correctly to register:</p>

        <form action=""method="Post">
    <div class= "error" id="nameErr">
            <label> Firstname:</label><label style= color:red>*</label>
            <input type= "text" name="first_name" placeholder="Enter firstname" required><br><br>
    </div>

    <div>
            <label>Middlename:</label><label style= color:red>*</label>  
            <input type= "text" name="last_name" placeholder="Enter Othername" required><br><br>
    </div>

    <div>
            <label>Surname:</label><label style= color:red>*</label>  
            <input type= "text" name="last_name" placeholder="Enter Lastname" required><br><br>
    </div>

    <div>
          <label>Phone Number:</label><label style= color:red>*</label>
          <input type="tel" name="phone_number" placeholder="+234- 0000-0000-000" required><br><br>
    </div>

    <div>
            <label>Address:</label><label style= color:red>*</label>
            <input type="text" width="150px" name="address" required>
    </div>

    <div>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br> 
    </div>

    <div>
            <label>E-mail:</label>
            <input type="email" name="email"><br><br> 
    </div>

    <div>
            <label>Destination- From :</label>
            <input type="text" name="katsina" value="Katsina"><label>To:</label>
            <select>
                <option value="Kano">Kano</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Sokot">Sokoto</option>
                <option value="Abuja">Abuja</option>
                <option value="jigiwa">Jigawa</option>
                <option value="Niger">Niger</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Zaria">Zaria</option>
                <option value="Zamfara">Zamfara</option>
            </select><br><br>
    </div>

    <div>
            <label>Name of Next of Kin:</label> <label style= color:red>*</label>
            <input type="text" name="kinname" placeholder="Enter Name of Next of Kin" required><br><br>
            <label>Phone Number:</label><label style= color:red>*</label>
            <input type="phone" name="phone" placeholder="Enter Phone Number" required><br><br>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
    </div>
</form>
</div>
</body>
</html>