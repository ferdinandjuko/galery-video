<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSCRIPTION</title>
</head>
<body>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="insert_data.php" method="post">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationServer01">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" name="name" required="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer02">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="firstname" required="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input type="text" class="form-control is-invalid" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer03">Mail</label>
            <input type="text" class="form-control is-invalid" name="mail" id="validationServer03" required="">
            <div class="invalid-feedback">
              Please provide a valid mail.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer04">State</label>
            <select class="custom-select is-invalid" name="state" id="validationServer04" required="">
                <option selected="" disabled="" value="">Choose...</option>
                <option > Afrique du Sud</option><option > Afghanistan </option><option> Albanie </option><option> Alg??rie </option><option > Allemagne </option><option> Andorre </option><option> Angola </option><option> Antigua-et-Barbuda </option><option> Arabie Saoudite </option><option> Argentine </option><option> Arm??nie </option><option> Australie </option><option> Autriche </option><option> Azerba??djan </option><option> Bahamas </option>
                <option> Bahre??n </option><option> Bangladesh </option><option> Barbade </option><option> Belgique </option><option> Belize </option><option> B??nin </option><option> Bhoutan </option><option > Bi??lorussie </ option><option> Birmanie </option><option> Bolivie </option><option> Bosnie-Herz??govine</option><option> Botswana </option><option> Br??sil </option><option> Brunei </option><option> Bulgarie </option><option > Burkina Faso </option><option> Burundi </option><option> Cambodge </option><option> Cameroun </option><option> Canada </option>
                <option > Cap-Vert </option><option> Chili </option><option> Chine </option><option> Chypre </option><option> Colombie </option><option>Comores</option>
                <option> Cor??e du Nord </option><option> Cor??e du Sud </option><option> Costa Rica </option><option> C??te d???Ivoire </option><option> Croatie </option><option> Cuba </option><option > Danemark </option><option> Djibouti </option><option> Dominique </option><option> ??gypte </option>
                <option> ??mirats arabes unis </option><option> ??quateur </option><option> ??rythr??e </option><option> Espagne </option><option> Eswatini </option><option> Estonie </option><option> ??tats-Unis </option><option> ??thiopie </option><option> Fidji </option><option> Finlande </option><option> France </option>
                <option > Gabon </option><option> Gambie </option><option> G??orgie </option><option> Ghana </option><option> Gr??ce </option><option> Grenade </option>
                <option> Guatemala </option><option> Guin??e </option><option> Guin??e ??quatoriale </option><option> Guin??e-Bissau </option><option> Guyana </option>
                <option> Ha??ti </option><option> Honduras </option><option> Hongrie </option><option> ??les Cook </option><option> ??les Marshall </option><option> Inde </option><option> Indon??sie </option><option> Irak </option><option> Iran </option><option> Irlande </option><option> Islande </option><option> Isra??l </option><option> Italie </option><option> Jama??que </option><option> Japon </option><option> Jordanie </option><option> Kazakhstan </option><option> Kenya </option><option > Kirghizistan </ option><option> Kiribati </option><option> Kowe??t </option><option> Laos </option><option> Lesotho </ option><option > Lettonie </option><option> Liban </option><option> Liberia </option><option> Libye </option><option > Liechtenstein </option><option> Lituanie </option><option> Luxembourg </option>
                <option> Mac??doine </option><option> Madagascar </option><option> Malaisie </option><option> Malawi </option><option> Maldives </option><option> Mali </option><option> Malte </option><option> Maroc </option><option> Maurice </option><option > Mauritanie </option><option> Mexique </option><option> Micron??sie </option><option> Moldavie </option><option> Monaco </option><option > Mongolie </option>
                <option > Mont??n??gro </option><option> Mozambique </option><option> Namibie </option><option> Nauru </option><option> N??pal </option><option> Nicaragua </option>
                <option> Niger </option><option> Nigeria </option><option> Niue </option><option> Norv??ge </option><option > Nouvelle-Z??lande </option><option> Oman </option><option> Ouganda </option><option> Ouzb??kistan </option><option> Pakistan </option><option> Palaos </option>
                <option> Palestine </option><option> Panama </option><option> Papouasie-Nouvelle-Guin??e </option><option> Paraguay </option><option> Pays-Bas </option><option> P??rou </option><option> Philippines </option><option> Pologne </option><option> Portugal </option><option> Qatar </option>
                <option> R??publique centrafricaine </option><option> R??publique d??mocratique du Congo </option><option> R??publique Dominicaine </option><option> R??publique du Congo </option>
                <option> R??publique tch??que </option><option> Roumanie </option><option> Royaume-Uni </option><option> Russie </option><option> Rwanda </option>
                <option>Saint-Kitts-et-Nevis </option><option> Saint-Vincent-et-les-Grenadines </option><option> Sainte-Lucie </option><option> Saint-Marin </option><option> Salomon </option><option> Salvador </option><option> Samoa </option>
                <option> S??o Tom??-et-Principe </option><option> S??n??gal </option><option> Serbie </option><option> Seychelles </option><option> Sierra Leone </option><option> Singapour </option><option> Slovaquie </option><option > Slov??nie </option>
                <option> Somalie </option><option> Soudan </option><option> Soudan du Sud </option><option> Sri Lanka </option><option> Su??de </option><option> Suisse </option><option> Suriname </option><option> Syrie </option><option > Tadjikistan </option><option> Tanzanie </option>
                <option> Tchad </option><option> Tha??lande </option><option> Timor oriental </option><option> Togo </option><option> Tonga </option><option> Trinit??-et-Tobago </option><option> Tunisie </option><option > Turkm??nistan </option><option> Turquie </option><option> Tuvalu </option>
                <option> Ukraine </option><option> Uruguay </option><option> Vanuatu </option><option > Vatican </option><option> Venezuela </option><option> Vi??t Nam </option><option> Y??men </option><option> Zambie </option><option> Zimbabwe </option>            
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer05">Password</label>
            <input type="password" onclick="password()" class="form-control is-invalid" name="password" id="validationServer05"  required="">
            <div class="invalid-feedback" >
              Please provide a valid password.
              <p id="valeur" style="color: red;"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required="">
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
      <script src="js/connection.js"></script>>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>