<div?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
         
<div class="container">
   <p class="form-title"> iDatos Technology </p>
                
        <form method="post" action="send.php">

        Position applied for:<select name="dropdown">
             <option value="DATA SCIENTIST"> DATA SCIENTIST</option>
             <option value="CYBER SECURITY">CYBERSECURITY </option>
            <option value="AI">AI </option>
             </select>
                   <br><br>
 
        Name:<input type="text" name="name" required/>
        Nationality:<input type="text" name="Nationality"/>
             <br><br>

        Date of birth:<input type="date" name="date" required/>
              <br><br>

        Address: <input type="text" name="description">
             <br><br>

        Telephone number:<input type="tel" name="Phone number" placeholder="0712345678" required/>
        Email:<input type="email" name="Email" placeholder="jane@gmail.com" required/>
            <br><br>

        Education history: <br/>
            <textarea rows="2" cols="80" name="description"placeholder="Write your education history here..."></textarea> 
             <br><br>

        Qualifications: <br/>
            <textarea rows="3" cols="80" name="description"
            placeholder="Write your qualifications and skills for the role you're applying for here..."></textarea> 
             <br><br>

        Work experience:
            <input type="radio" name ="work" value="on">2 years
            <input type="radio" name="work" value="on"> 4 years
            <input type="radio" name="work" value="on" >6 years
            <input type="radio" name ="work" value="on">8 years
            <input type="radio" name="work" value="on"> 10 years
               <br><br>

        Resume:<input type="file" name="fileupload " accept="pdf/*" />
              <br><br>

        Referees:<br/>
        <textarea rows="3" cols="80" name="description"
placeholder="Write the names, occupation & telephone number of at least 2 of your referees here..." ></textarea>
             <br><br>
 
        <input type="hidden" name="submit" value="true">
        <button class="btn" type="submit">Submit Your Application</button>  
       
        <di class="links">
        <a href="logout.php">Logout</a> </div>
</form>

</div>  
<script src="js/scrript.js"></script>
</body> 
</html>