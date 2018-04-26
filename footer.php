 <!-- ОТЗЫВЫ  END-->

    <div id="map" style="height: 450px">
        
    </div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo ot_get_option('lat') ?>, lng: <?php echo ot_get_option('lng') ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


  

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Гарантия качества</h2>
                    <hr class="primary">
                    <p>Ассоциация Компьютерных Мастеров</p>
                </div>
                <div class="col-lg-12 text-center">
                    <a class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal" style=" box-shadow: inset 0 3px 5px rgba(0,0,0,0); margin-left: 10px; font-size:16px;"><i class="fa fa-envelope-o fa-3x sr-contact"></i><br />Отправить заявку</a>                    
                    <a class="btn btn-xl sr-button" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px;"><i class="fa fa-phone fa-3x sr-contact"></i><br />+375 (29) 848-88-55</a>                                        
                    <a class="btn btn-xl sr-button" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px;"><i class="fa fa-phone fa-3x sr-contact"></i><br />+375 (29) 627-69-77</a>
                    <a class="btn btn-xl sr-button" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px;"><i class="fa fa-map-marker fa-3x sr-contact" aria-hidden="true"></i><br />п-р Партизанский 8.,<br /> корп. 15 ком. 104.</a>                                          
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="top:25%;">
        <div class="modal-dialog">
            <form id="form" class="form-horizontal">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="text-align: center;">                        
                        <h4 class="modal-title">Заказать сейчас</h4>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="textinput">Имя</label>-->
                            <div class="col-md-12">
                                <input id="name" name="name" type="text" placeholder="Имя" class="form-control input-md" required="">                            
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="textinput">Телефон</label>-->
                            <div class="col-md-12">
                                <input id="phone" name="phone" type="text" placeholder="Телефон" class="form-control input-md" required=""> 
                                <span id="wrongPhone" class="help-block" style="display:none; color:darkred;">Некорректный номер телефона!</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <input name="submit" type="submit" class="btn btn-default" value="ОТПРАВИТЬ" />
                    </div>
                </div>
            </form>
        </div>
    </div>  
<?php wp_footer(); ?>
</body>
</html>

