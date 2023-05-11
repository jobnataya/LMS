<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createstyler.css">
    <title>Create new account</title>
</head>
<body>
   <div class="header">
    <div class="logo"><img src="images/svclogo.png" alt="" srcset=""></div>
    <h1>Saint Vincent College of Cabuyao</h1>
   </div>
   <div class="bodys">
    <div class="top"><h2>Sign Up!</h2></div>
    <form>
        
       <!--For First Name--> 
        <label for="Fname"></label>
        <input class="fname" type="text" id="Fname" placeholder="First Name:">
        <!--For Last Name--> 
        <label for="Lname"></label>
        <input class="lname" type="text" id="Lname" placeholder="Last Name">
        <br>
        <!--For ID--> 
        <label for="ID"></label>
        <input class="id" type="text" id="Fname" placeholder="ID">
        <br>
        <!--For Password--> 
        <label for="Password"></label>
        <input class="pw" type="password" id="Fname" placeholder="Password">
        <!--Birthday--> 
       <div class="bd"><h4>Birthday</h4></div>
        <label for="Bdaymonth"></label>
        <select class="months" name="month" id="months">
            <option value="january">January</option>
            <option value="feburary">Feburary</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
        </select>
        <!--Day-->
        <label for="Day"></label>
        <select class="days" name="Day" id="Days">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <!--Year-->
        <label for="Year"></label>
        <input class="year" type="number" id="years" placeholder="Year:">
        <br>
        <!-- Gender Section -->
        <div class="gender">
            <h2>Gender</h2>
            <label for="Female">Female</label>
            <input class="female" type="radio">
            <label for="Male">Male</label>
            <input class="male" type="radio">
        </div>
        <input class="create" type="submit" value="Create new account">
    </form>
   </div>
   <div class="bottom"></div>
</body>
</html>