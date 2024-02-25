<?php
$glue = ","
?>

<div>
    <p> First Name: <?php echo $applicant['firstName']?></p>
    <p> Last Name: <?php echo $applicant['lastName']?></p>
    <p> Years of Experience: <?php echo $applicant['experience']?></p>
    <p> Current level: <?php echo $applicant['level']?></p>
    <p> Skills: <?php echo implode(" , ", $applicant['skills'])?></p>
</div>  