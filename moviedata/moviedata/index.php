<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Your global styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .content {
            max-width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .listview_1_of_3 {
            flex-basis: calc(33.33% - 20px);
            margin: 10px;
            /* background: #f0f0f0; */
            background: #fff;
            padding: 10px;
        }

        .listview_1_of_3 h2 {
            color: #555 	;
        }

        .content-left {
            display: flex;
            margin: 10px 0;
        }

        .listimg img {
            max-width: 100%;
            height: auto;
        }

        .text {
            padding-left: 10px;
        }

        .data {
            color: #000;
        }

        .text-top {
            margin-top: 10px;
        }

        .listview_1_of_3.images_1_of_3 {
            margin: 0;
        }

        .middle-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .listimg1 {
            flex-basis: calc(33.33% - 20px);
            margin: 10px;
        }

        .link {
            text-decoration: none;
            font-size: 14px;
        }
		@media (min-width: 768px) {
    .listview_1_of_3 {
        flex-basis: calc(50% - 20px); /* Display 2 columns on screens wider than 768px */
    }
}

/* Further reduce columns on even larger screens */
@media (min-width: 1024px) {
    .listview_1_of_3 {
        flex-basis: calc(33.33% - 20px); /* Display 3 columns on screens wider than 1024px */
    }
}
    </style>
</head>
<body>
<?php
include('header.php');
?>

<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Upcoming Movies</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
				<div class="content-left">
					<div class="listimg listimg_1_of_2">
						 <img src="admin/<?php echo $n['attachment'];?>">
					</div>
					<div class="text list_1_of_2">
					<div class="extra-wrap">
					<span style="text-color:#000" class="data"><strong><?php echo $n['name'];?></strong><br>
					<span style="text-color:#000" class="data"><strong>Cast :<?php echo $n['cast'];?></strong><br>
                    <div class="data">Release Date :<?php echo $n['news_date'];?></div>
                                
                                
                                
                                <span class="text-top"><?php echo $n['description'];?></span>
                          </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>
			</div>
			
			
		<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Movie Trailers</h2>
						<div class="middle-list">
					<?php 
					$qry4=mysqli_query($con,"SELECT * FROM tbl_movie ORDER BY rand() LIMIT 6");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
					
			<div class="listimg1">
					<a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
				    <a target="_blank" href="<?php echo $nm['video_url'];?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $nm['movie_name'];?></a>
						</div>
						<?php
					}
					?>
					</div>
					
					
		       </div>			
		     <?php include('movie_sidebar.php');?>
	       </div>
           </div>
           <?php include('footer.php');?>
            </div>
             <?php include('searchbar.php');?>