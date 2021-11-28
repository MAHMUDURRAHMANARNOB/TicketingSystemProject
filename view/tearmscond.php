<?php
$myfile =
fopen("tearms and condtion.txt", "w") or die("Unable to open file!");
$txt = "This project is going to help all the passengers as well as all the employees of this company and who ar going to use this system. In this system we tried to make it as simple as it can be. So the users and the employees can easily use it. In this system no one will have to gather into the ticket counter for the ticket for a certain time. If the customers book the ticket online he can take the main ticket just before his  depurture time. So nobody will have to wait in the line for tickets.\n";
fwrite($myfile, $txt);
$txt = "We have some limitations in our project but also we have so many possible future.
One of the main limitation is one user can’t log in as buyer and seller at a time , also a user can’t be a buyer and also  a seller, if a seller wants to be a buyer he have to open another account as buyer same goes for other users. Also we don’t have any chat system so that buyer and seller can directly communicate with each other. As we will use OTP system so one one phone number can use for just one time, the number which is already register in the database can not use for another account.

\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<HTML>
<BODY>

<h1>Tearms and Condition Downloaded</h1>

</BODY>
</HTML>