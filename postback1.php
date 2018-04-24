<?php
//postback1.php

if(isset($_POST['submit'])){//show data
    echo$_POST['FirstName'];
}else{//show form
    echo '
    <form action="" method="post">
    <p>First Name:<br/>
        <input name="FirstName" type="text" />
    </p>
    <p>
        <input type="submit" name="submit" />
    </p>
    
    
    </form>
    ';
}