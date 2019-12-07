<?php
session_start() ;
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


        <style>
                .grid-container {
                    display: grid;
                    grid-template-columns: auto auto auto;

                    grid-gap: 5mm;
                }
        
                .grid-item {
                    
                   
                    padding: 20px;
                    font-size: 30px;
                    text-align: center;
                    
                }
                .grid-footer {
                    background-color: rgba(255, 255, 255, 0.8);
                    border: 1px solid rgba(0, 0, 0, 0.8);
        
                    font-size: 30px;
                    text-align: center;
                    
                }
        
                </style>

<style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 300px;
          margin: auto;
          text-align: center;
          font-family: arial;
        }
        
        .title {
          columns: #000000;;
          font-size: 18px;
          font-family: 'Agency FB Bold', arial ;
        }
      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 22px;
        margin-top: -20px;
        font-family: 'Agency FB Bold', arial ;
      }
      
      a {
        text-decoration: none;
        font-size: 22px;
        color: black;
      }
      
      button:hover, a:hover {
        opacity: 0.7;
      }
      </style>
    <script src="rout.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>



    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #B31919;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    }
</style>

</head>
<body ng-app="aa" ng-controller="Control" >

                <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >

                          <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav" id="myTab" >
                
                          <li class="nav-item"><a href="#11" class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial ;" data-toggle="tab">Acceuil </a></li>
                        <li class="nav-item"><a href="#12" class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial ;padding-left:10px " data-toggle="tab">Messagerie</a></li>
              
                        <li class="nav-item"><a href="#13" class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial ;padding-left:10px" data-toggle="tab">Contact Admin</a></li>
                        <li class="nav-item"><a href="#16" class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial ;padding-left:10px" data-toggle="tab">nv contact</a></li>
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                              <input class="search_input" type="text" name="" placeholder="Search...">
                              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                          </div>
                        </ul>
                        </div>
                      
                          <div  style="right:10px  !important ">
                              <ul class="navbar-nav" >

                                  <li class="nav-item">
                                    <a href="deconnect.php"  class="nav-link" style="color: #ffffff ;font-family: 'Agency FB Bold', arial" >Déconnexion</a>
                                  </li>
                              </ul>
                            </div>
                </nav>


              


              
                   <div class="row" style="padding-top: 10px"> 
                              <div class="col-sm-2" style="padding-top: 55px "><!--left col-->

                                        
                          <div class="card"  ng-repeat="item in clt" >
                                <div class="text-center">
                                    <h5>{{item.prenom_clt}} {{item.nom_clt}}</h5>
                                  <img src="img/jalel.jpg" class="rounded-circle" alt="avatar" height="50" width="50">
                                 
                                </div>
                                     <a href="#15" data-toggle="tab" ><h6 style="color:black"> profil </h6></a>
                                    <a href="#14" data-toggle="tab"><h6 style="color:black">Modifier profil</h6></a>
                                    
                                    
                                 
                                
                              </div>
                              <div class="card" style="margin-top: 5px ;  " >
                                <div class="container">
                                <img src="img/logo.png" height="50" width="100">
                                <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi natus, aut illo odit blanditiis 
                                  quas reiciendis qui fugit nam tempore ut non reprehenderit asperiores sunt perspiciatis! Sit repellat iusto
                                   sed. Lorem </p>
                                  </div>
                              </div>

                                                   
                                               
                                </div><!--/demandes-->

                                 <div class="col-sm-9">
                            
                                    
                              <div class="tab-content">
                      <div class="tab-pane active" id="11">
                      <!--contenue page 1 -->   
                                

                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active"><a href="#1" data-toggle="tab" style="font-family: 'Agency FB Bold';color:black !important;padding-left:380px" >All</a></li>
                                        <li><a href="#2" data-toggle="tab" style="margin-left:30px;font-family: 'Agency FB Bold';color:black !important ">Nutrition</a></li>
                                        <li><a href="#3" data-toggle="tab"  style="margin-left:30px;font-family: 'Agency FB Bold';color:black !important ">Droit</a></li>
                                    </ul>


                             <div class="tab-content">

                                        <div class="tab-pane active" id="1">    
                                                <div class="grid-container" >
                                                        <div class="grid-item" ng-repeat="item in expert  ">
                                                      <div class="card">
                                                        
                                                        <img  src="img/{{item.id_expert}}.jpg" alt="John"  width="300" >
                                                        
                                                        <h3  style="font-family: 'Agency FB Bold', arial ;font-size: 35px"><b><small>{{item.id_expert}}.</small> {{item.pre_exp}} {{item.nom_exp}}</b></h3>
                                                        
                                                        <p class="title">Domaine: {{item.domaine}}</p>
                                                        
                                                     
                                                        <p ><button  ng-click="fonction(item.nom_exp,item.id_expert)" style="width:100%; background-color: #B31919 ;font-family: 'Agency FB Bold' !important" >Contact</button></p>
                                                     
                                                      </div>
                                                      
                                                      
                                                      </div>
                                                      </div>
                                        </div>

                                 
                                        <div class="tab-pane " id="2">    
                                                <div class="grid-container" >
                                                        <div class="grid-item" ng-repeat="item in expert | filter: 'droit' ">
                                                      <div class="card">
                                                        
                                                        <img  src="img/{{item.id_expert}}.jpg" alt="John" style="width:100%" >
                                                        
                                                        <h3  style="font-family: 'Agency FB Bold', arial ;font-size: 35px"><b>{{item.pre_exp}} {{item.nom_exp}}</b></h3>
                                                        
                                                        <p class="title">Domaine: {{item.domaine}}</p>
                                                        <p class="title">Spécialisé en Nutrition</p>
                                                      
                                                        <p><a href="#5" data-toggle="tab" class="button" style="background-color:#B31919 " >Contact</a></p>
                                                      </div>
                                                      
                                                      
                                                      </div>
                                                      </div>
                                        </div>
                                        <div class="tab-pane " id="3">   
                                                <div class="grid-container" >
                                                        <div class="grid-item" ng-repeat="item in expert | filter: 'nutrition' ">
                                                      <div class="card">
                                                        
                                                        <img  src="img/{{item.id_expert}}.jpg" alt="John" style="width:100%" >
                                                        
                                                        <h3  style="font-family: 'Agency FB Bold', arial ;font-size: 35px"><b>{{item.pre_exp}} {{item.nom_exp}}</b></h3>
                                                        
                                                        <p class="title">Domaine: {{item.domaine}}</p>
                                                        <p class="title">Spécialisé en Nutrition</p>
                                                      
                                                        <p><a href="#5" data-toggle="tab" class="button" style="background-color:#B31919 " >Contact</a></p>
                                                      </div>
                                                      
                                                      
                                                      </div>
                                                      </div>
                                        </div>

                            </div>
                        </div>

                        <div class="tab-pane " id="12">   
    
                                                <table class="table table-striped table-hover" >
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

                        <div class="tab-pane " id="13">    

                                <div class="container bootstrap snippet" style="padding-right : 200px;padding-top: 30px">
                                <form name="emailForm" class="form-horizontal">
      

                                        

                                        <!-- Subject field -->
                                        <div class="form-group">
                                          <label >Subject:</label>
                                          <div >
                                            
                                            <input type="text"  class="form-control" placeholder="Enter Subject">
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label >Body:</label>
                                          <div >
                                            
                                            <textarea class="form-control" rows="5"></textarea>
                                          </div>
                                        </div>
                                  
                                        <div class="form-group">
                                          <div >
                                            <button type="submit"  class="btn btn-success pull-right">Send Email</button>
                                            <button  class="btn btn-link pull-right">Cancel</button>
                                          </div>
                                        </div>
                                        <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
                                      </form>
                                    </div>

                                      
                                    </div>
                        

                        <div class="tab-pane " id="14"> 

                            <form  style="padding-top: 40px">
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
            
                                  
                                    <br>
            
            
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                              </form>
                          </div>
                          <div class="tab-pane " id="15">
                          <div  style="padding-top:50px" ng-repeat="item in clt">
                            <h2>Profil</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5><span class="badge badge-dark">Nom</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.nom_clt}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h5><span class="badge badge-dark">Prénom</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.prenom_clt}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h5><span class="badge badge-dark">Pseudo</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.login_clt}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h5><span class="badge badge-dark">Email</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.mail_clt}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h5><span class="badge badge-dark">Télèphone</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.tel_clt}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h5><span class="badge badge-dark">Date de naissance</span></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{item.date_naiss}}</p>
                                            </div>
                                        </div>
                            </div>
                            </div>
                            <div class="tab-pane " id="16" >
                             
                                                  <div class="container" style="width:100% !important"  >
                                                      <form method="post" action="envoiform.php">
                                                          <div class="col-lg-12">
                                                                  <div >
                                                                      <div class="card-body">
                                                                          <h2 align="center">Destinataire  : <b >{{dest}}</b></h2>
                                                                          <br>
                                                                          <h4 class="card-title"><b>Sujet de la demande</b></h4>
                                                                          <div class="basic-form">
                                                                              
                                                                                  <div class="form-group">
                                                                                      <input type="text" class="form-control input-default" placeholder="Sujet" name="sujet" >
                                                                                  </div>
                                                                              
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              
                                  
                                                      <div class="col-lg-12">
                                                                
                                                                      <div class="card-body">
                                                                          <h4 class="card-title"><b>Coordonées</b></h4>
                                                                          <div class="basic-form">
                                                                              
                                                                                  <div class="row">
                                                                                      <div class="col">
                                                                                          <input type="text" class="form-control" placeholder="Nom" name="nom" >
                                                                                        </div>
                                                                                        <div class="col">
                                                                                          <input type="text" class="form-control" placeholder="Prénom" name="prenom"  >
                                                                                      </div>
                                                                                  </div>
                                                                              
                                                                          </div>
                                                                      </div>
                                                                
                                                          </div>
                                  
                                                      <div class="col-lg-12">
                                                        
                                                              <div class="card-body">
                                                                  <h4 class="card-title"><b>Description </b></h4>
                                                                  <div class="basic-form">
                                                                     
                                                                          <div class="form-group">
                                                                              
                                                                             <input type="text" class="form-control" name="desc" >
                                                                          </div>
                                                                      
                                                                  </div>
                                                              </div>
                                                  
                                                      </div>
                                                      <div class="col-lg-12">
                                                        
                                                        <div class="card-body">
                                                            <h4 class="card-title"><b>numéro de l'expert </b></h4>
                                                            <div class="basic-form">
                                                         
                                                                    <div class="form-group">
                                                                        
                                                                       <input type="text" class="form-control" name="num" >
                                                                    </div>
                                                                
                                                            </div>
                                                        </div>
                                            
                                                </div>
                                  
                                  
                                                      <div class="col-lg-12">
                                                    
                                                              <div class="card-body">
                                                                  <h4 class="card-title"><b>Joindre un fichier</b></h4>
                                                                  <div class="basic-form">
                                                                     
                                                                          <div class="form-group">
                                                                              <input type="file" class="form-control-file">
                                                                              <p align="right" >
                                                                              <input type="submit" class="btn btn-primary" > 
                                                                                    </p>
                                                                          </div>
                                                                          
                                                                   
                                                                  </div>
                                                            
                                                          </div>
                                                      </div>
                                  
                                                      </form>
                                  </div>

                                </div>
                      </div>
                              







  </body>
</html>