
<div class="text-content">



                <h2>Photos & Video Gallery</h2>



              </div>



            </div>



          </div>



        </div>



        



        



        



        <div class="row"> 



        <div class="col-md-12" align="right"> 



        <a href="photogallery.php" style="color:#666666"><u>View All Photos</u></a>
        



        </div>







<?php



				$sql = 'SELECT * FROM photogallery  ORDER BY id DESC LIMIT 3';  



				$result=$link->query($sql);



                while($row = $result->fetch_array()){  ?>



          <div class="col-md-4 col-sm-6">



            <div class="car-item wow fadeIn" data-wow-duration="0.75s">



              <div class="thumb-content">



                <div class="car-banner"> </div>



                <div class="thumb-inner"> <img src="admin/upload/photogallery/<?php echo $row['upload'];?>" alt=""> </div>



              </div>



              <div class="down-content"> <a href="#">



                <h4><?php echo $row['title'];?></h4>



                </a>







              </div>



            </div>



          </div>



          



          <?php } ?>
