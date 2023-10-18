<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Proposal Submission</title>
</head>
<body>
    <h1>Submit Your Project Proposal</h1>
    <form action="submit_proposal.php" method="POST">    
</p>
        <label for="Req_Description">Project Description:</label>
        <textarea id="Req_Description" name="Req_Description" rows="4" required></textarea>
</p>
        <label for="Due_Date">Project Timeline:</label>
        <input type="text" id="Due_Date" name="Due_Date" required>
</p>
        <label for="Date_Submitted">Date Submitted:</label>
        <input type="text" id="Date_Submitted" name="Date_Submitted" required>
</p>
        <input type="submit" value="Submit Proposal">
    </form>
</body>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Req_Description = htmlspecialchars($_POST["Req_Description"]);
    $Due_Date = htmlspecialchars($_POST["Due_Date"]);
    $Date_Submitted = htmlspecialchars($_POST["Date_Submitted"]);

    if (empty($Req_Description) || empty($Due_Date) || empty($Date_Submitted)) {
        echo "Please fill in all fields.";
    } else {
        // Here you can add your own code to process the form data
        echo "Form submitted successfully!";
    }
}
?>

</html>
