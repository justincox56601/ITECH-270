<?php
$title = "Lessons";
$DIR = __DIR__;

include_once($DIR . '/templates/head.php');
include_once($DIR . '/templates/header.php');
include_once($DIR . '/nav.php');
?>
<div class="container">
    <section>
        <ul>
            <li>
                <a href="boilerplate.html"><h3>Boilerplate Markup</h3></a>
                <p>Every web page needs standard boilerpalte markup before we can even get started.</p>
            </li>
            <li>
                <a href="tags.html"><h3>HTML Tags</h3></a>
                <p>What are tags and how do they function within a webpage?</p>
            </li>
            <li>
                <a href="semantic.html"><h3>Semantic HTML</h3></a>
                <p>Semantic html tells tells the browser what kind of content is being displayed.</p>
            </li>
        </ul>
    </section>
</div>
<?php include_once($DIR . '/footer.php'); ?>