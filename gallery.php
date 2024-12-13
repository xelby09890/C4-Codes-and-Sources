<section class="container gallery my-5 position-relative" id="gallery">
    <div class="ybo-container gallery-container container">

<ul class="col-12 nav nav-pills order-1 mb-3 d-flex justify-content-center overflow-y-auto position-relative d-none" id="pills-tab" role="tablist">
  <?php
  $dirs = glob('images/gallery/*' , GLOB_ONLYDIR);
  $i = 0;
  foreach ($dirs as $dir):
    
    $foldername = str_replace("images/gallery/" ,"" , strtolower($dir));
    $dir2 = ucwords($foldername);
    $foldername = str_replace(" " ,"-" , strtolower($foldername));

  ?>
  <li class="nav-item" role="presentation">
    <a href="#pills-<?php echo $foldername; ?>" class="nav-link btn mx-auto <?php if($i === 0){ echo 'active'; }else{ echo ''; }?>" id="pills-<?php echo $foldername; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $foldername; ?>" type="a" role="tab" aria-controls="pills-<?php echo $foldername; ?>" aria-selected="<?php if($i === 0){ echo 'active'; }else{ echo ''; }$i++;?>"><small><?php echo str_replace(" And " ," and " , $dir2); ?></small></a>
  </li>
  <?php endforeach; ?>
</ul>

<div class="c0l-12 tab-content order-2 d-flex justify-content-center ybo-mask-black rounded pt-2" id="pills-tabContent">
<?php
  $dirs = glob('images/gallery/*' , GLOB_ONLYDIR);
    $i = 0;
  foreach ($dirs as $dir):
    $dir2 = $dir;
    
    $foldername = strtolower($dir2);
    $foldername = str_replace(" " ,"-" , strtolower($foldername));

  ?>
  <div class="tab-pane fade w-100 <?php if($i === 0){ echo 'active show'; }else{ echo ''; }$i++;?>" id="pills-<?php echo str_replace("images/gallery/" ,"" , $foldername); ?>" role="tabpanel" aria-labelledby="pills-<?php echo str_replace("images/gallery/" ,"" , $foldername); ?>-tab">
  

      <!-- <section class="ybo container gallery pt-0 w-100" id="gallery"> -->
          <div class="ybo-container gallery-container container pb-3 w-100">

          <?php
          // $fh = fopen($dir2 . "/desc.txt", 'r');

          // $pageText = fread($fh, 25000);
          // if ($pageText !== '') {
          //   echo '<hr><p>';
          //   echo nl2br($pageText);
          //   echo '</p><hr>';
          // }

          
          ?>
                <table id="data-table-<?php echo str_replace("images/gallery/" ,"" , $foldername); ?>" class="display">
                <!-- <table id="data-table-<?php echo str_replace("images/gallery/" ,"" , $foldername); ?>" class="table table-striped table-bordered" style="width:100%"> -->
                  <thead class="collapse">
                      <tr>
                          <th>Page</th>
                      </tr>
                  </thead>
                  <tbody>

                    <?php 
                    $dir_name = $dir2 . '/';
                    $images = glob($dir_name."*.webp");
                    // echo (ceil(count($images)/30));
                    natsort($images);
                    $copy_array = $images;
                    $chunk_array = array_chunk($copy_array,30);

                    $keys = array_keys($chunk_array);
                    // ksort($keys);
                    // $keys = array_reverse($keys);
                    for($i = 0; $i < count($chunk_array); $i++) {
                    ?>
                      <tr>
                          <td class="d-flex justify-content-center">
                          <div class="gallery-row row d-flex justify-content-center w-100  pt-2 text-center" id="light-<?php echo str_replace("images/gallery/" ,"" , $foldername) . '-page-' . $keys[$i]; ?>">
                    <?php
                        foreach($chunk_array[$keys[$i]] as $key => $value) {
                            $imgname = str_replace($dir_name ,"" , $value);
                    ?>
                              <div class="gallery-column col-6 col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 reveal" data-src="<?php echo $value; ?>?format=webp?ver=<?php echo $ver; ?>" data-sub-html="<h3><?php echo str_replace(".webp" ,"" ,  $imgname); ?></h3>">

                                    <div class="gallery-card">

                                        <img src="<?php echo $value; ?>?format=webp?ver=<?php echo $ver; ?>" class="gallery-card-image" alt="...">

                                        <div class="gallery-card-image-content">

                                              <a href="" href="javascript:void(0);" class="gallery-card-image-content-link">
                                                  
                                                  <div class="gallery-card-image-content-icon-wrapper">
                                                        
                                                        <i class="gallery-card-image-content-icon fa fa-search"></i>
                
                                                  </div>

                                              </a>

                                        </div>

                                    </div>

                              </div>
                    <?php
                        }
                    ?>
                          </div>
                          <script>$(document).ready(() => {
                          $("#light-<?php echo str_replace("images/gallery/" ,"" , $foldername) . "-page-" . $keys[$i] ?>").lightGallery({
                           pager: true });
                           reveal();
                          });</script>
                          </td>
                      </tr>
                    <?php 
                    }
                    ?>
                      </tbody>
                      <tfoot class="collapse">
                          <tr>
                              <th>Page</th>
                          </tr>
                      </tfoot>
                  </table>
                  <script>
                    $(document).ready(function() {
                    //data table
                    // $('#data_table_id').DataTable();
                    $('#data-table-<?php echo str_replace("images/gallery/" ,"" , $foldername); ?>').dataTable( {
                          drawCallback: function () {
                            //Some function...
                            setDtTable();
                        },
                        "dom": '<"top"p<"clear">>rt<"bottom"p<"clear">>',
                        // "dom": '<"top"lrfip<"clear">>rt<"bottom"ip<"clear">>',
                        "order": [[ 0, "desc" ]],
                        "aLengthMenu": [[1, 5, 10, 25, 50, 75, 100, -1], [1, 5, 10, 25, 50, 75, 100, "All"]],
                        "pageLength": 1
                        
                    } );

                  });
                  </script>
          </div>
      <!-- </section> -->
  </div>
                      
  <?php 
  

  endforeach; 

  
  ?>
</div>



    </div>
</section>