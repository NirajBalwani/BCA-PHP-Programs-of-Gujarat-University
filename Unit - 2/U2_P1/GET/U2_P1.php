<html>

<body>
    <center>
        <form action="#" method="get">
            Name :- <input type="text" name="name" placeholder="Your Name"></input><br /> <br>
            Email_Id :- <input type="text" name="email" placeholder="Your Email"></input><br /><br>
            Contact No :- <input type="text" name="contact" placeholder="Your Mobile"></input><br /><br>
            <input type="submit" name="sub" value="Submit"></input>
            <input type="reset" name="reset" value="clear"></input>
        </form>
    </center>


    <?php
    if (isset($_GET['sub'])) {

        echo "Welcome: " . $_REQUEST['name'] . "<br />";
        echo "Your Email is: " . $_GET["email"] . "<br />";
        echo "Your Mobile No. is: " . $_GET["contact"];
    }
    ?>
</body>

</html>