@extends('doctor.layouts.default')
@section('content')

<section class="content-wrapper"> 
                    @include('doctor.partials.sidebar')

            <div class="side-wrapper">
               <div class="card wrapper-card">
                   <div class="card-body">
                    <div class="overviewColumnarea mt-0">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="main-heading">
                                    <a href="clinical_update.html">
                                        <div class="back">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8">
                                    <div class="detailone">
                                        <img class="mainpic" src="{{ url('public/doctor/images/overview/doctorone.jpg') }}" alt="">
                                        <div class="listingitem">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="bottomcontent">
                                                        <span>
                                                            <img src="{{ url('public/doctor/images/icons/date.png') }}" alt="">  20/03/23
                                                        </span>
                                                        <span>
                                                            <img src="{{ url('public/doctor/images/icons/edit.png') }}" alt=""> Lauren Spencer
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <ul>
                                                        <li>
                                                            <i class="flaticon-share"></i> <span> Share</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detailtwo">
                                        <h5>LDL cholesterol: How low can you (safely) go?.</h5>

                                        <p>Younger generations are gaining prominent footholds and shifting conversations in
                                            today’s workplaces. This includes changes in the attitudes of companies toward their
                                            responsibilities in addressing societal issues. For the modern workforce, few areas of
                                            social change are more important than gender equality. This is because women,
                                            including women in medicine, continue to face harassment, disrespect, and lack of
                                            opportunity.</p>

                                        <p>
                                            While already important, the different experiences of men and women in the medical
                                            industry will become even more prominent in the future. Right now, 65% of physicians
                                            are men, however, the majority of students entering medical school are women.
                                            Should that trend continue, the problems women face in the workplace will take on
                                            greater prominence in the industry.
                                        </p>

                                        <p>
                                            Survey: Men and women see the issues of inequity differently
                                            A recent survey asked more than 700 female and male physicians about their
                                            workplace experiences, in particular:
                                        </p>
                                        <p>
                                            their environments <br>
                                            leadership opportunities <br>
                                            workplace harassment. <br>
                                            The results point to major differences in how men and women see the problems in the
                                            industry and suggest areas for much-needed improvement.
                                        </p>
                                        <p>
                                            Harassment <br>
                                            The medical industry has a problem with harassment and the evidence is staggering.
                                            The vast majority of both women (83%) and men (73%) shared the belief that
                                            harassment was an issue in their workplaces.
                                        </p>
                                        <p>
                                            Women are the targets of harassment much more often than their male counterparts.
                                            They face both more harassment and different types of it when compared to men.
                                        </p>
                                        <p>
                                            This means women are more likely to experience discrimination, insubordination,
                                            retaliation, physical violence, and sexual harassment. Only 12% of women reported that
                                            they had never had to deal with any form of sexual harassment, compared to 38% of
                                            men.
                                        </p>
                                        <p>
                                            Although the majority of respondents had never considered abandoning the industry
                                            because of harassment, women (18%) left jobs at nearly double the rate of men (10%).
                                        </p>
                                        <p>
                                            Men were also more likely to believe their organizations have policies, training and
                                            reporting procedures in place to prevent sexual harassment, physical violence, and
                                            retaliation, while women had a more dim view.
                                        </p>
                                        <p>
                                            The way people in the medical industry perceive the harassment around them was a
                                            consistent thread throughout the study. Women reported seeing harassment much
                                            more than men.
                                        </p>
                                        <p>
                                            Women and men also both reported seeing more harassment of women than their
                                            male counterparts. However, women reported witnessing substantially more
                                            harassment of other women than men saw of their female coworkers.
                                        </p>
                                    </div>

                                    <div class="detailthree">
                                        <div class="listingitem">
                                        <ul>
                                            <li>
                                                <i class="flaticon-share"></i> <span> Share</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>

                            </div>
    
                        </div>
                    </div>
                   </div>
               </div>

               
            </div>

           
</section>

@endsection