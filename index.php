<?php
define('ABS_PATH', __DIR__);

require_once('./applicants.service.php');
$applicantsService = new ApplicantsService();
$users = $applicantsService->get_users_from_database();


$jobTitle = (isset($_GET['jobTitle'])) ? $_GET['jobTitle'] :'';
echo 'Required Position: '. $jobTitle .'' . PHP_EOL;

$experience = (isset($_GET['experienceNeeded'])) ? $_GET['experienceNeeded'] :'';
echo 'Required Experience: '. $experience .'' . PHP_EOL;

$level = (isset($_GET['positionLevel'])) ? $_GET['positionLevel'] :'';
echo 'Required level: '. $level .'' . PHP_EOL;

// $users = get_users_by_level($positionLevel);
$users = $applicantsService->get_selected_users("senior", "4", ["C#"]);
// $users = get_selected_users($experience, $level, $skills);
include_once(ABS_PATH . '/views/head.view.php');
include_once(ABS_PATH . '/views/welcome.view.php');
include_once(ABS_PATH . '/views/form.view.php');

foreach ($users as $applicant){
    include(ABS_PATH . '/views/applicant-summary.view.php');
}
include_once(ABS_PATH . '/views/footer.view.php');
