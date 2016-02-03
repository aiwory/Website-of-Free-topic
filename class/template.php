<?php

/**
 * Created by PhpStorm.
 * User: Aigars
 * Date: 06.01.2016
 * Time: 10:45
 */
class template_class
{
    /**
     *
     */
    function getHead(){
        echo'<meta charset="UTF-8">

		<link rel="stylesheet" href="./css/html5-reset.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="./lib/bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="./lib/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<link href="./lib/lightbox.css" rel="stylesheet"/>
		<link rel="stylesheet" href="./css/my.css">
		<link rel="icon" type="icon" href="./images/favicon.ico"/>';
    }
    function getJS(){
        echo'<script src="./lib/jquery-2.1.4.min.js"></script>
		<script src="./lib/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<script src="./js/commentary.js"></script>
		<script type="text/javascript" src="./js/mainmenu.js"></script>
		<script type="text/javascript" src="./js/submenu.js"></script>
		<script src="./lib/lightbox.js"></script>';
    }
    function getMenu() {
        echo '
            	<div class = "col-md-12">
                <nav class="navbar navbar-inverse navbar-fixed-top">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#izvelne">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand">Planētas</a>
				    </div>
				    <div class="collapse navbar-collapse" id="izvelne">
				      <ul id="pageMenu" class="nav navbar-nav">
					        <li><a href="index">Sākums</a></li>
					        <li><a href="planets">Saules sistēma</a></li>
							<li><a href="about">Par autoru</a></li>
				      </ul>
				       <ul id="login-menu" class="nav navbar-nav pull-right">
			 				<li data-toggle="modal" data-target="#logModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Ieiet</a></li>
							<li data-toggle="modal" data-target="#regModal"><a href="#"><span class="glyphicon glyphicon-user"></span> Reģistrēties</a></li>
			 		  </ul>
				    </div>
				</nav>
				</div>
        ';

    }

    /**
     *
     */
    function getFooter(){
        echo '
            <footer class="navbar-fixed-bottom">
		        <h1  class = "hide">Autors</h1>
		        <p class="pull-right">Aigars Ivaņenko, EDP1</p>
	        </footer>
        ';
    }

    function getRegistration(){
        echo '<div id="regModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reģistrācijas forma</h4>
                      </div>
                      <div class="modal-body">
                         <form role="form">
                              <div class="form-group">
                                <label for="usr">Ievadiet lietotājvārdu:</label>
                                <input type="text" class="form-control" id="usr">
                              </div>
                              <div class="form-group">
                                <label for="email">Ievadiet e-pastu:</label>
                                <input type="email" class="form-control" id="email">
                              </div>
                              <div class="form-group">
                                <label for="pwd">ievadiet paroli:</label>
                                <input type="password" class="form-control" id="pwd">
                              </div>

                              <div class="form-group">
                                <label for="name">Ievadiet savu vārdu:</label>
                                <input type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group">
                                <label for="surname">Ievadiet savu uzvārdu:</label>
                                <input type="text" class="form-control" id="surname">
                              </div>
                              <div class="checkbox">
                              <div class="radio">
                                <label class="radio-inline"><input type="radio" name="sex">Vīrietis</label>
                                <label class="radio-inline"><input type="radio" name="sex">Sieviete</label>
                              </div>
                                <label><input type="checkbox"> Piekrītu noteikumiem</label>
                              </div>
                              <button type="submit" class="btn btn-default">Iesniegt</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                      </div>
                    </div>

                  </div>
                </div>';



    }

    function getLogin(){
        echo '<div id="logModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Pieslēgšanās profilā</h4>
                          </div>
                          <div class="modal-body">
                              <form role="form">
                                  <div class="form-group">
                                      <label for="email">E-pasts:</label>
                                      <input type="email" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                      <label for="pwd">Parole:</label>
                                      <input type="password" class="form-control" id="pwd">
                                  </div>
                                  <button type="submit" class="btn btn-default">Pieslēgties</button>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                          </div>
                      </div>
                  </div>
              </div>';


    }
}
