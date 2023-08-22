<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


  <?php include 'includes/navbar.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

   
    <?php
if(isset($_GET['save'])){
$design_id=$_GET['save'];
    $user_id=['id'];
    $url=$_SESSION['fullurl'].'&did='.$design_id;
    $stmt = $conn->prepare("INSERT INTO save_design (user_id,design_id,description)
VALUES
(:user_id, :design_id,  :description)");
   $stmt->execute(['user_id'=>$user['id'], 'design_id'=>$design_id,  'description'=>$url]);
            $design_id = $conn->lastInsertId();
                $_SESSION['success'] = 'Design saved succesfully!';


    exit();


}
$brandName=$_GET['bname'];
$brandName=$_GET['bname'];
$brandName=$_GET['bname'];
$slogan=$_GET['slogan'];
$color=$_GET['favcolor'];
$bg=$_GET['bg'];
$_SESSION['favcolor']=$color;




if(isset($brandName)){
    $fullurl = $_SERVER['REQUEST_URI'];
    $_SESSION['fullurl']=str_replace("/custom-file.php?","/view-design.php?",$fullurl);
      $_SESSION['fullurl'];
}


?>
<!--<link rel="stylesheet" href="custome-file.css">-->
<div class="logo-container">
    <h1 class="Logos">Custom Logo Design  </h1>
    
    <ul>
        <li>
            <div class="logo-holder logo-1">
                <a href="custom-file.php?save=1" title="Choose this design 1 ?">
                    <h3><?=$brandName;?></h3>
                    <p><?=$slogan;?></p>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-2">
                <a href="custom-file.php?save=2" title="Choose this design 2 ?">
                    <h3><?=$brandName;?></h3>
                    <p><?=$slogan;?></p>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-3">
                <a href="custom-file.php?save=3" title="Choose this design 3 ?">
                    <h3><?=$brandName;?></h3>
                    <p><?=$slogan;?></p>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-4">
                <a href="custom-file.php?save=4" title="Choose this design 4 ?">
                    <h3><?=$brandName;?></h3>
                    <p><?=$slogan;?></p>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-5">
                <a href="custom-file.php?save=5" title="Choose this design 5 ?">
                    <h3><?=$brandName;?></h3>
                    <p><?=$slogan;?></p>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-6">
                <a href="custom-file.php?save=6" title="Choose this design 6 ?">
                    <h3><?=$brandName;?> <span> ...</span></h3>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-7">
                <a href="custom-file.php?save=7" title="Choose this design 7 ?">
                    <i class="fas fa-book-open"></i>
                    <div class="left">
                        <h3><?=$brandName;?></h3>
                        <p><?=$slogan;?></p>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-8">
                <a href="custom-file.php?save=8" title="Choose this design 8 ?">
                    <h3><?=$brandName;?> <span><?=$brandName;?></span></h3>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-9">
                <a href="custom-file.php?save=9" title="Choose this design 9 ?">
                    <span><i class="fas fa-bell"></i></span>
                    <h3><?=$brandName;?></h3>
                </a>
            </div>
        </li>
        <li>
            <div class="logo-holder logo-10">
                <a href="custom-file.php?save=10" title="Choose this design 10 ?">
                    <h3><?=$brandName;?></h3>
                    <p>&nbsp;</p>
                </a>
            </div>
        </li>
    </ul>
</div>


<?php 

//$color="34495e";

?>


<style>
    @import url('https://fonts.googleapis.com/css?family=Bangers|Cinzel:400,700,900|Lato:100,300,400,700,900|Lobster|Lora:400,700|Mansalva|Muli:200,300,400,600,700,800,900|Open+Sans:300,400,600,700,800|Oswald:200,300,400,500,600,700|Roboto:100,300,400,500,700,900&display=swap');
    /* Used Google Fonts */
    font-family: 'Roboto', sans-serif;
    font-family: 'Mansalva', cursive;
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Oswald', sans-serif;
    font-family: 'Lora', serif;
    font-family: 'Muli', sans-serif;
    font-family: 'Lobster', cursive;
    font-family: 'Cinzel', serif;
    font-family: 'Bangers', cursive;
    /* Used Google Fonts */
    *{
        margin:0;
        padding:0;
    }
    body{
        font-size:12px;
        color:#424242;
        font-family: 'Open Sans', sans-serif;
        background-color: #ffffff;
        
    }
    h1, h2, h3, h4, h5, h6, p{
        margin:0px;
        padding:0px;
    }
    .logo-container ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display:inline-block;
    }
    .logo-container ul li {
        width: 500px;
        height: 250px;
        background: #fff;
        border-radius: 10px;
        margin: 10px;
        float: left;
        padding:20px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(<?=$bg;?>);
    }
    .logo-container ul li a{
        text-decoration:none !important;
        display: inline-block;
    }
    .logo-holder{
        text-align:center;
    }
    /* Logo-1 */
    .logo-1 h3 {
        color: <?=$color;?>;
        font-family: 'Oswald', sans-serif;
        font-weight: 300;
        font-size: 50px;
        line-height:1.3;
    }
    .logo-1 p {
        font-size: 14px;
        letter-spacing: 8px;
        text-transform: uppercase;
        padding-left: 10px;
        color: <?=$color;?>;
        font-weight: 600;
    }
    /* Logo-2 */
    .logo-2 h3 {
        color: <?=$color;?>;
        font-family: 'Oswald', sans-serif;
        font-weight: 300;
        font-size: 50px;
        text-transform: uppercase;
        line-height:1;
    }
    .logo-2 p {
        font-size: 14px;
        padding-left: 0px;
        color: <?=$color;?>;
        font-weight: 600;
        text-transform: uppercase;
    }
    /* Logo-3 */
    .logo-3 h3 {
        color: <?=$color;?>;
        font-family: 'Oswald', sans-serif;
        font-weight: 300;
        font-size: 50px;
        line-height:1.3;
    }
    .logo-3 p {
        font-size: 14px;
        letter-spacing: 7px;
        text-transform: uppercase;
        background: <?=$color;?>;
        font-weight: 400;
        color: #fff;
        padding-left: 5px;
    }
    /* Logo-4 */
    .logo-4 h3 {
        color: <?=$color;?>;
        font-weight: 300;
        font-size: 50px;
        line-height: 0.65;
        font-family: 'Lobster', cursive;
    }
    .logo-4 p {
        font-size: 14px;
        margin-left: 50px;
        color: #545454;
        font-weight: 400;
        text-transform: capitalize;
        font-style: italic;
        font-family: 'Mansalva', cursive;
    }
    /* Logo-5 */
    .logo-5 h3 {
        color: <?=$color;?>;
        font-weight: 300;
        font-size: 50px;
        line-height: 0.6;
        font-family: 'Bangers', cursive;
        letter-spacing: 5px;
    }
    .logo-5 p {
        font-size: 14px;
        margin-left: 0;
        color: #545454;
        font-weight: 400;
        text-transform: capitalize;
        font-style: italic;
        font-family: 'Mansalva', cursive;
        position: relative;
    }
    .logo-5 p:before {
        position: absolute;
        content: '';
        width: 17px;
        height: 12px;
        background: #545454;
        left: 0px;
        top: 5px;
    }
    .logo-5 p:after {
        position: absolute;
        content: '';
        width: 17px;
        height: 12px;
        background: #545454;
        right: 0px;
        top: 5px;
    }
    /* Logo-6 */
    .logo-6 h3 {
        color: <?=$color;?>;
        font-family: 'Cinzel', serif;
        font-weight: 300;
        font-size: 30px;
        line-height:1.3;
    }
    .logo-6 h3 span {
        background: <?=$color;?>;
        color: #fff;
        display: inline-block;
        line-height: 1.8;
        padding: 0 16px;
    }
    /* Logo-7 */
    .logo-7 {
        width: 100%;
        display: inline-block;
    }
    .logo-7 i {
        font-size: 60px;
        display: inline-block;
        float: left;
        margin-right: 5px;
        color: <?=$color;?>;
    }
    .logo-7 .left {
        float: left;
        margin-left: 10px;
        text-align: left;
    }
    .logo-7 a {
        color: #545454;
    }
    .logo-7 .left h3 {
        font-family: 'Muli', sans-serif;
        font-weight: 300;
        font-size: 25px;
        text-transform: uppercase;
        color: <?=$color;?>;
    }
    .logo-7 .left p {
        text-align: right;
        font-size: 14px;
        color: #919191;
        font-style: italic;
        border-top: 1px dashed #919191;
        letter-spacing: 2px;
        padding-top: 3px;
        font-family: 'Lobster', cursive;
    }
    /* Logo-8 */
    .logo-8 h3 {
        color: <?=$color;?>;
        font-family: 'Cinzel', serif;
        font-weight: 300;
        font-size: 30px;
        line-height:1.3;
    }
    .logo-8 h3 span {
        background: ;
        color: <?=$color;?>;
        display: inline-block;
        line-height: 1.8;
        padding: 0px;
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        opacity:0.5;
        margin-left:-34px;
    }
    /* Logo-9 */
    .logo-9{
        position:relative;
    }
    .logo-9 i{
        font-size:80px;
        position:absolute;
        z-index:0;
        text-align:center;
        width:100%;
        left:0;
        top:-10px;
        color:<?=$color;?>;
        -webkit-animation:ring 2s ease infinite;
        animation:ring 2s ease infinite;
    }
    .logo-9 h3{
        font-family: 'Lora', serif;
        font-weight:600;
        text-transform:uppercase;
        font-size:40px;
        position:relative;
        z-index:1;
        color:<?=$color;?>;
        text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, 3px -3px 0 #fff, -3px 3px 0 #fff;
    }
    @-webkit-keyframes ring{0%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}2%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}4%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}6%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}8%{-webkit-transform:rotate(-22deg);transform:rotate(-22deg)}10%{-webkit-transform:rotate(22deg);transform:rotate(22deg)}12%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}14%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}16%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}18%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}100%,20%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes ring{0%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}2%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}4%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}6%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}8%{-webkit-transform:rotate(-22deg);transform:rotate(-22deg)}10%{-webkit-transform:rotate(22deg);transform:rotate(22deg)}12%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}14%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}16%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}18%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}100%,20%{-webkit-transform:rotate(0);transform:rotate(0)}}

    /* logo-10 */
    .logo-10 h3{
        font-family: 'Muli', sans-serif;
        font-weight:100;
        text-transform:uppercase;
        font-size:40px;
        color:#545454;
        line-height:0.3;
    }
    .logo-10 p{
        color: rgba(255, 255, 255, 0);
        background:<?=$color;?>;
    }
    /* Followed */
    .follow{
        position:fixed;
        right:20px;
        bottom:10px;
    }
    .follow img {
        width: 40px;
        height: 40px;
        border: 2px solid #3F51B5;
        border-radius: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
        padding: 5px;
        background: #fff;
    }


    @media only screen and (max-width:736px) {
        body{
            margin:0;
            padding:0;
        }
        .logo-container ul {
            width: 100%;
            text-align: center;
        }
        .logo-container ul li {
            width: 290px;
            margin-left: auto;
            margin-right: auto;
            float: none !important;
        }
        .logo-4 p {
            margin-top: 2px;
        }
        .Logos{
            margin-top:20px;
        }
    }

    h1.Logos {
        font-weight: 400;
        font-family: 'Bangers', cursive;
        font-size: 40px;
        text-align: center;
        letter-spacing: 3px;
        text-shadow: 2px 2px 0px #2d303a, -2px -2px 0px #2d303a, -2px 2px 0px #2d303a, 2px -2px 0px #2d303a;
        color: #fff;
    }
    p.para {
        text-align: center;
        font-size: 16px;
        margin-bottom: 20px;
        letter-spacing: 30px;
        font-family: 'Lora', serif;
        padding-top: 5px;
        color: #333333;
    }
</style>
  
    <?php include 'includes/footer.php'; ?>
    
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>