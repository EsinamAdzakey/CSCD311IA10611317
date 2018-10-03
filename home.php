<?php 
require "login.php";
     $error = error_reporting(E_ALL);
     
if(isset($_SESSION['id'])){
    echo"conection fail";
    $register = true;
    $userLogIn = $_SESSION['id'];
    $query = mysqli_query($connection, "SELECT * FROM loginpage WHERE name = $userLogIn");
    $user = mysqli_fetch_array($query);
     
$Student ID = ""
$Student First Name = ""                        
$Student Surname = ""                        
$Student Other Names = ""                       
$Student Course = ""                        
$Student Age = ""                        
$Student Gender = ""                       
$Student DOB = ""                        
$Student Hall = ""                        
$Student Contact = ""                        
$Student father's name = ""                        
$Student Mother's name = ""                        
$Student GPA = ""                        
$Student Credit hours = ""                        
$Student Major = ""                        
$Student Department = ""                    

   
    

    if(isset($_POST["btn-send"])){

        if($register){
            $Student ID = strip_tags($_POST["Student ID"]);
            $Student First Name =strip_tags($_POST["Student First Name"]);
            $Student Surname = strip_tags($_POST["Student Surname"]);
            $Student Other Names = strip_tags($_POST["Student Other Names"]);
            $Student Course = strip_tags($_POST["hStudent Course"]);
            $Student Age =strip_tags($_POST["Student Age"]);
            $Student Gender = strip_tags($_POST["Student Gender"]);
            $Student DOB = strip_tags($_POST["Student DOB"]);
           
            $Student Hall = strip_tags($_POST["Student Hall"]);
            $Student Contact = strip_tags($_POST["Student Contact"]);
            $Student father's name = strip_tags($_POST["Student father's name"]);
            $Student Mother's name = strip_tags($_POST["Student Mother's name"]);
            $Student GPA = strip_tags($_POST["Student GPA"]);
            $Student Credit hours =strip_tags($_POST["Student Credit hours"]);
            $Student Major =strip_tags($_POST["Student Major"]);
            $Student Department =strip_tags($_POST["Student Department"]);
           

       

            $query = mysqli_query($connection,"INSERT INTO dataform VALUES(' $Student ID','$Student First Name','$Student Surname','$Student Other Names','$Student Course','$Student Age','$Student Gender','$Student DOB','$Student Hall','$aStudent Contact','$Student father's name','$Student Mother's name','$Student GPA','$Student Credit hours','$Student Major', '$Student Department')");
            
          echo "entry sent successful";
           $register = false;
        }
           
     }
   }



// }else {
//     header('Location: home.php');
// };

    
//     function showUsers($connection){

//         $query_1 = mysqli_query($connection, "SELECT * FROM loginpage");

//         $query_2 = mysqli_query($connection, "SELECT * FROM dataform");
        
        
//         while($results_1 = mysqli_fetch_array($query_1)){

//             $fname = $results_1['firstname'];
//             $lname = $results_1['lastname'];
//             $index_no = $results_1['index_no'];
           
//             echo"<br><br>
//             

 ?>


 <html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="device-width initial-scale = 1.0">
        <meta name="description" content="A webapp for student">
        <meta name="keyword" content="mendel,mendel restaurant , restaurant" >
        <link href="assets/img/logo.png" rel="shortcut icon" >
        <title>Homepage</title>

        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      
        <style>
                body{
                    
                    background-color: #fff;
                    
                }
                *{
                    
                 
                }
                .box{
                    margin-right: 3%;
                    margin-left:3% ;
                   
                }
                .header{
                    height:10vh;
                    background-color: rgba(12, 0, 30, 0.521);
                   
                    
                }

                .user_info{
                    width: 100%;
                    float: right;
                }
                .tablinks{
                 border:none;
                 width:100% ;
                 height:10vh;
                 background:transparent;
                 text-transform:uppercase ;
                 font-size: 1vw;
                 color:white;
                 transition: all .4s ease-out ;
                 outline: none;
                  }
                .tab{
                    height:100vh ;
                   background-color: rgba(12, 0, 30, 0.521);
                     border:1px solid black;
                 }
                 .header_text{
                    text-transform : uppercase;
                    font-weight: 300 ;
                    Font-size:1.2vw;
                    font-family:sans-serif ;
                    letter-spacing:1px ;
                }
                .pos{
                    position: relative;
                }
                p{
                    position: absolute;
                    display: inline;
                    top:29%;
                    left:72%;
                }
                a{
                  
                    position: absolute;
                    display: inline;
                    top:29%;
                    text-transform : uppercase;
                    font-weight: 300 ;
                    Font-size:1.2vw;
                    font-family:sans-serif ;
                    letter-spacing:1px ;
                    color: #fff;
                    
                }
                img{
                    width:20%;
                    position: absolute;
                    top:10%;
                    left:10%;
                }
                .tablinks:hover{
                    background-color: rgba(212, 44, 44, 0.733);
                    
                }
                .tab button.active {
                    background-color:  rgba(0, 0, 0);
                }
                .tablinks:active,
                .tablinks:focus{
                      background-image: none;
                       outline: 0;
                     -webkit-box-shadow: none;
                         box-shadow: none;
            
        }
        .content{
            background-color: rgb(236, 232, 232) ;
        }
        .middle{
            align:center ;
            text-align: center ;
            text-transform: uppercase ;
            letter-spacing: 2px ;
        }
        .btn{
            width:100% ;
        }
        .search{
            width:100% ;
        }
        .btn-danger{
            height:6vh;
            width:100%;
        }

               
        </style>

        



    </head>
    <body>
                <div class="box">
                   
                    <div class="row">
                        <div class="col-3 tab" style="padding:0;">
                           
                                <br><br>
                           

                                <button onclick="openCity(event, 'e')" id="defaultOpen" class="tablinks" > view</button>
                                <button onclick="openCity(event, 'd')" class="tablinks"> form</button>
                                <button onclick="openCity(event, 'f')" class="tablinks1"> Update</button>
                                <button onclick="openCity(event, 'g')" class="tablinks2"> Delete</button>
                                <button onclick="openCity(event, 'h')" class="tablinks3"> View</button>
                               



                        </div>
                        <div id="e"class="tabcontent col-9">

                            <div >
                                <div class='row'>
                                    <div class='col-sm-3'>First Name:  </div>
                                    <div class='col-sm-3'>LastName: </div>
                                    <div class='col-sm-3'> Index Number: </div>
                                  
                                </div>
                               
                            </div>

                        </div>

                        <div id="d" class="tabcontent content col-9">

                                <form action="home.php" method="post">
                                        <table cellspacing=20px cellpadding="15px">
                                            <tr class="middle">
                                                <td colspan=4>User Request Form</td>
                                            </tr>
                                            <tr>
                                                 <td>
                                                          ID:
                                                </td>
                                                <td>
                                                        
                                                         <input class=form-control type="text" id="id" name="id" placeholder="ID">
                                          
                                                </td>
                                                <td>
                                                     First Name:
                                                </td>
                                                <td>
                                                    <input type="text" name="fname" class="form-control">
                                                    <small id="fname" class="form-text text-muted">first Name</small>

                                                </td>
                                               
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                       Surname:
                                                </td>
                                                <td>
                                                       
                                                        <input class=form-control type="text" id="Sname" name="city" placeholder="Surname">
                                            
                                                </td>
                                                <td>
                                                         Other names:
                                                </td>
                                                <td>
                                                       
                                                        <input class=form-control type="text"name="Oname" placeholder="other Names"  >
                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Student Course:
                                                </td>
                                                <td>
                                                     <input class=form-control type="date"name="Student Course" placeholder="Student Course"  >
                                                </td>
                                                <td>
                                                     $Student Age:
           
            
            
                                         </td>
                                                <td>
                                                    <input type="text" name="Student Ages" placeholder="Student Age" class="form-control">  

                                                </td>
                                            </tr>
                                           


                                            <tr>
                                                    <td>
                                                        Student DOB:
                                                    </td>
                                                    <td>
                                                        <input type="text" name="Student DOB" placeholder="Student DOB" class="form-control">
                                                    </td>
                                                    <td>
                                                             Student Hall:
                                                        </td>
                                                        <td>
                                                                <input type="text" name="Student Hall" placeholder="PStudent Hall" class="form-control" maxlength="10">
                                                        </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                             Student Contact:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="Student Contact" placeholder="Student Contact" class="form-control">
                                                        </td>
                                                        <td>
                                                                 Student Gender:
                                                            </td>
                                                            <td>
                                                                    <select class=form-control name="gender" id="gender">
                                                                    <option value="male"> Male</option>
                                                                    <option value="female">Female</option>
                                                        </select>
                                                            </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                            Student father's name:
                                                        </td>
                                                        <td>
                                                              <input type="text" name=" Student father's name" placeholder=" Student father's name" class="form-control">
                                                        </td>
                                                        <td>
                                                                Student Mother's name: 
                                                            </td>
                                                            <td>
                                                                    <input name="Student Mother's name" placeholder="Student Mother's name" type="text" class="form-control">
                                                            </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                             Student GPA:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="Student GPA" placeholder="Student GPA" class="form-control">
                                                        </td>
                                                        <td>
                                                                 Student Credit hours:
                                                            </td>
                                                            <td>
                                                                    <input name="Student Credit hours" type="text" placeholder="Student Credit hours" class="form-control">
                                                            </td>
                                                </tr>
                                                 <tr>
                                                        <td>
                                                             Student Major:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="Student Major" placeholder="Student Major" class="form-control">
                                                        </td>
                                                        <td>
                                                                 Student Department:
                                                            </td>
                                                            <td>
                                                                    <input name="Student Department" type="text" placeholder="Student Department" class="form-control">
                                                            </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                            
                                                        </td>
                                                        <td class=middle colspan=2>
                                                                <br>
                                                           <button name="btn-send" class="btn btn-danger">Send</button>
                                                        </td>
                                                        
                                                            <td>
                                                                    
                                                            </td>
                                                </tr>
  
                                        </table>
                                    </form> 

                        </div>
                        <div id="Tokyo" class="tabcontent col-9">
                            <div> 
                                <br>
                                <form action="home.php">
                                    <table cellpadding=13px>
                                        <tr>
                                            <td>
                                                    <input type="text" class="search form-control" placeholder="search for student" maxlength="8">
                                            </td>
                                            <td>
                                                  <button class=" btn-danger">search</button>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>






                <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }
                        document.getElementById("defaultOpen").click();
                </script>

    </body>
    <script src="js/index.js"></script>
</html>