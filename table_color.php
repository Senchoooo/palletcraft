<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
      
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101913406029570");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <?php include 'includes/navbar.php'; ?>
   
    <div class="content-wrapper" style="background-color: #ebe9e8;">
      <div class="container" >

        <!-- Main content -->
        <section class="content" >
           <a type="button" class='btn btn-primary btn-md' href="table_custom.php">Go Back</a>
          <div class="row">
              <h3 style="font-family:verdana;" class="pull-left"><b> Table Customization</b></h3>
                 
               
               <div class="form-group">
               
            <hr class="border-dark">
            <h4 class="text-center"><b>Color</b></h4>

                    
              <div class="col-sm-6">
                    
                   
         
                      


            
               
                <img id="selected-image" />

           
             </div>
          </div>
               <div class="col-sm-6">
           
               
               <form method="POST" action="custom_table_checkout.php">
                  

                    <?php
    if(isset($_POST['submit'])){
    $conn = $pdo->open();
        $shape = $_POST['shape'];
        
        $table = $_POST['table'];

     }
            $pdo->close();
            ?>
             <label>Details</label>
          <input type="text" id="detail" name="detail" style="width:50%;" class="form-control form-control-sm rounded-0" value=<?php echo $shape; ?> readonly>
          <br>
          <p><b>Table Price:</b>  <?php echo $table; ?></p>

          

           <?php
           

            ?>

          
          <h3>Select Color</h3>


                   <div class="divprice" class="price-style"></div>
                       <input type=hidden name=othervalue1 id=othervalue1 />
                       <label>Color</label>
                       <input type="hidden" id="table" name="table" style="width:50%;" class="form-control form-control-sm rounded-0" value=<?php echo $table; ?> readonly>
          
                  
                 <select name="color_price" id="color_price" style="width:50%;" class="form-control form-control-sm rounded-0" onchange="changeddl1(this)" required >
                    <option value="" disabled selected>Select Color</option>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("SELECT * FROM table_color where table_shape=:table_shape");
                     $stmt->execute(['table_shape' => $shape]);
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
                          
                      ?>
                        <option value="<?php echo $row['price']; ?>" data-color="<?php echo $row['color'] ?>" data-image="<?php echo $image; ?>" ><?php echo $row['color']; ?></option>
                      <?php
                        
                     
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </select>
                <div class="divprice" class="price-style"></div>
              <input type=hidden name=color id=color />
                  
                   <label>Quantity</label>
                        <div class="input-group col-sm-5">
                          
                          <span class="input-group-btn">
                            <button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
                          </span>
                          <input type="number" name="quantity" id="quantity" class="form-control input-lg" min="1" max="30" value="1">
                          <span class="input-group-btn">
                              <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
                              </button>
                          </span>
                      </div>
                       <br>
                       <?php
                if(isset($_SESSION['user'])){
                  echo "
                    <button type='submit' name='submit' class='btn btn-primary btn-lg btn-flat'> <i class='fa fa-shopping-cart'></i>  Order</button>
                  ";
                }
                else{
                  echo "
                    <h4>You need to <a href='login.php'>Login</a> to Order.</h4>
                  ";
                }
              ?>
                    
                   </form>
                    
                 
              
            </div>
        </section>
       
      </div>
    </div>
  
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#add').click(function(e){
    e.preventDefault();
    var quantity = $('#quantity').val();
    quantity++;
    $('#quantity').val(quantity);
  });
  $('#minus').click(function(e){
    e.preventDefault();
    var quantity = $('#quantity').val();
    if(quantity > 1){
      quantity--;
    }
    $('#quantity').val(quantity);
  });

});
</script>
<script>
$(document).ready(function() {
  $('#color_price').change(function() {
    var selectedOption = $(this).find('option:selected');
    var color = selectedOption.attr('data-color');
    
    var image = selectedOption.attr('data-image');
    $('#selected-color').text(color);
    
    $('#selected-image').attr('src', image);
  });
});
</script>


<script>
$('#layer_price').change(function () {
var layer=$(this).find('option:selected').attr('data-layer');
$('#layer').val(layer);


});
</script>
<!-- <script>
$(document).ready(function() {
  $('#layer_price').change(function() {
    var selectedOption = $(this).find('option:selected');
    var displayedImage = selectedOption.attr('displayed-image');
    $('#displayed-image').attr('src', displayedImage);
  });
});
</script> -->

<script>
$('#flatform_quantity_price').change(function () {
var someothervalue=$(this).find('option:selected').attr('data-someothervalue');

$('#someothervalue').val(someothervalue);

});
</script>
<script>
$('#color_price').change(function () {
var color=$(this).find('option:selected').attr('data-color');

$('#color').val(color);

});
</script>



  <script>

    function changeddl($this){
if($this.value>0){ 
$('.divlayer').text('Layer: '+$('#layer_price option:selected').text());
$($this).next('.divprice').text($this.value>0?("Price: " + $this.value + " ₱"):"");

}
 };
  </script>
    <script >
    function changeddl2($this){
if($this.value>0){ 
$('.divflatform').text('Flatform Quantity: '+$('#flatform_quantity_price option:selected').text());
$($this).next('.divprice').text($this.value>0?("Price: " + $this.value + " ₱"):"");

}
 };
</script>
  <script >
    function changeddl1($this){
if($this.value>0){ 
$('.divcolor').text('Color: '+$('#color_price option:selected').text());
$($this).next('.divprice').text($this.value>0?("Price: " + $this.value + " ₱"):"");

}
 };
</script>




</body>
</html>