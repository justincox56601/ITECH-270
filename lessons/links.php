<?php
$title = "Links";
$DIR = dirname(__FILE__, 2);

include_once $DIR .'/templates/head.php';
include_once $DIR .'/templates/header.php';
include_once $DIR .'/nav.php';
?>
<div class="container">
    <section>
        <h2>What are anchor tags</h2>
        <p>Anchor tags, commonly called links or link tags are html tags used for navigation. Anchor tags are an example of tags that REQUIRE attributes in order to work properly.</p>
        <div class="two-column">
            <code>&lt;a href="address"&gt;Link Text&lt;/a&gt;</code>
        </div>
        <p>The above example shows the minimum needed to make an anchor tag function. The required attribute is the href attribute.  Href stands for hyperlink reference.  It is the address the user is to be taken to once the link is clicked. The body of the anchor tag, or the link text, is also required for the link to display.  Without it, the html would be on the page, but not render as there would be nothing to render.</p>
    </section>
    <section>
        <h2>HREF Attribute</h2>
        <p>The href, hypertext reference, is the destination to user will be taken to once they click on the link.</p>
        <article>
            <h3>Web Address</h3>
            <p>A web address is by far the most common destination used with links.  They come in two flavors, absolute and relative.  Absolute is the full web address for the page.  ex: https://google.com. The relative address relative to the website. ex: ../otherpage.html.  While both work, it is currently the standard to use the absolute address when creating links. The relative path relies on folder / path structure which are liable to change overtime.</p>
            <div class="two-column">
                <code>&lt;a href="https://google.com"&gt;google.com&lt;/a&gt;</code>
                <a href="https://google.com">google.com</a>
            </div>
        </article>
        <article id="anchors">
            <h3>Anchors</h3>
            <p >Anchors are other places on the current page that links can take the user to.  For example, at the bottom of this page, there is a wall of dummy text.  At the bottom of that is a section is where I want my user to be taken to.</p>
            <div class="two-column">
                <code>&lt;a href="#exciting-content"&gt;Click Here to see exciting conent&lt;/a&gt;</code>
                <a href="#exciting-content">Click Here to see exciting conent</a>
            </div>
        </article>
        <article>
            <h3>Email Addresses</h3>
            <p>Email addresses can be used as the link destination as well.  using the "mailto:abc@..." syntax indicates to the browser that this link is intended to send an email message.  When used the native email application of the device will be opened and the recipent will be automatically filled in with the recipient from the href attribute</p>
            <div class="two-column">
                <code>&lt;a href="mailto:example@email.com"&gt;Send me an email!&lt;/a&gt;</code> 
                <a href="mailto:joe@example.com">Send me an email</a>
            </div>
        </article>
        <article>
            <h3>Telephone Numbers</h3>
            <p>Just like how email addresses open the native email application, using a telephone number will open the native phone application and attempt to call the number from the href attribute.  The phone number will look a little different than many are used to. The phone number will start with a + symbol followed by the country code (1 for the USA) and then the full phone number. ex: +11235555555 would be +1 for the USA then (123)555-5555</p>
            <div class="two-column">
                <code>&lt;a href="tel:+112355555"&gt;Call me at (123) 555-5555!&lt;/a&gt;</code> 
                <a href="tel:+11235555555">Call me at (123) 555-5555!</a>
            </div>
        </article>
        <article>
            <h3>Javascript</h3>
            <p>Javascript is a client side scripting language used for manipulating the stucture and interactivity of a webpage.  Javascript scripts can be executed through links as well.</p>
            <div class="two-column">
            <code>&lt;a href="javascript:alert('Hello, this is javascript running from an anchor tag.');"&gt;Click me!&lt;/a&gt;</code> 
            <a href="javascript:alert('Hello, this is javascript running from an anchor tag.');">Click me!</a>
            </div>
        </article>
    </section >
    <section>
        <h2>Target Attribute</h2>
        <p>The target attribute describes where to open the link at. The two most common values will be _self and _blank.</p>
        <article>
            <h3>_self</h3>
            <p>_self is the default.  The link will open in the same tab the user is currently in.</p>
            <div class="two-column">
                <code>&lt;a href="#" target="_self"&gt;Click Me to open in the same tab&lt;/a&gt;</code>
                <a href="#" target="_self">Click me to open in the same tab</a>
            </div>
        </article>
        <article>
            <h3>_blank</h3>
            <p>_blank is most often used target since _self is the default so it is often not included. _blank will open the link in a new window or tab.</p>
            <div class="two-column">
                <code>&lt;a href="#" target="_blank"&gt;Click me to open in a new tab&lt;/a&gt;</code>
                <a href="#" target="_blank">Click me to open in a new tab</a>
            </div>
            <p>The rule of thumb is, if the link will take the user to another page within the same site, use _self. If the link is a different website or a piece of media like a PDF, then use _blank.</p>
        </article>
    </section>
    <section style="margin-top:3rem;">
        <h3>Wall of Dummy Text</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores cupiditate corporis cum officia delectus ullam ipsum vero nostrum perspiciatis! Non qui voluptates pariatur quibusdam corporis, dolorem sapiente ex adipisci in nulla culpa quidem, at tenetur assumenda quae esse reprehenderit voluptas rerum hic, veritatis sint? Voluptatum quam ea harum, fugit tempore accusamus. Eveniet quidem sit, ratione a quaerat inventore maxime necessitatibus quis, voluptates voluptas neque consectetur velit, blanditiis aperiam facere. Beatae aspernatur voluptates quidem explicabo facere enim mollitia iure sint laudantium ex fugiat, quas dolor, distinctio reiciendis similique veniam sit. Recusandae asperiores porro iste, repellat eum totam soluta ipsam excepturi, cum minima eaque molestiae dolor odio culpa nostrum, explicabo ratione earum? Consectetur sunt sapiente eos deleniti pariatur. Magni facilis fuga vel sit architecto provident, eos perferendis? Quidem officia veritatis autem earum enim ipsa sed voluptates consectetur perspiciatis porro delectus iure ullam id dolorum commodi corporis exercitationem, similique soluta unde. Cumque commodi nihil quam, blanditiis voluptatum dolorum officiis quidem animi quia distinctio iusto sit in dolor deleniti ipsa rerum placeat accusamus. Alias maiores enim optio expedita, ullam eveniet ipsum dolore modi repellendus, mollitia explicabo saepe dolores aliquid. Laudantium ea nisi soluta harum inventore, labore minus, aliquam accusamus natus distinctio provident maxime et assumenda neque quae iusto expedita veniam odio ipsam quos tempora esse! Eveniet doloremque veniam aspernatur, placeat excepturi unde esse ipsum totam rerum fugit sint ex facere at dolorum! Totam accusamus corrupti ipsa quae obcaecati culpa deleniti est sapiente modi ex atque, cupiditate aliquam, unde qui delectus nulla dolore error voluptatibus in odit alias quasi quibusdam ducimus perspiciatis. Natus ratione fugit ex culpa beatae quasi cum quos laboriosam? Voluptatum velit, possimus, expedita eligendi commodi, inventore id cupiditate beatae sit repellendus laborum? Nesciunt impedit, eligendi officia consectetur, totam aliquam odit dolore harum sapiente alias dolorem praesentium quis tempore fugit qui deleniti voluptatem corrupti, ut natus ipsum dignissimos quae! Hic perferendis, molestias ullam at odit natus quia dignissimos praesentium exercitationem explicabo, quos recusandae! Repellat, exercitationem facere! Maxime doloremque quibusdam eum at repudiandae. Repellendus nulla omnis ullam nam vero temporibus porro similique ipsa excepturi minus natus perferendis iusto tempora quia earum distinctio unde soluta facere officiis adipisci, expedita libero! Perferendis fugiat commodi modi porro eligendi doloremque, saepe ratione quasi beatae corporis est vitae ducimus nostrum officia sint. Impedit quod architecto maiores dicta, non, voluptas repellat optio magni, voluptates possimus libero veniam odio ipsum sint quaerat delectus. Vel eaque aut corrupti odio cupiditate commodi cum saepe excepturi fugiat error! Culpa doloremque ducimus deleniti, perspiciatis quam necessitatibus quisquam facere iure alias at, reiciendis commodi autem earum aspernatur accusantium corporis, quos distinctio beatae nisi quibusdam expedita dignissimos nostrum odit! Sit architecto doloribus, quasi minima nemo libero, perspiciatis porro cupiditate, voluptatibus deserunt exercitationem illum animi non unde quis atque accusamus quae cumque? Impedit perspiciatis dolorum totam ducimus iusto, accusamus officia saepe dolor recusandae facere, tenetur error incidunt libero ad placeat. Architecto sed cumque inventore corporis necessitatibus sapiente voluptatum accusantium recusandae corrupti maxime quae eum, dolore vel ab. Dicta architecto enim et eaque omnis error rem nisi, modi non!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores cupiditate corporis cum officia delectus ullam ipsum vero nostrum perspiciatis! Non qui voluptates pariatur quibusdam corporis, dolorem sapiente ex adipisci in nulla culpa quidem, at tenetur assumenda quae esse reprehenderit voluptas rerum hic, veritatis sint? Voluptatum quam ea harum, fugit tempore accusamus. Eveniet quidem sit, ratione a quaerat inventore maxime necessitatibus quis, voluptates voluptas neque consectetur velit, blanditiis aperiam facere. Beatae aspernatur voluptates quidem explicabo facere enim mollitia iure sint laudantium ex fugiat, quas dolor, distinctio reiciendis similique veniam sit. Recusandae asperiores porro iste, repellat eum totam soluta ipsam excepturi, cum minima eaque molestiae dolor odio culpa nostrum, explicabo ratione earum? Consectetur sunt sapiente eos deleniti pariatur. Magni facilis fuga vel sit architecto provident, eos perferendis? Quidem officia veritatis autem earum enim ipsa sed voluptates consectetur perspiciatis porro delectus iure ullam id dolorum commodi corporis exercitationem, similique soluta unde. Cumque commodi nihil quam, blanditiis voluptatum dolorum officiis quidem animi quia distinctio iusto sit in dolor deleniti ipsa rerum placeat accusamus. Alias maiores enim optio expedita, ullam eveniet ipsum dolore modi repellendus, mollitia explicabo saepe dolores aliquid. Laudantium ea nisi soluta harum inventore, labore minus, aliquam accusamus natus distinctio provident maxime et assumenda neque quae iusto expedita veniam odio ipsam quos tempora esse! Eveniet doloremque veniam aspernatur, placeat excepturi unde esse ipsum totam rerum fugit sint ex facere at dolorum! Totam accusamus corrupti ipsa quae obcaecati culpa deleniti est sapiente modi ex atque, cupiditate aliquam, unde qui delectus nulla dolore error voluptatibus in odit alias quasi quibusdam ducimus perspiciatis. Natus ratione fugit ex culpa beatae quasi cum quos laboriosam? Voluptatum velit, possimus, expedita eligendi commodi, inventore id cupiditate beatae sit repellendus laborum? Nesciunt impedit, eligendi officia consectetur, totam aliquam odit dolore harum sapiente alias dolorem praesentium quis tempore fugit qui deleniti voluptatem corrupti, ut natus ipsum dignissimos quae! Hic perferendis, molestias ullam at odit natus quia dignissimos praesentium exercitationem explicabo, quos recusandae! Repellat, exercitationem facere! Maxime doloremque quibusdam eum at repudiandae. Repellendus nulla omnis ullam nam vero temporibus porro similique ipsa excepturi minus natus perferendis iusto tempora quia earum distinctio unde soluta facere officiis adipisci, expedita libero! Perferendis fugiat commodi modi porro eligendi doloremque, saepe ratione quasi beatae corporis est vitae ducimus nostrum officia sint. Impedit quod architecto maiores dicta, non, voluptas repellat optio magni, voluptates possimus libero veniam odio ipsum sint quaerat delectus. Vel eaque aut corrupti odio cupiditate commodi cum saepe excepturi fugiat error! Culpa doloremque ducimus deleniti, perspiciatis quam necessitatibus quisquam facere iure alias at, reiciendis commodi autem earum aspernatur accusantium corporis, quos distinctio beatae nisi quibusdam expedita dignissimos nostrum odit! Sit architecto doloribus, quasi minima nemo libero, perspiciatis porro cupiditate, voluptatibus deserunt exercitationem illum animi non unde quis atque accusamus quae cumque? Impedit perspiciatis dolorum totam ducimus iusto, accusamus officia saepe dolor recusandae facere, tenetur error incidunt libero ad placeat. Architecto sed cumque inventore corporis necessitatibus sapiente voluptatum accusantium recusandae corrupti maxime quae eum, dolore vel ab. Dicta architecto enim et eaque omnis error rem nisi, modi non!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores cupiditate corporis cum officia delectus ullam ipsum vero nostrum perspiciatis! Non qui voluptates pariatur quibusdam corporis, dolorem sapiente ex adipisci in nulla culpa quidem, at tenetur assumenda quae esse reprehenderit voluptas rerum hic, veritatis sint? Voluptatum quam ea harum, fugit tempore accusamus. Eveniet quidem sit, ratione a quaerat inventore maxime necessitatibus quis, voluptates voluptas neque consectetur velit, blanditiis aperiam facere. Beatae aspernatur voluptates quidem explicabo facere enim mollitia iure sint laudantium ex fugiat, quas dolor, distinctio reiciendis similique veniam sit. Recusandae asperiores porro iste, repellat eum totam soluta ipsam excepturi, cum minima eaque molestiae dolor odio culpa nostrum, explicabo ratione earum? Consectetur sunt sapiente eos deleniti pariatur. Magni facilis fuga vel sit architecto provident, eos perferendis? Quidem officia veritatis autem earum enim ipsa sed voluptates consectetur perspiciatis porro delectus iure ullam id dolorum commodi corporis exercitationem, similique soluta unde. Cumque commodi nihil quam, blanditiis voluptatum dolorum officiis quidem animi quia distinctio iusto sit in dolor deleniti ipsa rerum placeat accusamus. Alias maiores enim optio expedita, ullam eveniet ipsum dolore modi repellendus, mollitia explicabo saepe dolores aliquid. Laudantium ea nisi soluta harum inventore, labore minus, aliquam accusamus natus distinctio provident maxime et assumenda neque quae iusto expedita veniam odio ipsam quos tempora esse! Eveniet doloremque veniam aspernatur, placeat excepturi unde esse ipsum totam rerum fugit sint ex facere at dolorum! Totam accusamus corrupti ipsa quae obcaecati culpa deleniti est sapiente modi ex atque, cupiditate aliquam, unde qui delectus nulla dolore error voluptatibus in odit alias quasi quibusdam ducimus perspiciatis. Natus ratione fugit ex culpa beatae quasi cum quos laboriosam? Voluptatum velit, possimus, expedita eligendi commodi, inventore id cupiditate beatae sit repellendus laborum? Nesciunt impedit, eligendi officia consectetur, totam aliquam odit dolore harum sapiente alias dolorem praesentium quis tempore fugit qui deleniti voluptatem corrupti, ut natus ipsum dignissimos quae! Hic perferendis, molestias ullam at odit natus quia dignissimos praesentium exercitationem explicabo, quos recusandae! Repellat, exercitationem facere! Maxime doloremque quibusdam eum at repudiandae. Repellendus nulla omnis ullam nam vero temporibus porro similique ipsa excepturi minus natus perferendis iusto tempora quia earum distinctio unde soluta facere officiis adipisci, expedita libero! Perferendis fugiat commodi modi porro eligendi doloremque, saepe ratione quasi beatae corporis est vitae ducimus nostrum officia sint. Impedit quod architecto maiores dicta, non, voluptas repellat optio magni, voluptates possimus libero veniam odio ipsum sint quaerat delectus. Vel eaque aut corrupti odio cupiditate commodi cum saepe excepturi fugiat error! Culpa doloremque ducimus deleniti, perspiciatis quam necessitatibus quisquam facere iure alias at, reiciendis commodi autem earum aspernatur accusantium corporis, quos distinctio beatae nisi quibusdam expedita dignissimos nostrum odit! Sit architecto doloribus, quasi minima nemo libero, perspiciatis porro cupiditate, voluptatibus deserunt exercitationem illum animi non unde quis atque accusamus quae cumque? Impedit perspiciatis dolorum totam ducimus iusto, accusamus officia saepe dolor recusandae facere, tenetur error incidunt libero ad placeat. Architecto sed cumque inventore corporis necessitatibus sapiente voluptatum accusantium recusandae corrupti maxime quae eum, dolore vel ab. Dicta architecto enim et eaque omnis error rem nisi, modi non!</p>
        <div id="exciting-content">
            <h3>Exciting Content</h3>
            <p>The container of this section has an id called "exciting-content"  This matches the href from the link above.</p>
            <p><code>&lt;div id="exciting-content"&gt; ... </code></p>
            <a href="#anchors">Click here to go back to Anchors</a>
        </div>
    </section>
    
</div>
<?php include_once $DIR . 'templates/footer.php'; ?>