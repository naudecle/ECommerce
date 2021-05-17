<style>
        /* body
        {
            overflow: hidden;
        } */
        .alert{
            background: #43FF53;
            padding: 20px 40px;
            min-width: 420px;
            position: fixed;
            right: 0px;
            top: 10%;
            overflow: hidden;
            border-radius: 4px;
            border-left: 8px solid #0FCA00;
        }
        .alert.show{
            animation: show_slide 1s ease forwards;
        }
        @keyframes show_slide{
            0%{
                transfrom: translateX(100%);
            }
            40%{
                transfrom: translateX(-10%);
            }
            80%{
                transfrom: translateX(0%);
            }
            100%{
                transfrom: translateX(-10%);
            }
        }
        .alert .fa-exclamation-circle{
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #0FCA00;
            font-size: 30px;
        }
        .alert .msg
        {
            padding: 0 20px;
            font-size: 20px;
            color: #fff;
        }
        .alert .close-btn
        {
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            background: #70F760;
            padding:20px 18px;
            cursor: pointer;
        }
        .close-btn:hover{
            background: #9BFE83;
        }
        .close-btn .fa-times{
            color: #0FCA00;
            font-size: 22px;
            line-height:44px;
        }
        .alert.hide{
            display:none;
        }
        
</style>
<div class="alert hide">
    <span class="fas fa-exclamation-circle"></span>
    <span class="msg"><?php $item = "Item added in the cart"; return $item?></span>
    <div class="close-btn">
        <span class="fas fa-times"></span>
    </div>
</div>
<script>
      $('button').click(function(){
        $('.alert').removeClass("hide");
        $('.alert').addClass("show");
        setTimeout(function(){
            $('.alert').addClass("hide");
            $('.alert').removeClass("show");
        },5000);//5 sec out

      });
      $('.close-btn').click(function(){
        $('.alert').addClass("hide");
        $('.alert').removeClass("show");

      });
  </script>