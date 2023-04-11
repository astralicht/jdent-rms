<?php
$PAGE_TITLE = "API Test";
?>

<script src="<?= Config::$DOCUMENT_ROOT . "scripts/fetch.js" ?>"></script>

<style>
    body {
        background-color: var(--darker-color);
        color: white;
    }
</style>

<div flex="v" no-gap>
    <?php include_once("templates/_thin_nav.php"); ?>
    <div class="main-content" flex="v" padding-wider flex-grow="1">
        <header>
            <h1>API Test</h1>
        </header>
    </div>
</div>

<script>
    function apiCallback(obj) {
        console.log(obj)
    }

    sendRequest(
        "api/test",
        "POST",
        {
            "Content-Type": "application/json",
            "Request-Type": "API",
        },
        apiCallback,
    )
</script>