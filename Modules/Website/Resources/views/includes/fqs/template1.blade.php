<section id="faqs" class="section-block" data-scroll-index="6">
        <div class="container">
            <div class="section-header">
                @if(! empty($settings))
                <h2>{{$settings->getTranslations('section_questions_title')[app()->getLocale()]}}</h2>
                {!! $settings->getTranslations('section_questions_description')[app()->getLocale()] !!}
                @endif
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{$settings->section_questions_image}}" class="img-fluid" alt="Img" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        @foreach ($questions as $question)
                            <!-- Start Faq item -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{$question->name}}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{$question->answer}}
                                </div>
                            </div>
                        </div>
                        <!-- End Faq item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>