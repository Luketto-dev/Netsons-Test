<div class="container p-5" id="contact-us">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center p-4">Contact Us</h2>
            <div class="card">
                
                
                <div class="card-body">
                    <form method="POST" action="{{ route('contacts.store') }}">
                        @csrf

                        <div class=" mb-3">
                            <label for="title" class="text-center w-100 fs-5">Title</label>

                            <div class="">
                                <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" >

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="content" class="text-center fs-5">Message</label>

                            <div class="">
                                <textarea rows="5" id="content" class="form-control @error('content') is-invalid @enderror" name="content" >
                                </textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <div class="text-center pt-4">
                                    <button type="submit" class="btn btn-primary">invia</button>
                                </div>
                            </div>
                        </div>

                       


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>