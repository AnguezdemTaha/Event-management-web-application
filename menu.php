<nav class="navbar navbar-inverse navbar-fixed-top"> 
        <div class="container-fluid">
          <ul class="nav navbar-nav"> <li>
          
            <a href="#">Gestion<span>Evènements</span></a>
          
          </li>

          
            
            <li><a href="page_princ_utilisateur.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
          
          
          
            
            <li class="navbar-form navbar-right inline-form"><select class="input-sm form-control" name="type" id="type" onchange="document.location.href = this.value;">
                 <option value="
                 #" selected="selected"><?php echo $_SESSION['name'] ;?></option>
                 <option value="
                 page_evn_interese.php">Evènement intéressés</option>
                       <option value="page_evn_participe.php">Evènement participés</option>
                       <option value="parametres.php">Paramétres</option>
                       <option value="page_cree_evn.php">Crèe un evènement</option>
                       <option value="trai_deconexion.php">Déconnexion</option>
                    </select>
                </li>
                <li class="navbar-form navbar-right inline-form"><select class="input-sm form-control" name="Language" id="Longuage"  onchange="document.location.href = this.value;">
                 <option value="
                 #" selected="selected">Language</option>
                 <option value="#">Francais</option>
                 <option value="
                 #">Anglais</option>
                       <option value="#">Arabic</option>
                       
                    </select>
                </li>

            
            <script src="projet_js/jss1.js"></script>
          </ul>
          <div class="navbar-form navbar-right inline-form">
            <li class="active"><a href="trai_deconexion.php"><span class="glyphicon glyphicon-user"></span>Se deconnecter</a></li>
            </div>
          </div>

          </nav>