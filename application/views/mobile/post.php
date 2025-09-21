<!--==========================-->
<!--=         Banner         =-->
<!--==========================-->
<section class="page-banner blog-details-banner">
    <div class="container">
        <div class="page-title-wrapper">
            <ul class="post-meta color-theme">
                <li><a href="javascript://"><?=date('F d, Y',strtotime($post['at']))?></a></li>
            </ul>
            <h1 class="page-title"><?=$post['title']?></h1>

            <ul class="post-meta">
                <li><a href="javascript://">Team Enterests</a></li>
                <li><a href="javascript://">Business</a></li>
                <li><a href="javascript://">Real Estate</a></li>
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


<!--===========================-->
<!--=         Contact         =-->
<!--===========================-->
<section class="contactus ">
    <div class="container">
        <div class="row">

            <div class="col-md-12">


                <?=$post['detail']?>


            </div>
            <!-- /.col-md-12 -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.contactus -->