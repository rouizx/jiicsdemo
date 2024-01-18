<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }
  
    .login-title{
      text-shadow: 2px 2px black
    }
    /* #login{
      flex-direction:column !important
    } */
    #login{
        direction:rtl
    }
    #login > *{
        direction:ltr
    }
    #logo-img{
        height:150px;
        width:150px;
        object-fit:scale-down;
        object-position:center center;
        border-radius:100%;
    }
    /* #login .col-7,#login .col-5{
      width: 100% !important;
      max-width:unset !important
    } */
  </style>
    
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                            <div class="text-center">
                                                <h1 class="mt-1 mb-5 pb-1">Registration</h1>
                                            </div>
                                            <form action="" id="registration-form">
                                                <input type="hidden" name="id">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="firstname" id="firstname" autofocus placeholder="Firstname" class="form-control form-control-border" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="middlename" id="middlename" placeholder="Middlename" class="form-control form-control-border">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="lastname" id="lastname" placeholder="Lastname" class="form-control form-control-border" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-auto">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="genderMale" name="gender" value="Male" required checked>
                                                            <label for="genderMale" class="custom-control-label">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-auto">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="genderFemale" name="gender" value="Female">
                                                            <label for="genderFemale" class="custom-control-label">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <span class="text-navy"><small>Category</small></span>
                                                            <select name="department_id" id="department_id" class="form-control form-control-border select2" data-placeholder="Select Account Category" required>
                                                                <option value="" disabled selected>Select Account Category</option>
                                                                <?php 
                                                                $department = $conn->query("SELECT * FROM `department_list` where status = 1 order by `name` asc");
                                                                while($row = $department->fetch_assoc()):
                                                                ?>
                                                                <option value="<?= $row['id'] ?>"><?= ucwords($row['name']) ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <span class="text-navy"><small>Section</small></span>
                                                            <select name="curriculum_id" id="curriculum_id" class="form-control form-control-border select2" data-placeholder="Select Your Section" required >
                                                                <option value="" disabled selected>Select Category First</option>
                                                                <?php 
                                                                $curriculum = $conn->query("SELECT * FROM `curriculum_list` where status = 1 order by `name` asc");
                                                                $cur_arr = [];
                                                                while($row = $curriculum->fetch_assoc()){
                                                                    $row['name'] = ucwords($row['name']);
                                                                    $cur_arr[$row['department_id']][] = $row;
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-border" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-border" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" id="cpassword" placeholder="Confirm Password" class="form-control form-control-border" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group text-right">
                                                            <button class="btn btn-primary btn-user btn-block mb-3"> Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-success btn-user btn-block" href="<?php echo base_url ?>">Go to Website</a><br>
                                                <div class="text-center">
                                                <a class="text-secondary" href="./login.php">Already have an account?</a>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-10 mx-md-4">
                                            <h2 class="mb-4"><?php echo $_settings->info('name') ?></h2>
                                            <p class="small mb-0">Aspires to document changes in publishing, and in some cases to stimulate and shape the direction of those changes. The articles present innovative ideas, best practices, and leading-edge thinking about all aspects of publishing, authorship, and readership. The editor and publisher are committed to presenting wide-ranging and diverse viewpoints on contemporary publishing practices, and to encouraging dialogue and understanding between key decision-makers in publishing and those who are affected by the decisions being made.</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>

<script>
    var cur_arr = $.parseJSON('<?= json_encode($cur_arr) ?>');
  $(document).ready(function(){
    end_loader();
    $('.select2').select2({
        width:"100%"
    })
    $('#department_id').change(function(){
        var did = $(this).val()
        $('#curriculum_id').html("")
        if(!!cur_arr[did]){
            Object.keys(cur_arr[did]).map(k=>{
                var opt = $("<option>")
                    opt.attr('value',cur_arr[did][k].id)
                    opt.text(cur_arr[did][k].name)
                $('#curriculum_id').append(opt)
            })
        }
        $('#curriculum_id').trigger("change")
    })

    // Registration Form Submit
    $('#registration-form').submit(function(e){
        e.preventDefault()
        var _this = $(this)
            $(".pop-msg").remove()
            $('#password, #cpassword').removeClass("is-invalid")
        var el = $("<div>")
            el.addClass("alert pop-msg my-2")
            el.hide()
        if($("#password").val() != $("#cpassword").val()){
            el.addClass("alert-danger")
            el.text("Password does not match.")
            $('#password, #cpassword').addClass("is-invalid")
            $('#cpassword').after(el)
            el.show('slow')
            return false;
        }
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Users.php?f=save_student",
            method:'POST',
            data:_this.serialize(),
            dataType:'json',
            error:err=>{
                console.log(err)
                el.text("An error occured while saving the data")
                el.addClass("alert-danger")
                _this.prepend(el)
                el.show('slow')
                end_loader()
            },
            success:function(resp){
                if(resp.status == 'success'){
                    location.href= "./login.php"
                }else if(!!resp.msg){
                    el.text(resp.msg)
                    el.addClass("alert-danger")
                    _this.prepend(el)
                    el.show('show')
                }else{
                    el.text("An error occured while saving the data")
                    el.addClass("alert-danger")
                    _this.prepend(el)
                    el.show('show')
                }
                end_loader();
                $('html, body').animate({scrollTop: 0},'fast')
            }
        })
    })
  })
</script>
<style>
  .fp{
    text-decoration:none;
  }
 
    
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #EC9F05,  #EC9F05, #FF4E00, #FF4E00);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #EC9F05, #EC9F05, #FF4E00, #FF4E00);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
</body>
</html>