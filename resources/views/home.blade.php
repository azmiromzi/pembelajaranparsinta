<x-app-layout title="Home">


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            {{ session()->get('success') }}
                        </div>
                        <button type="button" class="btn-close ms-auto " aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header"><h1 class="text-center">Hello User</h1></div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias obcaecati consectetur ipsam blanditiis quam! Ea, impedit! Consequuntur deserunt cum, eos asperiores quibusdam sint officia! Tempora enim blanditiis voluptatum corrupti officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias obcaecati consectetur ipsam blanditiis quam! Ea, impedit! Consequuntur deserunt cum, eos asperiores quibusdam sint officia! Tempora enim blanditiis voluptatum corrupti officiis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
