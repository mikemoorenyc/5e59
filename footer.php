<?php global $siteDir; global $homeURL;?>



<!-- SCROLL DEBUG -->
<!--
<div id="scroll-debug" style="position:fixed; top:50%; width: 100%; border-top: 1px solid red;"></div>
-->
<script async="true" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script id="inline-scripts">
<?php $inlinejs = file_get_contents($siteDir.'js/inline-load.js'); dirReplacer($inlinejs);?></script>
</body>
</html>
