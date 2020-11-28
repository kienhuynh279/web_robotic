@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
 <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        {{-- <div class="gmap"> --}}
                            <img src="{{ asset('assets/client/images/about/map.png') }}" alt="">
                        {{-- <iframe src="" frameborder="0"></iframe> --}}
                            {{-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe> --}}
                        {{-- </div> --}}
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Headquarter</h5>
                                    <p>Floor 11th, Viet A Building, No.9 Duy Tan, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam
                                    </p>
                                    <p>Phone: 0913 681353 – 0778 805 117 <br>
                                    Email: minh.do@arra.vn<br>
									Website: www.arar.vn</p>
                                </address>

                                
                            </li>


                            <li class="col-sm-12">
                                <address>
                                    <h5>Representative Office</h5>
                                    <p>No. 94 Hien Vuong, Phu Thanh Ward, Tan Phu District, Ho Chi Minh City, Vietnam</p>
                                    <p>Phone: (+84) 366 818 469 <br>
                                    </p>
                                </address>

                               
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    {{-- <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>               
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>s
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page--> --}}

@endsection

@section('js_after')

@endsection