<?php
$title = "Lists";
$DIR = dirname(__FILE__, 2);
$BASE_URL = (isset($_SERVER['HTTPS']) && $_SEVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$BASE_URL .= $_SERVER['HTTP_HOST'];

include_once $DIR .'/templates/head.php';
include_once $DIR .'/templates/header.php';
include_once $DIR .'/nav.php';
?>
<div class="container">
    <section>
        <p>We use lists all the time in everyday life. Things like shopping lists, lists of students in a classroom, to-do lists, top 10 lists.  The list goes on. (see what I did there...) Lists are a vital part of our day to day, and are used extensively on webpages.</p>
        <p>lists use a pair of tags.  The first tag is declares the list <code>&lt;ol&gt; &lt;/ol&gt;</code>. The second tag(s) declares the items in the list <code>&lt;li&gt; &lt;/li&gt;</code>. A list can have as many list items as the developer wants. Lists come in two varieties.  The ordered list <code>&lt;ol&gt; &lt;/ol&gt;</code> and the unordered list <code>&lt;ul&gt; &lt;/ul&gt;</code>.  The individual items are always called the list itmes <code>&lt;li&gt; &lt;/li&gt;</code>. The list items can contain any content.  It could be as simple text, or it could be whole blog articles copmlete with heading, content, images, and links.</p>
        <div class="callout">
            <h3>Question</h3>
            <p>Can you name several scenarios where a ordered list would be preferred?  What about an unordered list?</p>
        </div>
    </section>
    <section>
        <h2>Ordered Lists</h2>
        <p>Ordered lists use the <code>&lt;ol&gt; &lt;/ol&gt;</code> tags. All of the list items between these two tags will be ordered numerically.</p>
        <div class="callout">
            <h3>Try it for yourself</h3>
            <ol>
                <li>Open the command prompt.</li>
                <li>Change directory into your 'Documents' directory.</li>
                <li>Create a new directory called 'lists'.</li>
                <li>Change into the new 'lists' directory.</li>
                <li>Create an index.html file.</li>
                <li>add the boilerplate.</li>
                <li>in the body of the web page, create an ordered list of your 5 favorite foods.</li>
            </ol>
        </div>
        <section>
            <h3>Type Attribute</h3>
            <p>The ordered list does not need to be strictly numeric.  The ordering can numberic, capital letters, lowercase letters, uppercase roman numerals, or lowercase roman numerals.  You can determine this by using the 'type' attribute</p>
            <ul>
                <li><code>&lt; ol type="1"&gt;</code> - This is numberic, and the default behaviour.</li>
                <li><code>&lt; ol type="A"&gt;</code> - This will make the list use capital letters.</li>
                <li><code>&lt; ol type="a"&gt;</code> - This will make the list use lowercase letters.</li>
                <li><code>&lt; ol type="I"&gt;</code> - This is for uppercase roman numerals.</li>
                <li><code>&lt; ol type="i"&gt;</code> - This is for lowercase roman numerals.</li>
            </ul>
            <div class="two-column">
                <div class="codeblock">
                    &lt;ol type="A"&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Apples&lt;/li&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Milk&lt;/li&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Paper Towels&lt;/li&gt;<br>
                    &lt;/ol&gt;<br>
                </div>
                <div style="margin-left:2rem;">
                    <ol type="A">
                        <li>Apples</li>
                        <li>Milk</li>
                        <li>Paper Towels</li>
                    </ol>
                </div>
                
            </div>
            <div class="callout">
                <h3>Try it for yourself</h3>
                <ol type="I">
                    <li>Create a new file called "ordered-lists.html"</li>
                    <li>Add the boilerplate</li>
                    <li>In the body of the webpage create 5 lists. One for each type.  Each list should be 3-5 items long.</li>
                </ol>
            </div>
        </section>
    </section>
    <section>
        <h2>Unordered lists</h2>
        <p>Not every list needs to have an order to it. For example, a list of images from a recent vacation, wouldn't need to be in a specific order. To create an unordered list, use the <code>&lt;ul&gt; &lt;/ul&gt;</code>. The list items are exactly the same as they are for ordered lists.</p>
        <div class="two-column">
                <div class="codeblock">
                    &lt;ul&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Apples&lt;/li&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Milk&lt;/li&gt;<br>
                    &ensp;&ensp;&lt;li&gt;Paper Towels&lt;/li&gt;<br>
                    &lt;/ul&gt;<br>
                </div>
                <div style="margin-left:2rem;">
                    <ul>
                        <li>Apples</li>
                        <li>Milk</li>
                        <li>Paper Towels</li>
                    </ul>
                </div>
                
            </div>
            <div class="callout">
                <h3>Try it for yourself</h3>
                <ul >
                    <li>Create a new file called "unordered-lists.html"</li>
                    <li>Add the boilerplate</li>
                    <li>In the body of the webpage create a list of 10 places you would like to visit someday.</li>
                </ul>
            </div>
    </section>
    <section>
        <h2>Website Navigation</h2>
        <p>Website navigation is the most common example of an unordered list you will see on websites. The navigation is on almost everypage of a website.  Visit several random websites and take a look at how different their navigations look.  That is all css and javascript to make them look different.  Under the hood, they are a simple unordered list of links that will take you to different parts of the website.</p>
    </section>
</div>
<?php include_once $DIR . 'templates/footer.php'; ?>