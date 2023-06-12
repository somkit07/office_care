<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
<style>
    body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333;
    background-color: #fff;
}

div {
    display: block;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
.col-xs-3 {
  width: 25%;
  float: left;
  min-height: 1px;
}
.text-center {
    text-align: center;
}
.bs-wizard > .bs-wizard-step > .progress {
    position: relative;
    border-radius: 0px;
    height: 8px;
    box-shadow: none;
    margin: 20px 0;
}
.progress {
    overflow: hidden;
    height: 20px;
    margin-bottom: 20px;
    background-color: #AEAEAE;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {
    width: 0px;
    box-shadow: none;
    background: #AEAEAE;
}
.progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #AEAEAE;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}



.bs-wizard {margin-top: 40px;}



/*Form Wizard*/
.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #A1A1A1; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;} 
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #AEAEAE; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #AEAEAE;}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #AEAEAE;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
</style>
<body>
    @include('frontend/inc_topmenu')

    <section id="pdpapage" class="wrapperPages">
        <div class="container-fluid">

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            นโยบายความเป็นส่วนตัว
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                    <div class="container">
		
        
        <div class="row bs-wizard" style="border-bottom:0;">
            
            <div class="col-xs-3 bs-wizard-step complete">
              <div class="text-center bs-wizard-stepnum">Step 1</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 2</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat. Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique placerat</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 3</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi bibendum bibendum</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
              <div class="text-center bs-wizard-stepnum">Step 4</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div>
            </div>
        </div>
    

</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

</body>

</html>