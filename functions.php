<?php
$file = $DOCUMENT_ROOT. "index.php";
$doc = new DOMDocument();
$doc->loadHTMLFile($file);
$xpath = new DOMXpath($doc);
//div[contains(concat(' ', normalize-space(@class), ' '), ' Test ')]

$moneyInitial = $xpath->query("/html/body/main/section/p[@id='moneyInitial']");
//$moneyInitial = $xpath->query(p[contains(class=' moneyInitial ')]);

    // $moneyInitial = $xpath->query(p[contains(concat(' ', normalize-space(@class), ' '), ' moneyInitial ')]);
    //  $moneyInitial = document.querySelector(".moneyInitial");
    function adjustValues($x) {
        if ($moneyInitial.innerText === "Welcome" || $moneyInitial.innerText === "0") {
        $moneyInitial.innerText = $x;
        } else {
            $valueInitial = $moneyInitial.innerText;
            $valueUpdated = $valueInitial.concat($x);
            $moneyInitial.innerText = $valueUpdated;
        }
    };
?>