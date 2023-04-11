<?php
$PAGE_TITLE = "Home";
?>

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
            <h1>Login</h1>
        </header>
        <section>
            <div class="card" light fit-content>
                <form action="" flex="v">
                    <input type="email" input placeholder="Email">
                    <input type="password" input placeholder="Password">
                    <button good hover white-text>Submit</button>
                </form>
            </div>
        </section>
    </div>
</div>