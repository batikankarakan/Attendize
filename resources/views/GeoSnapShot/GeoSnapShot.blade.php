@extends('Shared.Layouts.MasterWithoutMenus')

@section('title')
    @lang("Organiser.create_organiser")
@stop

@section('head')
    <style>
        .modal-header {
            background-color: transparent !important;
            color: #666 !important;
            text-shadow: none !important;;
        }
    </style>
    <script>
        @include('ManageOrganiser.Partials.OrganiserCreateAndEditJS')
    </script>

@stop

@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel">
                <div class="panel-body">
                    <h2>Create & Manage Events</h2>

                    {!! Form::open(array('url' => '/geosnapshot')) !!}
                    @if(@$_GET['first_run'] == '1')
                        <div class="alert alert-info">
                            @lang("Organiser.create_organiser_text")
                        </div>
                    @endif

                    <div class="row">
                        <div class="form-group">
                            {!! Form::label('eventName', "Event name", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('eventName', Input::old('eventName'),
                                        array(
                                        'class'=>'form-control'
                                        ))  !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('eventLink', "Event quick link", array('class'=>'control-label ')) !!}

                            <div class="input-group">
                                <span style="background-color: #eee;" class="input-group-addon">http://GeoSnapShot.com/e/</span>
                                {!!  Form::text('eventLink', Input::old('eventLink'),
                                                array(
                                                'class'=>'form-control ',
                                                'placeholder'=>"my-event-name"
                                                ))  !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('location', "Location", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('location', Input::old('location'),
                                        array(
                                        'class'=>'form-control',
                                        'placeholder' => 'e.g Sydney, nsw'
                                        ))  !!}
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                {!! Form::label('country', "Country", array('class'=>'required control-label ')) !!}
                            </div>
                            <select class="row" required="required" name="event[country]" id="event_country">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorre">Andorre</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbade">Barbade</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                </option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                </option>
                                <option value="British Virgin Islands">British Virgin Islands</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo (Dem. Rep.)">Congo (Dem. Rep.)</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Crna Gora">Crna Gora</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaçao">Curaçao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Côte D'Ivoire">Côte D'Ivoire</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey and Alderney">Guernsey and Alderney</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea (North)">Korea (North)</option>
                                <option value="Korea (South)">Korea (South)</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Réunion">Réunion</option>
                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin">Saint Martin</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten">Sint Maarten</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                    South
                                    Sandwich Islands
                                </option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option selected="selected" value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands of the United States">Virgin Islands of the United
                                    States
                                </option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                <option value="Åland Islands">Åland Islands</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="row">
                                    {!! Form::label('typeOfEvent', "Type of event", array('class'=>'required control-label ')) !!}
                                </div>
                                <select class="row" multiple="multiple"
                                        data-customformats="disabled"
                                        required="required"
                                        style="height: 100px"
                                        name="event[types][]"
                                        id="event_types">
                                    <option value="Cycling">Cycling</option>
                                    <option value="Fun run / walk">Fun run / walk</option>
                                    <option value="Horse show / jumping">Horse show / jumping</option>
                                    <option value="Motor car related">Motor car related</option>
                                    <option value="Paid assignment">Paid assignment</option>
                                    <option value="Running / Marathon">Running / Marathon</option>
                                    <option value="Swimming / water related">Swimming / water related</option>
                                    <option value="School event">School event</option>
                                    <option value="Surf Life Saving">Surf Life Saving</option>
                                    <option value="Team sports (e.g. rugby, netball)">Team sports (e.g. rugby, netball)
                                    </option>
                                    <option value="Triathlon">Triathlon</option>
                                    <option value="Obstacle Race">Obstacle Race</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            {!! Form::label('password', "Do you need to protect the photos with a password?", array('class'=>'required control-label ')) !!}
                            <a class="btn btn-primary text-white" data-toggle="collapse" href="#collapseExample"
                               role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                Turn Password On / Off
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <div class="form-group">
                                        {!! Form::label('password', "Password to protect albums", array('class'=>'required control-label ')) !!}
                                        {!!  Form::text('password', Input::old('password'),
                                                    array(
                                                    'class'=>'form-control'
                                                    ))  !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('participant', "Number of expected participants", array('class'=>'control-label required')) !!}
                            {!!  Form::text('participant', Input::old('participant'),
                                        array(
                                        'class'=>'form-control ',
                                        'placeholder'=>trans("Organiser.organiser_email_placeholder")
                                        ))  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('numberOfPhoto', "Enter the number of Geosnapshot photographers you'd like to request.", array('class'=>'control-label required')) !!}
                            {!!  Form::text('numberOfPhoto', Input::old('numberOfPhoto'),
                                        array(
                                        'class'=>'form-control ',
                                        'placeholder'=>trans("Organiser.organiser_email_placeholder")
                                        ))  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo', "Please upload the logo of your event or club (jpg jpeg png gif)", array('class'=>'control-label ')) !!}
                            {!! Form::styledFile('logo') !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('note', "Your notes to the photographers", array('class'=>'control-label ')) !!}
                            {!!  Form::textarea('note', Input::old('note'),
                                        array(
                                        'class'=>'form-control ',
                                        'placeholder'=>"Describe your event in detail to photographers and what is expected of them",
                                        'rows' => 4
                                        ))  !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', "Your name", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('name', Input::old('name'),
                                        array(
                                        'class'=>'form-control'
                                        ))  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', "Your e-mail address", array('class'=>'control-label required')) !!}
                            {!!  Form::text('email', Input::old('email'),
                                        array(
                                        'class'=>'form-control ',
                                        'placeholder'=>trans("Organiser.organiser_email_placeholder")
                                        ))  !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('phoneNumber', "Your contact number", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('phoneNumber', Input::old('phoneNumber'),
                                        array(
                                        'class'=>'form-control'
                                        ))  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('facebookURL', "Event facebook URL", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('facebookURL', Input::old('facebookURL'),
                                        array(
                                        'class'=>'form-control'
                                        ))  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('websiteURL', "Event website URL", array('class'=>'required control-label ')) !!}
                            {!!  Form::text('websiteURL', Input::old('websiteURL'),
                                        array(
                                        'class'=>'form-control'
                                        ))  !!}
                        </div>

                        {!! Form::submit(trans("Organiser.create_organiser"), ['class'=>" btn-block btn btn-success"]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
