<?php
session_start();
$idexp=$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en" >
<head>
        <title>profileClient</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        
        <link href="http://fr.allfont.net/allfont.css?fonts=agency-fb-bold" rel="stylesheet" type="text/css" />
        <script src="rout.js"> </script>

</head>
<body ng-app="aa" ng-controller="Control">
        <div class="jumbotron text-center" style="margin-bottom:0 ; background-color: white ;margin-bottom: -60px ;margin-top: -50px; ">
                <h1 style="font-weight: bold;font-size: 45pt;font-family: 'Agency FB Bold', arial ;text-shadow: 4px 4px 4px #aaa; ">Cabinet d'experts Resolu</h1>
                <img src="img/logo.png" alt="">     
         </div>

               <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color: #212529 !important ; ">
           

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link"  href="#messages" data-toggle="tab"  style="color: #ffffff ;font-family: 'Agency FB Bold', arial">Gestion de demandes</a>
                    </li>
                    <a class="nav-link"  href="#demandes" data-toggle="tab"  style="color: #ffffff ;font-family: 'Agency FB Bold', arial">Gestion de Dossiers</a>
                </li>
                <a class="nav-link"  href="#1" data-toggle="tab"   style="color: #ffffff ;font-family: 'Agency FB Bold', arial">Messages</a>
                </li>

                  </ul>
                </div>  
                <div  style="right:10px  !important ">
                  <ul class="navbar-nav" >
                      <li class="nav-item">
                         <a href="deconnect.php" class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial" >Déconnexion</a>
                      </li>
                  </ul>
                </div>
              </nav>





          
                <div class="row" style="padding-top: 10px">
                      <div class="col-sm-2"><!--left col-->
                          
                        

                        <div class="card" ng-repeat="item in exp">
                          <div class="text-center">
                        <img src="img/5.jpg" class="rounded-circle" alt="avatar" height="150" width="150">
                        
                          <h1>{{item.pre_exp}}  {{item.nom_exp}}</h1>
                          <h5 class="title">Domaine : {{item.domaine}} </h5>
                          <h5> {{item.mail_exp}} </h5>
                          <h5> {{item.tel_exp}} </h5>

                         <a href="#modifier" data-toggle="tab">Modifier profil</a>
                         </div>
                        </div>
                      
                      
                    </div><!--/col-3-->
                    <div class="col-sm-9">
                      

                      <div class="tab-content">
                    <!-- show on screen-->
                      <div class="tab-pane " id="1">
                            <div class="tab-content">
                                    <div class="tab-pane active " id="list" >
                                        <table class="table table-striped table-hover"  >
                                            <thead>
                                                <tr>
                                                    <th>Etat</th>
                                                    <th>sender</th>
                                                    <th>object</th>
                                                    <th>Date d'envoi</th>
                                                     <th>view</th>
                            
                                                </tr>
                                            </thead>
                            
                                            <tbody>
                            
                                           <tr  ng-repeat="item in inbox">
                            
                                                  <td>{{item.etat}}</td>
                                                  <td>{{item.id_sender}}</td>
                                                  <td>{{item.object}}</td>
                                                  <td>{{item.time}}</td>
                                                  <td><button> voir le contenu </button></td>
                            
                            
                            
                                           </tr>
                                        
                            
                                            </tbody>
                                        </table>
                            
                                    </div>
                                    </div>
                      </div>
                      <!-------   ------>
                      
                      
                      <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="myPager"></ul>
                            </div>
                          </div>
                           
                         <div class="tab-pane active" id="messages">
                           
                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Nom de client</th>
                                            <th scope="col">Sujet</th>
                                            <th scope="col"> Date </th>
                                            <th scope="col">  </th>
                                          </tr>
                                        </thead>
                                        <tbody >
                                          <tr ng-repeat="item in forum">
                                            <td>aucun mssage</td>
                                          </tr>
                                         
                                            
                                        </tbody>
                                      </table>
                                      
                                        </tbody>
                                      </table>
                         </div><!--/tab-pane-->
                         <div class="tab-pane" id="demandes">
                           <h2> Dossiers </h2>
                                <br>
                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Nom de client </th>
                                            <th scope="col"> Sujet </th>
                                            <th scope="col">      </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Muhammad nasri</th>
                                            <td>Contrat de voiture</td>
                                            
                                            <td> <button class="btn-success"> Détails</button> </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Jalel Bouchelliga</th>
                                            <td>blanchiment d'argent</td>
                                      
                                            <td> <button class="btn-success"> Détails </button> </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Hussam Jraidi</th>
                                            <td> bla bla </td>
                                            <td> <button class="btn-success"> Détails</button> </td>
                                           
                                          </tr>
                                        </tbody>
                                      </table>
                                      
                                        </tbody>
                                      </table>
                                
                              </div><!--/tab-pane-->
                         <div class="tab-pane" id="modifier">
                                
                               
                             
                              <form >
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom" required required data-errormessage-value-missing="Please input something">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Prénom</label>
                                        <input type="text" class="form-control" name="prenom"  placeholder="Prénom" required required required data-errormessage-value-missing="Please input something">
                                      </div>
                                    </div>
                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Numéro de Télèphone</label>
                                          <input type="text" class="form-control" name="tel"  placeholder="Numéro de Télèphone" required required required data-errormessage-value-missing="Please input something">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Adresse mail</label>
                                          <input type="email" class="form-control" name="mail"  placeholder="Adresse mail" required required required data-errormessage-value-missing="Please input something">
                                        </div>
                                      </div>
                
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Mot de Passe</label>
                                          <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Mot de Passe" required required required data-errormessage-value-missing="Please input something">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Confirmer Mot de Passe</label>
                                          <input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Confirmer Mot de Passe" required required required data-errormessage-value-missing="Please input something">
                                        </div>
                                      </div>
                
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Login</label>
                                          <input type="text" class="form-control" name="login" placeholder="Login" required required required data-errormessage-value-missing="Please input something">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Image</label>
                                           <div class="form-group">
                                            <input type="file" class="form-control-file">
                                          </div>
                                        </div>
                                      </div>
                
                
                
                
                                    <button type="submit" class="btn btn-dark" style="font-family: 'Agency FB Bold' "  >Enregistrer</button>
                                  </form>
                          </div>
                          
                          </div><!--/tab-pane-->
                      </div><!--/tab-content-->
            
                    </div><!--/col-9-->
        
</body>
</html>