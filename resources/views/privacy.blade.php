@extends('layouts.main')

@section(('header'))
    @parent
@endsection
@section('content')



    <!-- TODO: Add appropriate pictures for each section -->

    <div class="container marketing">
            <h1 class="featurette-heading text-light text-center">Our Promise to Privacy</h1>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Intro <span class="text-highlighted"> to how we keep your data private.</span></h2>
            <p class="lead">We are responsible for maintaining and protecting the Personal Information under our control. We have designated an individual or individuals who is/are responsible for compliance with our privacy policy.</p>
        </div>
        <div class="col-md-5">
            <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
            <div class ="featurette-image img-fluid mx-auto">
                <img width="450" height="450" src="{{asset('/img/SVG/intro.svg')}}" alt="Person choosing form different diets" />
            </div>
        </div>
    </div>


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Identifying Purposes <span class="text-highlighted">  to serve you better </span></h2>
                <p class="lead">We collect, use and disclose Personal Information to provide you with the product or service you have requested
                    and to offer you additional products and services we believe you might be interested in.
                    The purposes for which we collect Personal Information will be identified before or at the time we collect the information.
                    In certain circumstances, the purposes for which information is collected may be clear, and consent may be implied,
                    such as where your name, address and payment information is provided as part of the order process.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/serve.svg')}}" alt="A map of an unmarked neighbourhood" />
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Consent <span class="text-highlighted"> nothing without your permission</span></h2>
                <p class="lead">Knowledge and consent are required for the collection, use or disclosure of Personal Information except
                    where required or permitted by law. Providing us with your Personal Information is always your choice.
                    However, your decision not to provide certain information may limit our ability to provide you with our products or services. We will not require you to consent to the collection, use, or disclosure of information as a condition to the supply of a product or service, except as required to be able to supply the product or service.</p>
            </div>
            <div class="col-md-5">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/consent.svg')}}" alt="Person choosing form different diets" />
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"> Limiting Collection, <span class="text-highlighted">only what we need to serve you better.</span></h2>
                <p class="lead">The Personal Information collected will be limited to those details necessary for the purposes
                    identified by us. With your consent, we may collect Personal Information from you in person, over the telephone
                    or by corresponding with you via mail, facsimile, or the Internet.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/collect.svg')}}" alt="A map of an unmarked neighbourhood" />
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> Limiting Use,  <span class="text-highlighted"> Disclosure and Retention.</span></h2>
                <p class="lead">Personal Information may only be used or disclosed for the purpose for which it was collected unless you
                    have otherwise consented, or when it is required or permitted by law.
                    Personal Information will only be retained for the period of time required to fulfill the purpose for which
                    we collected it or as may be required by law.</p>
            </div>
            <div class="col-md-5">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/limit.svg')}}" alt="Person choosing form different diets" />
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Accuracy <span class="text-highlighted">pin-point!</span></h2>
                <p class="lead">Personal Information will be maintained in as accurate, complete and up-to-date form as is necessary
                    to fulfill the purposes for which it is to be used.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/target.svg')}}" alt="A map of an unmarked neighbourhood" />
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Safeguarding Customer Information <span class="text-highlighted"> as sturdy as a shield.</span></h2>
                <p class="lead">Personal Information will be protected by security safeguards that are appropriate to the sensitivity
                    level of the information. We take all reasonable precautions to protect your Personal Information from any loss
                    or unauthorized use, access or disclosure.</p>
            </div>
            <div class="col-md-5">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/security.svg')}}" alt="Person choosing form different diets" />
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Openness, <span class="text-highlighted"> get access to YOUR data.</span></h2>
                <p class="lead">We will make information available to you about our policies and practices with respect to the management of your Personal Information.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/open.svg')}}" alt="A map of an unmarked neighbourhood" />
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Customer Access <span class="text-highlighted"> when you need it.</span></h2>
                <p class="lead">Upon request, you will be informed of the existence, use and disclosure of your Personal Information,
                    and will be given access to it. You may verify the accuracy and completeness of your Personal Information,
                    and may request that it be amended, if appropriate. However, in certain circumstances permitted by law, we will not
                    disclose certain information to you. For example, we may not disclose information relating to you if other individuals
                    are referenced or if there are legal, security or commercial proprietary restrictions.</p>
            </div>
            <div class="col-md-5">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/cust.svg')}}" alt="Person choosing form different diets" />
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Cookies, <span class="text-highlighted">Yum Yum!</span></h2>
                <p class="lead">
                    A cookie is a small computer file or piece of information that may be stored in your computer's hard drive
                    when you visit our websites. We may use cookies to improve our website’s functionality and in some cases,
                    to provide visitors with a customized online experience.
                </p>

                    <p>Cookies are widely used and most web browsers are configured initially to accept cookies automatically.
                        You may change your Internet browser settings to prevent your computer from accepting cookies or to notify
                        you when you receive a cookie so that you may decline its acceptance. Please note, however, if you disable
                        cookies, you may not experience optimal performance of our website.
                    </p>
            </div>
            <div class="col-md-5 order-md-1">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/engineer.svg')}}" alt="A map of an unmarked neighbourhood" />
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Other Websites, <span class="text-highlighted"> provided for a better experience.</span></h2>
                <p class="lead">
                    Our website may contain links to other third party sites that are not governed by this privacy policy.
                    Although we endeavour to only link to sites with high privacy standards, our privacy policy will no longer
                    apply once you leave our website. Additionally, we are not responsible for the privacy practices employed
                    by third party websites. Therefore, we suggest that you examine the privacy statements of those sites to
                    learn how your information may be collected, used, shared and disclosed.
                </p>
            </div>
            <div class="col-md-5">
                <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                <div class ="featurette-image img-fluid mx-auto">
                    <img width="450" height="450" src="{{asset('/img/SVG/website.svg')}}" alt="Person choosing form different diets" />
                </div>
            </div>
        </div>



    </div>

@endsection
@section('footer')
    @parent
@endsection
