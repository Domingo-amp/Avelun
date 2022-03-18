<!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

<style type="text/css">
  .Allcont{
    background-color: #7775;
    width: 100%;
    height: auto;
  }
  .Contend{
    max-width: 650px;
    height: auto;

    background-color: none;
    text-align: center;
    margin: 50px auto;
  }

  .labels{
    width: 300px;
    margin-right: 20px;
    height: auto;
    background-color: none;
    display: inline-block;
    vertical-align: top;
    text-align: center;
    margin-bottom: 25px;
  }


</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jscripts/selectsPaises.js"></script>
<script type="text/javascript" src="jscripts/selectsIndustria.js"></script>
</head>
<body>

<div class="card">
  <div class="card-header" style='text-align:center'><img src="img/logo.png"><h3>Registro de Proveedor</h3></div>
    <div class="Allcont">
    <div class="Contend">
      <form class="form-group" method="post" action="#">

        <div class="labels"><input type="text" name="nombre" class="form-control" placeholder="Nombre" required></div>
        <div class="labels"><input type="text" name="apellido" class="form-control" placeholder="Apellido" required></div>

        <div class="labels">
          <label>Fecha de Cumpleaños</label>
          <br>
          <select name="dayBirthday" class="form-control" style="width: 70px; display:inline-block;">
                      <option value="none" selected></option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
          </select>

          <select name="monthBirthday" class="form-control" style="width: 130px; display:inline-block;">
                      <option value="none" selected></option>
                      <option value="01">Enero</option>
                      <option value="02">Febrero</option>
                      <option value="03">Marzo</option>
                      <option value="04">Abril</option>
                      <option value="05">Mayo</option>
                      <option value="06">Junio</option>
                      <option value="07">Julio</option>
                      <option value="08">Agosto</option>
                      <option value="09">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
          </select>

          <select name="yearBirthday" class="form-control" style="width: 90px; display:inline-block;">
                      <option value="none" selected></option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                      <option value="1969">1969</option>
                      <option value="1968">1968</option>
                      <option value="1967">1967</option>
                      <option value="1966">1966</option>
                      <option value="1965">1965</option>
                      <option value="1964">1964</option>
                      <option value="1963">1963</option>
                      <option value="1962">1962</option>
                      <option value="1961">1961</option>
                      <option value="1960">1960</option>
                      <option value="1959">1959</option>
                      <option value="1958">1958</option>
                      <option value="1957">1957</option>
                      <option value="1956">1956</option>
                      <option value="1955">1955</option>
                      <option value="1954">1954</option>
                      <option value="1953">1953</option>
                      <option value="1952">1952</option>
                      <option value="1951">1951</option>
                      <option value="1950">1950</option>
                      <option value="1949">1949</option>
                      <option value="1948">1948</option>
                      <option value="1947">1947</option>
                      <option value="1946">1946</option>
                      <option value="1945">1945</option>
          </select>
        </div>

        <div class="labels">
          <label>Genero:</label>
          <br>
          <select name="genero" class="form-control" style="width: 90px; display:inline-block;">
            <option value="none" selected></option>
            <option value="masculino">Hombre</option>
            <option value="femenino">Mujer</option>
          </select>
        </div>

        <div class="labels"><input type="text" name="posicion" class="form-control" placeholder="Posicion" required></div>
        <div class="labels"><input type="text" name="email"class="form-control" placeholder="Correo" required></div>
        <div class="labels"><input type="text" name="telefonoTrabajo" class="form-control" placeholder="Tel. Trabajo" required></div>
        <div class="labels"><input type="text" name="telefonoMovil" class="form-control" placeholder="Tel. Movil" required></div>
        <div class="labels"><input type="text" name="empresa" class="form-control" placeholder="Empresa" required></div>

        <div class="labels">
          <label>Fundada:</label>
          <br>
          <select name="dayAniversary" class="form-control" style="width: 70px; display:inline-block;">
                      <option value="none" selected></option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
          </select>

          <select name="monthAniversary" class="form-control" style="width: 130px; display:inline-block;">
                      <option value="none" selected></option>
                      <option value="01">Enero</option>
                      <option value="02">Febrero</option>
                      <option value="03">Marzo</option>
                      <option value="04">Abril</option>
                      <option value="05">Mayo</option>
                      <option value="06">Junio</option>
                      <option value="07">Julio</option>
                      <option value="08">Agosto</option>
                      <option value="09">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
          </select>

          <select name="yearAniversary" class="form-control" style="width: 90px; display:inline-block;">
                  <option value="2003">2021</option>
                  <option value="2003">2020</option>
                  <option value="2003">2019</option>    
                  <option value="2003">2018</option>
                  <option value="2003">2017</option>
                  <option value="2003">2016</option>
                  <option value="2003">2015</option>
                  <option value="2003">2014</option>
                  <option value="2003">2013</option>
                  <option value="2003">2012</option>
                  <option value="2003">2011</option>
                  <option value="2003">2010</option>
                  <option value="2003">2009</option>
                  <option value="2003">2008</option>
                  <option value="2003">2007</option>
                  <option value="2003">2006</option>
                  <option value="2003">2005</option>
                  <option value="2003">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
          </select>
        </div>

        <div class="labels"><input type="text" name="emailEmpresa1" class="form-control" placeholder="Email" required></div>
        <div class="labels"><input type="text" name="emailEmpresa2" class="form-control" placeholder="Email-2" required></div>
        <div class="labels"><input type="text" name="telefonoEmpresa1" class="form-control" placeholder="Telefono" required></div>
        <div class="labels"><input type="text" name="telefonoEmpresa2" class="form-control" placeholder="Telefono-2" required></div>

        <div class="labels">
          <label>Pais:</label>
          <br>
          <select name="pais" class="form-control">
                  <option value='0' selected="true">Selecionar</option>
                  <option value="Afganistán" id="AF">Afganistán</option>
                  <option value="Albania" id="AL">Albania</option>
                  <option value="Alemania" id="DE">Alemania</option>
                  <option value="Andorra" id="AD">Andorra</option>
                  <option value="Angola" id="AO">Angola</option>
                  <option value="Anguila" id="AI">Anguila</option>
                  <option value="Antártida" id="AQ">Antártida</option>
                  <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                  <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                  <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                  <option value="Argelia" id="DZ">Argelia</option>
                  <option value="Argentina" id="AR">Argentina</option>
                  <option value="Armenia" id="AM">Armenia</option>
                  <option value="Aruba" id="AW">Aruba</option>
                  <option value="Australia" id="AU">Australia</option>
                  <option value="Austria" id="AT">Austria</option>
                  <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                  <option value="Bahamas" id="BS">Bahamas</option>
                  <option value="Bahrein" id="BH">Bahrein</option>
                  <option value="Bangladesh" id="BD">Bangladesh</option>
                  <option value="Barbados" id="BB">Barbados</option>
                  <option value="Bélgica" id="BE">Bélgica</option>
                  <option value="Belice" id="BZ">Belice</option>
                  <option value="Benín" id="BJ">Benín</option>
                  <option value="Bermudas" id="BM">Bermudas</option>
                  <option value="Bhután" id="BT">Bhután</option>
                  <option value="Bielorrusia" id="BY">Bielorrusia</option>
                  <option value="Birmania" id="MM">Birmania</option>
                  <option value="Bolivia" id="BO">Bolivia</option>
                  <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                  <option value="Botsuana" id="BW">Botsuana</option>
                  <option value="Brasil" id="BR">Brasil</option>
                  <option value="Brunei" id="BN">Brunei</option>
                  <option value="Bulgaria" id="BG">Bulgaria</option>
                  <option value="Burkina Faso" id="BF">Burkina Faso</option>
                  <option value="Burundi" id="BI">Burundi</option>
                  <option value="Cabo Verde" id="CV">Cabo Verde</option>
                  <option value="Camboya" id="KH">Camboya</option>
                  <option value="Camerún" id="CM">Camerún</option>
                  <option value="Canadá" id="CA">Canadá</option>
                  <option value="Chad" id="TD">Chad</option>
                  <option value="Chile" id="CL">Chile</option>
                  <option value="China" id="CN">China</option>
                  <option value="Chipre" id="CY">Chipre</option>
                  <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                  <option value="Colombia" id="CO">Colombia</option>
                  <option value="Comores" id="KM">Comores</option>
                  <option value="Congo" id="CG">Congo</option>
                  <option value="Corea" id="KR">Corea</option>
                  <option value="Corea del Norte" id="KP">Corea del Norte</option>
                  <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                  <option value="Costa Rica" id="CR">Costa Rica</option>
                  <option value="Croacia" id="HR">Croacia</option>
                  <option value="Cuba" id="CU">Cuba</option>
                  <option value="Dinamarca" id="DK">Dinamarca</option>
                  <option value="Djibouri" id="DJ">Djibouri</option>
                  <option value="Dominica" id="DM">Dominica</option>
                  <option value="Ecuador" id="EC">Ecuador</option>
                  <option value="Egipto" id="EG">Egipto</option>
                  <option value="El Salvador" id="SV">El Salvador</option>
                  <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                  <option value="Eritrea" id="ER">Eritrea</option>
                  <option value="Eslovaquia" id="SK">Eslovaquia</option>
                  <option value="Eslovenia" id="SI">Eslovenia</option>
                  <option value="España" id="ES">España</option>
                  <option value="Estados Unidos" id="US">Estados Unidos</option>
                  <option value="Estonia" id="EE">Estonia</option>
                  <option value="c" id="ET">Etiopía</option>
                  <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                  <option value="Filipinas" id="PH">Filipinas</option>
                  <option value="Finlandia" id="FI">Finlandia</option>
                  <option value="Francia" id="FR">Francia</option>
                  <option value="Gabón" id="GA">Gabón</option>
                  <option value="Gambia" id="GM">Gambia</option>
                  <option value="Georgia" id="GE">Georgia</option>
                  <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                  <option value="Ghana" id="GH">Ghana</option>
                  <option value="Gibraltar" id="GI">Gibraltar</option>
                  <option value="Granada" id="GD">Granada</option>
                  <option value="Grecia" id="GR">Grecia</option>
                  <option value="Groenlandia" id="GL">Groenlandia</option>
                  <option value="Guadalupe" id="GP">Guadalupe</option>
                  <option value="Guam" id="GU">Guam</option>
                  <option value="Guatemala" id="GT">Guatemala</option>
                  <option value="Guayana" id="GY">Guayana</option>
                  <option value="Guayana francesa" id="GF">Guayana francesa</option>
                  <option value="Guinea" id="GN">Guinea</option>
                  <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                  <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                  <option value="Haití" id="HT">Haití</option>
                  <option value="Holanda" id="NL">Holanda</option>
                  <option value="Honduras" id="HN">Honduras</option>
                  <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                  <option value="Hungría" id="HU">Hungría</option>
                  <option value="India" id="IN">India</option>
                  <option value="Indonesia" id="ID">Indonesia</option>
                  <option value="Irak" id="IQ">Irak</option>
                  <option value="Irán" id="IR">Irán</option>
                  <option value="Irlanda" id="IE">Irlanda</option>
                  <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                  <option value="Isla Christmas" id="CX">Isla Christmas</option>
                  <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                  <option value="Islandia" id="IS">Islandia</option>
                  <option value="Islas Caimán" id="KY">Islas Caimán</option>
                  <option value="Islas Cook" id="CK">Islas Cook</option>
                  <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                  <option value="Islas Faroe" id="FO">Islas Faroe</option>
                  <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                  <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                  <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                  <option value="Islas Marshall" id="MH">Islas Marshall</option>
                  <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                  <option value="Islas Palau" id="PW">Islas Palau</option>
                  <option value="Islas Salomón" d="SB">Islas Salomón</option>
                  <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                  <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                  <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                  <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                  <option value="Israel" id="IL">Israel</option>
                  <option value="Italia" id="IT">Italia</option>
                  <option value="Jamaica" id="JM">Jamaica</option>
                  <option value="Japón" id="JP">Japón</option>
                  <option value="Jordania" id="JO">Jordania</option>
                  <option value="Kazajistán" id="KZ">Kazajistán</option>
                  <option value="Kenia" id="KE">Kenia</option>
                  <option value="Kirguizistán" id="KG">Kirguizistán</option>
                  <option value="Kiribati" id="KI">Kiribati</option>
                  <option value="Kuwait" id="KW">Kuwait</option>
                  <option value="Laos" id="LA">Laos</option>
                  <option value="Lesoto" id="LS">Lesoto</option>
                  <option value="Letonia" id="LV">Letonia</option>
                  <option value="Líbano" id="LB">Líbano</option>
                  <option value="Liberia" id="LR">Liberia</option>
                  <option value="Libia" id="LY">Libia</option>
                  <option value="Liechtenstein" id="LI">Liechtenstein</option>
                  <option value="Lituania" id="LT">Lituania</option>
                  <option value="Luxemburgo" id="LU">Luxemburgo</option>
                  <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                  <option value="Madagascar" id="MG">Madagascar</option>
                  <option value="Malasia" id="MY">Malasia</option>
                  <option value="Malawi" id="MW">Malawi</option>
                  <option value="Maldivas" id="MV">Maldivas</option>
                  <option value="Malí" id="ML">Malí</option>
                  <option value="Malta" id="MT">Malta</option>
                  <option value="Marruecos" id="MA">Marruecos</option>
                  <option value="Martinica" id="MQ">Martinica</option>
                  <option value="Mauricio" id="MU">Mauricio</option>
                  <option value="Mauritania" id="MR">Mauritania</option>
                  <option value="Mayotte" id="YT">Mayotte</option>
                  <option value="México" id="MX">México</option>
                  <option value="Micronesia" id="FM">Micronesia</option>
                  <option value="Moldavia" id="MD">Moldavia</option>
                  <option value="Mónaco" id="MC">Mónaco</option>
                  <option value="Mongolia" id="MN">Mongolia</option>
                  <option value="Montserrat" id="MS">Montserrat</option>
                  <option value="Mozambique" id="MZ">Mozambique</option>
                  <option value="Namibia" id="NA">Namibia</option>
                  <option value="Nauru" id="NR">Nauru</option>
                  <option value="Nepal" id="NP">Nepal</option>
                  <option value="Nicaragua" id="NI">Nicaragua</option>
                  <option value="Níger" id="NE">Níger</option>
                  <option value="Nigeria" id="NG">Nigeria</option>
                  <option value="Niue" id="NU">Niue</option>
                  <option value="Norfolk" id="NF">Norfolk</option>
                  <option value="Noruega" id="NO">Noruega</option>
                  <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                  <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                  <option value="Omán" id="OM">Omán</option>
                  <option value="Panamá" id="PA">Panamá</option>
                  <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                  <option value="Paquistán" id="PK">Paquistán</option>
                  <option value="Paraguay" id="PY">Paraguay</option>
                  <option value="Perú" id="PE">Perú</option>
                  <option value="Pitcairn" id="PN">Pitcairn</option>
                  <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                  <option value="Polonia" id="PL">Polonia</option>
                  <option value="Portugal" id="PT">Portugal</option>
                  <option value="Puerto Rico" id="PR">Puerto Rico</option>
                  <option value="Qatar" id="QA">Qatar</option>
                  <option value="Reino Unido" id="UK">Reino Unido</option>
                  <option value="República Centroafricana" id="CF">República Centroafricana</option>
                  <option value="República Checa" id="CZ">República Checa</option>
                  <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                  <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                  <option value="República Dominicana" id="DO">República Dominicana</option>
                  <option value="Reunión" id="RE">Reunión</option>
                  <option value="Ruanda" id="RW">Ruanda</option>
                  <option value="Rumania" id="RO">Rumania</option>
                  <option value="Rusia" id="RU">Rusia</option>
                  <option value="Samoa" id="WS">Samoa</option>
                  <option value="Samoa occidental" id="AS">Samoa occidental</option>
                  <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                  <option value="San Marino" id="SM">San Marino</option>
                  <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                  <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                  <option value="Santa Helena" id="SH">Santa Helena</option>
                  <option value="Santa Lucía" id="LC">Santa Lucía</option>
                  <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                  <option value="Senegal" id="SN">Senegal</option>
                  <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                  <option value="Sychelles" id="SC">Seychelles</option>
                  <option value="Sierra Leona" id="SL">Sierra Leona</option>
                  <option value="Singapur" id="SG">Singapur</option>
                  <option value="Siria" id="SY">Siria</option>
                  <option value="Somalia" id="SO">Somalia</option>
                  <option value="Sri Lanka" id="LK">Sri Lanka</option>
                  <option value="Suazilandia" id="SZ">Suazilandia</option>
                  <option value="Sudán" id="SD">Sudán</option>
                  <option value="Suecia" id="SE">Suecia</option>
                  <option value="Suiza" id="CH">Suiza</option>
                  <option value="Surinam" id="SR">Surinam</option>
                  <option value="Svalbard" id="SJ">Svalbard</option>
                  <option value="Tailandia" id="TH">Tailandia</option>
                  <option value="Taiwán" id="TW">Taiwán</option>
                  <option value="Tanzania" id="TZ">Tanzania</option>
                  <option value="Tayikistán" id="TJ">Tayikistán</option>
                  <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                  <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                  <option value="Timor Oriental" id="TP">Timor Oriental</option>
                  <option value="Togo" id="TG">Togo</option>
                  <option value="Tonga" id="TO">Tonga</option>
                  <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                  <option value="Túnez" id="TN">Túnez</option>
                  <option value="Turkmenistán" id="TM">Turkmenistán</option>
                  <option value="Turquía" id="TR">Turquía</option>
                  <option value="Tuvalu" id="TV">Tuvalu</option>
                  <option value="Ucrania" id="UA">Ucrania</option>
                  <option value="Uganda" id="UG">Uganda</option>
                  <option value="Uruguay" id="UY">Uruguay</option>
                  <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                  <option value="Vanuatu" id="VU">Vanuatu</option>
                  <option value="Venezuela" id="VE">Venezuela</option>
                  <option value="Vietnam" id="VN">Vietnam</option>
                  <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                  <option value="Yemen" id="YE">Yemen</option>
                  <option value="Zambia" id="ZM">Zambia</option>
                  <option value="Zimbabue" id="ZW">Zimbabue</option>
          </select>
        </div>

        <div class="labels"><input type="text" name="ciudad" class="form-control" placeholder="Ciudad" required></div>
        <div class="labels"><input type="text" name="direccion" class="form-control" placeholder="Direccion" required></div>
        <div class="labels"><input type="text" name="zip" class="form-control" placeholder="Codigo Postal" required></div>
        <div class="labels"><input type="text" name="rif" class="form-control" placeholder="Rif" required></div>
        <div class="labels"><input type="text" name="ejecutivo" class="form-control" placeholder="Ejecutivo" required></div>

        <div class="labels">
          <textarea class="form-control" name="descripcion" style="height: 165px" cols="33" placeholder="Descripcion" required></textarea>
        </div>

        <div class="labels">
          <label>Industria:</label>
          <select name="industrias" id="industrias" class="form-control">
                      <option value='0' selected="true">Selecionar</option>
                      <option value="01">Academia/Educacion</option>
                      <option value="02">Aduanas</option>
                      <option value="03">Aeroespace</option>
                      <option value="04">Agricultura</option>
                      <option value="05">Ciencias</option>
                      <option value="06">Construccion</option>
                      <option value="07">Energia</option>
                      <option value="08">Finariero</option>
                      <option value="09">Logistica</option>
                      <option value="10">Manofactura</option>
                      <option value="11">Quimica</option>
                      <option value="12">Recursos Naturales</option>
                      <option value="13">Retail</option>
                      <option value="14">Salud</option>
                      <option value="15">Seguridad</option>
                      <option value="16">Seguros</option>
                      <option value="17">Tecnologia</option>
          </select>
          <br>
          <label>Tipo:</label>
          <select name="tipo" class="form-control">
                      <option value='0' selected="true">Selecionar</option>
                      <option value="01">Proveedor</option>
                      <option value="02">Distribuidor</option>
                      <option value="03">Tienda</option>
                      <option value="04">Proveedor/Distribuidor</option>
                      <option value="05">Proveedor/Tienda</option>
                      <option value="06">Tienda/Distribuidor</option>
          </select>
        </div>

        <div class="labels"><input type="text" name="servicios" class="form-control" placeholder="Servicios" required></div>
        <div class="labels"><input type="text" name="productos" class="form-control" placeholder="Productos" required></div>
        <div class="labels"><input type="text" name="empleados" class="form-control" placeholder="N° Empleados" required></div>
        <div class="labels"><input type="text" name="volumenVentas" class="form-control" placeholder="Vol. Ventas" required></div>
        <div class="labels"><input type="text" name="website" class="form-control" placeholder="WebSite" required></div>
        <div class="labels"><input type="text" name="website2" class="form-control" placeholder="WebSite-2"></div>

        <br><br>
        <input style ="width: 200px;" class="btn btn-primary" type="submit" name="guardarContacto" value="Complete register" class="input_buton">
      </form>
    </div>
    </div>
</div>











<?php
//-----------------------Carga de Contacto-------------------------//
require("phpquery/cnx.php");

if(isset($_POST['guardarContacto'])){



 date_default_timezone_set('America/Caracas');
 $cont_dateadded        = date('Y-m-d G:i:s');
 $cont_addedby          = "userWeb";
 $cont_updatedby        = "";
 $cont_lastupdate       = "";
 $cont_firstname        = $_POST['nombre'];
 $cont_lastname1        = $_POST['apellido'];
 $cont_birthday         = $_POST['yearBirthday']."-".$_POST['monthBirthday']."-".$_POST['dayBirthday'];
  $cont_genero           = $_POST['genero'];
 $cont_jobtitle         = $_POST['posicion'];
 $cont_email            = $_POST['email'];
 $cont_companyname      = $_POST['empresa'];
 $cont_emailEmpresa     = $_POST['emailEmpresa1'];
 $cont_emailEmpresa2    = $_POST['emailEmpresa2'];
 $cont_workphone        = $_POST['telefonoTrabajo'];
 $cont_cellphone        = $_POST['telefonoMovil'];
 $cont_enterprisephone  = $_POST['telefonoEmpresa1'];
 $cont_enterprisephone2 = $_POST['telefonoEmpresa2'];
 $paisCode              = $_POST['pais'];
 $cont_country          = $_POST['pais'];
 $cont_state            = "";
 $cont_city             = $_POST['ciudad'];
 $cont_addressline1     = $_POST['direccion'];
 $cont_zip              = $_POST['zip'];
 $cont_rif              = $_POST['rif'];
 $cont_descripcion      = $_POST['descripcion'];
 $cont_aniversario      = $_POST['yearAniversary']."-".$_POST['monthAniversary']."-".$_POST['dayAniversary'];
 $cont_ejecutivo        = $_POST['ejecutivo'];
 $insdustriaCode        = $_POST['industrias'];
 $cont_insdustria       = $_POST['industrias'];
 $cont_lineaNegocios    = "";
 $cont_servicios        = $_POST['servicios'];
 $cont_productos        = $_POST['productos'];
 $cont_employees        = $_POST['empleados'];
 $cont_sale_volume      = $_POST['volumenVentas'];
 $cont_website1         = $_POST['website'];
 $cont_website2         = $_POST['website2'];
 $cont_tipo             = $_POST['tipo'];
 $cont_estado           ='contacto';




$ssql = "SELECT * FROM dataset_contactos WHERE cont_emailEmpresa='$cont_emailEmpresa' AND cont_enterprisephone='$cont_enterprisephone' OR cont_enterprisephone='$cont_enterprisephone'";
$rs = $conexion->query($ssql);
if (mysqli_num_rows($rs)>0)
{

    echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>El contacto que intenta registrar ya esta registrado!!</div>";
}else{

$conexion->query("INSERT INTO dataset_contactos VALUES (


  '',
  '$cont_dateadded',
  '$cont_addedby',
  '$cont_updatedby',
  '$cont_lastupdate',
  '$cont_firstname',
  '$cont_lastname1',
  '$cont_birthday',
  '$cont_jobtitle',
  '$cont_email',
  '$cont_companyname',
  '$cont_emailEmpresa',
  '$cont_emailEmpresa2',
  '$cont_workphone',
  '$cont_cellphone',
  '$cont_enterprisephone',
  '$cont_enterprisephone2',
  '$cont_country',
  '$cont_state',
  '$cont_city',
  '$cont_addressline1',
  '$cont_zip',
  '$cont_rif',
  '$cont_descripcion',
  '$cont_aniversario',
  '$cont_genero',
  '$cont_ejecutivo',
  '$cont_insdustria',
  '$cont_lineaNegocios',
  '$cont_productos',
  '$cont_servicios',
  '$cont_employees',
  '$cont_sale_volume',
  '$cont_website1',
  '$cont_website2',
  '$cont_tipo',
  '$cont_estado'

  )");

    echo "<div class='alert alert-success' style='text-align:center;' role='alert'>El contacto se guardó correctamente!!</div>";

  }
  
}

?>
</body>
</html>