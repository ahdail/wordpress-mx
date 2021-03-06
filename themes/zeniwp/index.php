<?php get_header(); ?>

<!-- MAIN -->
<div id="main">	
	<div class="wrapper clearfix">
	
		

		<!-- posts list -->
    	<div id="posts-list">
    	
    		<h2 class="page-heading"><span>BLOG</span></h2>	
    	
    	
    		
    		<?php //get_template_part('partials/loop', 'main'); ?>

			<article class="format-standard">
				<div class="entry-date"><div class="number">23</div> <div class="year">Sep, 2011</div></div>
				<div class="feature-image">
					<a href="<?php bloginfo('template_url'); ?>/img/slides/01.jpg" data-rel="prettyPhoto"><img src="<?php bloginfo('template_url'); ?>/img/slides/01.jpg" alt="Alt text" /></a>
				</div>
				<h2  class="post-heading"><a href="single.html">Lorem ipsum dolor ametLorem ipsum dolor ametLorem ipsum dolor ametLorem ipsum dolor amet</a></h2>
				<div class="excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.
				</div>
				<a href="single.html" class="read-more">continue &#8594;</a>
				<div class="meta">
					<div class="categories">In <a href="#">Category 1</a>, <a href="#">Category 2</a></div>
					<div class="comments"><a href="#">5 comments </a></div>
					<div class="user"><a href="#">By admin</a></div>
				</div>
			</article>
			
			
			
			
			<!-- page-navigation -->
			<div class="page-navigation clearfix">
			<div class="nav-next">
				<a  href="#">&#8592; Older Entries </a>
			</div>
			<div class="nav-previous">
			    <a href="#">Newer Entries &#8594;</a> 
			</div>
			<!--ENDS page-navigation -->
			
		</div>
    		
    		
    	</div>
    	<!-- ENDS posts list -->

		<!-- sidebar -->
    	<aside id="sidebar">
    		
    		<ul>
        		<li class="block">
	        		<h4>CATEGORIES</h4>
					<ul>
						<li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Print</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Print</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
						<li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
					</ul>
        		</li>
        		
        		<li class="block">
	        		<h4>ARCHIVES</h4>
					<ul>
						<li class="cat-item"><a href="#" title="View all posts">January</a></li>
						<li class="cat-item"><a href="#" title="View all posts">February</a></li>
						<li class="cat-item"><a href="#" title="View all posts">March</a></li>
					</ul>
        		</li>
    		
    		</ul>
    		
    		<em id="corner"></em>
    	</aside>
		<!-- ENDS sidebar -->
    	
	</div>
</div>
		<!-- ENDS MAIN -->

<?php get_footer(); ?>