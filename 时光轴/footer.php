</div>

<section class="foot clearfix">
    
<section class="sidebar_sect">
    <aside id="sidebar" class="blackbg">
	   <?php dynamic_sidebar( 'dpt' ); ?>
       <div class="clearfix"></div>
    </aside>
</section>

<footer id="footer" role="contentinfo" class="footer clearfix">

	<a href="http://www.2zzt.com" title="WordPress">WordPress</a> <a href="http://coolecho.net" title="IceEnd">绘枫和畅</a> |   <a href="http://www.miitbeian.gov.cn/" title="beian">鄂ICP备14020745号</a>

	<?php $dpt_tjt = get_option('dpt_tongji'); if ( !empty($dpt_tjt) ) { echo $dpt_tjt;}; ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>

	<?php wp_footer();  ?>

</footer>

</section>

</body>
</html>