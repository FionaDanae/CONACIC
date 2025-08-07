@extends('layouts.public')

@section('titulo', 'REGISTRO')

@section('contenido')
<div class="min-h-screen relative">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/CONACIC ROBOT_1.jpg') }}" alt="CONACIC Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#05225c]/20"></div>
    </div>

    <!-- Registration Form -->
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto bg-white/95 backdrop-blur-sm rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-8">REGISTRO CONACIC 2025</h2>
            <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-8">BIENVENIDOS</h2>

            <form action="{{ route('registro.submit') }}" method="POST" class="space-y-8">
                @csrf
                <!-- Personal Data Section -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-[#1669bc] border-b-2 border-[#23b0d8] pb-2">DATOS PERSONALES</h3>

                    <div class="grid gap-6">
                        <!-- Full Name -->
                        <div>
                            <label for="fullname" class="block text-sm font-medium text-gray-700">Nombre completo <span class="text-red-500">*</span></label>
                            <input type="text" id="fullname" name="fullname" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white">
                            <p class="mt-1 text-sm text-gray-500">Verifique que su nombre esté completo y correcto ya que será utilizado para sus respectivas constancias.</p>
                            @error('fullname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white">
                            <p class="mt-1 text-sm text-gray-500">Por este medio recibirá las constancias correspondientes, use preferentemente su correo institucional.</p>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña <span class="text-red-500">*</span></label>
                            <input type="password" id="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white">
                            <p class="mt-1 text-sm text-gray-500">Mínimo 8 caracteres. Esta contraseña será utilizada para acceder a su cuenta.</p>
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">País <span class="text-red-500">*</span></label>
                            <select id="country" name="country" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white">
                                <option value="">Seleccione un país</option>
                                <option value="AF">Afganistán</option>
                                <option value="AL">Albania</option>
                                <option value="DE">Alemania</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguila</option>
                                <option value="AQ">Antártida</option>
                                <option value="AG">Antigua y Barbuda</option>
                                <option value="SA">Arabia Saudita</option>
                                <option value="DZ">Argelia</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaiyán</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrein</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BE">Bélgica</option>
                                <option value="BZ">Belice</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermudas</option>
                                <option value="BY">Bielorrusia</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia y Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brasil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="BT">Bután</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Camboya</option>
                                <option value="CM">Camerún</option>
                                <option value="CA">Canadá</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                <option value="CY">Chipre</option>
                                <option value="VA">Ciudad del Vaticano</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoras</option>
                                <option value="CG">Congo</option>
                                <option value="KP">Corea del Norte</option>
                                <option value="KR">Corea del Sur</option>
                                <option value="CI">Costa de Marfil</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croacia</option>
                                <option value="CU">Cuba</option>
                                <option value="DK">Dinamarca</option>
                                <option value="DM">Dominica</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egipto</option>
                                <option value="SV">El Salvador</option>
                                <option value="AE">Emiratos Árabes Unidos</option>
                                <option value="ER">Eritrea</option>
                                <option value="SK">Eslovaquia</option>
                                <option value="SI">Eslovenia</option>
                                <option value="ES">España</option>
                                <option value="US">Estados Unidos</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Etiopía</option>
                                <option value="PH">Filipinas</option>
                                <option value="FI">Finlandia</option>
                                <option value="FJ">Fiyi</option>
                                <option value="FR">Francia</option>
                                <option value="GA">Gabón</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GD">Granada</option>
                                <option value="GR">Grecia</option>
                                <option value="GL">Groenlandia</option>
                                <option value="GP">Guadalupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GF">Guayana Francesa</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GQ">Guinea Ecuatorial</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haití</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungría</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Irán</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Irlanda</option>
                                <option value="BV">Isla Bouvet</option>
                                <option value="IM">Isla de Man</option>
                                <option value="CX">Isla de Navidad</option>
                                <option value="IS">Islandia</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italia</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japón</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordania</option>
                                <option value="KZ">Kazajistán</option>
                                <option value="KE">Kenia</option>
                                <option value="KG">Kirguistán</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="LA">Laos</option>
                                <option value="LS">Lesotho</option>
                                <option value="LV">Letonia</option>
                                <option value="LB">Líbano</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituania</option>
                                <option value="LU">Luxemburgo</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia del Norte</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malasia</option>
                                <option value="MW">Malawi</option>
                                <option value="MV">Maldivas</option>
                                <option value="ML">Malí</option>
                                <option value="MT">Malta</option>
                                <option value="MA">Marruecos</option>
                                <option value="MQ">Martinica</option>
                                <option value="MU">Mauricio</option>
                                <option value="MR">Mauritania</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">México</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldavia</option>
                                <option value="MC">Mónaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Níger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NO">Noruega</option>
                                <option value="NC">Nueva Caledonia</option>
                                <option value="NZ">Nueva Zelanda</option>
                                <option value="OM">Omán</option>
                                <option value="NL">Países Bajos</option>
                                <option value="PK">Pakistán</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestina</option>
                                <option value="PA">Panamá</option>
                                <option value="PG">Papúa Nueva Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Perú</option>
                                <option value="PF">Polinesia Francesa</option>
                                <option value="PL">Polonia</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="GB">Reino Unido</option>
                                <option value="CF">República Centroafricana</option>
                                <option value="CZ">República Checa</option>
                                <option value="CD">República Democrática del Congo</option>
                                <option value="DO">República Dominicana</option>
                                <option value="RE">Reunión</option>
                                <option value="RW">Ruanda</option>
                                <option value="RO">Rumanía</option>
                                <option value="RU">Rusia</option>
                                <option value="EH">Sahara Occidental</option>
                                <option value="WS">Samoa</option>
                                <option value="AS">Samoa Americana</option>
                                <option value="BL">San Bartolomé</option>
                                <option value="KN">San Cristóbal y Nieves</option>
                                <option value="SM">San Marino</option>
                                <option value="MF">San Martín</option>
                                <option value="PM">San Pedro y Miquelón</option>
                                <option value="VC">San Vicente y las Granadinas</option>
                                <option value="SH">Santa Elena</option>
                                <option value="LC">Santa Lucía</option>
                                <option value="ST">Santo Tomé y Príncipe</option>
                                <option value="SN">Senegal</option>
                                <!-- Add more countries as needed -->
                            </select>
                            @error('country')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- State -->
                        <div id="stateContainer" class="hidden">
                            <label for="state" class="block text-sm font-medium text-gray-700">Estado <span class="text-red-500">*</span></label>
                            <select id="state" name="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white">
                                <option value="">Seleccione un estado</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Ciudad de México">Ciudad de México</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Estado de México">Estado de México</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                            <input type="text" id="otherState" name="state" class="mt-1 hidden w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white" placeholder="Ingrese su estado/provincia">
                            @error('state')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Número de teléfono celular</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select id="country_code" name="country_code" class="rounded-l-md border-r-0 border-gray-300 focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white">
                                    <option value="+93">+93 (AF)</option>
                                    <option value="+355">+355 (AL)</option>
                                    <option value="+213">+213 (DZ)</option>
                                    <option value="+1684">+1684 (AS)</option>
                                    <option value="+376">+376 (AD)</option>
                                    <option value="+244">+244 (AO)</option>
                                    <option value="+1264">+1264 (AI)</option>
                                    <option value="+672">+672 (AQ)</option>
                                    <option value="+1268">+1268 (AG)</option>
                                    <option value="+54">+54 (AR)</option>
                                    <option value="+374">+374 (AM)</option>
                                    <option value="+297">+297 (AW)</option>
                                    <option value="+61">+61 (AU)</option>
                                    <option value="+43">+43 (AT)</option>
                                    <option value="+994">+994 (AZ)</option>
                                    <option value="+1242">+1242 (BS)</option>
                                    <option value="+973">+973 (BH)</option>
                                    <option value="+880">+880 (BD)</option>
                                    <option value="+1246">+1246 (BB)</option>
                                    <option value="+375">+375 (BY)</option>
                                    <option value="+32">+32 (BE)</option>
                                    <option value="+501">+501 (BZ)</option>
                                    <option value="+229">+229 (BJ)</option>
                                    <option value="+1441">+1441 (BM)</option>
                                    <option value="+591">+591 (BO)</option>
                                    <option value="+387">+387 (BA)</option>
                                    <option value="+267">+267 (BW)</option>
                                    <option value="+55">+55 (BR)</option>
                                    <option value="+673">+673 (BN)</option>
                                    <option value="+359">+359 (BG)</option>
                                    <option value="+226">+226 (BF)</option>
                                    <option value="+257">+257 (BI)</option>
                                    <option value="+855">+855 (KH)</option>
                                    <option value="+237">+237 (CM)</option>
                                    <option value="+1">+1 (CA)</option>
                                    <option value="+238">+238 (CV)</option>
                                    <option value="+1345">+1345 (KY)</option>
                                    <option value="+236">+236 (CF)</option>
                                    <option value="+235">+235 (TD)</option>
                                    <option value="+56">+56 (CL)</option>
                                    <option value="+86">+86 (CN)</option>
                                    <option value="+57">+57 (CO)</option>
                                    <option value="+269">+269 (KM)</option>
                                    <option value="+506">+506 (CR)</option>
                                    <option value="+385">+385 (HR)</option>
                                    <option value="+53">+53 (CU)</option>
                                    <option value="+357">+357 (CY)</option>
                                    <option value="+420">+420 (CZ)</option>
                                    <option value="+45">+45 (DK)</option>
                                    <option value="+253">+253 (DJ)</option>
                                    <option value="+1767">+1767 (DM)</option>
                                    <option value="+1809">+1809 (DO)</option>
                                    <option value="+593">+593 (EC)</option>
                                    <option value="+20">+20 (EG)</option>
                                    <option value="+503">+503 (SV)</option>
                                    <option value="+240">+240 (GQ)</option>
                                    <option value="+291">+291 (ER)</option>
                                    <option value="+372">+372 (EE)</option>
                                    <option value="+251">+251 (ET)</option>
                                    <option value="+500">+500 (FK)</option>
                                    <option value="+298">+298 (FO)</option>
                                    <option value="+679">+679 (FJ)</option>
                                    <option value="+358">+358 (FI)</option>
                                    <option value="+33">+33 (FR)</option>
                                    <option value="+594">+594 (GF)</option>
                                    <option value="+689">+689 (PF)</option>
                                    <option value="+241">+241 (GA)</option>
                                    <option value="+220">+220 (GM)</option>
                                    <option value="+995">+995 (GE)</option>
                                    <option value="+49">+49 (DE)</option>
                                    <option value="+233">+233 (GH)</option>
                                    <option value="+350">+350 (GI)</option>
                                    <option value="+30">+30 (GR)</option>
                                    <option value="+299">+299 (GL)</option>
                                    <option value="+1473">+1473 (GD)</option>
                                    <option value="+590">+590 (GP)</option>
                                    <option value="+1671">+1671 (GU)</option>
                                    <option value="+502">+502 (GT)</option>
                                    <option value="+224">+224 (GN)</option>
                                    <option value="+245">+245 (GW)</option>
                                    <option value="+592">+592 (GY)</option>
                                    <option value="+509">+509 (HT)</option>
                                    <option value="+504">+504 (HN)</option>
                                    <option value="+852">+852 (HK)</option>
                                    <option value="+36">+36 (HU)</option>
                                    <option value="+354">+354 (IS)</option>
                                    <option value="+91">+91 (IN)</option>
                                    <option value="+62">+62 (ID)</option>
                                    <option value="+98">+98 (IR)</option>
                                    <option value="+964">+964 (IQ)</option>
                                    <option value="+353">+353 (IE)</option>
                                    <option value="+972">+972 (IL)</option>
                                    <option value="+39">+39 (IT)</option>
                                    <option value="+1876">+1876 (JM)</option>
                                    <option value="+81">+81 (JP)</option>
                                    <option value="+962">+962 (JO)</option>
                                    <option value="+7">+7 (KZ)</option>
                                    <option value="+254">+254 (KE)</option>
                                    <option value="+686">+686 (KI)</option>
                                    <option value="+850">+850 (KP)</option>
                                    <option value="+82">+82 (KR)</option>
                                    <option value="+965">+965 (KW)</option>
                                    <option value="+996">+996 (KG)</option>
                                    <option value="+856">+856 (LA)</option>
                                    <option value="+371">+371 (LV)</option>
                                    <option value="+961">+961 (LB)</option>
                                    <option value="+266">+266 (LS)</option>
                                    <option value="+231">+231 (LR)</option>
                                    <option value="+218">+218 (LY)</option>
                                    <option value="+423">+423 (LI)</option>
                                    <option value="+370">+370 (LT)</option>
                                    <option value="+352">+352 (LU)</option>
                                    <option value="+853">+853 (MO)</option>
                                    <option value="+389">+389 (MK)</option>
                                    <option value="+261">+261 (MG)</option>
                                    <option value="+265">+265 (MW)</option>
                                    <option value="+60">+60 (MY)</option>
                                    <option value="+960">+960 (MV)</option>
                                    <option value="+223">+223 (ML)</option>
                                    <option value="+356">+356 (MT)</option>
                                    <option value="+692">+692 (MH)</option>
                                    <option value="+596">+596 (MQ)</option>
                                    <option value="+222">+222 (MR)</option>
                                    <option value="+230">+230 (MU)</option>
                                    <option value="+52">+52 (MX)</option>
                                    <option value="+691">+691 (FM)</option>
                                    <option value="+373">+373 (MD)</option>
                                    <option value="+377">+377 (MC)</option>
                                    <option value="+976">+976 (MN)</option>
                                    <option value="+382">+382 (ME)</option>
                                    <option value="+1664">+1664 (MS)</option>
                                    <option value="+212">+212 (MA)</option>
                                    <option value="+258">+258 (MZ)</option>
                                    <option value="+95">+95 (MM)</option>
                                    <option value="+264">+264 (NA)</option>
                                    <option value="+674">+674 (NR)</option>
                                    <option value="+977">+977 (NP)</option>
                                    <option value="+31">+31 (NL)</option>
                                    <option value="+687">+687 (NC)</option>
                                    <option value="+64">+64 (NZ)</option>
                                    <option value="+505">+505 (NI)</option>
                                    <option value="+227">+227 (NE)</option>
                                    <option value="+234">+234 (NG)</option>
                                    <option value="+683">+683 (NU)</option>
                                    <option value="+672">+672 (NF)</option>
                                    <option value="+47">+47 (NO)</option>
                                    <option value="+968">+968 (OM)</option>
                                    <option value="+92">+92 (PK)</option>
                                    <option value="+680">+680 (PW)</option>
                                    <option value="+970">+970 (PS)</option>
                                    <option value="+507">+507 (PA)</option>
                                    <option value="+675">+675 (PG)</option>
                                    <option value="+595">+595 (PY)</option>
                                    <option value="+51">+51 (PE)</option>
                                    <option value="+63">+63 (PH)</option>
                                    <option value="+48">+48 (PL)</option>
                                    <option value="+351">+351 (PT)</option>
                                    <option value="+1787">+1787 (PR)</option>
                                    <option value="+974">+974 (QA)</option>
                                    <option value="+262">+262 (RE)</option>
                                    <option value="+40">+40 (RO)</option>
                                    <option value="+7">+7 (RU)</option>
                                    <option value="+250">+250 (RW)</option>
                                    <option value="+590">+590 (BL)</option>
                                    <option value="+290">+290 (SH)</option>
                                    <option value="+1869">+1869 (KN)</option>
                                    <option value="+1758">+1758 (LC)</option>
                                    <option
                                </select>
                                <input type="tel" id="phone" name="phone" class="flex-1 rounded-r-md border-l-0 border-gray-300 focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white" pattern="[0-9]*" maxlength="10" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Número de teléfono">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Data Section -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-[#1669bc] border-b-2 border-[#23b0d8] pb-2">DATOS ACADÉMICOS</h3>

                    <div class="grid gap-6">
                        <!-- Role -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">¿Usted es? <span class="text-red-500">*</span></label>
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="student" name="role" value="student" required class="focus:ring-[#23b0d8] h-4 w-4 text-[#23b0d8] border-gray-300 checked:bg-[#23b0d8]">
                                    <label for="student" class="ml-3 block text-sm text-gray-700">Alumno</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="professional" name="role" value="professional" class="focus:ring-[#23b0d8] h-4 w-4 text-[#23b0d8] border-gray-300 checked:bg-[#23b0d8]">
                                    <label for="professional" class="ml-3 block text-sm text-gray-700">Profesionista</label>
                                </div>
                            </div>
                        </div>

                        <!-- Academic Degree -->
                        <div>
                            <label for="degree" class="block text-sm font-medium text-gray-700">Último grado académico <span class="text-red-500">*</span></label>
                            <select id="degree" name="degree" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white">
                                <option value="">Seleccione su grado académico</option>
                                <option value="media_superior">Media superior</option>
                                <option value="licenciatura">Licenciatura</option>
                                <option value="posgrado">Posgrado</option>
                                <option value="especializacion">Especialización</option>
                                <option value="tecnico">Técnico</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <!-- Institution -->
                        <div>
                            <label for="institution" class="block text-sm font-medium text-gray-700">Institución <span class="text-red-500">*</span></label>
                            <select id="institution" name="institution" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white">
                                <option value="">Seleccione su institución</option>
                                <option value="BUAP">BUAP</option>
                                <option value="otra">Otra</option>
                            </select>
                            @error('institution')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- BUAP Fields (hidden by default) -->
                        <div id="buapFields" class="hidden space-y-4">
                            <!-- Matricula -->
                            <div>
                                <label for="matricula" class="block text-sm font-medium text-gray-700">Matrícula <span class="text-red-500">*</span></label>
                                <input type="text" id="matricula" name="matricula" maxlength="9" pattern="[0-9]{9}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white" placeholder="Ingrese su matrícula (9 dígitos)">
                                <p class="text-xs text-gray-500 mt-1">La matrícula debe contener exactamente 9 dígitos</p>
                                @error('matricula')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Facultad -->
                            <div>
                                <label for="faculty" class="block text-sm font-medium text-gray-700">Facultad <span class="text-red-500">*</span></label>
                                <select id="faculty" name="faculty" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white">
                                    <option value="">Seleccione su facultad</option>
                                    <option value="Computación">Ciencias de la Computación</option>
                                    <option value="Electrónica">Ciencias de la Electrónica</option>
                                    <option value="Ciencias Biológicas">Ciencias Biológicas</option>
                                    <option value="Químicas">Ciencias Químicas</option>
                                    <option value="Química">Ingeniería Química</option>
                                    <option value="Ingeniería">Ingeniería</option>
                                    <option value="Arquitectura">Arquitectura</option>
                                    <option value="Administración">Administración</option>
                                    <option value="Comunicación">Ciencias de la Comunicación</option>
                                    <option value="Contaduría">Contaduría Pública</option>
                                    <option value="Derecho">Derecho</option>
                                    <option value="Economía">Economía</option>
                                    <option value="Físco Matemáticas">Físco Matemáticas</option>
                                    <option value="Cultura Física">Cultura Física</option>                                
                                    <option value="Electrónica">Electrónica</option>
                                    <option value="Agrícolas y Pecuarias">Ciencias Agrícolas y Pecuarias</option>
                                    <option value="Enfermería">Enfermería</option>
                                    <option value="Estomatología">Estomatología</option>
                                    <option value="Medicina">Medicina</option>
                                    <option value="Veterinaria">Medicina Veterinaria y Zootecnia</option>
                                    <option value="Cultura Física">Cultura Física</option>
                                    <option value="Filosofía y Letras">Filosofía y Letras</option>
                                    <option value="Lenguas">Lenguas</option>
                                    <option value="Artes">Artes</option>
                                    <option value="Psicología">Psicología</option>
                                    <option value="Complejo Regional">Complejo Regional</option>
                                    <option value="Preparatorias">Preparatorias</option>
                                </select>
                                @error('faculty')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Other Institution Field (hidden by default) -->
                        <div id="otherInstitutionField" class="hidden">
                            <label for="other_institution" class="block text-sm font-medium text-gray-700">Nombre de la institución <span class="text-red-500">*</span></label>
                            <input type="text" id="other_institution" name="other_institution" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white" placeholder="Escribe el nombre de tu institución">
                            @error('other_institution')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- How did you hear about us -->
                        <div>
                            <label for="source" class="block text-sm font-medium text-gray-700">¿Cómo te enteraste del congreso? <span class="text-red-500">*</span></label>
                            <select id="source" name="source" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8] focus:bg-white active:bg-white">
                                <option value="">Seleccione una opción</option>
                                <option value="social_media">Redes sociales</option>
                                <option value="email">Correo Electrónico</option>
                                <option value="recommendation">Recomendación</option>
                                <option value="website">Página web</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center pt-6">
                    <button type="submit" class="bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-3 px-8 rounded-full text-lg hover:opacity-90 transition-opacity transform hover:scale-105 duration-200">
                        Continuar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos del formulario
        const countrySelect = document.getElementById('country');
        const stateContainer = document.getElementById('stateContainer');
        const stateSelect = document.getElementById('state');
        const otherState = document.getElementById('otherState');
        const institutionSelect = document.getElementById('institution');
        const buapFields = document.getElementById('buapFields');
        const otherInstitutionField = document.getElementById('otherInstitutionField');
        const matriculaInput = document.getElementById('matricula');
        const facultySelect = document.getElementById('faculty');
        const otherInstitutionInput = document.getElementById('other_institution');
        
        // Asegurarse de que los campos requeridos estén correctamente configurados
        stateSelect.required = false;
        otherState.required = false;

        // Función para manejar el cambio de país
        countrySelect.addEventListener('change', function() {
            if (this.value === 'MX') {
                stateSelect.style.display = 'block';
                otherState.style.display = 'none';
                stateSelect.required = true;
                otherState.required = false;
                stateContainer.classList.remove('hidden');
            } else if (this.value) {
                stateSelect.style.display = 'none';
                otherState.style.display = 'block';
                stateSelect.required = false;
                otherState.required = true;
                stateContainer.classList.remove('hidden');
            } else {
                stateContainer.classList.add('hidden');
                stateSelect.required = false;
                otherState.required = false;
            }
        });

        // Inicializar el estado del campo de estado basado en el país seleccionado
        // Ejecutar el evento change al cargar la página para configurar correctamente el campo de estado
        if (countrySelect.value) {
            // Disparar el evento change para inicializar correctamente
            const event = new Event('change');
            countrySelect.dispatchEvent(event);
        }

        // Función para manejar el cambio de institución
        institutionSelect.addEventListener('change', function() {
            if (this.value === 'BUAP') {
                buapFields.classList.remove('hidden');
                otherInstitutionField.classList.add('hidden');
                matriculaInput.required = true;
                facultySelect.required = true;
                otherInstitutionInput.required = false;
            } else if (this.value === 'otra') {
                buapFields.classList.add('hidden');
                otherInstitutionField.classList.remove('hidden');
                matriculaInput.required = false;
                facultySelect.required = false;
                otherInstitutionInput.required = true;
            } else {
                buapFields.classList.add('hidden');
                otherInstitutionField.classList.add('hidden');
                matriculaInput.required = false;
                facultySelect.required = false;
                otherInstitutionInput.required = false;
            }
        });

        // Inicializar el estado de los campos de institución
        if (institutionSelect.value) {
            // Disparar el evento change para inicializar correctamente
            const institutionEvent = new Event('change');
            institutionSelect.dispatchEvent(institutionEvent);
        } else {
            // Asegurarse de que los campos estén ocultos inicialmente
            buapFields.classList.add('hidden');
            otherInstitutionField.classList.add('hidden');
            matriculaInput.required = false;
            facultySelect.required = false;
            otherInstitutionInput.required = false;
        }

        // Validación de matrícula (solo números y exactamente 9 dígitos)
        matriculaInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length > 9) {
                this.value = this.value.slice(0, 9);
            }
        });
    });
</script>
@endsection