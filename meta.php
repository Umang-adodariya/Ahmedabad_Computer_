<?php
$page = basename($_SERVER['PHP_SELF'], ".php");
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

switch ($page) {
    case "index":
        $title = "Ahmedabad Computer Education";
        $description = "Ahmedabad Computer Education";
        $keywords = "Ahmedabad Computer Education";
        $robots = "INDEX,FOLLOW";
        $canonical = $currentUrl;
        $ogURL = $currentUrl;
        $ogImage = "https://ahmedabadcomputereducation.com/assets/img/ahm-logo-new.png";
        break;

    case "full-stack-blockchain-development-course":
        $title = "Full Stack Blockchain development Course";
        $description = "Master blockchain and web development with our Full Stack Blockchain Development Course. Learn smart contracts, dApps, and build real-world projects.";
        $keywords = "Full stack blockchain development course, blockchain certification course";
        $robots = "INDEX,FOLLOW";
        $canonical = $currentUrl;
        $ogURL = $currentUrl;
        $ogImage = "https://ahmedabadcomputereducation.com/assets/img/home-course-details/BlockChainReact.jpg";
        break;
    default:
        $title = "Ahmedabad Computer Education";
        $description = "Ahmedabad Computer Education";
        $keywords = "Ahmedabad Computer Education";
        $robots = "INDEX,FOLLOW";
        $canonical = $currentUrl;
        $ogURL = $currentUrl;
        $ogImage = "https://ahmedabadcomputereducation.com/assets/img/ahm-logo-new.png";
        break;
}
?>
