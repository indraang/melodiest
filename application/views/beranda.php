<div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Terbaru</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul class="category">
						  	   <h3>Telusuri Semua</h3>
							      <li><a href="#">Appliances</a></li>
							      <li><a href="#">Sports Equipments</a></li>
							      <li><a href="#">Computers & Electronics</a></li>
							      <li><a href="#">Office supplies</a></li>
							      <li><a href="#">Health & Beauty</a></li>
							       <li><a href="#">Home & Garden</a></li>
							       <li><a href="#">Apparel</a></li>
							       <li><a href="#">Toys & Games</a></li>
							       <li><a href="#">Automotive</a></li>
						  	 </ul>
						</div>		
						<div class="buters-guide">
						<h3>Panduan Membeli</h3>
						<p><span>We want you to be happy with your purchase.</span></p>	
						<p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
					  </div>	
					  <div class="add-banner">
					  	<img src="images/camera.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Electronics</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
					    <div class="add-banner add-banner2">
					  	<img src="images/computer.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Computers</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Telusuri Semua</h3>
    	    	
	            <div class="section group">
	            	<?php foreach($tb as $key) : ?>
				  <div class="grid_1_of_4 images_1_of_4">

					 <h4><a href="<?= site_url();?>beranda/detail/<?= $key->id_brg; ?>"><?= $key->nama_brg;?></a></h4>
					  <img src="<?= site_url(); ?>assets/unggah/<?= $key->gambar;?>" width=200px;>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. <?= number_format($key->harga_brg, 0,',','.');?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="<?= site_url();?>beranda/detail/<?= $key->id_brg; ?>"><i class="fa fa-shopping-cart"></i> Beli</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<?php endforeach ?>
			    </div>
			    
			    
			    <div class="product-articles">
			      <h3>Telusuri Semua</h3>
			      <ul class="articles">
			      	<li>
			      <div class="article">
			      	<p><span>Aenean vitae massa dolor</span></p>
			      	<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      <li>
			       <div class="article">
			      	<p><span>Phasellus sollicitudin consectetur</span></p>
			      	<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      </ul>
			    </div>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>