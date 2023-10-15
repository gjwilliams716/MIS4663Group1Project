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
        <label for="project_description">Project Description:</label>
        <textarea id="project_description" name="project_description" rows="4" required></textarea>
</p>
        <label for="project_timeline">Project Timeline:</label>
        <input type="text" id="project_timeline" name="project_timeline" required>
</p>
        <label for="project_datesubmitted">Date Submitted:</label>
        <input type="text" id="project_datesubmitted" name="project_datesubmitted" required>
</p>
        <input type="submit" value="Submit Proposal">
    </form>
</body>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_description = htmlspecialchars($_POST["project_description"]);
    $project_timeline = htmlspecialchars($_POST["project_timeline"]);
    $project_datesubmitted = htmlspecialchars($_POST["project_datesubmitted"]);

    if (empty($project_description) || empty($project_timeline) || empty($project_datesubmitted)) {
        echo "Please fill in all fields.";
    } else {
        // Here you can add your own code to process the form data
        echo "Form submitted successfully!";
    }
}
?>

</html>
