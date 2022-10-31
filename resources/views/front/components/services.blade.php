<div class="services-bar">
    <!-- Services Section -->
    <h2>سابقة الاعمال</h2>
    <div class="row">
      @foreach ($services as $service)
          <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                  <div class="card-img">
                      <a href="#">
                          <img class="card-img-top" src="{{ asset($service->image) }}" alt="" />
                          <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                      </a>
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">
                          <a href="#">{{ $service->title }}</a>
                      </h4>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
    <!-- /.row -->
</div>