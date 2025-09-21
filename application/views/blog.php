<!--==========================-->
<!--=         Banner         =-->
<!--==========================-->
<section class="page-banner blog-details-banner">
    <div class="container">
        <div class="page-title-wrapper">
            <ul class="post-meta color-theme">
                <li><a href="javascript://">Enterests</a></li>
            </ul>
            <h1 class="page-title">The Blog</h1>

            <ul class="bradcurmed">
                <li><a href="<?=BASEURL?>" rel="noopener noreferrer">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
        <!-- /.page-title-wrapper -->
    </div>
    <!-- /.container -->

    <svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
        <path fill-rule="evenodd" stroke="rgb(0, 0, 0)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
    </svg>

    <ul class="animate-ball">
        <li class="ball"></li>
        <li class="ball"></li>
        <li class="ball"></li>
        <li class="ball"></li>
        <li class="ball"></li>
    </ul>
</section>
<!-- /.page-banner -->


<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<section class="about">
    <div class="container">
        <div class="row">
            
            <?php foreach ($blog as $keyHBlog => $hblog): ?>
                <div class="col-lg-4 col-md-6">
                    <article class="blog-post color-two wow pixFadeLeft" data-wow-delay="0.4s">
                        <div class="feature-image" style="text-align: center;">
                            <a href="<?=BASEURL.'post/'.$hblog['slug']?>">
                                <img src="<?=UPLOADS.$hblog['image']?>" alt="blog-thumb">
                            </a>
                        </div><!-- /.feature-image -->
                        <div class="blog-content">
                            <ul class="post-meta">
                                <li><a href="<?=BASEURL.'post/'.$hblog['slug']?>"><?=date('F d, Y',strtotime($hblog['at']))?></a></li>
                            </ul>

                            <h3 class="entry-title">
                                <a href="<?=BASEURL.'post/'.$hblog['slug']?>"><?=$hblog['title']?></a>
                            </h3>

                            <a href="<?=BASEURL.'post/'.$hblog['slug']?>" class="post-author"><img src="<?=IMG?>logo.webp" alt="author" width="25">Team Enterests</a>
                        </div><!-- /.blog-content -->
                    </article><!-- /.blog-post -->
                </div><!-- /.col-lg-4 col-md-6 -->
            <?php endforeach ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.about -->
