@extends('index')
@section('content')
    <div class="info">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Info Box -->
                <div class="col-lg-4 info_box_col">
                    <div class="info_box">
                        <div class="info_image"><img src="images/doc_1.jpg" alt=""></div>
                        <div class="info_content">
                            <div class="info_title">Doctor Jefferson Gutierritos</div>
                            <div class="info_text">Arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas finibus, dolor risus mollis.</div>
                        </div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="col-lg-4 info_box_col">
                    <div class="info_box">
                        <div class="info_image"><img src="images/doc_2.jpg" alt=""></div>
                        <div class="info_content">
                            <div class="info_title">Doctor Alvin Yakitori</div>
                            <div class="info_text">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas finibus, dolor risus.</div>

                        </div>
                    </div>
                </div>

                <!-- Info Form -->
                <div class="col-lg-4 info_box_col" id="registro">
                    <div class="info_form_title">Agenda tu cita aquí</div>
                    <div class="info_form_container">
                        <form action="#" class="info_form" id="info_form"  required="required">
                            <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
                                <option>Departamento</option>
                                <option>Department</option>
                                <option>Department</option>
                                <option>Department</option>
                                <option>Department</option>
                                <option>Department</option>
                                <option>Department</option>
                                <option>Department</option>
                            </select>
                            <select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select"  required="required">
                                <option>Doctor</option>
                                <option>Jefferson Gutierritos</option>
                                <option>Alvin Yakitori</option>
                            </select>
                            <input type="text" class="info_input" placeholder="Nombre" required="required">
                            <input type="text" class="info_input" placeholder="Correo" required="required">
                            <input type="date" class="info_input" placeholder="Fecha"  required="required">
                            <input type="text" class="info_input" placeholder="Razón"  required="required">
                            <input type="text" class="info_input" placeholder="Telefono"  required="required">
                            <button class="info_form_button">Enviar cita</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CTA -->

    <div class="cta">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/cta_1.jpg')}}" data-speed="0.8">
            <img src="{{asset('images/cta_1.jpg')}}" style="width: 100%;"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
                        <div class="cta_content text-xl-left text-center">
                            <div class="cta_title">Haga una cita con uno de nuestros doctores profesionales.</div>
                            <div class="cta_subtitle">Consulta una lista exhaustiva de las enfermedades y los trastornos que se atienden en Hospital Matasanos y encuentra a <br> los médicos que los tratan.</div>
                        </div>
                        <div class="button cta_button ml-xl-auto"><a href="#"><span>Llama ahora</span><span>Llama ahora</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">Nuestros servicios</div>
                    <div class="section_subtitle">Elige uno</div>
                </div>
            </div>
            <div class="row icon_boxes_row">

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_1.svg')}}" alt=""></div>
                            <div class="icon_box_title">Cardiología</div>
                        </div>
                        <div class="icon_box_text" align="justify">Hospital Matasanos ofrece tecnología de vanguardia para el diagnóstico de las enfermedades cardíacas pediátricas, y los últimos dispositivos que ayudan a que el corazón funcione correctamente.</div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_2.svg')}}" alt=""></div>
                            <div class="icon_box_title">Gastroenterología</div>
                        </div>
                        <div class="icon_box_text" align="justify">Parte de la medicina que se ocupa del estómago y los intestinos y sus enfermedades, así como del resto de los órganos del aparato digestivo</div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_3.svg')}}" alt=""></div>
                            <div class="icon_box_title">Laboratorio Médico</div>
                        </div>
                        <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_4.svg')}}" alt=""></div>
                            <div class="icon_box_title">Cuidado Dental</div>
                        </div>
                        <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_5.svg')}}" alt=""></div>
                            <div class="icon_box_title">Cirugía</div>
                        </div>
                        <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="icon_box_icon"><img src="{{asset('images/icon_6.svg')}}" alt=""></div>
                            <div class="icon_box_title">Neurología</div>
                        </div>
                        <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @stop
