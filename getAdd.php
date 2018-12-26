<div class="page-header card">
   <div class="card-block">
      <h5 class="m-b-10"><?=$title?></h5>
      <ul class="breadcrumb-title b-t-default p-t-10">
         <li class="breadcrumb-item" style="line-height: 2.5">
            <a href="<?=base_url('admin_panel/dashboard')?>">الرئيسية</a>
         </li>
         <li class="breadcrumb-item"><a href="<?=base_url('admin_panel/ads')?>" style="line-height: 2.5"><?=$title?></a>
         </li>
         <!-- <a style="float: left; color: white" href="<?=base_url('admin_panel/ads/add')?>" class="btn btn-grd-primary">اضافة اعلان جديد</a> -->
      </ul>
   </div>
</div>
<div class="page-body">
    
<?php if ($this->session->flashdata('message')) { ?>
     <?=$this->session->flashdata('message');?>
  <?php } ?>
   <div class="card">
      <div class="card-header">
         <h5>اضافة اعلان</h5>
      </div>
      <div class="card-block">
         
         <form action="http://localhost/public_html/index.php/admin_panel/approve/post" id="form" method="POST" enctype="multipart/form-data">
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="title" value="" placeholder="Title">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Categories</label>
                  <div class="col-sm-10">
                     <select name="category">
                      
                      
                            <?php foreach ($categories as $category) { ?>

                              <option value="<?php echo $category->id;?>"><?php echo $category->name_ar; ?></option>

                            <?php } ?>
                      </select>
                  </div>
               </div>


               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Country</label>
                  <div class="col-sm-10">
                     <select id="country" name="country">
                            <option value="">Choose a country</option>
                      
                            <?php foreach ($countries as $country) { ?>

                              <option value="<?php echo $country->id;?>"><?php echo $country->name_ar; ?></option>

                            <?php } ?>
                      </select>
                  </div>
               </div>

               <div class="form-group row" name="city">
                  <label class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-10">
                     <select id="new" name="city">
                        <option value="">Choose a city</option>
                      </select>
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Region</label>
                  <div class="col-sm-10">
                  <select id="region" name="region">
                    <option value="">Choose a region</option>
                  </select>
                  </div>
               </div>



               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="description" value="" placeholder="description">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="address" value="" placeholder="address">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="price" value="" placeholder="price">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="phone" value="" placeholder="phone">
                  </div>
               </div>
               
               
              <!-- main image -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">الصورة الرئيسية</label>
                  <div class="col-sm-10">
                      <input type="file" name="image" value="" class="form-control">
                  </div>
                </div>
              
              <!-- other images -->

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">صور اخرى</label>
                    
                </div>
                <div class="form-group row">
                
                  
                  <div class="col-sm-10">
                      <input type="file" name="image_1" value="" class="form-control">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-10">
                      <input type="file" name="image_2" value="" class="form-control">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-10">
                      <input type="file" name="image_3" value="" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-10">
                      <input type="file" name="image_4" value="" class="form-control">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-10">
                      <input type="file" name="image_5" value="" class="form-control">
                  </div>
                </div>


                <!-- end of images -->




               <button type="submit" class="btn btn-md btn-success"><i class="icofont icofont-check"></i>  اضافة </button>
            </form>

      </div>
   </div>
</div>
<div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">حذف الاعلان</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل تريد حذف هذا الاعلان؟</p>
            </div>
            <div class="modal-footer">
                <a id="yes" style="margin-left: 5px; color: white" class="btn btn-danger waves-effect ">حذف</a>
                <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary waves-effect waves-light ">رجوع</a>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <script type="">

      $('#country').change(function() {
        var val = $(this).val(); 

        console.log(val);

        $(function(){
          $.ajax({
            type: "POST",
            url: 'http://localhost/public_html/index.php/admin_panel/approve/getCities',
            data: ({Imgname: val }),
            success: function(data) {
              // console.log(data);
              $("#new").html(data);
              
            }
          });
        });

      })

      $('#new').change(function() {
        var val = $(this).val(); 

        console.log(val);

        $(function(){
          $.ajax({
            type: "POST",
            url: 'http://localhost/public_html/index.php/admin_panel/approve/getRegions',
            data: ({Imgname: val }),
            success: function(data) {
             // console.log(data);
              $("#region").html(data);
              
            }
          });
        });

      })

      

        
        
   </script>