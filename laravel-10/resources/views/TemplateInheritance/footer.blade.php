<footer>
  <p>&copy; 2024 My Project. All rights reserved.</p>
</footer>
<!-- Common JS -->
<script src="/js/common.js"></script>
<!-- Page specific JS -->
<?php if(isset($pageJs)) : ?>
  <script src="/js/<?php echo $pageJs; ?>.js"></script>
<?php endif; ?>
</body>
</html>
