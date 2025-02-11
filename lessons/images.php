<?php
$title = "Images";
$DIR = dirname(__FILE__, 2);
$BASE_URL = (isset($_SERVER['HTTPS']) && $_SEVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$BASE_URL .= $_SERVER['HTTP_HOST'];

include_once $DIR .'/templates/head.php';
include_once $DIR .'/templates/header.php';
include_once $DIR .'/nav.php';
?>
<div class="container">
    <section>
        <h2>What are Image Tags</h2>
        <p>Image tags are a special type of tag used to embed media into a webpage. Like anchor tags, they require several attributes to function properly.</p>
        <article>
            <h3>Img Tag</h3>
            <p>The img tag is for embedding images into a webpage. It requires the 'src' attribute. It is also our first example of an html tag that does not come in a pair. This is becuase the 'src' attribute defines the content of the image, therefore there is no need for a content area between the tags.</p>
            <div class="two-column">
                <code>&lt;img src="#"&gt;</code>
            </div>
            <p>The source can be a local path to an image ex: <code>../images/dwarf.jpg</code> or an absolute path ex: <code>https://example.com/images/dwarf.jpg</code>. With images it is recommended to use absolute path.</p>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>"&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>">
            </div>
        </article>
        <article>
            <h3>Alt Attribute</h3>
            <p>One of the primary reasons we use semantic HTML is for accessibility. Screen readers for disabled persons rely on semtanitc HTML and attributes to help the user understand what is on the page. The alt attribute is a descriptor that screen readers use to inform people with visual impairments with what the image is.  The alt attribute is not strictly required, but should always be used.</p>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer"&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer">
            </div>
        </article>
        <article>
            <h3>Height and Width Attributes</h3>
            <p>Notice how the images above seem too big for the conent they are around. This is because, without the height and width attributes images will be displayed in their native size. Due to the variety in screen sizes this rarely works out.  The 'height' and 'width' attributes resize the iamge to fit the required dimensions.  It should be noted that in modern web development, this is done through css, but these attributes were created before css.</p>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=100 height=100&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=100 height=100>
            </div>
            <p>Since both the height and width attributes are optional, the browser will attempt to scale the image proportionately if only one is present. If both are present, the image will be stretched / shrunk to fit the dimensions.</p>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=300 height=100&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=300 height=100>
            </div>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=100 height=300&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=100 height=300>
            </div>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=200 &gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=200>
            </div>
            <div class="two-column">
                <code>&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" height=300&gt;</code>
                <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" height=300>
            </div>
        </article>
        <article>
            <h3>Figure and Figcaption</h3>
            <p>Figure and figcation are not attributes of an image but rather extra tags used with images. Many times with an image, we want to put some sort of caption along with it. Many times this is the same as the alt attribute.  In the case of graphs it is a couple sentences describing the chart. In order to add in a caption, we need to wrap the image within a figure tag and include the figcaption tag along with the img tag</p>
            <div class="two-column">
                <div class="codeblock">
                    &lt;figure&gt;<br>
                        &ensp;&ensp;&lt;img src="<?php echo $BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=200 &gt;<br>
                        &ensp;&ensp;&lt;figcaption&gt;Dwarf holding hammer&lt;/figcaption&gt;<br>
                    &lt;/figure&gt;
                </div>
                <figure>
                    <img src="<?=$BASE_URL . '/images/dwarf.png'?>" alt="dwarf holding hammer" width=200>
                    <figcaption>Dwarf holding hammer</figcaption>
                </figure>
            </div>
        </article>
    </section>
</div>
<?php include_once $DIR . 'templates/footer.php'; ?>