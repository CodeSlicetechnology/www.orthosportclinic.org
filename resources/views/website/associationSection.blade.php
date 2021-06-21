    <section class="emergency-department-area ptb-100">
        <div class="container">
            <div class="work-wrap owl-carousel owl-theme">
                @foreach ($data['associations'] as $item)
                    <div class="single-work mb-0">
                        <img src="{{ asset('./'.$item->image_path) }}" alt="Image">
                    </div> 
                @endforeach
            </div>
        </div>
    </section>