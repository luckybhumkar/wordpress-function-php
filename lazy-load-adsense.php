
add_action('wp_footer', 'your_function_name');
function your_function_name(){
?>

<!-- Lazy load AdSense-->
<!--noptimize-->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>
<!--/noptimize-->
<?php
};
//END: Custom JS script at footer
//Remove or comment line from AdSense Ad-Script ➔ <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
