<?php
    if(isset($_POST['logout']))
    {
        $i=0;
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
                $sql = "UPDATE sign SET stat='n' WHERE stat='y'";
            }
            if($connection->query($sql) === true)
            {
                ?>
                <html>
                <script>
                    window.alert("LOGOUT SUCCESSFUL");
                    window.open('login.html','_self');
                </script>
                </html>
                <?php
            }
            else
            {?>
                <html>
                <script>
                    window.alert("LOGOUT UNSUCCESSFUL OR NEVER LOGGED IN");
                    window.open('logout.html','_self');
                </script>
                </html>
                <?php
            }
            $connection->close();
        }
?>
<html>
    <body bgcolor=#EEE2DC>
</html>