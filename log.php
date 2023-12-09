<?php
    if(isset($_POST['log']))
    {
        $i=0;
        $s=1;
        $user=$_POST['uin'];
        $pass=$_POST['pin'];
        $connection=mysqli_connect("localhost","root","Pranav@2003","signup");
        if (!$connection) 
        {
            ?>
            <html>
            <script>
                window.alert("DATABASE IS NOT FOUND");
            </script>
            </html>
            <?php
        }
        else
        {
            $query="SELECT * from sign where u_name='$user' and pass='$pass' and stat='n'";
            $check=mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($check))
            {
                $query = "UPDATE sign SET stat='y' WHERE u_name='$user'";
                $i=$i+1;
                break;
            }
            if($connection->query($query) === true)
            {?>
                <html>
                <script>
                    window.alert("LOGIN SUCCESSFUL");
                    window.open('home.html','_self');
                </script>
                </html>
                <?php
            }
            else
            {
                ?>
                <html>
                <script>
                    window.alert("LOGIN UNSUCCESSFUL OR ALREADY LOGGED IN");
                    window.open('login.html','_self');
                </script>
                </html>
                <?php
            }
            $connection->close();
        }
        
    }
?>
<html>
    <body bgcolor=#EEE2DC>
</html>