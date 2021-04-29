<div class="sidemenu">
                <div class="sidenav">

                    <a href="{{ url('doctor/profile')}}">
                    <div class="profilesidebar">
                         <div class="profile-icon">
                             <img src="{{ url('/').Auth::user()->image }}" alt="">
                             <div class="seticon">
                                 <img src="{{ url('public/doctor/images/icons/setting.png') }}" alt="">
                             </div>
                         </div>
                         <div class="settingicon">
                             <div>
                                 <p class="doctor_name">{{ Auth::user()->first_name}}  {{ Auth::user()->last_name}}</p>
                             <h6>Dermatologist</h6>
                             </div>
                         </div>
                     </div>
                    </a>

                   <ul>
                        <li class="{{ isset($page_title) && $page_title=='Dashboard' ? 'sidebar_active':''}}">
                            <a href="{{ url('doctor/dashboard')}}"> <i class="flaticon-home"></i> Overview</a>
                        </li>
                        <li>
                            <a href="{{ url('doctor/consult-patient')}}"> <i class="flaticon-phone-with-message"></i> Consult</a>
                        </li>
                        <li class="{{ isset($page_title) && $page_title=='Patients' ? 'sidebar_active':''}}">
                            <a href="{{ url('doctor/patients')}}"> <i class="flaticon-user"></i> Patients</a>
                        </li>
                        <li class="{{isset($page_title) &&  $page_title=='Clinical Updates' ? 'sidebar_active':''}}">
                            <a href="{{ url('doctor/clinical-update')}}"> <i class="flaticon-document"></i> Clinical Updates +2</a>
                        </li>
                        <li class="{{ isset($page_title) && $page_title=='My availability' ? 'sidebar_active':''}}">
                            <a href="{{ url('doctor/availability')}}"> <i class="flaticon-select"></i> My availability</a>
                        </li>
                        <li class="{{isset($page_title) &&  $page_title=='Payments' ? 'sidebar_active':''}}">
                            <a href="{{ url('doctor/payments')}}"> <i class="flaticon-credit-card"></i> Payments</a>
                        </li>
                    </ul>
                </div>
            </div>