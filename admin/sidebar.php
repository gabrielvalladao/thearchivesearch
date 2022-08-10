<div class="sidebar" data-background-color="white" data-active-color="danger">
<div style="width:240px;" class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin Panel
                </a>
            </div>

            <ul class="nav">
			<?php if(basename($_SERVER['PHP_SELF'])=='dashboard.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='add_bio.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="add_bio">
                        <i class="ti-plus"></i>
                        <p>Add Bio Graph</p>
                    </a>
                </li>
				 <?php if(basename($_SERVER['PHP_SELF'])=='add_qdata.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="add_qdata">
                        <i class="ti-plus"></i>
                        <p>Add Q-links</p>
                    </a>
                </li>
                <?php if(basename($_SERVER['PHP_SELF'])=='add_snippet.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="add_snippet">
                        <i class="ti-plus"></i>
                        <p>Add Snippets</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='keywords.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="keywords">
                        <i class="ti-plus"></i>
                        <p>Add Keywords</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='all_plinks.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="all_plinks">
                        <i class="ti-unlink"></i>
                        <p>Pending Links</p>
                    </a>
                </li>
				 <?php if(basename($_SERVER['PHP_SELF'])=='all_links.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="all_links">
                        <i class="ti-link"></i>
                        <p>All Links</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='all_bio.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="all_bio">
                        <i class="ti-pencil"></i>
                        <p>All Bio Graph</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='quick_data.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="quick_data">
                        <i class="ti-bolt-alt"></i>
                        <p>All Quick Links</p>
                    </a>
                </li>
                <?php if(basename($_SERVER['PHP_SELF'])=='all_snippets.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="all_snippets">
                        <i class="ti-bolt-alt"></i>
                        <p>All Snippets</p>
                    </a>
                </li>
                <?php if(basename($_SERVER['PHP_SELF'])=='update_crawl.php?id=1'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="update_crawl.php?id=1">
                        <i class="ti-bolt-alt"></i>
                        <p>Crawler</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='trash_links.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="trash_links">
                        <i class="ti-trash"></i>
                        <p>Trashed Links</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='trash_bio.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="trash_bio">
                        <i class="ti-trash"></i>
                        <p>All Trashed Bio</p>
                    </a>
                </li>
				<?php if(basename($_SERVER['PHP_SELF'])=='trash_qdata.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="trash_qdata">
                        <i class="ti-trash"></i>
                        <p>All Trashed Q-links</p>
                    </a>
                </li>
                <?php if(basename($_SERVER['PHP_SELF'])=='trash_snippet.php'){echo'<li class="active">';}else{echo'<li>';}?>
                    <a href="trash_snippet">
                        <i class="ti-trash"></i>
                        <p>All Trashed Snippets</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>